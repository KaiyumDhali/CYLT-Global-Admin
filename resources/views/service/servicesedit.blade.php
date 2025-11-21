@extends('layouts.app')
@section('title' ,'services-edit')

@section('content')

<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-5">
                            <h2 class="mb-4 text-center fw-bold text-primary">
                                <i class="bx bx-cog"></i> Update Service
                            </h2>

                            <!-- Success Message -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <!-- Error Messages -->
                            @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <!-- Update Service Form -->
                            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                @method('PUT')

                                <div class="row g-4">

                                    <!-- Existing Images -->
                                    <div class="col-12 text-center">
                                        @if($service->image)
                                            @php
                                                $images = explode(',', $service->image);
                                            @endphp
                                            @foreach($images as $img)
                                                <img src="{{ asset('storage/' . $img) }}" alt="Service Image" class="img-thumbnail mb-2" style="height:150px;">
                                            @endforeach
                                        @endif
                                    </div>

                                    <!-- Upload New Images -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-upload"></i> Service Images <span class="text-muted">(optional, multiple)</span>
                                        </label>
                                        <input type="file" class="form-control shadow-sm" name="image[]" multiple>
                                    </div>

                                    <!-- Title -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-text"></i> Service Title
                                        </label>
                                        <input type="text" class="form-control shadow-sm" name="title" value="{{ $service->title }}" placeholder="Enter service title">
                                    </div>

                                    <!-- Category -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-category"></i> Service Category
                                        </label>
                                        <div class="d-flex gap-2">
                                            <select name="category_id" class="form-control shadow-sm">
                                                <option value="">-- Select Category --</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" 
                                                        {{ $service->category_id == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!-- New Category Button -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                                                <i class="bx bx-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-detail"></i> Service Description
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="description" placeholder="Write a short description...">{{ $service->description }}</textarea>
                                    </div>

                                    <!-- Other Information -->
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-note"></i> Other Information
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="othertext" placeholder="Additional details...">{{ $service->othertext }}</textarea>
                                    </div>

                                    <!-- Service Features -->
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-list-plus"></i> Service Features
                                        </label>
                                        <div id="featuresWrapper">
                                            @forelse($service->features as $feature)
                                            <div class="input-group mb-2 feature-row">
                                                <input type="text" name="features[]" class="form-control shadow-sm" value="{{ $feature->feature }}" placeholder="Enter a feature">
                                                <button type="button" class="btn btn-outline-danger remove-feature">X</button>
                                            </div>
                                            @empty
                                            <div class="input-group mb-2 feature-row">
                                                <input type="text" name="features[]" class="form-control shadow-sm" placeholder="Enter a feature">
                                                <button type="button" class="btn btn-outline-danger remove-feature">X</button>
                                            </div>
                                            @endforelse
                                        </div>
                                        <button type="button" class="btn btn-outline-success mt-2" id="addFeatureBtn">
                                            <i class="bx bx-plus"></i> Add Feature
                                        </button>
                                    </div>

                                </div>

                                <!-- Buttons -->
                                <div class="row pt-4">
                                    <div class="col-12 d-flex justify-content-end gap-2">
                                        <a href="{{ route('services.list') }}" class="btn btn-secondary w-md">Back</a>
                                        <button type="submit" class="btn btn-primary w-md">
                                            <i class="bx bx-save"></i> Update Service
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter category name" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Category</button>
            </div>
          </form>
        </div>
      </div>
    </div>

</main>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const featuresWrapper = document.getElementById("featuresWrapper");
    const addFeatureBtn = document.getElementById("addFeatureBtn");

    // Add new feature
    addFeatureBtn.addEventListener("click", function () {
        const div = document.createElement("div");
        div.classList.add("input-group", "mb-2", "feature-row");
        div.innerHTML = `
            <input type="text" name="features[]" class="form-control shadow-sm" placeholder="Enter a feature">
            <button type="button" class="btn btn-outline-danger remove-feature">X</button>
        `;
        featuresWrapper.appendChild(div);
    });

    // Remove feature
    featuresWrapper.addEventListener("click", function (e) {
        if (e.target.classList.contains("remove-feature")) {
            const rows = featuresWrapper.querySelectorAll(".feature-row");
            if(rows.length > 1){ // keep at least one field
                e.target.closest(".feature-row").remove();
            }
        }
    });
});
</script>

@endsection
