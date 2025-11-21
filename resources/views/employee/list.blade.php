@extends('layouts.app')
@section('title', 'employee-list')

@section('content')

<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h2 class="fw-bold text-primary mb-0">
                                    <i class="bx bx-group"></i> Employee List
                                </h2>
                                <a href="{{ route('employees.create') }}" class="btn btn-primary">
                                    <i class="bx bx-plus-circle"></i> Add Employee
                                </a>
                            </div>

                            {{-- Success Message --}}
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            {{-- Table --}}
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Description</th>
                                            <th scope="col" class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($employees as $employee)
                                            <tr>
                                                <td style="width: 80px;">
                                                    @if($employee->image)
                                                        <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Image" class="img-thumbnail" style="width: 60px; height: 60px; object-fit: cover;">
                                                    @else
                                                        <span class="text-muted">N/A</span>
                                                    @endif
                                                </td>
                                                <td>{{ $employee->name }}</td>
                                                <td>{{ $employee->designation }}</td>
                                                <td>{{ Str::limit($employee->description, 50) }}</td>
                                                <td class="text-end">
                                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-warning">
                                                        <i class="bx bx-edit-alt"></i> Edit
                                                    </a>

                                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" id="deleteForm{{ $employee->id }}" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $employee->id }})">
                                                            <i class="bx bx-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-muted">No employees found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            {{-- Pagination --}}
                            <div class="d-flex justify-content-end mt-3">
                                {{ $employees->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SweetAlert for Delete Confirmation --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "This will permanently delete the employee.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#198754',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + id).submit();
                }
            });
        }
    </script>
</main>

@endsection
