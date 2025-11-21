@extends('layouts.app')
@section('title' ,'projects-add')

@section('content')

<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-5">
                            <h2 class="mb-4 text-center fw-bold text-primary">
                                <i class="bx bx-briefcase"></i> Manage Projects
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

                            <!-- Project Form -->
                            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                                @csrf

                                <div class="row g-4">
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
                                        <input type="text" class="form-control shadow-sm" name="title[]" placeholder="Enter project title">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-user"></i> Client Name
                                        </label>
                                        <input type="text" class="form-control shadow-sm" name="client_name[]" placeholder="Enter client name">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-check-circle"></i> Status
                                        </label>
                                        <select class="form-control shadow-sm" name="status">
                                            <option value="0">In Progress</option>
                                            <option value="1">Completed</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-detail"></i> Project Description
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="description[]" placeholder="Write a short description..."></textarea>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-note"></i> Additional Notes (Optional)
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="othertext[]" placeholder="Additional details..."></textarea>
                                    </div>
                                </div>

                                <div class="row pt-4">
                                    <div class="col-12 d-flex justify-content-end gap-2">
                                        <button type="button" class="btn btn-secondary w-md" onclick="window.history.back();">Back</button>
                                        <button type="submit" class="btn btn-primary w-md">
                                            <i class="bx bx-plus-circle"></i> Add New Project
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

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- SweetAlert2 Script -->
<script>
    function confirmDelete(projectId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This project will be permanently deleted!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#198754',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + projectId).submit();
            }
        });
    }
</script>

@endsection
