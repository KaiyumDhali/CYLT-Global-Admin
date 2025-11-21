@extends('layouts.app')
@section('title' ,'about-list')

@section('content')
<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">About Us List</h4>
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
                                            <a href="{{ route('about.index') }}" class="btn btn-primary" id="addAbout-btn">
                                                <i class="mdi mdi-plus me-1"></i> Add About Info
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
                                                <th scope="col">Title / Heading</th>
                                                <th scope="col">Mission</th>
                                                <th scope="col">Vission</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Image</th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($abouts as $key => $about)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $about->title ?? '-' }}</td>
                                                    <td>{{ $about->mission ?? '-' }}</td>
                                                    <td>{{ $about->vission ?? '-' }}</td>
                                                    <td>{{ $about->description ?? '-' }}</td>
                                                    <td>
                                                        @if($about->image)
                                                            @php
                                                                $images = explode(',', $about->image);
                                                            @endphp
                                                            @foreach($images as $img)
                                                                <img src="{{ asset('storage/' . $img) }}" alt="About Image" style="width: 80px; height: 50px; object-fit: cover; margin-right: 5px;">
                                                            @endforeach
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('about.edit', $about->id) }}" class="btn btn-sm btn-info">Edit</a>

                                                        <form action="{{ route('about.destroy', $about->id) }}" method="POST" class="d-inline" id="deleteForm{{ $about->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $about->id }})">Delete</button>
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
    function confirmDelete(aboutId) {
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
                document.getElementById('deleteForm' + aboutId).submit();
            }
        });
    }
</script>

@endsection
