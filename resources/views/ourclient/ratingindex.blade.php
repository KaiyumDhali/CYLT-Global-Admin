@extends('layouts.app')
@section('title', 'client-reviews-list')

@section('content')
<main>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Client Reviews</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- search and add -->
                                <div class="row mb-2">
                                    <div class="col-sm">
                                        <div class="search-box me-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" autocomplete="off" id="searchTableList" placeholder="Search...">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-auto">
                                        <div class="text-sm-end">
                                            <a href="{{ route('client-reviews.create') }}" class="btn btn-primary" id="addReview-btn">
                                                <i class="mdi mdi-plus me-1"></i> Add Review
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- table -->
                                <div class="table-responsive pt-3">
                                    <table class="table align-middle table-nowrap dt-responsive nowrap w-100 table-borderless">
                                        <thead class="table-light">
                                            <tr>
                                                <th>SL</th>
                                                <th>Client Name</th>
                                                <th>Company Name</th>
                                                <th>Rating</th>
                                                <th>Description</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($reviews as $key => $review)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $review->client_name ?? '-' }}</td>
                                                    <td>{{ $review->company_name ?? '-' }}</td>
                                                    <td>
                                                        @for($i = 1; $i <= 5; $i++)
                                                            @if($i <= $review->rating)
                                                                <i class="bx bxs-star text-warning"></i>
                                                            @else
                                                                <i class="bx bx-star text-muted"></i>
                                                            @endif
                                                        @endfor
                                                    </td>
                                                    <td>{{ Str::limit($review->description, 60) ?? '-' }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('client-reviews.edit', $review->id) }}" class="btn btn-sm btn-info">Edit</a>

                                                        <form action="{{ route('client-reviews.destroy', $review->id) }}" method="POST" class="d-inline" id="deleteForm{{ $review->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $review->id }})">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">No client reviews found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>

                                    <!-- Pagination -->
                                    <div class="d-flex justify-content-end mt-3">
                                        {{ $reviews->links() }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
    </div>
</main>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This review will be permanently deleted!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f46a6a',
            cancelButtonColor: '#556ee6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + id).submit();
            }
        });
    }
</script>
@endsection
