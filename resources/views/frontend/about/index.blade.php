@extends('frontend.layout.app')
@section('title' ,'index')

@section('content')


<main>

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
            <!-- Hero start -->
            <div id="hero_header" class="hero-header section panel overflow-hidden" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                <div class="section-outer panel py-6 sm:py-8 xl:py-9">
                    <div class="container max-w-2xl">
                        <div class="section-inner panel vstack gap-4 sm:gap-6 lg:gap-8 xl:gap-9">
                            <div class="panel vstack items-center gap-2 lg:gap-4 mb-4 sm:mb-6 lg:mb-8 max-w-750px mx-auto text-center">
                                <h1 class="h2 sm:h1 lg:display-6 xl:display-5 m-0">
                                    Innovar business <br class="d-none xl:d-block">
                                    consultancy
                                </h1>
                                <p class="m-0 fs-5 sm:fs-4 xl:fs-3">With Innovar, hiring becomes effortless. Embrace the future of recruitment today our features and take your business to new heights.</p>
                            </div>
                            <div class="panel">
                                <div class="grid g-child-rows-12 gap-1 sm:gap-2 lg:gap-3 xl:gap-4">
                                    <div class="g-row-span-5 g-col-span-2 g-row-start-4 g-col-start-1 d-none sm:d-block">
                                        <div class="panel h-100">
                                            <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">
                                                <img class="media-cover image rounded-default" src="../assets/images/inner-pages/inner-about/img-02.jpg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-row-span-6 sm:g-row-span-5 g-col-span-3 sm:g-col-span-2 g-row-start-0 sm:g-row-start-2 g-col-start-0 sm:g-col-start-3">
                                        <div class="panel h-100">
                                            <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">
                                                <img class="media-cover image rounded-default" src="../assets/images/inner-pages/inner-about/img-03.jpg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-row-span-6 sm:g-row-span-5 g-col-span-3 sm:g-col-span-2 g-row-start-7 sm:g-row-start-7 g-col-start-0 sm:g-col-start-3">
                                        <div class="panel h-100">
                                            <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">
                                                <img class="media-cover image rounded-default" src="../assets/images/inner-pages/inner-about/img-04.jpg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-row-span-12 g-col-span-6 sm:g-col-span-4 g-col-start-4 sm:g-col-start-5">
                                        <div class="panel">
                                            <div class="ratio ratio-3x4 rounded rounded-1 lg:rounded overflow-hidden">
                                                <img class="media-cover image rounded-default" src="../assets/images/inner-pages/inner-about/img-01.jpg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-row-span-6 sm:g-row-span-5 g-col-span-3 sm:g-col-span-2 g-row-start-0 sm:g-row-start-2 g-col-start-10 sm:g-col-start-9">
                                        <div class="panel h-100">
                                            <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">
                                                <img class="media-cover image rounded-default" src="../assets/images/inner-pages/inner-about/img-05.jpg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-row-span-6 sm:g-row-span-5 g-col-span-3 sm:g-col-span-2 g-row-start-7 sm:g-row-start-7 g-col-start-10 sm:g-col-start-9">
                                        <div class="panel h-100">
                                            <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">
                                                <img class="media-cover image rounded-default" src="../assets/images/inner-pages/inner-about/img-06.jpg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-row-span-5 g-col-span-2 g-row-start-4 g-col-start-11 d-none sm:d-block">
                                        <div class="panel h-100">
                                            <div class="ratio ratio-1x1 rounded rounded-1 lg:rounded overflow-hidden h-100">
                                                <img class="media-cover image rounded-default" src="../assets/images/inner-pages/inner-about/img-07.jpg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hero end-->

                <!-- Section start -->
                <div class="section panel overflow-hidden text-white mb-7 md:mb-9 xl:mb-10" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 100;">
                    <div class="section-outer panel py-5 xl:py-8 bg-primary" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 100;">
                        <div class="container max-w-xl">
                            <div class="section-inner panel">
                                <div class="row child-cols-12 lg:child-cols items-center g-4 sm:g-6 xl:g-0 text-center lg:text-start">
                                    <div class="lg:col-5">
                                        <div class="panel">
                                            <h3 class="h4 xl:h3 m-0 text-inherit">
                                                Trusted by more than 500,00+ <br class="d-none sm:d-block">
                                                people across the globe
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="panel sm:mx-6 lg:m-0">
                                            <div class="row child-cols-auto sm:child-cols-3 justify-center gy-4 gx-6 sm:g-6 xl:g-8">
                                                <div>
                                                    <div class="brand-item text-center">
                                                        <img class="brand-item-image w-100px sm:w-auto h-40px" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-01.svg" alt="Shopify" data-uc-svg>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="brand-item text-center">
                                                        <img class="brand-item-image w-100px sm:w-auto h-40px" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-02.svg" alt="Netflix" data-uc-svg>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="brand-item text-center">
                                                        <img class="brand-item-image w-100px sm:w-auto h-40px" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-03.svg" alt="Huawei" data-uc-svg>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="brand-item text-center">
                                                        <img class="brand-item-image w-100px sm:w-auto h-40px" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-04.svg" alt="Lexus" data-uc-svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section End -->

                <!-- Section start-->
                <div class="uni-about section panel overflow-hidden">
                    <div class="section-outer panel">
                        <div class="container max-w-xl">
                            <div class="section-inner panel vstack gap-4 sm:gap-6 xl:gap-9">
                                <div class="section-header panel hstack justify-between items-end">
                                    <div class="vstack items-center sm:items-start text-center sm:text-start gap-2 xl:gap-3" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                        <div class="fs-6 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25"><span>About us</span></div>
                                        <h3 class="title h3 sm:h2 xl:display-6 m-0">Business made <br class="d-none sm:d-block">easy with innovar</h3>
                                    </div>
                                </div>
                                <div class="section-content panel" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                    <div class="row child-cols-12 g-4 xl:g-6 col-match">
                                        <div class="sm:col-2">
                                            <div class="switcher-box panel">
                                                <ul class="main-nav hstack sm:vstack sm:justify-between items-start gap-2 h-100 p-0 overflow-auto" data-uc-switcher="connect: .main-switcher; animation: uc-animation-fade;" style="list-style: none">
                                                    <li><a class="btn btn-sm sm:btn-md xl:btn-lg btn-primary-25 fs-5 sm:fs-4 xl:fs-3" href="#" data-uc-cursor="md bg-white opacity-10">2018</a></li>
                                                    <li><a class="btn btn-sm sm:btn-md xl:btn-lg btn-primary-25 fs-5 sm:fs-4 xl:fs-3" href="#" data-uc-cursor="md bg-white opacity-10">2019</a></li>
                                                    <li><a class="btn btn-sm sm:btn-md xl:btn-lg btn-primary-25 fs-5 sm:fs-4 xl:fs-3" href="#" data-uc-cursor="md bg-white opacity-10">2020</a></li>
                                                    <li><a class="btn btn-sm sm:btn-md xl:btn-lg btn-primary-25 fs-5 sm:fs-4 xl:fs-3" href="#" data-uc-cursor="md bg-white opacity-10">2021</a></li>
                                                    <li><a class="btn btn-sm sm:btn-md xl:btn-lg btn-primary-25 fs-5 sm:fs-4 xl:fs-3" href="#" data-uc-cursor="md bg-white opacity-10">2022</a></li>
                                                    <li><a class="btn btn-sm sm:btn-md xl:btn-lg btn-primary-25 fs-5 sm:fs-4 xl:fs-3" href="#" data-uc-cursor="md bg-white opacity-10">2023</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="sm:col-10">
                                            <div class="main-switcher uc-switcher panel">
                                                <article class="switcher-item panel">
                                                    <div class="row child-cols-12 items-center g-3 sm:g-4 lg:g-5 xl:g-6">
                                                        <div class="sm:col-6 xl:col-5">
                                                            <div class="ratio ratio-16x9 rounded rounded lg:rounded-2 overflow-hidden h-450px xl:h-500px">
                                                                <img class="media-cover image rounded-default" src="../assets/images/about/01.jpg" alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col">
                                                            <div class="panel overflow-hidden">
                                                                <div class="row child-cols-12 gy-5 sm:gy-4 xl:gy-4 sep-x" data-uc-grid>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Inception and launch</h3>
                                                                            <p class="fs-5 lg:fs-4">Innovar was officially conceptualized and developed as a modern and versatile marketing consultancy..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Growing User Base</h3>
                                                                            <p class="fs-5 lg:fs-4">Innovar saw significant traction in its first year, with thousands of clients reaching out..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Enhanced Features</h3>
                                                                            <p class="fs-5 lg:fs-4">By 2020, Variuemhad established itself as a popular choice for B2B and B2C businesses..</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="switcher-item panel">
                                                    <div class="row child-cols-12 items-center g-3 sm:g-4 lg:g-5 xl:g-6">
                                                        <div class="sm:col-6 xl:col-5">
                                                            <div class="ratio ratio-16x9 rounded rounded lg:rounded-2 overflow-hidden h-450px xl:h-500px">
                                                                <img class="media-cover image rounded-default" src="../assets/images/about/02.jpg" alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col">
                                                            <div class="panel overflow-hidden">
                                                                <div class="row child-cols-12 gy-5 sm:gy-4 xl:gy-4 sep-x" data-uc-grid>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Concept and Vision</h3>
                                                                            <p class="fs-5 lg:fs-4">The idea for Innovar was born, aiming to create a versatile marketing consultancy..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Team Formation</h3>
                                                                            <p class="fs-5 lg:fs-4">Conducted market research to identify gaps and opportunities in the industry..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Enhanced Features</h3>
                                                                            <p class="fs-5 lg:fs-4">Brought together a team of experts to lay the foundation for Innovar..</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="switcher-item panel">
                                                    <div class="row child-cols-12 items-center g-3 sm:g-4 lg:g-5 xl:g-6">
                                                        <div class="sm:col-6 xl:col-5">
                                                            <div class="ratio ratio-16x9 rounded rounded lg:rounded-2 overflow-hidden h-450px xl:h-500px">
                                                                <img class="media-cover image rounded-default" src="../assets/images/about/03.jpg" alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col">
                                                            <div class="panel overflow-hidden">
                                                                <div class="row child-cols-12 gy-5 sm:gy-4 xl:gy-4 sep-x" data-uc-grid>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Inception and launch</h3>
                                                                            <p class="fs-5 lg:fs-4">Innovar was officially conceptualized and developed as a modern and versatile marketing consultancy..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Growing User Base</h3>
                                                                            <p class="fs-5 lg:fs-4">Innovar saw significant traction in its first year, with thousands of clients reaching out..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Enhanced Features</h3>
                                                                            <p class="fs-5 lg:fs-4">By 2020, Variuemhad established itself as a popular choice for B2B and B2C businesses..</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="switcher-item panel">
                                                    <div class="row child-cols-12 items-center g-3 sm:g-4 lg:g-5 xl:g-6">
                                                        <div class="sm:col-6 xl:col-5">
                                                            <div class="ratio ratio-16x9 rounded rounded lg:rounded-2 overflow-hidden h-450px xl:h-500px">
                                                                <img class="media-cover image rounded-default" src="../assets/images/about/04.jpg" alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col">
                                                            <div class="panel overflow-hidden">
                                                                <div class="row child-cols-12 gy-5 sm:gy-4 xl:gy-4 sep-x" data-uc-grid>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Concept and Vision</h3>
                                                                            <p class="fs-5 lg:fs-4">The idea for Innovar was born, aiming to create a versatile marketing consultancy..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Team Formation</h3>
                                                                            <p class="fs-5 lg:fs-4">Conducted market research to identify gaps and opportunities in the industry..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Enhanced Features</h3>
                                                                            <p class="fs-5 lg:fs-4">Brought together a team of experts to lay the foundation for Innovar..</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="switcher-item panel">
                                                    <div class="row child-cols-12 items-center g-3 sm:g-4 lg:g-5 xl:g-6">
                                                        <div class="sm:col-6 xl:col-5">
                                                            <div class="ratio ratio-16x9 rounded rounded lg:rounded-2 overflow-hidden h-450px xl:h-500px">
                                                                <img class="media-cover image rounded-default" src="../assets/images/about/05.jpg" alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col">
                                                            <div class="panel overflow-hidden">
                                                                <div class="row child-cols-12 gy-5 sm:gy-4 xl:gy-4 sep-x" data-uc-grid>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Inception and launch</h3>
                                                                            <p class="fs-5 lg:fs-4">Innovar was officially conceptualized and developed as a modern and versatile marketing consultancy..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Growing User Base</h3>
                                                                            <p class="fs-5 lg:fs-4">Innovar saw significant traction in its first year, with thousands of clients reaching out..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Enhanced Features</h3>
                                                                            <p class="fs-5 lg:fs-4">By 2020, Variuemhad established itself as a popular choice for B2B and B2C businesses..</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="switcher-item panel">
                                                    <div class="row child-cols-12 items-center g-3 sm:g-4 lg:g-5 xl:g-6">
                                                        <div class="sm:col-6 xl:col-5">
                                                            <div class="ratio ratio-16x9 rounded rounded lg:rounded-2 overflow-hidden h-450px xl:h-500px">
                                                                <img class="media-cover image rounded-default" src="../assets/images/about/06.jpg" alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col">
                                                            <div class="panel overflow-hidden">
                                                                <div class="row child-cols-12 gy-5 sm:gy-4 xl:gy-4 sep-x" data-uc-grid>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Concept and Vision</h3>
                                                                            <p class="fs-5 lg:fs-4">The idea for Innovar was born, aiming to create a versatile marketing consultancy..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Team Formation</h3>
                                                                            <p class="fs-5 lg:fs-4">Conducted market research to identify gaps and opportunities in the industry..</p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="panel vstack gap-2 text-start">
                                                                            <h3 class="h4 xl:h3 m-0">Enhanced Features</h3>
                                                                            <p class="fs-5 lg:fs-4">Brought together a team of experts to lay the foundation for Innovar..</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section end-->

                <!-- Section start-->
                <div class="uni-features section panel overflow-hidden py-8 md:py-9 xl:py-10">
                    <div class="section-outer panel">
                        <div class="container max-w-xl">
                            <div class="section-inner panel vstack gap-5 sm:gap-6 lg:gap-8 xl:gap-9">
                                <header>
                                    <div class="panel text-center vstack gap-2 items-center" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                        <div class="fs-5 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25 w-fit"><span>Features & benifits</span></div>
                                        <h1 class="title h3 sm:h2 xl:display-6 m-0">
                                            Spotlight features captivate <br class="d-none md:d-block">
                                            audiences
                                        </h1>
                                    </div>
                                </header>
                                <div class="panel">
                                    <div class="row child-cols-12 md:child-cols-6 xl:child-cols-4 g-4 col-match" data-anime="onview: -100; targets: >*; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                        <div class="panel">
                                            <div class="panel bg-gray-25 p-3 md:p-4 xl:p-5 vstack gap-4 rounded">
                                                <span><i class="icon-4 ms-1 unicon-event-schedule text-primary"></i></span>
                                                <div class="panel vstack gap-2">
                                                    <h2 class="h3 sm:h2 m-0">Solid Planing</h2>
                                                    <p class="fs-3">Get free access to our global partner network and marketplace to receive premium assistance.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel bg-gray-25 p-3 md:p-4 xl:p-5 vstack gap-4 rounded">
                                                <span><i class="icon-4 ms-1 unicon-container-software text-primary"></i></span>
                                                <div class="panel vstack gap-2">
                                                    <h2 class="h3 sm:h2 m-0">Software Services</h2>
                                                    <p class="fs-3">Keep your strategic goals and planning in one place to improve employee engagement.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel bg-gray-25 p-3 md:p-4 xl:p-5 vstack gap-4 rounded">
                                                <span><i class="icon-4 ms-1 unicon-security text-primary"></i></span>
                                                <div class="panel vstack gap-2">
                                                    <h2 class="h3 sm:h2 m-0">Data Protection</h2>
                                                    <p class="fs-3">Define each stage of work to see what’s important and where things are getting stuck.</p>
                                                </div>
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
                <div id="about-team" class="about-team section panel overflow-hidden">
                    <div class="section-outer panel">
                        <div class="container max-w-xl">
                            <div class="section-inner panel">
                                <div class="panel vstack justify-center items-center gap-4 sm:gap-6 xl:gap-8">
                                    <header>
                                        <div class="panel text-center vstack gap-2 items-center" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                            <div class="fs-5 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25 w-fit"><span>Team</span></div>
                                            <h1 class="title h3 sm:h2 xl:display-6 m-0">
                                                Team Innovar: behind <br class="d-none md:d-block">
                                                the great work audiences
                                            </h1>
                                        </div>
                                    </header>
                                    <div class="row sm:child-cols-6 lg:child-cols-4 g-4 col-match" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                        <div>
                                            <div class="panel p-3 xl:p-4 bg-gray-25 rounded">
                                                <div class="panel vstack gap-3 items-center text-center">
                                                    <img class="w-100 rounded" src="../assets/images/team/member-01.jpg" alt="John Carter">
                                                    <div class="panel vsatck gap-2">
                                                        <h4 class="h3 m-0"><a href="#" class="text-none" data-uc-cursor="md bg-white opacity-10">John Carter</a></h4>
                                                        <span class="fs-4">CEO & Founder</span>
                                                    </div>
                                                    <div class="panel hstack gap-2 justify-center">
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-facebook"></i></a>
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-instagram"></i></a>
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-linkedin"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="panel p-3 xl:p-4 bg-gray-25 rounded">
                                                <div class="panel vstack gap-3 items-center text-center">
                                                    <img class="w-100 rounded" src="../assets/images/team/member-02.jpg" alt="Rice Smith">
                                                    <div class="panel vsatck gap-2">
                                                        <h4 class="h3 m-0"><a href="#" class="text-none" data-uc-cursor="md bg-white opacity-10">Rice Smith</a></h4>
                                                        <span class="fs-4">Financial Manager</span>
                                                    </div>
                                                    <div class="panel hstack gap-2 justify-center">
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-facebook"></i></a>
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-instagram"></i></a>
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-linkedin"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="panel p-3 xl:p-4 bg-gray-25 rounded">
                                                <div class="panel vstack gap-3 items-center text-center">
                                                    <img class="w-100 rounded" src="../assets/images/team/member-03.jpg" alt="Olson James">
                                                    <div class="panel vsatck gap-2">
                                                        <h4 class="h3 m-0"><a href="#" class="text-none" data-uc-cursor="md bg-white opacity-10">Olson James</a></h4>
                                                        <span class="fs-4">Web Developer</span>
                                                    </div>
                                                    <div class="panel hstack gap-2 justify-center">
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-facebook"></i></a>
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-instagram"></i></a>
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-linkedin"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="panel p-3 xl:p-4 bg-gray-25 rounded">
                                                <div class="panel vstack gap-3 items-center text-center">
                                                    <img class="w-100 rounded" src="../assets/images/team/member-04.jpg" alt="Jordan Grant">
                                                    <div class="panel vsatck gap-2">
                                                        <h4 class="h3 m-0"><a href="#" class="text-none" data-uc-cursor="md bg-white opacity-10">Jordan Grant</a></h4>
                                                        <span class="fs-4">UI/UX Designer</span>
                                                    </div>
                                                    <div class="panel hstack gap-2 justify-center">
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-facebook"></i></a>
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-instagram"></i></a>
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-linkedin"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="panel p-3 xl:p-4 bg-gray-25 rounded">
                                                <div class="panel vstack gap-3 items-center text-center">
                                                    <img class="w-100 rounded" src="../assets/images/team/member-05.jpg" alt="Sam Bronson">
                                                    <div class="panel vsatck gap-2">
                                                        <h4 class="h3 m-0"><a href="#" class="text-none" data-uc-cursor="md bg-white opacity-10">Sam Bronson</a></h4>
                                                        <span class="fs-4">Sales Manager</span>
                                                    </div>
                                                    <div class="panel hstack gap-2 justify-center">
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-facebook"></i></a>
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-instagram"></i></a>
                                                        <a href="#" class="btn w-48px h-48px btn-primary rounded-circle text-center" data-uc-cursor="md bg-white opacity-10"><i class="icon-1 unicon-logo-linkedin"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="panel p-3 xl:p-4 bg-gray-25 rounded">
                                                <div class="panel vstack gap-3 justify-center items-center text-center h-100">
                                                    <div class="panel w-80px h-80px bg-primary rounded cstack">
                                                        <span><i class="icon-4 unicon-download-study text-white"></i></span>
                                                    </div>
                                                    <h3 class="h3 m-0">
                                                        Come and join our <br class="d-none xl:d-block">
                                                        amazing team
                                                    </h3>
                                                    <p class="fs-4">Our office is more than just a physical location; it's the  place where ideas turn into reality.</p>
                                                    <a class="fs-5 xl:fs-4 btn btn-sm xl:btn-md btn-primary text-none mb-1 w-fit" href="sign-up.html" data-uc-cursor="md bg-white opacity-10">Join with us <i class="icon sm:icon-1 ms-1 unicon-arrow-up-right"></i></a>
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
                <div class="uni-brands section panel overflow-hidden py-8 md:py-9 xl:py-10">
                    <div class="section-outer panel" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                        <div class="container max-w-xl">
                            <div class="section-inner panel vstack gap-5 sm:gap-6 lg:gap-8 xl:gap-9" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
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
                        <div class="panel bg-primary mt-7 py-8 xl:mt-8">
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

                <!-- Section start-->
                <div class="uni-blog section panel overflow-hidden">
                    <div class="section-outer panel">
                        <div class="container max-w-xl">
                            <div class="section-inner panel vstack gap-5 sm:gap-6 lg:gap-8 xl:gap-9" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                <header>
                                    <div class="panel vstack gap-2">
                                        <div class="fs-5 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25 w-fit"><span>Articles</span></div>
                                        <h1 class="title h3 sm:h2 xl:display-6 m-0">
                                            Uncover the Latest Industry <br class="d-none md:d-block">
                                            Insights and Articles
                                        </h1>
                                    </div>
                                </header>
                                <div class="panel">
                                    <div class="row child-cols-12 sm:child-cols-4 g-3 xl:g-4" data-anime="onview: -100; targets: >*; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                        <div>
                                            <div class="post-item vstack gap-3 xl:gap-5">
                                                <div class="post-item-image panel">
                                                    <div class="ratio ratio-3x2 rounded rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/blog/blog-01.jpg" alt="Agency launches experts media expert workshops">
                                                    </div>
                                                    <a class="position-cover" data-uc-cursor="md bg-white opacity-10" href="blog-detail.html"></a>
                                                </div>
                                                <div class="post-item-content vstack items-start gap-2 lg:gap-3">
                                                    <h3 class="h4 lg:h3 m-0" data-uc-cursor="md bg-white opacity-10"><a class="text-none" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10">Agency launches experts media expert workshops</a></h3>
                                                    <p class="fs-4 lg:fs-3">We believe in the synergy of human expertise and innovative technology.</p>
                                                    <a class="btn btn-text fs-5 xl:fs-4 text-primary border-bottom gap-1 xl:gap-2 mt-1" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10">
                                                        <span>Read More</span>
                                                        <i class="icon unicon-arrow-up-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="post-item vstack gap-3 xl:gap-5">
                                                <div class="post-item-image panel">
                                                    <div class="ratio ratio-3x2 rounded rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/blog/blog-02.jpg" alt="10 Proven strategies for marketing success">
                                                    </div>
                                                    <a class="position-cover" data-uc-cursor="md bg-white opacity-10" href="blog-detail.html"></a>
                                                </div>
                                                <div class="post-item-content vstack items-start gap-2 lg:gap-3">
                                                    <h3 class="h4 lg:h3 m-0" data-uc-cursor="md bg-white opacity-10"><a class="text-none" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10">10 Proven strategies for marketing success</a></h3>
                                                    <p class="fs-4 lg:fs-3">We believe in the synergy of human expertise and innovative technology.</p>
                                                    <a class="btn btn-text fs-5 xl:fs-4 text-primary border-bottom gap-1 xl:gap-2 mt-1" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10">
                                                        <span>Read More</span>
                                                        <i class="icon unicon-arrow-up-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="post-item vstack gap-3 xl:gap-5">
                                                <div class="post-item-image panel">
                                                    <div class="ratio ratio-3x2 rounded rounded uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/blog/blog-03.jpg" alt="How to effectively conduct market research">
                                                    </div>
                                                    <a class="position-cover" data-uc-cursor="md bg-white opacity-10" href="blog-detail.html"></a>
                                                </div>
                                                <div class="post-item-content vstack items-start gap-2 lg:gap-3">
                                                    <h3 class="h4 lg:h3 m-0" data-uc-cursor="md bg-white opacity-10"><a class="text-none" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10">How to effectively conduct market research</a></h3>
                                                    <p class="fs-4 lg:fs-3">We believe in the synergy of human expertise and innovative technology.</p>
                                                    <a class="btn btn-text fs-5 xl:fs-4 text-primary border-bottom gap-1 xl:gap-2 mt-1" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10">
                                                        <span>Read More</span>
                                                        <i class="icon unicon-arrow-up-right"></i>
                                                    </a>
                                                </div>
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
                <div id="uni_faq" class="uni-faq section panel overflow-hidden py-8 md:py-9 xl:py-10">
                    <div class="section-outer panel">
                        <div class="container max-w-xl">
                            <div class="section-inner panel">
                                <div class="panel">
                                    <div class="row xl:child-cols-6 g-4 col-match" data-anime="onview: -100; targets: >*; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                        <div class="panel">
                                            <header>
                                                <div class="vstack justify-between h-100">
                                                    <div class="panel vstack gap-2">
                                                        <div class="fs-5 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25 w-fit"><span>Help Center</span></div>
                                                        <h1 class="title h3 sm:h2 xl:display-6 m-0">
                                                            Frequenlty asked <br class="d-none md:d-block">
                                                            questions
                                                        </h1>
                                                    </div>
                                                    <a class="fs-5 xl:fs-4 btn btn-sm xl:btn-md btn-primary text-none w-fit mt-4" href="page-faq.html" data-uc-cursor="md bg-white opacity-10">Learn more <i class="icon-1 ms-1 unicon-arrow-right"></i></a>
                                                </div>
                                            </header>
                                        </div>
                                        <div class="panel">
                                            <ul class="gap-4" data-uc-accordion="targets: > li;">
                                                <li class="panel p-3 lg:p-4 rounded bg-gray-25">
                                                    <h3 class="uc-accordion-title h5 sm:h4 m-0 fw-bold" data-uc-cursor="md bg-white opacity-10">1. What is business consulting ?</h3>
                                                    <div class="uc-accordion-content">
                                                        <p>Yes, you need to have a fair amount of knowledge in dealing with HTML/CSS as well as JavaScript in order to be able to use Varium.</p>
                                                    </div>
                                                </li>
                                                <li class="panel p-3 lg:p-4 rounded bg-gray-25">
                                                    <h3 class="uc-accordion-title h5 sm:h4 m-0 fw-bold" data-uc-cursor="md bg-white opacity-10">2. Why wouldn’t I just hire my own animator ?</h3>
                                                    <div class="uc-accordion-content">
                                                        <p>Feel free to do so. Kloomix does exist to evolve every commercial project. You can also use it to build stunning websites for your own clients (we won’t breathe a word).</p>
                                                    </div>
                                                </li>
                                                <li class="panel p-3 lg:p-4 rounded bg-gray-25">
                                                    <h3 class="uc-accordion-title h5 sm:h4 m-0 fw-bold" data-uc-cursor="md bg-white opacity-10">3. How Does variuem Ensure Data Privacy ?</h3>
                                                    <div class="uc-accordion-content">
                                                        <p>Definitely! Please use it however you like; we don’t limit it.</p>
                                                    </div>
                                                </li>
                                                <li class="panel p-3 lg:p-4 rounded bg-gray-25">
                                                    <h3 class="uc-accordion-title h5 sm:h4 m-0 fw-bold" data-uc-cursor="md bg-white opacity-10">4. Can I use this to create and sell a product ?</h3>
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