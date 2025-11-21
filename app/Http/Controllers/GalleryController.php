<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Display gallery page
    public function index()
    {
        $galleries = Gallery::all();
        return view('Gallary.add', compact('galleries'));
    }

    // API: Return all gallery images
    public function apiIndex()
    {
        $galleries = Gallery::all();
        return response()->json([
            'status' => 'success',
            'data' => $galleries
        ]);
    }

    // Display gallery list page
    public function list()
    {
        $galleries = Gallery::all();
        return view('Gallary.gallarylist', compact('galleries'));
    }

    // Store new gallery images
    public function store(Request $request)
    {
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title.*' => 'nullable|string|max:255',
            'description.*' => 'nullable|string|max:500',
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $index => $file) {
                $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path('app/public/images/gallery'), $name);

                Gallery::create([
                    'image'       => 'images/gallery/' . $name,
                    'title'       => $request->title[$index] ?? null,
                    'description' => $request->description[$index] ?? null,
                ]);
            }
        }

        return redirect()->route('gallery.list')->with('success', 'Gallery images uploaded successfully!');
    }

    // Update existing gallery image
    public function update(Request $request, $id)
    {
        $request->validate([
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title'       => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        $gallery = Gallery::findOrFail($id);

        $data = [
            'title'       => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            if ($gallery->image && file_exists(public_path('storage/' . $gallery->image))) {
                unlink(public_path('storage/' . $gallery->image));
            }

            $file = $request->file('image');
            $name = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/images/gallery'), $name);

            $data['image'] = 'images/gallery/' . $name;
        }

        $gallery->update($data);

        return back()->with('success', 'Gallery image updated successfully!');
    }

    // Delete gallery image
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Delete the image file
        if ($gallery->image && file_exists(public_path('storage/' . $gallery->image))) {
            unlink(public_path('storage/' . $gallery->image));
        }

        $gallery->delete();

        return back()->with('success', 'Gallery image deleted successfully!');
    }
}
