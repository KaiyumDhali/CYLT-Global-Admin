@extends('layouts.app')
@section('title' ,'projects-edit')

@section('content')

<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-5">
                            <h2 class="mb-4 text-center fw-bold text-primary">
                                <i class="bx bx-briefcase"></i> Update Project
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

                            <!-- Update Project Form -->
                            <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                @method('PUT')

                                <div class="row g-4">

                                    <div class="col-12 text-center">
                                        @if($project->image)
                                            @foreach(explode(',', $project->image) as $img)
                                                <img src="{{ asset('storage/' . $img) }}" alt="Project Image" class="img-thumbnail mb-2" style="height:150px;">
                                            @endforeach
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-upload"></i> Project Images <span class="text-muted">(optional, multiple)</span>
                                        </label>
                                        <input type="file" class="form-control shadow-sm" name="image[]" multiple>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-text"></i> Project Title
                                        </label>
                                        <input type="text" class="form-control shadow-sm" name="title" value="{{ $project->title }}" placeholder="Enter project title">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-user"></i> Client Name
                                        </label>
                                        <input type="text" class="form-control shadow-sm" name="client_name" value="{{ $project->client_name }}" placeholder="Enter client name">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-check-circle"></i> Status
                                        </label>
                                        <select class="form-control shadow-sm" name="status">
                                            <option value="0" {{ $project->status == 0 ? 'selected' : '' }}>In Progress</option>
                                            <option value="1" {{ $project->status == 1 ? 'selected' : '' }}>Completed</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-detail"></i> Project Description
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="description" placeholder="Write a short description...">{{ $project->description }}</textarea>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-note"></i> Additional Notes (Optional)
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="othertext" placeholder="Additional details...">{{ $project->othertext }}</textarea>
                                    </div>

                                </div>

                                <div class="row pt-4">
                                    <div class="col-12 d-flex justify-content-end gap-2">
                                        <a href="{{ route('projects.list') }}" class="btn btn-secondary w-md">Back</a>
                                        <button type="submit" class="btn btn-primary w-md">
                                            <i class="bx bx-save"></i> Update Project
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
