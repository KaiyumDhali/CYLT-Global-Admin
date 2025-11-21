@extends('layouts.app')
@section('title' ,'services-add')

@section('content')

<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-5">
                            <h2 class="mb-4 text-center fw-bold text-primary">
                                <i class="bx bx-cog"></i> Manage Services
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

                            <!-- Service Form -->
                            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                <div class="row g-4">

                                    <!-- Service Images -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-upload"></i> Service Images <span class="text-muted">(optional, multiple)</span>
                                        </label>
                                        <input type="file" class="form-control shadow-sm" name="image[]" multiple>
                                    </div>

                                    <!-- Service Title -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-text"></i> Service Title
                                        </label>
                                        <input type="text" class="form-control shadow-sm" name="title[]" placeholder="Enter service title">
                                    </div>

                                    <!-- Category -->
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-category"></i> Category
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select shadow-sm" name="category_id" id="categorySelect">
                                                <option value="" disabled selected>Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="button" class="btn btn-outline-primary" id="addCategoryBtn">Add New</button>
                                        </div>
                                    </div>

                                    <!-- New Category Input -->
                                    <div class="col-md-6 mt-2" id="newCategoryDiv" style="display:none;">
                                        <input type="text" class="form-control shadow-sm" name="new_category" placeholder="Enter new category name">
                                    </div>

                                    <!-- Description -->
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-detail"></i> Service Description
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="description[]" placeholder="Write a short description..."></textarea>
                                    </div>

                                    <!-- Other Info -->
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-note"></i> Other Information (Optional)
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="othertext[]" placeholder="Additional details..."></textarea>
                                    </div>

                                    <!-- Service Features -->
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-list-plus"></i> Service Features
                                        </label>
                                        <div id="featuresWrapper">
                                            <div class="input-group mb-2 feature-row">
                                                <input type="text" name="features[]" class="form-control shadow-sm" placeholder="Enter a feature">
                                                <button type="button" class="btn btn-outline-danger remove-feature">X</button>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-outline-success mt-2" id="addFeatureBtn">
                                            <i class="bx bx-plus"></i> Add Feature
                                        </button>
                                    </div>

                                </div>

                                <div class="row pt-4">
                                    <div class="col-12 d-flex justify-content-end gap-2">
                                        <button type="button" class="btn btn-secondary w-md" onclick="window.history.back();">Back</button>
                                        <button type="submit" class="btn btn-primary w-md">
                                            <i class="bx bx-plus-circle"></i> Add New Service
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
</main>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // SweetAlert confirm delete
    function confirmDelete(serviceId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This service will be permanently deleted!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#198754',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + serviceId).submit();
            }
        });
    }

    // Toggle new category input
    document.getElementById('addCategoryBtn').addEventListener('click', function() {
        const div = document.getElementById('newCategoryDiv');
        div.style.display = div.style.display === 'none' ? 'block' : 'none';
    });

    // Dynamic Features Add/Remove
    document.addEventListener("DOMContentLoaded", function () {
        const addFeatureBtn = document.getElementById("addFeatureBtn");
        const featuresWrapper = document.getElementById("featuresWrapper");

        addFeatureBtn.addEventListener("click", function () {
            const div = document.createElement("div");
            div.classList.add("input-group", "mb-2", "feature-row");
            div.innerHTML = `
                <input type="text" name="features[]" class="form-control shadow-sm" placeholder="Enter a feature">
                <button type="button" class="btn btn-outline-danger remove-feature">X</button>
            `;
            featuresWrapper.appendChild(div);
        });

        featuresWrapper.addEventListener("click", function (e) {
            if (e.target.classList.contains("remove-feature")) {
                const rows = featuresWrapper.querySelectorAll(".feature-row");
                if (rows.length > 1) e.target.closest(".feature-row").remove();
            }
        });
    });
</script>

@endsection
