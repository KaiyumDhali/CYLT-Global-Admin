@extends('layouts.app') 

@section('title', 'Edit Client Review') 

@section('content') 
<main>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-8">
          <div class="card border-0 shadow-lg rounded-4">
            <div class="card-body p-5">
              <h2 class="mb-4 text-center fw-bold text-primary">
                <i class="bx bx-edit"></i> Edit Client Review
              </h2>

              <!-- Success / Error messages -->
              @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <ul class="mb-0">
                    @foreach ($errors->all() as $err)
                      <li>{{ $err }}</li>
                    @endforeach
                  </ul>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

              <form action="{{ route('client-reviews.update', $review->id) }}" method="POST" class="mt-4">
                @csrf
                @method('PUT')

                <div class="row g-4">
                  <!-- Client Name -->
                  <div class="col-md-6">
                    <label class="form-label fw-semibold">
                      <i class="bx bx-user"></i> Client Name
                    </label>
                    <input type="text" 
                           class="form-control shadow-sm" 
                           name="client_name" 
                           value="{{ old('client_name', $review->client_name) }}"
                           required>
                  </div>

                  <!-- Company Name -->
                  <div class="col-md-6">
                    <label class="form-label fw-semibold">
                      <i class="bx bx-buildings"></i> Company Name
                    </label>
                    <input type="text" 
                           class="form-control shadow-sm" 
                           name="company_name" 
                           value="{{ old('company_name', $review->company_name) }}">
                  </div>

                  <!-- Rating -->
                  <div class="col-md-6">
                    <label class="form-label fw-semibold">
                      <i class="bx bx-star"></i> Rating
                    </label>
                    <select class="form-select shadow-sm" name="rating" required>
                      <option value="" disabled>Select Rating</option>
                      @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" 
                          {{ (old('rating', $review->rating) == $i) ? 'selected' : '' }}>
                          {{ $i }} Star{{ $i > 1 ? 's' : '' }}
                        </option>
                      @endfor
                    </select>
                  </div>

                  <!-- Description -->
                  <div class="col-12">
                    <label class="form-label fw-semibold">
                      <i class="bx bx-comment-detail"></i> Description
                    </label>
                    <textarea class="form-control shadow-sm" 
                              name="description" rows="3"
                              placeholder="Write a review">{{ old('description', $review->description) }}</textarea>
                  </div>

                </div>

                <div class="row pt-4">
                  <div class="col-12 d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-secondary w-md" onclick="window.history.back();">
                      Back
                    </button>
                    <button type="submit" class="btn btn-primary w-md">
                      <i class="bx bx-save"></i> Update Review
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
