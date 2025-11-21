<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\ProductFeature;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = ProductModel::with('category', 'features', 'images');

        if ($request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        $products = $query->orderBy('created_at', 'desc')->paginate(12);
        $categories = ProductCategory::all();

        return view('frontend.product.index', compact('products', 'categories'));
    }

    public function apiindex()
    {
        $products = ProductModel::with(['category', 'features', 'images'])
            ->orderBy('id', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }

    public function list()
    {
        $products = ProductModel::with('category', 'features', 'images')->get();
        return view('product.productlist', compact('products'));
    }

    public function create()
    {
        $categories = ProductCategory::all();
        return view('product.add', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'category_id'   => 'nullable|exists:product_categories,id',
            'new_categorys' => 'nullable|string|max:255',
            'description'   => 'nullable|string',
            'status'        => 'required|in:0,1',
            'images.*'      => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'features'      => 'nullable|array'
        ]);

        // Category
        $categoryId = $request->category_id;
        if (!$categoryId && $request->filled('new_categorys')) {
            $cat = ProductCategory::create(['name' => $request->new_categorys]);
            $categoryId = $cat->id;
        }

        // Create product
        $product = ProductModel::create([
            'name'        => $request->name,
            'category_id' => $categoryId,
            'description' => $request->description,
            'status'      => $request->status,
        ]);

        // Save images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $name = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
                $file->move(storage_path('app/public/images/products'), $name);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => 'images/products/'.$name
                ]);
            }
        }

        // Save features
        if ($request->features) {
            foreach ($request->features as $feature) {
                ProductFeature::create([
                    'product_id' => $product->id,
                    'feature'    => $feature
                ]);
            }
        }

        return redirect()->route('products.list')->with('success','Product added successfully.');
    }

    public function edit($id)
    {
        $product = ProductModel::with('features','images')->findOrFail($id);
        $categories = ProductCategory::all();
        return view('product.productedit', compact('product','categories'));
    }

   public function update(Request $request, $id)
{
    $product = ProductModel::findOrFail($id);

    $request->validate([
        'name'        => 'required|string|max:255',
        'category_id' => 'nullable|exists:product_categories,id',
        'description' => 'nullable|string',
        'status'      => 'required|in:0,1',
        'images.*'    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'features'    => 'nullable|array'
    ]);

    // NEW CATEGORY
    $categoryId = $request->category_id;
    if ($request->filled('new_category')) {
        $cat = ProductCategory::create(['name' => $request->new_category]);
        $categoryId = $cat->id;
    }

    // UPDATE PRODUCT
    $product->update([
        'name'        => $request->name,
        'category_id' => $categoryId,
        'description' => $request->description,
        'status'      => $request->status,
    ]);

    // ------------------------------
    // DELETE SELECTED IMAGES ONLY
    // ------------------------------
    $existingImageIDs = $product->images->pluck('id')->toArray();
    $keepIDs = $request->keep_images ?? [];

    $deleteIDs = array_diff($existingImageIDs, $keepIDs);

    foreach ($deleteIDs as $id) {
        $img = ProductImage::find($id);

        if ($img) {
            if (Storage::disk('public')->exists($img->image_path)) {
                Storage::disk('public')->delete($img->image_path);
            }
            $img->delete();
        }
    }

    // --------------------------------
    // ADD NEW IMAGES
    // --------------------------------
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $name = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(storage_path('app/public/images/products'), $name);

            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => 'images/products/'.$name
            ]);
        }
    }

    // --------------------------------
    // UPDATE FEATURES
    // --------------------------------
    $product->features()->delete();
    if ($request->features) {
        foreach ($request->features as $feature) {
            ProductFeature::create([
                'product_id' => $product->id,
                'feature'    => $feature
            ]);
        }
    }

    return redirect()->route('products.list')->with('success','Product updated successfully.');
}

    //----------------------------------
    // DELETE SINGLE IMAGE (AJAX)
    //----------------------------------

    public function deleteImage(Request $request)
    {
        $image = ProductImage::find($request->image_id);

        if (!$image) {
            return response()->json(['success' => false]);
        }

        // remove file
        if (Storage::disk('public')->exists($image->image_path)) {
            Storage::disk('public')->delete($image->image_path);
        }

        $image->delete();

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $product = ProductModel::findOrFail($id);

        // delete images
        foreach ($product->images as $img) {
            if (Storage::disk('public')->exists($img->image_path)) {
                Storage::disk('public')->delete($img->image_path);
            }
            $img->delete();
        }

        $product->features()->delete();
        $product->delete();

        return redirect()->route('products.list')->with('success','Product deleted successfully.');
    }
}
