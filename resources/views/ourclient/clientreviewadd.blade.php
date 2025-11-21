@extends('layouts.app') 

@section('title', 'client-review-add') 

@section('content') 
<main> 
    <div class="main-content"> 
        <div class="page-content"> 
            <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;"> 
                <div class="col-md-8"> 
                    <div class="card border-0 shadow-lg rounded-4"> 
                        <div class="card-body p-5"> 
                            <h2 class="mb-4 text-center fw-bold text-primary"> 
                                <i class="bx bx-star"></i> Manage Client Review 
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

                            <!-- Client Review Form --> 
                            <form action="{{ route('client-reviews.store') }}" method="POST" class="mt-4"> 
                                @csrf 
                                <div class="row g-4"> 

                                    <!-- Client Name Field -->
                                    <div class="col-md-6"> 
                                        <label class="form-label fw-semibold"> 
                                            <i class="bx bx-user"></i> Client Name 
                                        </label> 
                                        <input type="text" class="form-control shadow-sm" name="client_name" placeholder="Enter client's full name" required> 
                                    </div> 

                                    <!-- Company Name Field -->
                                    <div class="col-md-6"> 
                                        <label class="form-label fw-semibold"> 
                                            <i class="bx bx-buildings"></i> Company Name 
                                        </label> 
                                        <input type="text" class="form-control shadow-sm" name="company_name" placeholder="Enter company name" required> 
                                    </div> 

                                    <!-- Rating Field -->
                                    <div class="col-md-6"> 
                                        <label class="form-label fw-semibold"> 
                                            <i class="bx bx-star"></i> Rating 
                                        </label> 
                                        <select class="form-select shadow-sm" name="rating" required> 
                                            <option value="" disabled selected>Select Rating</option> 
                                            <option value="1">1 Star</option> 
                                            <option value="2">2 Stars</option> 
                                            <option value="3">3 Stars</option> 
                                            <option value="4">4 Stars</option> 
                                            <option value="5">5 Stars</option> 
                                        </select> 
                                    </div> 

                                    <!-- Description Field -->
                                    <div class="col-12"> 
                                        <label class="form-label fw-semibold"> 
                                            <i class="bx bx-comment-detail"></i> Description 
                                        </label> 
                                        <textarea class="form-control shadow-sm" rows="3" name="description" placeholder="Write a review or feedback" required></textarea> 
                                    </div> 

                                </div> 

                                <div class="row pt-4"> 
                                    <div class="col-12 d-flex justify-content-end gap-2"> 
                                        <button type="button" class="btn btn-secondary w-md" onclick="window.history.back();">Back</button> 
                                        <button type="submit" class="btn btn-primary w-md"> 
                                            <i class="bx bx-send"></i> Submit Review 
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

<script> 
    function confirmDelete(clientId) { 
        Swal.fire({ 
            title: 'Are you sure?', 
            text: "This client review will be permanently deleted!", 
            icon: 'warning', 
            showCancelButton: true, 
            confirmButtonColor: '#198754', 
            cancelButtonColor: '#d33', 
            confirmButtonText: 'Yes, delete it!' 
        }).then((result) => { 
            if (result.isConfirmed) { 
                document.getElementById('deleteForm' + clientId).submit(); 
            } 
        }); 
    } 
</script> 
@endsection
