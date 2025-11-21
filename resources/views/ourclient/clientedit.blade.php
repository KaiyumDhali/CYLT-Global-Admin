@extends('layouts.app')
@section('title' ,'clients-edit')

@section('content')

<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-5">
                            <h2 class="mb-4 text-center fw-bold text-primary">
                                <i class="bx bx-briefcase"></i> Update Client Info
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

                            <!-- Update Client Form -->
                            <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                @method('PUT')

                                <div class="row g-4">

                                    <div class="col-12 text-center">
                                        @if($client->image)
                                            @php
                                                $images = explode(',', $client->image);
                                            @endphp
                                            @foreach($images as $img)
                                                <img src="{{ asset('storage/' . $img) }}" alt="Client Image" class="img-thumbnail mb-2" style="height:150px; margin-right:5px;">
                                            @endforeach
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-upload"></i> Client Images <span class="text-muted">(optional, multiple)</span>
                                        </label>
                                        <input type="file" class="form-control shadow-sm" name="image[]" multiple>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-buildings"></i> Company Name
                                        </label>
                                        <input type="text" class="form-control shadow-sm" name="company_name" value="{{ $client->company_name }}" placeholder="Enter company name">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-map"></i> Address
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="2" name="address" placeholder="Enter company address">{{ $client->address }}</textarea>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">
                                            <i class="bx bx-detail"></i> Description
                                        </label>
                                        <textarea class="form-control shadow-sm" rows="3" name="description" placeholder="Short description about the client">{{ $client->description }}</textarea>
                                    </div>

                                </div>

                                <div class="row pt-4">
                                    <div class="col-12 d-flex justify-content-end gap-2">
                                        <a href="{{ route('clients.list') }}" class="btn btn-secondary w-md">Back</a>
                                        <button type="submit" class="btn btn-primary w-md">
                                            <i class="bx bx-save"></i> Update Client
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
