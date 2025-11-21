@extends('layouts.app')
@section('title' ,'c-add')


@section('content')
<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4 text-center">Company Information</h4>

                                     <form method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="company_name" class="form-label">Company Name</label>
                                                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter Company Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="company_details" class="form-label">Company Details</label>
                                                    <input type="text" name="company_details" class="form-control" id="company_details" placeholder="Enter Company Details">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="company_address" class="form-label">Company Address</label>
                                                    <input type="text" name="company_address" class="form-control" id="company_address" placeholder="Enter Your Address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="cell_number" class="form-label">Cell Number</label>
                                                    <input type="text" name="cell_number" class="form-control" id="cell_number" placeholder="Enter Cell Number">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="phone_number" class="form-label">Phone Number</label>
                                                    <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Enter Phone Number">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="hotline_number" class="form-label">Hotline Number</label>
                                                    <input type="text" name="hotline_number" class="form-control" id="hotline_number" placeholder="Enter Hotline Number">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="website_url" class="form-label">Website Url</label>
                                                    <input type="text" name="website_url" class="form-control" id="website_url" placeholder="Enter Website Url">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="trade_license_no" class="form-label">Trade License No</label>
                                                    <input type="text" name="trade_license_no" class="form-control" id="trade_license_no" placeholder="Enter Trade License No">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="etin_no" class="form-label">e-TIN No</label>
                                                    <input type="text" name="etin_no" class="form-control" id="etin_no" placeholder="Enter e-TIN No">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="bin_no" class="form-label">BIN No</label>
                                                    <input type="text" name="bin_no" class="form-control" id="bin_no" placeholder="Enter BIN No">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="currency" class="form-label">Currency</label>
                                                    <input type="text" name="currency" class="form-control" id="currency" placeholder="Enter Currency">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="left_logo" class="form-label">Default Left Menu Logo (170px X 60px)</label>
                                                    <input type="file" name="left_logo" class="form-control" id="left_logo">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="small_logo" class="form-label">Default Left Small Menu Logo (80px X 70px)</label>
                                                    <input type="file" name="small_logo" class="form-control" id="small_logo">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-4">
                                                    <label class="form-label">Status</label>
                                                        <select name="status" class="form-control select2-search-disable">
                                                            <option>Select</option>
                                                            <optgroup>
                                                                <option value="1">Active</option>
                                                                <option value="0">Deactive</option>
                                                            </optgroup>
                                                        </select>
                                            </div>


                                        </div>

                                        <div class="row pt-5">
                                            <div class="col-12 d-flex justify-content-end gap-2">
                                                <button type="button" class="btn btn-secondary w-md" onclick="window.history.back();">Back</button>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </div> 
                                    </form>

                                    </div>     <!-- end card body -->
                      </div>                            <!-- end card -->
                 </div>
            </div>
        </div>
    </div>
</main>
<style>
        body {
            background: #f8f9fa;
        }

        .form-control, .form-select, textarea {
            background-color: #edf5efff; /* Image color */
            border: 1px solid #f0f0f0ff;
            color: #000;
        }

        .form-control:focus, .form-select:focus, textarea:focus {
            background-color: #edf5efff; /* Focus হলে একটু গাঢ় shade */
            border-color: #d1f8dbff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(222, 250, 186, 0.25);
        }

        .card {
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
        }

        .btn-back {
            background-color: #6c757d;
            border: none;
        }

        .btn-back:hover {
            background-color: #5a6268;
        }
    </style>
@endsection