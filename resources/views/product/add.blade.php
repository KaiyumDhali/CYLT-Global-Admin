@extends('layouts.app')
@section('title' ,'products-add')

@section('content')
<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-md-10">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-5">
                            <h2 class="mb-4 text-center fw-bold text-success">
                                <i class="bx bx-package"></i> Manage Products
                            </h2>

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}</div>
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

                            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                <div class="row g-4">

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-upload"></i> Product Gallery Images
                                        </label>
                                        <input type="file" class="form-control shadow-sm" name="images[]" multiple>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-text"></i> Product Name
                                        </label>
                                        <input type="text" class="form-control shadow-sm" name="name" placeholder="Enter product name">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-category"></i> Product Category
                                        </label>
                                        <div class="input-group">
                                            <select class="form-select shadow-sm" name="category_id" id="categorySelect">
                                                <option value="">-- Select Category --</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="button" class="btn btn-outline-success" onclick="toggleCategoryInput()">+ New</button>
                                        </div>
                                        <input type="text" class="form-control shadow-sm mt-2 d-none" id="newCategoryInput" name="new_categorys" placeholder="Enter new category name">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold d-block mb-2">
                                            <i class="bx bx-category"></i> Product Status
                                        </label>
                                        <input type="hidden" name="status" value="0">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="statusActive" value="1">
                                            <label class="form-check-label" for="statusActive">Show in Home Page</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-detail"></i> Product Description
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="description" placeholder="Write product description..."></textarea>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-list-plus"></i> Product Features
                                        </label>
                                        <div id="featuresWrapper">
                                            <div class="input-group mb-2">
                                                <input type="text" name="features[]" class="form-control shadow-sm" placeholder="Enter feature">
                                                <button type="button" class="btn btn-outline-primary" onclick="addFeature()">+</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row pt-4">
                                    <div class="col-12 d-flex justify-content-end gap-2">
                                        <button type="button" class="btn btn-secondary w-md" onclick="window.history.back();">Back</button>
                                        <button type="submit" class="btn btn-success w-md">
                                            <i class="bx bx-plus-circle"></i> Add New Product
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

<script>
function toggleCategoryInput() {
    const input = document.getElementById('newCategoryInput');
    const select = document.getElementById('categorySelect');
    input.classList.toggle('d-none');
    if (!input.classList.contains('d-none')) {
        select.value = '';
    }
}

function addFeature() {
    const wrapper = document.getElementById('featuresWrapper');
    const div = document.createElement('div');
    div.classList.add('input-group', 'mb-2');
    div.innerHTML = `
        <input type="text" name="features[]" class="form-control shadow-sm" placeholder="Enter feature">
        <button type="button" class="btn btn-outline-danger" onclick="this.parentElement.remove()">-</button>
    `;
    wrapper.appendChild(div);
}
</script>
@endsection
