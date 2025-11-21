@extends('frontend.layout.app')
@section('title' ,'index')

@section('content')

<main>


        <!-- Wrapper start -->
        <div id="wrapper" class="wrap">
             <div class="breadcrumbs panel z-1 py-2 bg-black text-dark">
                    <div class="container max-w-xl">
                        <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 fw-medium m-0" style="height:65px;">
                            {{-- Breadcrumb dynamic if needed --}}
                            <li><a href="" class="text-white"></a></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            <div class="panel">
                <div class="hero-inner panel overflow-hidden pb-8 pt-10 xl:py-10">
                    <div class="container max-w-xl">
                        <div class="panel vstack justify-center text-center" data-anime="targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                            <div class="vstack items-center gap-2 lg:gap-4 mb-4 sm:mb-6 lg:mb-8 xl:w-850px mx-auto text-center">
                                <h1 class="h2 sm:h1 lg:display-6 xl:display-5 m-0">Transforming Businesses <br class="d-none xl:d-block">Through Innovation</h1>
                                <p class="m-0 fs-3">
                                    Discover how our strategies drive remarkable results and success <br class="d-none xl:d-block">
                                    across diverse industries and challenges.
                                </p>
                            </div>
                            <div class="panel">
                                <div class="ratio ratio-1x1 rounded h-300px lg:h-400px xl:h-500px rounded uc-transition-toggle overflow-hidden">
                                    <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/inner-pages/image-05.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section end-->

                <!-- Section start -->
                <div id="case_studies" class="uni-case-studies section panel overflow-hidden">
                    <div class="section-outer panel pb-8 xl:pb-10">
                        <div class="container max-w-xl">
                            <div class="section-inner panel">
                                <div class="panel">
                                    <div class="row child-cols-12 sm:child-cols-6 g-4 sm:gy-4 sm:gx-6 lg:gy-6 lg:gx-8 xl:gy-9 xl:gx-10" data-anime="targets: > *; onview: -150; translateY: [16, 0]; opacity: [0, 1]; easing: easeOutExpo; duration: 750; delay: anime.stagger(100, {start: 500});">
                                        <div>
                                            <div class="panel">
                                                <div class="panel case-header" data-uc-cursor="xl text-secondary inverse-text fw-bold text-uppercase ls-0" data-uc-cursor-text="View Study">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99 rounded"></div>
                                                    <div class="ratio ratio-1x1 rounded rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/project/01.jpg" alt="Dreamy vision">
                                                    </div>
                                                    <a href="single-case-study.html" class="position-cover z-99"></a>
                                                </div>
                                                <div class="panel case-body vstack gap-2 mt-2">
                                                    <h4 class="h5 lg:h4 xl:h3 m-0"><a class="text-none" href="#" data-uc-cursor="sm opacity-20">Dreamy vision</a></h4>
                                                    <ul class="nav-x gap-1 m-0">
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">Logo, user interface</a></li>
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">Consulting</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sm:pt-8 lg:pt-9 xl:pt-10">
                                            <div class="panel">
                                                <div class="panel case-header" data-uc-cursor="xl text-secondary inverse-text fw-bold text-uppercase ls-0" data-uc-cursor-text="View Study">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99 rounded"></div>
                                                    <div class="ratio ratio-1x1 rounded rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/project/02.jpg" alt="Energie brand">
                                                    </div>
                                                    <a href="single-case-study.html" class="position-cover z-99"></a>
                                                </div>
                                                <div class="panel case-body vstack gap-2 mt-2">
                                                    <h4 class="h5 lg:h4 xl:h3 m-0"><a class="text-none" href="#" data-uc-cursor="sm opacity-20">Energie brand</a></h4>
                                                    <ul class="nav-x gap-1 m-0">
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">Logo, branding</a></li>
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">Consulting</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="panel">
                                                <div class="panel case-header" data-uc-cursor="xl text-secondary inverse-text fw-bold text-uppercase ls-0" data-uc-cursor-text="View Study">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99 rounded"></div>
                                                    <div class="ratio ratio-1x1 rounded rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/project/03.jpg" alt="Bottle company">
                                                    </div>
                                                    <a href="single-case-study.html" class="position-cover z-99"></a>
                                                </div>
                                                <div class="panel case-body vstack gap-2 mt-2">
                                                    <h4 class="h5 lg:h4 xl:h3 m-0"><a class="text-none" href="#" data-uc-cursor="sm opacity-20">Bottle company</a></h4>
                                                    <ul class="nav-x gap-1 m-0">
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">Marketing</a></li>
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">Consulting</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sm:pt-8 lg:pt-9 xl:pt-10">
                                            <div class="panel">
                                                <div class="panel case-header" data-uc-cursor="xl text-secondary inverse-text fw-bold text-uppercase ls-0" data-uc-cursor-text="View Study">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99 rounded"></div>
                                                    <div class="ratio ratio-1x1 rounded rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/project/04.jpg" alt="Strategy planing">
                                                    </div>
                                                    <a href="single-case-study.html" class="position-cover z-99"></a>
                                                </div>
                                                <div class="panel case-body vstack gap-2 mt-2">
                                                    <h4 class="h5 lg:h4 xl:h3 m-0"><a class="text-none" href="#" data-uc-cursor="sm opacity-20">Strategy planing</a></h4>
                                                    <ul class="nav-x gap-1 m-0">
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">E-commerce</a></li>
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">Consulting</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="panel">
                                                <div class="panel case-header" data-uc-cursor="xl text-secondary inverse-text fw-bold text-uppercase ls-0" data-uc-cursor-text="View Study">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99 rounded"></div>
                                                    <div class="ratio ratio-1x1 rounded rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/project/05.jpg" alt="Digital Transformation">
                                                    </div>
                                                    <a href="single-case-study.html" class="position-cover z-99"></a>
                                                </div>
                                                <div class="panel case-body vstack gap-2 mt-2">
                                                    <h4 class="h5 lg:h4 xl:h3 m-0"><a class="text-none" href="#" data-uc-cursor="sm opacity-20">Digital Transformation</a></h4>
                                                    <ul class="nav-x gap-1 m-0">
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">Finance, Analytics</a></li>
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">Consulting</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sm:pt-8 lg:pt-9 xl:pt-10">
                                            <div class="panel">
                                                <div class="panel case-header" data-uc-cursor="xl text-secondary inverse-text fw-bold text-uppercase ls-0" data-uc-cursor-text="View Study">
                                                    <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-60 z-99 rounded"></div>
                                                    <div class="ratio ratio-1x1 rounded rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/project/06.jpg" alt="Business Process">
                                                    </div>
                                                    <a href="single-case-study.html" class="position-cover z-99"></a>
                                                </div>
                                                <div class="panel case-body vstack gap-2 mt-2">
                                                    <h4 class="h5 lg:h4 xl:h3 m-0"><a class="text-none" href="#" data-uc-cursor="sm opacity-20">Business Process</a></h4>
                                                    <ul class="nav-x gap-1 m-0">
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">Security, branding</a></li>
                                                        <li><a href="single-case-study.html" class="cstack py-1 px-2 bg-gray-50 hover:bg-primary hover:text-white duration-150 rounded" data-uc-cursor="sm opacity-20">Consulting</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section end -->

                <!-- Section start-->
                <div class="uni-brands section panel overflow-hidden">
                    <div class="section-outer panel">
                        <div class="container max-w-xl">
                            <div class="section-inner panel vstack gap-9">
                                <header>
                                    <div class="panel text-center vstack gap-2 items-center">
                                        <div class="fs-5 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25 w-fit"><span>Partners</span></div>
                                        <h1 class="title h3 sm:h2 xl:display-6 m-0">
                                            Our partners with sustainable <br class="d-none sm:d-block">
                                            brands
                                        </h1>
                                    </div>
                                </header>
                            </div>
                        </div>
                        <div class="panel bg-primary mt-8 py-8">
                            <div class="container max-w-xl">
                                <div class="panel">
                                    <div class="row child-cols-6 md:child-cols-3 g-4 lg:g-6">
                                        <div>
                                            <div class="brand-item text-center">
                                                <img class="brand-item-image h-48px lg:h-56px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-01.svg" alt="Shopify" data-uc-svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="brand-item text-center">
                                                <img class="brand-item-image h-48px lg:h-56px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-02.svg" alt="Netflix" data-uc-svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="brand-item text-center">
                                                <img class="brand-item-image h-48px lg:h-56px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-03.svg" alt="Huawei" data-uc-svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="brand-item text-center">
                                                <img class="brand-item-image h-48px lg:h-56px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-04.svg" alt="Lexus" data-uc-svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="brand-item text-center">
                                                <img class="brand-item-image h-48px lg:h-56px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-05.svg" alt="Spotify" data-uc-svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="brand-item text-center">
                                                <img class="brand-item-image h-48px lg:h-56px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-06.svg" alt="Bing" data-uc-svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="brand-item text-center">
                                                <img class="brand-item-image h-48px lg:h-56px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-07.svg" alt="Mailchimp" data-uc-svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="brand-item text-center">
                                                <img class="brand-item-image h-48px lg:h-56px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-08.svg" alt="Open Ai" data-uc-svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section end-->

                <!-- Section start -->
                <div id="uni_faq" class="uni-faq section panel overflow-hidden pt-8 md:pt-9 xl:pt-10">
                    <div class="section-outer panel pb-8 xl:pb-10">
                        <div class="container max-w-xl">
                            <div class="section-inner panel">
                                <div class="panel">
                                    <div class="row xl:child-cols-6 g-4 col-match">
                                        <div class="panel">
                                            <header>
                                                <div class="vstack justify-between h-100">
                                                    <div class="panel vstack gap-2">
                                                        <div class="fs-5 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25 w-fit"><span>Help Center</span></div>
                                                        <h1 class="title h3 sm:h2 xl:display-6 m-0">
                                                            Frequenlty asked <br class="d-none sm:d-block">
                                                            questions
                                                        </h1>
                                                    </div>
                                                    <a class="fs-5 xl:fs-4 btn btn-sm xl:btn-md btn-primary text-none w-fit mt-4" href="page-faq.html" data-uc-cursor="md bg-white opacity-10">Learn more <i class="icon-1 ms-1 unicon-arrow-right"></i></a>
                                                </div>
                                            </header>
                                        </div>
                                        <div class="panel">
                                            <ul class="gap-4" data-uc-accordion="targets: > li;">
                                                <li class="panel px-2 py-3 lg:p-3 xl:p-4 rounded bg-gray-25">
                                                    <a href="#" data-uc-cursor="md bg-white opacity-10" class="uc-accordion-title h6 sm:h5 xl:h4 fw-bold">1. What is business consulting ?</a>
                                                    <div class="uc-accordion-content">
                                                        <p>Yes, you need to have a fair amount of knowledge in dealing with HTML/CSS as well as JavaScript in order to be able to use Varium.</p>
                                                    </div>
                                                </li>
                                                <li class="panel px-2 py-3 lg:p-3 xl:p-4 rounded bg-gray-25">
                                                    <a href="#" data-uc-cursor="md bg-white opacity-10" class="uc-accordion-title h6 sm:h5 xl:h4 fw-bold">2. Why wouldn’t I just hire my own animator ?</a>
                                                    <div class="uc-accordion-content">
                                                        <p>Feel free to do so. Kloomix does exist to evolve every commercial project. You can also use it to build stunning websites for your own clients (we won’t breathe a word).</p>
                                                    </div>
                                                </li>
                                                <li class="panel px-2 py-3 lg:p-3 xl:p-4 rounded bg-gray-25">
                                                    <a href="#" data-uc-cursor="md bg-white opacity-10" class="uc-accordion-title h6 sm:h5 xl:h4 fw-bold">3. How Does variuem Ensure Data Privacy ?</a>
                                                    <div class="uc-accordion-content">
                                                        <p>Definitely! Please use it however you like; we don’t limit it.</p>
                                                    </div>
                                                </li>
                                                <li class="panel px-2 py-3 lg:p-3 xl:p-4 rounded bg-gray-25">
                                                    <a href="#" data-uc-cursor="md bg-white opacity-10" class="uc-accordion-title h6 sm:h5 xl:h4 fw-bold">4. Can I use this to create and sell a product ?</a>
                                                    <div class="uc-accordion-content">
                                                        <p>Do not ever consider doing it.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section end -->
            </div>
        </div>

        <!-- Wrapper end -->

</main>

@endsection