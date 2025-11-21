@extends('layouts.app')
@section('title' ,'c-list')

@section('content')
<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Slider</h4>
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
                                    <!-- end col -->

                                   <div class="col-sm-auto pt-2 pt-sm-0">
                                        <div class="text-sm-end">
                                            <a href="{{ route('slider.index') }}" class="btn btn-primary" id="addProject-btn">
                                                <i class="mdi mdi-plus me-1"></i> Add New Slider
                                            </a>
                                        </div>
                                    </div>

                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row pt-5">
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach($sliders as $slider)
                                        <div class="col-md-3 col-sm-6 text-center mb-4">
                                            <div class="card" style="width:300px;height:auto;">
                                                <img src="{{ asset('storage/' . $slider->slider_image) }}" alt="Slider Image" class="img-thumbnail card-img-top" style="width:auto;height:220px;">
                                                <div class="card-body">
                                                    <h5 class="card-title">Slider: {{ $sl }}</h5>

                                                    <!-- Buttons Row -->
                                                
                                                        <!-- Update Slider Form -->
                                                        <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data" class="me-2">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="mb-2">
                                                                <input type="file" 
                                                                    class="form-control mb-2" 
                                                                    name="slider_image" 
                                                                    accept="image/png, image/jpeg, image/jpg" 
                                                                    >
                                                            </div>
                                                            <input type="text" name="title" value="{{ $slider->title }}" class="form-control mb-2" placeholder="Slider Title">
                                                <textarea name="description" class="form-control mb-2" placeholder="Slider Description">{{ $slider->description }}</textarea>
                                                            <div class="d-flex justify-content-between">
                                                                
                                                            <button type="submit" class="btn btn-primary btn-sm w-50 me-2">Update</button>
                                                            <button type="button" class="btn btn-danger btn-sm w-50" onclick="confirmDelete({{ $slider->id }})">Delete</button>
                                                            </div>
                                                        </form>

                                                        <!-- Delete Slider Form -->
                                                        <form action="{{ route('slider.destroy', $slider->id) }}" method="POST" class="w-50" id="deleteForm{{ $slider->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                        
                                                        </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $sl++;
                                        @endphp
                                    @endforeach
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
<script>
function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this slider?")) {
        // Submit the hidden form
        document.getElementById('deleteForm' + id).submit();
    }
}
</script>


@endsection
