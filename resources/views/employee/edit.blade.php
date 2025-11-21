@extends('layouts.app')
@section('title', 'employee-edit')

@section('content')

<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-5">
                            <h2 class="mb-4 text-center fw-bold text-primary">
                                <i class="bx bx-user"></i> Edit Employee
                            </h2>

                            {{-- Success Message --}}
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            {{-- Error Messages --}}
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

                            {{-- Edit Form --}}
                            <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                @method('PUT')

                                <div class="row g-4">

                                    {{-- Existing Image --}}
                                    <div class="col-12 text-center">
                                        @if($employee->image)
                                            <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Image" class="img-thumbnail mb-3" style="height: 150px;">
                                        @endif
                                    </div>

                                    {{-- Upload New Image --}}
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-upload"></i> Change Image <span class="text-muted">(optional)</span>
                                        </label>
                                        <input type="file" class="form-control shadow-sm" name="image" accept="image/*">
                                    </div>

                                    {{-- Name --}}
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-user"></i> Full Name
                                        </label>
                                        <input type="text" class="form-control shadow-sm" name="name" value="{{ old('name', $employee->name) }}" required>
                                    </div>

                                    {{-- Designation --}}
                                    <div class="col-md-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-briefcase-alt-2"></i> Designation
                                        </label>
                                        <input type="text" class="form-control shadow-sm" name="designation" value="{{ old('designation', $employee->designation) }}" required>
                                    </div>

                                    {{-- Description --}}
                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-detail"></i> Description
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="4" name="description" placeholder="Short description about the employee">{{ old('description', $employee->description) }}</textarea>
                                    </div>
                                </div>

                                <div class="row pt-4">
                                    <div class="col-12 d-flex justify-content-end gap-2">
                                        <a href="{{ route('employees.index') }}" class="btn btn-secondary w-md">Back</a>
                                        <button type="submit" class="btn btn-primary w-md">
                                            <i class="bx bx-save"></i> Update Employee
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
