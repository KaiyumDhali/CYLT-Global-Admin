@extends('layouts.app')
@section('title', 'Gallery List')

@section('content')
<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Gallery</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- Search + Add -->
                                <div class="row mb-2">
                                    <div class="col-sm">
                                        <div class="search-box me-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" autocomplete="off" id="searchTableList" placeholder="Search...">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto pt-2 pt-sm-0">
                                        <div class="text-sm-end">
                                            <a href="{{ route('gallery.index') }}" class="btn btn-primary" id="addGallery-btn">
                                                <i class="mdi mdi-plus me-1"></i> Add New Image
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row pt-5">
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @forelse($galleries as $gallery)
                                        <div class="col-md-3 col-sm-6 text-center mb-4">
                                            <div class="card" style="width:300px;height:auto;">
                                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery Image" class="img-thumbnail card-img-top" style="width:auto;height:220px;object-fit:cover;">
                                                <div class="card-body">
                                                    <h5 class="card-title">Image: {{ $sl }}</h5>

                                                    <!-- Update Gallery Form -->
                                                    <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="me-2">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-2">
                                                            <input type="file" class="form-control mb-2" name="image" accept="image/png, image/jpeg, image/jpg">
                                                        </div>
                                                        <input type="text" name="title" value="{{ $gallery->title ?? '' }}" class="form-control mb-2" placeholder="Gallery Title">
                                                        <textarea name="description" class="form-control mb-2" placeholder="Gallery Description">{{ $gallery->description ?? '' }}</textarea>
                                                        <div class="d-flex justify-content-between">
                                                            <button type="submit" class="btn btn-primary btn-sm w-50 me-2">Update</button>
                                                            <button type="button" class="btn btn-danger btn-sm w-50" onclick="confirmDelete({{ $gallery->id }})">Delete</button>
                                                        </div>
                                                    </form>

                                                    <!-- Delete Form -->
                                                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" id="deleteForm{{ $gallery->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $sl++;
                                        @endphp
                                    @empty
                                        <div class="col-12">
                                            <div class="alert alert-warning text-center">
                                                No images found.
                                            </div>
                                        </div>
                                    @endforelse
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div>
    </div>
</main>

<script>
function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this image?")) {
        document.getElementById('deleteForm' + id).submit();
    }
}
</script>
@endsection
