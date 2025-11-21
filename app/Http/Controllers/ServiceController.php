<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;
use App\Models\Category;

class ServiceController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $services = ServiceModel::all();
        return view('service.add', compact('services','categories')); 
    }


public function apiIndex()
{
    $services = ServiceModel::with('features')->get();

    return response()->json([
        'status' => 'success',
        'data' => $services
    ]);
}



    public function serviceList()
    {
        $services = ServiceModel::all();
        return view('service.serviceslist', compact('services'));
    }

   public function store(Request $request)
{
    $request->validate([
        'title.*'       => 'required|string|max:255',
        'description.*' => 'nullable|string|max:500',
        'othertext.*'   => 'nullable|string|max:500',
        'image.*'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'category_id'   => 'nullable|exists:categories,id',
        'new_category'  => 'nullable|string|max:255',
        'features.*'    => 'nullable|string|max:255',
    ]);

    $categoryId = $request->filled('new_category') 
        ? Category::create(['name' => $request->new_category])->id
        : $request->category_id;

    foreach ($request->title as $index => $title) {
        $imagePath = null;
        if ($request->hasFile('image') && isset($request->file('image')[$index])) {
            $file = $request->file('image')[$index];
            $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/images/services'), $name);
            $imagePath = 'images/services/' . $name;
        }

        $service = ServiceModel::create([
            'category_id' => $categoryId,
            'image'       => $imagePath,
            'title'       => $title,
            'description' => $request->description[$index] ?? null,
            'othertext'   => $request->othertext[$index] ?? null,
        ]);

        if ($request->features) {
            foreach ($request->features as $feature) {
                if (!empty($feature)) {
                    $service->features()->create(['feature' => $feature]);
                }
            }
        }
    }

    return redirect()->route('services.list')->with('success', 'Service uploaded successfully!');
}


   public function edit($id)
{
    $categories = Category::all(); // সব category পাঠানো হলো

    // Service সাথে features relation load করা হলো
    $service = ServiceModel::with('features')->findOrFail($id);

    return view('service.servicesedit', compact('service','categories'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'image.*'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'title'         => 'nullable|string|max:255',
        'description'   => 'nullable|string|max:500',
        'othertext'     => 'nullable|string|max:500',
        'features.*'    => 'nullable|string|max:255',
    ]);

    $service = ServiceModel::findOrFail($id);

    $data = [
        'title'       => $request->title,
        'description' => $request->description,
        'othertext'   => $request->othertext,
    ];

    if ($request->hasFile('image')) {
        if ($service->image && file_exists(public_path('storage/' . $service->image))) {
            unlink(public_path('storage/' . $service->image));
        }

        $images = [];
        foreach ($request->file('image') as $file) {
            $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/images/services'), $name);
            $images[] = 'images/services/' . $name;
        }
        $data['image'] = implode(',', $images);
    }

    $service->update($data);

    // Replace old features
    $service->features()->delete();
    if ($request->features) {
        foreach ($request->features as $feature) {
            if (!empty($feature)) {
                $service->features()->create(['feature' => $feature]);
            }
        }
    }

    return back()->with('success', 'Service updated successfully!');
}


    public function destroy($id)
    {
        $service = ServiceModel::findOrFail($id);

        // Delete the image file from storage
        if ($service->image && file_exists(public_path('storage/' . $service->image))) {
            unlink(public_path('storage/' . $service->image));
        }

        $service->delete();

        return back()->with('success', 'Service deleted successfully!');
    }
}
