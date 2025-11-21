@extends('layouts.app')
@section('title' ,'products-list')

@section('content')
<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Product List</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row mb-2">
                                    <div class="col-sm">
                                        <div class="search-box me-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" autocomplete="off" id="searchTableList" placeholder="Search...">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-auto">
                                        <div class="text-sm-end">
                                            <a href="{{ route('products.create') }}" class="btn btn-primary" id="addProduct-btn">
                                                <i class="mdi mdi-plus me-1"></i> Add New Product
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="table-responsive pt-3">
                                    <table class="table align-middle table-nowrap dt-responsive nowrap w-100 table-borderless">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 60px">SL</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Features</th>
                                                <th scope="col">Gallery</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $key => $product)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ \Illuminate\Support\Str::words($product->name,3,'...') }}</td>
                                                    <td>{{ $product->category->name ?? '-' }}</td>

                                                    <td>{{ \Illuminate\Support\Str::words($product->description, 5, '...') }}</td>

                                                    <td>
                                                        @if($product->features)
                                                            <ul class="mb-0">
                                                                @foreach($product->features as $feature)
                                                                    <li>{{ \Illuminate\Support\Str::words($feature->feature,5,'...') }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @else
                                                            -
                                                        @endif
                                                    </td>

                                                    <!-- UPDATED IMAGE SECTION -->
                                                    <td>
                                                        @if($product->images && count($product->images) > 0)
                                                            @foreach($product->images as $img)
                                                                <img src="{{ asset('storage/' . $img->image_path) }}" 
                                                                     alt="Product Image" 
                                                                     style="width: 50px; height: 50px; object-fit: cover; margin-right:2px; border-radius:4px;">
                                                            @endforeach
                                                        @else
                                                            -
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if($product->status == 0)
                                                            <span class="badge bg-warning text-dark">Only product</span>
                                                        @elseif($product->status == 1)
                                                            <span class="badge bg-success">Show in Home Page</span>
                                                        @else
                                                            <span class="badge bg-secondary">N/A</span>
                                                        @endif
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-info">Edit</a>

                                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline" id="deleteForm{{ $product->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $product->id }})">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
</main>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(productId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f46a6a',
            cancelButtonColor: '#556ee6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + productId).submit();
            }
        });
    }
</script>

@endsection
