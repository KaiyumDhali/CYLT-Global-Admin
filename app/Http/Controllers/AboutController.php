<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutModel; // Make sure you have AboutModel

class AboutController extends Controller
{
    public function frontendaboutindex(){
        return view('frontend.about.index');
    }
    public function index()
    {
        $abouts = AboutModel::all();
        return view('about.add', compact('abouts')); 
    }


        public function apiindex()
    {
          $abouts = AboutModel::all();
    return response()->json([
        'status' => 'success',
        'data' => $abouts
    ]);
    }
    
    public function aboutList()
    {
        $abouts = AboutModel::all();
        return view('about.aboutlist', compact('abouts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image.*'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title.*'       => 'nullable|string|max:255',
            'description.*' => 'nullable|string|max:500',
            'mission.*'   => 'nullable|string|max:500',
            'vission.*'   => 'nullable|string|max:500',
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $index => $file) {
                $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path('app/public/images/about'), $name);

                AboutModel::create([
                    'image'       => 'images/about/' . $name,
                    'title'       => $request->title[$index] ?? null,
                    'description' => $request->description[$index] ?? null,
                    'mission'   => $request->mission[$index] ?? null,
                    'vission'   => $request->vission[$index] ?? null,
                ]);
            }
        }

        return redirect()->route('about.list')->with('success', 'About info uploaded successfully!');
    }

    public function edit($id)
    {
        $about = AboutModel::findOrFail($id);
        return view('about.aboutedit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image.*'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'title'         => 'nullable|string|max:255',
            'description'   => 'nullable|string|max:500',
            'mission'     => 'nullable|string|max:500',
        ]);

        $about = AboutModel::findOrFail($id);

        $data = [
            'title'       => $request->title,
            'description' => $request->description,
            'mission'   => $request->mission,
            'vission'   => $request->vission,
        ];

        if ($request->hasFile('image')) {
            // Delete old images if exist
            $oldImages = $about->image ? explode(',', $about->image) : [];
            foreach ($oldImages as $img) {
                if (file_exists(public_path('storage/' . $img))) {
                    unlink(public_path('storage/' . $img));
                }
            }

            $newImages = [];
            foreach ($request->file('image') as $file) {
                $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path('app/public/images/about'), $name);
                $newImages[] = 'images/about/' . $name;
            }

            $data['image'] = implode(',', $newImages);
        }

        $about->update($data);

        return back()->with('success', 'About info updated successfully!');
    }

    public function destroy($id)
    {
        $about = AboutModel::findOrFail($id);

        // Delete all image files from storage
        $images = $about->image ? explode(',', $about->image) : [];
        foreach ($images as $img) {
            if (file_exists(public_path('storage/' . $img))) {
                unlink(public_path('storage/' . $img));
            }
        }

        $about->delete();

        return back()->with('success', 'About info deleted successfully!');
    }
}
