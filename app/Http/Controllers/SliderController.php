<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SlidersModel;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = SlidersModel::all();
        return view('slider.add', compact('sliders'));
    }
    public function apiindex()
    {
         $sliders = SlidersModel::all();
    return response()->json([
        'status' => 'success',
        'data' => $sliders
    ]);
    }
      public function sliderlist()
    {
        $sliders = SlidersModel::all();
        return view('slider.sliderlist', compact('sliders'));
    }

public function store(Request $request)
{
    $request->validate([
        'image.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'title.*' => 'nullable|string|max:255',
        'description.*' => 'nullable|string|max:500',
    ]);

    if ($request->hasFile('image')) {
        foreach ($request->file('image') as $index => $file) { // add $index here
            $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/images/slider'), $name);

            SlidersModel::create([
                'slider_image' => 'images/slider/' . $name,
                'title' => $request->title[$index] ?? null,
                'description' => $request->description[$index] ?? null,
            ]);
        }
    }


    return redirect()->route('slider.list')->with('success', 'Sliders uploaded successfully!');
}

public function update(Request $request, $id)
{
    $request->validate([
        'slider_image.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'title'         => 'nullable|string|max:255',
        'description'   => 'nullable|string|max:500',
    ]);

    $slider = SlidersModel::findOrFail($id);

    $data = [
        'title'       => $request->title,
        'description' => $request->description,
    ];

if ($request->hasFile('slider_image')) {
    // delete old image
    if ($slider->slider_image && file_exists(public_path('storage/' . $slider->slider_image))) {
        unlink(public_path('storage/' . $slider->slider_image));
    }

    $file = $request->file('slider_image');
    $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
    $file->move(storage_path('app/public/images/slider'), $name);

    $data['slider_image'] = 'images/slider/' . $name;
}

    $slider->update($data);

    return back()->with('success', 'Slider updated successfully!');
}



    public function destroy($id)
{
    $slider = SlidersModel::findOrFail($id);

    // Delete the image file from storage
    if ($slider->slider_image && file_exists(public_path('storage/' . $slider->slider_image))) {
        unlink(public_path('storage/' . $slider->slider_image));
    }

    // Delete the slider record from the database
    $slider->delete();

    return back()->with('success', 'Slider deleted successfully!');
}
}
