@extends('layouts.app')
@section('title' ,'about-edit')

@section('content')

<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-5">
                            <h2 class="mb-4 text-center fw-bold text-primary">
                                <i class="bx bx-info-circle"></i> Update About Us
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

                            <!-- Update About Us Form -->
                            <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                @method('PUT')

                                <div class="row g-4">

                                    <div class="col-12 text-center">
                                        @if($about->image)
                                            @php
                                                $images = explode(',', $about->image);
                                            @endphp
                                            @foreach($images as $img)
                                                <img src="{{ asset('storage/' . $img) }}" alt="About Image" class="img-thumbnail mb-2" style="height:150px; margin-right:5px;">
                                            @endforeach
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-upload"></i> About Images <span class="text-muted">(optional, multiple)</span>
                                        </label>
                                        <input type="file" class="form-control shadow-sm" name="image[]" multiple>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-text"></i> Heading / Title
                                        </label>
                                        <input type="text" class="form-control shadow-sm" name="title" value="{{ $about->title }}" placeholder="Enter heading/title">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-detail"></i> Description
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="description" placeholder="Write a short description...">{{ $about->description }}</textarea>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-note"></i> Additional Information
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="othertext" placeholder="Additional details...">{{ $about->othertext }}</textarea>
                                    </div>

                                </div>

                                <div class="row pt-4">
                                    <div class="col-12 d-flex justify-content-end gap-2">
                                        <a href="{{ route('about.list') }}" class="btn btn-secondary w-md">Back</a>
                                        <button type="submit" class="btn btn-primary w-md">
                                            <i class="bx bx-save"></i> Update About Us
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

@endsection
