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
                            <h4 class="mb-0 font-size-18">Company List</h4>
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

                                    <div class="col-sm-auto">
                                        <div class="text-sm-end">
                                            <a href="{{ route('company.create') }}" class="btn btn-primary" id="addProject-btn">
                                                <i class="mdi mdi-plus me-1"></i> Add New Company
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="table-responsive">
                                    <table class="table project-list-table align-middle table-nowrap dt-responsive nowrap w-100 table-borderless">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 60px">SL</th>
                                                <th scope="col">Company Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($companies as $key => $company)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $company->company_name }}</td>
                                                    <td>{{ $company->email }}</td>
                                                    <td>{{ $company->phone_number }}</td>
                                                    <td>
                                                        @if($company->status == 1)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('company.edit', $company->id) }}" class="btn btn-sm btn-info">Edit</a>
                                                        
                                                        <form action="{{ route('company.destroy', $company->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
@endsection
