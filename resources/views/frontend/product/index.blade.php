@extends('frontend.layout.app')
@section('title' ,'index')

@section('content')
<main>

    <div class="breadcrumbs panel z-1 py-2 bg-black text-dark">
        <div class="container max-w-xl">
            <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 fw-medium m-0" style="height:65px;">
                {{-- Breadcrumb dynamic if needed --}}
                <li><a href="" class="text-white"></a></li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="breadcrumbs panel z-1 py-2 text-dark" style="background-color:#E6EBEF">
        <div class="container max-w-xl">
            <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 fw-medium m-0" style="height:65px;">
                {{-- Breadcrumb dynamic if needed --}}
                <li><a href="" class="text-white">Home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </div>

    <div class="section py-4 lg:py-6 xl:py-8">
        <div class="container max-w-xl">
            <div class="panel vstack gap-4 lg:gap-6 xl:gap-8">

                <header class="shop-header panel vstack justify-center gap-2 lg:gap-4 text-center">
                    <div class="panel">
                        <h1 class="h3 lg:h1 m-0">Explore Our Valuable Products</h1>
                    </div>
                    <div class="vstack sm:hstack justify-between items-center gap-2 sm:gap-4">
                        <div class="panel text-center sm:text-start">
                            <span class="fs-6 m-0 opacity-60">
                                Showing {{ $products->count() }} products out of {{ $products->total() ?? $products->count() }} total.
                            </span>
                        </div>
                        <div>
                            <div class="hstack gap-1 fs-6">
    <span>Filter by Category:</span>
    <form method="GET" action="">
        <select name="category_id" id="category_id" class="form-select form-control-xs fs-6 w-150px" onchange="this.form.submit()">
            <option value="">All Categories</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </form>
</div>

                        </div>
                    </div>
                </header>

                <div class="shop-lisiting row child-cols-6 lg:child-cols-3 col-match gy-4 lg:gy-8 gx-2 lg:gx-4">
                    @forelse($products as $product)
                        <div>
                            <article class="product type-product panel">
                                <div class="vstack gap-2">
                                    <div class="panel position-relative">
                                        <div class="ratio ratio-3x4 rounded overflow-hidden uc-transition-toggle overflow-hidden">
                                            @php
                                                $images = $product->images ? explode(',', $product->images) : [];
                                                $mainImage = $images[0] ?? 'assets/images/common/products/img-01.jpg';
                                            @endphp
                                            <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="{{ asset('storage/'.$mainImage) }}" alt="{{ $product->name }}">
                                            <a href="" class="position-cover" data-caption="{{ $product->name }}"></a>
                                        </div>

                                       <div class="py-3 text-center"><h5>{{ $product->name }}</h5></div>

                                        {{-- Discount badge (optional) --}}
                                        @if($product->discount)
                                            <span class="position-absolute top-0 start-0 m-1 md:m-2 ft-secondary h-24px px-1 bg-yellow-400 text-dark">
                                                {{ $product->discount }}%
                                            </span>
                                        @endif
                                    </div>

                                    <div class="content vstack items-center gap-1 fs-6 text-center xl:mt-1">
                                   

                                        {{-- Product Features --}}
                                        @if($product->features->count())
                                            <ul class="list-none p-0 m-0">
                                                @foreach($product->features as $feature)
                                                    <li class="fs-7 text-muted">{{ $feature->feature }}</li>
                                                @endforeach
                                            </ul>
                                        @endif

                                        <div class="hstack justify-center gap-narrow fs-7">
                                            @if($product->price_old)
                                                <span class="price-old text-line-through opacity-40">${{ $product->price_old }}</span>
                                            @endif
                                            <span class="price">${{ $product->price ?? '0.00' }}</span>
                                        </div>

                                    
                                    </div>
                                </div>
                            </article>
                        </div>
                        
                    @empty
                        <p class="text-center">No products found.</p>


                        
                    @endforelse
                </div>

                
                {{-- Pagination --}}
                @if($products->hasPages())
                    <div class="nav-pagination pt-3 border-top border-gray-100">
                        {{ $products->links('vendor.pagination.bootstrap-5') }}
                    </div>
                @endif

            </div>
        </div>
    </div>

</main>
@endsection
