@extends('layouts.app')
@section('title', 'products-edit')

@section('content')

<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-5">
                            <h2 class="mb-4 text-center fw-bold text-primary">
                                <i class="bx bx-box"></i> Update Product
                            </h2>

                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                @method('PUT')

                                <div class="row g-4">

                                    <!-- Existing Gallery Images -->
                                    <div class="col-12 text-center">
                                        <label class="form-label fw-semibold">Existing Images</label>

                                        <div id="existing-images" class="d-flex flex-wrap justify-content-center">

                                            @foreach($product->images as $img)
                                                <div class="image-box position-relative m-2">

                                                    <img src="{{ asset('storage/' . $img->image_path) }}"
                                                         class="img-thumbnail"
                                                         style="height:120px;width:120px;object-fit:cover;">

                                                    <!-- Hidden Input (keep images) -->
                                                    <input type="hidden" name="keep_images[]" value="{{ $img->id }}">

                                                    <!-- Remove Button -->
                                                    <button type="button"
                                                            class="btn btn-sm btn-danger position-absolute remove-image-btn"
                                                            style="top:5px;right:5px;">
                                                        ✕
                                                    </button>

                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                    <!-- Upload new images -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Add New Images</label>
                                        <input type="file" class="form-control" name="images[]" multiple>
                                    </div>

                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Product Name</label>
                                        <input type="text" name="name" class="form-control"
                                               value="{{ $product->name }}">
                                    </div>

                                    <!-- Category -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Product Category</label>
                                        <select name="category_id" class="form-control">
                                            <option value="">-- Select Category --</option>
                                            @foreach($categories as $cat)
                                                <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected':'' }}>
                                                    {{ $cat->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <small class="text-muted">Or add new category</small>
                                        <input type="text" name="new_category" class="form-control mt-1">
                                    </div>

                                    <!-- Status -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold d-block">Product Status</label>

                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="status" value="1" class="form-check-input"
                                                {{ $product->status == 1 ? 'checked':'' }}>
                                            <label class="form-check-label">Show in Home Page</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="status" value="0" class="form-check-input"
                                                {{ $product->status == 0 ? 'checked':'' }}>
                                            <label class="form-check-label">Do Not Show</label>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Product Description</label>
                                        <textarea name="description" rows="3" class="form-control">{{ $product->description }}</textarea>
                                    </div>

                                    <!-- Features -->
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">Product Features</label>

                                        <div id="features-wrapper">
                                            @foreach($product->features as $feature)
                                                <div class="input-group mb-2">
                                                    <input type="text" name="features[]" class="form-control"
                                                           value="{{ $feature->feature }}">
                                                    <button type="button" class="btn btn-danger remove-feature">Remove</button>
                                                </div>
                                            @endforeach
                                        </div>

                                        <button type="button" class="btn btn-secondary mt-2" id="add-feature">Add Feature</button>
                                    </div>

                                </div>

                                <div class="row pt-4">
                                    <div class="col-12 d-flex justify-content-end gap-2">
                                        <a href="{{ route('products.list') }}" class="btn btn-secondary">Back</a>
                                        <button type="submit" class="btn btn-primary">Update Product</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // Remove image button
    document.querySelectorAll('.remove-image-btn').forEach(btn => {
        btn.addEventListener('click', function () {

            let box = this.closest('.image-box');

            // remove hidden input (keep_images[])
            let hidden = box.querySelector('input[name="keep_images[]"]');
            if (hidden) hidden.remove();

            // remove image visually
            box.remove();
        });
    });

    // FEATURE ADD/REMOVE
    let wrapper = document.getElementById('features-wrapper');

    document.getElementById('add-feature').addEventListener('click', function(){
        let div = document.createElement('div');
        div.classList.add('input-group','mb-2');
        div.innerHTML = `
            <input type="text" name="features[]" class="form-control" placeholder="Enter feature">
            <button class="btn btn-danger remove-feature" type="button">Remove</button>
        `;
        wrapper.appendChild(div);
    });

    wrapper.addEventListener('click', function(e){
        if(e.target.classList.contains('remove-feature')) {
            e.target.parentElement.remove();
        }
    });

});
</script>

@endsection
