@extends('frontend.layout.app')
@section('title' ,'index')




<style>
/* row flexbox না দিলে ও ঠিক হবে, শুধু card height fix করতে হবে */
.section-content .services-item {
    display: flex;
    flex-direction: column;
    /* এখানে min-height দিতে পারো, যা সব card-এর height নির্ধারণ করবে */
    min-height: 350px; /* প্রয়োজনমতো adjust করো */
}

/* icon + title + description wrapper */
.section-content .services-item > .vstack {
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* সব card content same top alignment */
    height: 100%;
}

/* description niche নামবে না */
.services-item .desc {
    margin-top: 0; /* কোনো auto margin নেই */
}
.services-item {
    display: flex;           /* CHANGE: make card flex column */
    flex-direction: column;  /* CHANGE: vertical layout */
    height: 100%;            /* CHANGE: all cards same height */
}

.services-item .vstack {
    flex-grow: 0;            /* CHANGE: content top aligned, description niche fixed */
}


@keyframes scroll-left {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-200%);
    }
}

/* Brand slider wrapper overflow hidden & relative */
.brand-slider-wrapper {
    overflow: hidden;
    position: relative;
}

/* Brand slider flex & animation */
.brand-slider {
    display: flex;
    gap: 2rem;
    animation: scroll-left 20s linear infinite;
}

/* Optional: adjust image size */
.brand-slider img {
    height: 48px;
    flex-shrink: 0;
}


.card-item {
  background: rgba(255, 255, 255, 0.9);
  border-radius: 16px;
  padding: 30px; /* padding boro kora holo */
  text-align: center;
  font-weight: 600;
  font-size: 1.1rem; /* slightly boro font */
  color: #333;
  box-shadow: 0 6px 16px rgba(0,0,0,0.12);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  min-height: 220px; /* height boro kora holo */
}

.card-item:hover {
  transform: translateY(-1px) scale(1.05);
  box-shadow: 0 12px 28px rgba(0,0,0,0.18);
}

.floating-cards {
  width: 100%;
  max-width: 480px;
  margin: 0 auto;
  animation: floatUpDown 6s ease-in-out infinite;
}

/* Floating animations */
@keyframes floatRight {
  0%, 100% { transform: translateY(0) translateX(0); }
  50% { transform: translateY(10px) translateX(8px); }
}

@keyframes floatLeft {
  0%, 100% { transform: translateY(0) translateX(0); }
  50% { transform: translateY(10px) translateX(-8px); }
}

/* Assign animation */
.float-right {
  animation: floatRight 5s ease-in-out infinite;
}

.float-left {
  animation: floatLeft 5s ease-in-out infinite;
}

/* Mobile adjustments */
@media (max-width: 768px) {
  .hero-bg {
    height: auto !important;
    padding: 60px 15px;
  }
  .card-item {
    font-size: 0.9rem;
    padding: 15px;
  }
}

/* Default (mobile/tablet) height - already controlled by padding */
.hero-bg {
  min-height: auto; /* mobile e normal padding diye thakbe */
}

/* Laptop screen (768px - 1366px) height fix */
@media (min-width: 768px) and (max-width: 1366px) {
  .hero-bg {
    min-height: 750px; /* laptop e ektu chhoto height */
    display: flex;
    align-items: center; /* vertically center */
    padding: 100px 20px; /* padding komano holo */
  }
  .hero-bg .section-inner {
    /* row vertical align thakbe */
  }
}

/* Large screen (desktop) height fix */
@media (min-width: 992px) {
  .hero-bg {
    min-height: 880px; /* boro screen e minimum 900px hobe */
    display: flex;
    align-items: center; /* vertically content center hobe */
 padding: 200px 35px;
  }
    .hero-bg .section-inner {
       /* row vertical align */
  }
}


.background-overlay {
background: rgba(255, 248, 248, 0.95);


}



</style>


@section('content')
        
        <!-- Wrapper start -->
        <div id="wrapper" class="wrap ">

        <!-- Hero start -->
<div id="hero_header" class="hero-header section panel overflow-hidden">
   @if($sliders)
<div class="section-outer panel hero-bg"
     style="background-image: url('{{ asset('storage/' . $sliders->slider_image) }}'); 
            background-size: cover; background-position: center; background-repeat: no-repeat;">
@endif

        <div class="section-inner panel container">
            <div class="row align-items-center g-4 py-5">

                <!-- Left content -->
                <div class="col-12 col-lg-6 text-center text-lg-start">
                    <div class="panel vstack items-center lg:items-start gap-3">
                        <span class="fs-5 text-red">Expert Insights</span>
                        <h1 class="title h3 sm:h2 lg:h1 text-white">
                            Empowering <br class="d-none d-lg-block">
                           Creative IT Strategies for Lasting Success
                        </h1>
                        <p class="desc fs-6 sm:fs-5 text-white">
                            Discover our team for seamless collaboration – meet the minds driving innovation and success.
                        </p>
                        <a class="btn btn-md btn-primary fs-6 sm:fs-5 sm:px-4" href="#">
                            <span>Get Started</span>
                        </a>
                    </div>
                </div>

                <!-- ✅ Right side cards -->
                <div class="col-12 col-lg-6">
                    <div class="floating-cards">
                        <div class="row g-3">
                            <!-- Top two cards (float right) -->
                            <div class="col-6 col-sm-6 float-right">
                                <div class="card-item h-100">
                                    <h3><i class="icon-2 xl:icon-3 unicon-container-software text-secondary"></i></h3>
                                    <p>850+ People Pre-vetted & Ready</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 float-right">
                                <div class="card-item h-100">
                                    <h3><i class="icon-2 xl:icon-3 unicon-event-schedule text-secondary"></i></h3>
                                    <p>6+ Years Of Experience</p>
                                </div>
                            </div>

                            <!-- Bottom two cards (float left) -->
                            <div class="col-6 col-sm-6 float-left">
                                <div class="card-item h-100">
                                    <h3><i class="icon-2 xl:icon-3 unicon-security text-secondary"></i></h3>
                                    <p>88%+ Retention Employee Success Rate</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 float-left">
                                <div class="card-item h-100">
                                    <h3><i class="icon-2 xl:icon-3 unicon-event-schedule text-secondary"></i></h3>
                                    <p>Fortune 100 Trusted Partner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- row -->
        </div>
    </div>
</div>
<!-- Hero End -->

            <!-- Section start -->
          <div id="uni_features" class="features section panel overflow-hidden pt-4 sm:pt-6 xl:pt-8">
                <div class="section-outer panel">
                    <div class="container max-w-xl">
                        <div class="section-inner panel">
                            <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 justify-center g-4" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 700});">
                                <div>
                                    <div class="feature-item vstack gap-2 xl:gap-3 items-center text-center">
                                        <div class="icon-box cstack w-56px h-56px xl:w-64px xl:h-64px rounded-circle bg-primary">
                                            <i class="icon-2 xl:icon-3 unicon-event-schedule text-secondary"></i>
                                        </div>
                                        <div class="feature-content vstack gap-1 xl:gap-2">
                                            <h2 class="title h4 xl:h3 m-0">Solid Planing</h2>
                                            <p class="desc fs-6 xl:fs-4">Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="feature-item vstack gap-2 xl:gap-3 items-center text-center">
                                        <div class="icon-box cstack w-56px h-56px xl:w-64px xl:h-64px rounded-circle bg-primary">
                                            <i class="icon-2 xl:icon-3 unicon-container-software text-secondary"></i>
                                        </div>
                                        <div class="feature-content vstack gap-1 xl:gap-2">
                                            <h2 class="title h4 xl:h3 m-0">Software Services</h2>
                                            <p class="desc fs-6 xl:fs-4">An all-in-one customer service platform that helps you balance everything your customers need to be happy.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="feature-item vstack gap-2 xl:gap-3 items-center text-center">
                                        <div class="icon-box cstack w-56px h-56px xl:w-64px xl:h-64px rounded-circle bg-primary">
                                            <i class="icon-2 xl:icon-3 unicon-security text-secondary"></i>
                                        </div>
                                        <div class="feature-content vstack gap-1 xl:gap-2">
                                            <h2 class="title h4 xl:h3 m-0">Data Protection</h2>
                                            <p class="desc fs-6 xl:fs-4">Measure what matters with Untitled’s easy-to-use reports. You can filter, export, and drilldown on the data in a couple clicks.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Section start -->
            <div id="uni_about" class=" about container section panel overflow-hidden py-4 sm:py-6 xl:py-10  " >
                <div class="section-outer panel">
                    <div class="container max-w-2xl">
                        <div class="section-inner panel vstack gap-4 sm:gap-6 xl:gap-9">
                            <div class="section-header panel vstack items-center sm:items-start text-center sm:text-start m-auto sm:m-0 gap-2 xl:gap-3" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                <div class="fs-6 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25 border border-red-500"><span>About us</span></div>
                                <h2 class="title h3 sm:h2 xl:display-6 m-0">
                                  Your Gateway to Digital <br class="d-none sm:d-block">Transformation
                                </h2>
                            </div>
                            <div class="section-content panel text-center">
                                <div class="row child-cols-12 lg:child-cols-6 items-center g-4 sm:g-6" data-anime="onview: -100; targets: >*; translateX: [32, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 700});">
                                    <div class="order-2 lg:order-1">
                                        <div class="about-contnet panel">
                                            <div class="about-item text-gray">
                                                <h3>
                                                     Founded in 2019, we are a Reputed software company powering digital transformation across industries.
                                    Consultation Solutions
                                                </h3>
                                            </div>
                                            <div class="row child-cols-6 g-3 sm:gx-4 sm:gy-6 xl:gy-8">
                                                <div>
                                                    <article class="about-item vstack items-center gap-narrow xl:gap-1">
                                                       <h1 class="number" >
                                                            100<span style="color:#ff0011;"> +</span>
                                                        </h1>

                                                        <h5 class="title h6 xl:h5 m-0">Projects completed</h5>
                                                        <p class="desc fs-6 xl:fs-5 opacity-70">We’ve helped build over 150 amazing projects.</p>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article class="about-item vstack items-center gap-narrow xl:gap-1">
                                                        <h1 class="number">98<span style="color:#ff0011;">%</span></h1>
                                                        <h5 class="title h6 xl:h5 m-0">5-star reviews</h5>
                                                        <p class="desc fs-6 xl:fs-5 opacity-70">We’re proud of our 5-star rating with over 200 reviews.</p>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article class="about-item vstack items-center gap-narrow xl:gap-1">
                                                        <h1 class="number " >1K <span style="color:#ff0011;">+</span></h1>
                                                        <h5 class="title h6 xl:h5 m-0">Active business</h5>
                                                        <p class="desc fs-6 xl:fs-5 opacity-70">Our free unicore has been downloaded over 10k times.</p>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article class="about-item vstack items-center gap-narrow xl:gap-1">
                                                        <h1 class="number"><span style="color:#ff0011;">$</span> 16K</h1>
                                                        <h5 class="title h6 xl:h5 m-0">Return on investment</h5>
                                                        <p class="desc fs-6 xl:fs-5 opacity-70">Our customers have reported an average of ~600% ROI.</p>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-1 lg:order-2">
                                        <div class="about-image panel">
                                            <div class="ratio ratio-3x2 rounded lg:h-400px xl:h-500px rounded uc-transition-toggle overflow-hidden">
                                                <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/about/09.jpg" alt="image">
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
            <div class="container" style="margin-top:60px;"><h3>Our Valueable Clients</h3></div>
           <div id="uni_brands" class="brands container section panel overflow-hidden" style=" 
               background-size: cover; background-position: center; background-repeat: no-repeat;padding:4rem 0; ">
                <div class="container max-w-2xl">
                    <div class="brand-slider-wrapper" style="overflow:hidden; position:relative;">
                        <div class="brand-slider" style="
                            display:flex; 
                            gap:2rem; 
                            animation: scroll-left 20s linear infinite;
                        ">
                            <img src="{{asset('assets1/images/clients/A.kader-logo.jpg')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/AIMS.jpg')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/Anowar_Medical_Hall.jpg')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/Anwar cng filling station.png')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/Aponbhubon.png')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/arnab_it.png')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/Asian Pharmacy.jpg')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/asset_logo.png')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/Bikrampur potato Flakes.jpg')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/care_first_meds.png')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/A.kader-logo.jpg')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/A.kader-logo.jpg')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/A.kader-logo.jpg')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/A.kader-logo.jpg')}}" alt="" style="height:120px;">
                            <img src="{{asset('assets1/images/clients/A.kader-logo.jpg')}}" alt="" style="height:120px;">
                           
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section start -->
            <div id="uni_services" class="services section panel overflow-hidden py-4 sm:py-6 xl:py-10 ">
                <div class="section-outer panel">
                    <div class="container max-w-2xl">
                        <div class="section-inner panel vstack gap-4 sm:gap-6 xl:gap-9">
                            <div class="d-flex">
                                <div class="section-header panel vstack items-center sm:items-start text-center sm:text-start m-auto sm:m-0 gap-2 xl:gap-3" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                    <div class="fs-6 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25"><span>Services</span></div>
                                    <h3 class="title h3 sm:h2 xl:display-6 m-0">Corporate Success <br class="d-none sm:d-block">Services Consulting</h3>
                                </div>
                                <div class="section-footer panel d-flex justify-center sm:justify-start" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500;">
                                    <a href="page-services.html" class="btn btn-text fs-4 xl:fs-3 gap-1 xl:gap-2 mt-1 text-primary" data-uc-cursor="md bg-white opacity-10">
                                        <span>More services</span>
                                        <i class="icon unicon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="section-content panel">
                                <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-3 g-2 lg:g-3 xl:g-4" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 700});">
                                    <div class="">
                                        <div class="d-flex flex-column h-100 services-item panel px-3 py-4 lg:p-3 xl:p-4 rounded hover:text-white hover:bg-primary hover:-translate-y-1 duration-200 bg-gray-25" data-uc-cursor="lg text-white inverse-text" data-uc-cursor-text="Select">
                                            <div class="flex-grow-0 vstack items-center text-center gap-3 xl:gap-4 h-50 ">
                                                <div class="icon-box cstack w-64px h-64px rounded-circle text-primary bg-black shadow-sm">
                                                    <i class="icon-3 unicon-scalpel-lasso" style="color:#ff000f;"></i>
                                                </div>
                                                <div class="vstack justify-end gap-1 xl:gap-2 text-center">
                                                    <h5 class="title h4 sm:h5 xl:h4 m-0 text-inherit">Software Soluation</h5>
                                                    <p class="desc fs-6 sm:fs-5 xl:fs-4">We design secure, scalable, and user-friendly software tailored to your business needs driving efficiency, growth, and innovation.</p>
                                                    <i class="icon-2 unicon-arrow-up-right mt-2" style="color:#ff000f;"></i>
                                                </div>
                                            </div>
                                            <a href="single-service.html" class="position-cover"></a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column h-100 services-item panel px-3 py-4 lg:p-3 xl:p-4 rounded hover:text-white hover:bg-primary hover:-translate-y-1 duration-200 bg-gray-25" data-uc-cursor="lg text-white inverse-text" data-uc-cursor-text="Select">
                                            <div class="flex-grow-0 vstack items-center text-center gap-3 xl:gap-4 h-50">
                                                <div class="icon-box cstack w-64px h-64px rounded-circle text-primary bg-black shadow-sm">
                                                    <i class="icon-3 unicon-rocket" style="color:#ff000f;"></i>
                                                </div>
                                                <div class="vstack justify-end gap-1 xl:gap-2 text-center">
                                                    <h5 class="title h4 sm:h5 xl:h4 m-0 text-inherit">IT Consulting</h5>
                                                    <p class="desc fs-6 sm:fs-5 xl:fs-4">We provide expert guidance to help you choose the right technology, optimize IT infrastructure, and implement solutions that align with your business goals.</p>
                                                    <i class="icon-2 unicon-arrow-up-right mt-2" style="color:#ff000f;"></i>
                                                </div>
                                            </div>
                                            <a href="single-service.html" class="position-cover"></a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column h-100 services-item panel px-3 py-4 lg:p-3 xl:p-4 rounded hover:text-white hover:bg-primary hover:-translate-y-1 duration-200 bg-gray-25" data-uc-cursor="lg text-white inverse-text" data-uc-cursor-text="Select">
                                            <div class="flex-grow-0 vstack items-center text-center gap-3 xl:gap-4 h-50">
                                                <div class="icon-box cstack w-64px h-64px rounded-circle text-primary bg-black shadow-sm">
                                                    <i class="icon-3 unicon-model-alt" style="color:#ff000f;"></i>
                                                </div>
                                                <div class="vstack justify-end gap-1 xl:gap-2 text-center">
                                                    <h5 class="title h4 sm:h5 xl:h4 m-0 text-inherit">Digital Marketing</h5>
                                                    <p class="desc fs-6 sm:fs-5 xl:fs-4">We help your brand grow online with targeted strategies in SEO, social media, and paid campaigns driving traffic, engagement, and conversions.</p>
                                                    <i class="icon-2 unicon-arrow-up-right mt-2" style="color:#ff000f;"></i>
                                                </div>
                                            </div>
                                            <a href="single-service.html" class="position-cover"></a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="d-flex flex-column h-100 services-item panel px-3 py-4 lg:p-3 xl:p-4 rounded hover:text-white hover:bg-primary hover:-translate-y-1 duration-200 bg-gray-25" data-uc-cursor="lg text-white inverse-text" data-uc-cursor-text="Select">
                                            <div class="flex-grow-0 vstack items-center text-center gap-3 xl:gap-4 h-50">
                                                <div class="icon-box cstack w-64px h-64px rounded-circle text-primary bg-black shadow-sm">
                                                    <i class="icon-3 unicon-model" style="color:#ff000f;"></i>
                                                </div>
                                                <div class="vstack justify-end gap-1 xl:gap-2 text-center">
                                                    <h5 class="title h4 sm:h5 xl:h4 m-0 text-inherit">Domain & Hosting Services</h5>
                                                    <p class="desc fs-6 sm:fs-5 xl:fs-4">We offer reliable domain registration and secure hosting solutions to keep your website fast, accessible, and always online.</p>
                                                    <i class="icon-2 unicon-arrow-up-right mt-2" style="color:#ff000f;"></i>
                                                </div>
                                            </div>
                                            <a href="single-service.html" class="position-cover"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section End -->

            <!-- Section start -->
            <div id="uni_projects" class="projects section panel overflow-hidden swiper-parent">
                <div class="section-outer panel">
                    <div class="container max-w-2xl">
                        <div class="section-inner panel vstack gap-4 sm:gap-6 xl:gap-9">
                            <div class="section-header panel vstack items-center sm:items-start text-center sm:text-start m-auto sm:m-0 gap-2 xl:gap-3" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                <div class="fs-6 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25"><span>Projects</span></div>
                                <div class="hstack gap-4 justify-between items-end">
                                    <h3 class="title h3 sm:h2 xl:display-6 m-0">We specialize in the<br class="d-none sm:d-block">following <span class="d-inline-flex bg-contain pb-1 sm:pb-2" style="background-position: 50% 100%" data-src="../assets/images/common/line.svg" data-uc-img>case studies</span></h3>
                                    <a class="btn btn-md btn-primary fs-5 xl:fs-4 sm:px-4 d-none lg:d-block" href="page-case-study.html" data-uc-cursor="md bg-white opacity-10">
                                        <span>View all projects</span>
                                        <i class="icon-1 unicon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="section-content panel">
                                <div class="row child-cols-12 g-6 lg:g-8 xl:g-9">
                                    <div>
                                        <div class="project-item panel" data-anime="onview: -200; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 100;">
                                            <div class="row chils-cols-12 lg:child-cols-6 items-center g-3 sm:g-4 lg:g-6 xl:g-9">
                                                <div class="order-1 lg:order-2">
                                                    <div class="project-image lg:expand-container ms-0">
                                                        <div class="ratio ratio-3x2 sm:ratio-2x1 lg:ratio-4x3 rounded lg:rounded-end-0 overflow-hidden">
                                                            <img class="media-cover image rounded-default" src="../assets/images/project/01.jpg" alt="image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="order-2 lg:order-1">
                                                    <div class="project-content panel vstack items-start gap-2 sm:gap-4 lg:gap-3 xl:gap-4">
                                                        <div class="tier-header vstack gap-1 sm:gap-2">
                                                            <div class="number cstack w-48px h-48px xl:w-56px xl:h-56px fs-3 xl:fs-2 fw-bold rounded-circle text-secondary bg-primary">
                                                                <span>01</span>
                                                            </div>
                                                            <h3 class="title h3 sm:h2 xl:display-5 mt-1 mb-0">Energie brand</h3>
                                                            <p class="desc fs-4 xl:fs-3 text-gray-600">Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>
                                                        </div>
                                                        <div class="tier-body">
                                                            <ul class="nav-y gap-2 text-start">
                                                                <li class="hstack items-center gap-2">
                                                                    <div class="cstack w-24px h-24px border border-2 border-primary rounded-circle">
                                                                        <i class="text-primary unicon-checkmark fw-bold"></i>
                                                                    </div>
                                                                    <span class="d-inline fs-6 sm:fs-5 xl:fs-4 text-gray-600">Leverage automation to move fast</span>
                                                                </li>
                                                                <li class="hstack items-center gap-2">
                                                                    <div class="cstack w-24px h-24px border border-2 border-primary rounded-circle">
                                                                        <i class="text-primary unicon-checkmark fw-bold"></i>
                                                                    </div>
                                                                    <span class="d-inline fs-6 sm:fs-5 xl:fs-4 text-gray-600">Always give customers a human to chat to</span>
                                                                </li>
                                                                <li class="hstack items-center gap-2">
                                                                    <div class="cstack w-24px h-24px border border-2 border-primary rounded-circle">
                                                                        <i class="text-primary unicon-checkmark fw-bold"></i>
                                                                    </div>
                                                                    <span class="d-inline fs-6 sm:fs-5 xl:fs-4 text-gray-600">Automate customer support and close leads faster</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a href="single-case-study.html" class="btn btn-text fs-4 xl:fs-3 border-bottom gap-1 xl:gap-2 mt-1 text-primary" data-uc-cursor="md bg-white opacity-10">
                                                            <span>View case study</span>
                                                            <i class="icon unicon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="project-item panel" data-anime="onview: -200; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 100;">
                                            <div class="row chils-cols-12 lg:child-cols-6 items-center g-3 sm:g-4 lg:g-6 xl:g-9">
                                                <div>
                                                    <div class="project-image lg:expand-container me-0">
                                                        <div class="ratio ratio-3x2 sm:ratio-2x1 lg:ratio-4x3 rounded lg:rounded-start-0 overflow-hidden">
                                                            <img class="media-cover image rounded-default" src="../assets/images/project/02.jpg" alt="image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="project-content panel vstack items-start gap-2 sm:gap-4 lg:gap-3 xl:gap-4">
                                                        <div class="tier-header vstack gap-1 sm:gap-2">
                                                            <div class="number cstack w-48px h-48px xl:w-56px xl:h-56px fs-3 xl:fs-2 fw-bold rounded-circle text-secondary bg-primary">
                                                                <span>02</span>
                                                            </div>
                                                            <h3 class="title h3 sm:h2 xl:display-5 mt-1 mb-0">Bottle company</h3>
                                                            <p class="desc fs-4 xl:fs-3 text-gray-600">An all-in-one customer service platform that helps you balance everything your customers need to be happy.</p>
                                                        </div>
                                                        <div class="tier-body">
                                                            <ul class="nav-y gap-2 text-start">
                                                                <li class="hstack items-center gap-2">
                                                                    <div class="cstack w-24px h-24px border border-2 border-primary rounded-circle">
                                                                        <i class="text-primary unicon-checkmark fw-bold"></i>
                                                                    </div>
                                                                    <span class="d-inline fs-6 sm:fs-5 xl:fs-4 text-gray-600">Keep your customers in the loop with live chat</span>
                                                                </li>
                                                                <li class="hstack items-center gap-2">
                                                                    <div class="cstack w-24px h-24px border border-2 border-primary rounded-circle">
                                                                        <i class="text-primary unicon-checkmark fw-bold"></i>
                                                                    </div>
                                                                    <span class="d-inline fs-6 sm:fs-5 xl:fs-4 text-gray-600">Embed help articles right on your website</span>
                                                                </li>
                                                                <li class="hstack items-center gap-2">
                                                                    <div class="cstack w-24px h-24px border border-2 border-primary rounded-circle">
                                                                        <i class="text-primary unicon-checkmark fw-bold"></i>
                                                                    </div>
                                                                    <span class="d-inline fs-6 sm:fs-5 xl:fs-4 text-gray-600">Customers never have to leave the page to find an answer</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a href="single-case-study.html" class="btn btn-text fs-4 xl:fs-3 border-bottom gap-1 xl:gap-2 mt-1 text-primary" data-uc-cursor="md bg-white opacity-10">
                                                            <span>View case study</span>
                                                            <i class="icon unicon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="project-item panel" data-anime="onview: -200; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 100;">
                                            <div class="row chils-cols-12 lg:child-cols-6 items-center g-3 sm:g-4 lg:g-6 xl:g-9">
                                                <div class="order-1 lg:order-2">
                                                    <div class="project-image lg:expand-container ms-0">
                                                        <div class="ratio ratio-3x2 sm:ratio-2x1 lg:ratio-4x3 rounded lg:rounded-end-0 overflow-hidden">
                                                            <img class="media-cover image rounded-default" src="../assets/images/project/03.jpg" alt="image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="order-2 lg:order-1">
                                                    <div class="project-content panel vstack items-start gap-2 sm:gap-4 lg:gap-3 xl:gap-4">
                                                        <div class="tier-header vstack gap-1 sm:gap-2">
                                                            <div class="number cstack w-48px h-48px xl:w-56px xl:h-56px fs-3 xl:fs-2 fw-bold rounded-circle text-secondary bg-primary">
                                                                <span>03</span>
                                                            </div>
                                                            <h3 class="title h3 sm:h2 xl:display-5 mt-1 mb-0">Digital transformation</h3>
                                                            <p class="desc fs-4 xl:fs-3 text-gray-600">Measure what matters with Untitled’s easy-to-use reports. You can filter, export, and drilldown on the data in a couple clicks.</p>
                                                        </div>
                                                        <div class="tier-body">
                                                            <ul class="nav-y gap-2 text-start">
                                                                <li class="hstack items-center gap-2">
                                                                    <div class="cstack w-24px h-24px border border-2 border-primary rounded-circle">
                                                                        <i class="text-primary unicon-checkmark fw-bold"></i>
                                                                    </div>
                                                                    <span class="d-inline fs-6 sm:fs-5 xl:fs-4 text-gray-600">Filter, export, and drilldown on the data quickly</span>
                                                                </li>
                                                                <li class="hstack items-center gap-2">
                                                                    <div class="cstack w-24px h-24px border border-2 border-primary rounded-circle">
                                                                        <i class="text-primary unicon-checkmark fw-bold"></i>
                                                                    </div>
                                                                    <span class="d-inline fs-6 sm:fs-5 xl:fs-4 text-gray-600">Save, schedule, and automate reports to your inbox</span>
                                                                </li>
                                                                <li class="hstack items-center gap-2">
                                                                    <div class="cstack w-24px h-24px border border-2 border-primary rounded-circle">
                                                                        <i class="text-primary unicon-checkmark fw-bold"></i>
                                                                    </div>
                                                                    <span class="d-inline fs-6 sm:fs-5 xl:fs-4 text-gray-600">Connect the tools you already use with 100+ integrations</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a href="single-case-study.html" class="btn btn-text fs-4 xl:fs-3 border-bottom gap-1 xl:gap-2 mt-1 text-primary" data-uc-cursor="md bg-white opacity-10">
                                                            <span>View case study</span>
                                                            <i class="icon unicon-arrow-right"></i>
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
                </div>
            </div>

            <!-- Section End -->

            <!-- Section start -->
            <div id="uni_pricing" class="pricing section panel overflow-hidden py-4 sm:py-6 xl:py-10">
                <div class="section-outer panel">
                    <div class="container max-w-2xl">
                        <div class="section-inner panel vstack gap-4 sm:gap-6 xl:gap-9">
                            <div class="section-header panel vstack items-center sm:items-start text-center sm:text-start m-auto sm:mx-0 mb-3 xl:mb-0 gap-2 xl:gap-3" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                <div class="fs-6 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25"><span>Pricing</span></div>
                                <h3 class="title h3 sm:h2 xl:display-6 m-0">We’ve offred the <br class="d-none sm:d-block"><span class="d-inline-flex bg-contain pb-1 sm:pb-2" style="background-position: 50% 100%" data-src="../assets/images/common/line.svg" data-uc-img>best pricing</span> for you</h3>
                            </div>
                            <div class="section-content panel">
                                <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 justify-center gx-3 gy-6 lg:g-3 xl:g-4" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 700});">
                                    <div>
                                        <div class="item-pricing panel vstack justify-between rounded-2 p-3 pt-5 xl:p-4 xl:pt-6 bg-gray-25">
                                            <div class="icon-box position-absolute cstack w-48px h-48px xl:w-56px xl:h-56px rounded text-secondary bg-primary" style="top: -5%; left: 43%">
                                                <i class="icon-2 xl:icon-3 unicon-layers fw-bold"></i>
                                            </div>
                                            <div class="item-pricing-centent vstack items-center gap-1 xl:gap-2">
                                                <span class="fs-4 xl:fs-3 fw-bold text-inherit">Basic plan</span>
                                                <h3 class="h1 xl:display-5 price m-0 text-inherit">$0 / mo</h3>
                                                <p class="desc fs-5 lg:fs-6 xl:fs-5 text-inherit">Free forever and can be upgraded.</p>
                                            </div>
                                            <div class="panel py-4 xl:pt-4 xl:pb-5">
                                                <ul class="nav-y gap-2 fs-5 lg:fs-6 xl:fs-5">
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-primary text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">200+ integrations</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-primary text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">Advanced reporting and analytics</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-primary text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">Up to 20 individual users</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-primary text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">40GB individual data each user</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-primary text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">Priority chat and email support</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="panel">
                                                <a class="btn btn-md xl:btn-lg fs-5 xl:fs-3 rounded-default w-100 text-white bg-primary" href="sign-up.html" data-uc-cursor="md bg-white opacity-10">
                                                    <span>Try for Free</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="item-pricing panel vstack justify-between rounded-2 p-3 pt-5 xl:p-4 xl:pt-6 bg-primary text-white">
                                            <div class="icon-box position-absolute cstack w-48px h-48px xl:w-56px xl:h-56px rounded text-primary bg-secondary" style="top: -5%; left: 43%">
                                                <i class="icon-2 xl:icon-3 unicon-rocket fw-bold"></i>
                                            </div>
                                            <div class="item-pricing-centent vstack items-center gap-1 xl:gap-2 text-white border-primary-300">
                                                <span class="fs-4 xl:fs-3 fw-bold text-inherit">Business plan</span>
                                                <h3 class="h1 xl:display-5 price m-0 text-inherit">$99 / mo</h3>
                                                <p class="desc fs-5 lg:fs-6 xl:fs-5 text-inherit">Value for money and can be upgraded.</p>
                                            </div>
                                            <div class="panel py-4 xl:pt-4 xl:pb-5">
                                                <ul class="nav-y gap-2 fs-5 lg:fs-6 xl:fs-5">
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-secondary text-secondary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">200+ integrations</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-secondary text-secondary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">Advanced reporting and analytics</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-secondary text-secondary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">Up to 20 individual users</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-secondary text-secondary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">40GB individual data each user</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-secondary text-secondary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">Priority chat and email support</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="panel">
                                                <a class="btn btn-md xl:btn-lg fs-5 xl:fs-3 rounded-default w-100 text-primary btn-secondary" href="sign-up.html" data-uc-cursor="md bg-white opacity-10">
                                                    <span>Try for Free</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="item-pricing panel vstack justify-between rounded-2 p-3 pt-5 xl:p-4 xl:pt-6 bg-gray-25">
                                            <div class="icon-box position-absolute cstack w-48px h-48px xl:w-56px xl:h-56px rounded text-secondary bg-primary" style="top: -5%; left: 43%">
                                                <i class="icon-2 xl:icon-3 unicon-model fw-bold"></i>
                                            </div>
                                            <div class="item-pricing-centent vstack items-center gap-1 xl:gap-2">
                                                <span class="fs-4 xl:fs-3 fw-bold text-inherit">Entreprise plan</span>
                                                <h3 class="h1 xl:display-5 price m-0 text-inherit">$49 / mo</h3>
                                                <p class="desc fs-5 lg:fs-6 xl:fs-5 text-inherit">All other plans features and options.</p>
                                            </div>
                                            <div class="panel py-4 xl:pt-4 xl:pb-5">
                                                <ul class="nav-y gap-2 fs-5 lg:fs-6 xl:fs-5">
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-primary text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">200+ integrations</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-primary text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">Advanced reporting and analytics</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-primary text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">Up to 20 individual users</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-primary text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">40GB individual data each user</span>
                                                    </li>
                                                    <li class="hstack items-start gap-1">
                                                        <i class="cstack w-24px h-24px border border-2 border-primary text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                        <span class="d-inline">Priority chat and email support</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="panel">
                                                <a class="btn btn-md xl:btn-lg fs-5 xl:fs-3 rounded-default w-100 text-white bg-primary" href="sign-up.html" data-uc-cursor="md bg-white opacity-10">
                                                    <span>Try for Free</span>
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

            <!-- Section End -->

            <!-- Section Start -->
            <div id="uni_testimonials" class="testimonials section panel overflow-hidden swiper-parent">
                <div class="section-outer panel py-5 sm:py-6 lg:py-8 xl:py-9 bg-gray-25" data-anime="onview:-100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 700;">
                    <div class="container max-w-md xl:max-w-lg">
                        <div class="section-inner panel">
                            <div class="swiper panel" data-uc-swiper="items: 1; gap: 16; loop: true; fade: true; effect: fade; dots: .swiper-pagination;">
                                <div class="swiper-wrapper" data-uc-height-match=".swiper-slide">
                                    <div class="swiper-slide">
                                        <div class="panel mb-6 xl:mb-8">
                                            <div class="panel vstack items-center gap-3 xl:gap-4 text-center" data-anime="onview:-100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: anime.stagger(100, {start: 700});">
                                                <img src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-19.svg" alt="brand" class="h-32px xl:h-40px">
                                                <p class="desc h3 sm:h2 xl:display-5 ft-secondary fw-medium">We’ve been using Innovar to kick start every new project and the impact imagine invaluable working without it.</p>
                                                <div class="vstack items-center gap-2">
                                                    <div class="ratio ratio-1x1 rounded rounded-circle w-48px xl:w-64px uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/avatars/01.png" alt="client image">
                                                    </div>
                                                    <div class="vstack justify-center gap-narrow">
                                                        <h5 class="h6 xl:h5 m-0">Mark Zellers</h5>
                                                        <p class="position fs-6 xl:fs-5 opacity-50">Co-Founder</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="panel mb-6 xl:mb-8">
                                            <div class="panel vstack items-center gap-3 xl:gap-4 text-center" data-anime="onview:-100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: anime.stagger(100, {start: 700});">
                                                <img src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-21.svg" alt="brand" class="h-32px xl:h-40px">
                                                <p class="desc h3 sm:h2 xl:display-5 ft-secondary fw-medium">The team at Innovar provided us with invaluable guidance and support during our transition to a new software.</p>
                                                <div class="vstack items-center gap-2">
                                                    <div class="ratio ratio-1x1 rounded rounded-circle w-48px xl:w-64px uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/avatars/02.png" alt="client image">
                                                    </div>
                                                    <div class="vstack justify-center gap-narrow">
                                                        <h5 class="h6 xl:h5 m-0">John Zellers</h5>
                                                        <p class="position fs-6 xl:fs-5 opacity-50">Engineering Manager</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="panel mb-6 xl:mb-8">
                                            <div class="panel vstack items-center gap-3 xl:gap-4 text-center" data-anime="onview:-100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: anime.stagger(100, {start: 700});">
                                                <img src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-20.svg" alt="brand" class="h-32px xl:h-40px">
                                                <p class="desc h3 sm:h2 xl:display-5 ft-secondary fw-medium">We engaged Innovar to help us develop a new marketing strategy, and the impact has been remarkable.</p>
                                                <div class="vstack items-center gap-2">
                                                    <div class="ratio ratio-1x1 rounded rounded-circle w-48px xl:w-64px uc-transition-toggle overflow-hidden">
                                                        <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/avatars/03.png" alt="client image">
                                                    </div>
                                                    <div class="vstack justify-center gap-narrow">
                                                        <h5 class="h6 xl:h5 m-0">André Garcia</h5>
                                                        <p class="position fs-6 xl:fs-5 opacity-50">Product Manager</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add Pagination -->
                                <div class="position-absolute bottom-0 w-100">
                                    <div class="swiper-pagination position-relative w-auto text-primary"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section End -->

            <!-- Section start -->
            <div id="uni_contact" class="contact section panel overflow-hidden py-4 sm:py-6 xl:py-10">
                <div class="section-outer panel">
                    <div class="container max-w-2xl">
                        <div class="section-inner panel vstack gap-4 sm:gap-6 xl:gap-8">
                            <div class="panel vstack gap-1 xl:gap-2 xl:gap-3 max-w-550px xl:max-w-750px mx-auto text-center z-99" data-anime="onview:-100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: anime.stagger(100, {start: 200});">
                                <h2 class="h3 sm:h2 xl:display-5 m-0">Subscribe to our mailing list & stay up to date</h2>
                                <p class="fs-5 xl:fs-3 text-gray">No spam. Just the latest releases and tips, interesting articles, and exclusive interviews with great people.</p>
                                <div class="vstack items-center w-100 gap-1 mt-2">
                                    <div class="sm:w-450px xl:w-500px">
                                        <form class="row child-cols g-1">
                                            <div>
                                                <div class="form-group inline-block">
                                                    <input type="email" class="form-control rounded-default h-40px xl:h-48px w-full text-black bg-white" placeholder="Enter your email" required="">
                                                </div>
                                            </div>
                                            <div class="col-12 sm:col-auto">
                                                <button class="btn btn-sm xl:btn-md btn-primary rounded-default h-40px xl:h-48px w-100 lg:min-w-150px text-white" data-uc-cursor="md bg-white opacity-10">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                    <p class="fs-6 text-dark dark:text-white text-opacity-70">We care about your data in our <a class="uc-link text-underline dark:text-secondary" href="page-privacy.html">privacy policy</a>.</p>
                                </div>
                            </div>
                            <div data-anime="onview:-100; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 700;">
                                <div class="ratio ratio-2x1 rounded lg:h-400px xl:h-500px rounded uc-transition-toggle overflow-hidden">
                                    <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/landing/subscribe.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section End -->

            <!-- Section start -->
            <div id="uni_blog" class="blogs section panel overflow-hidden swiper-parent">
                <div class="section-outer panel" data-anime="onview: -200; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                    <div class="container max-w-2xl">
                        <div class="section-inner panel">
                            <div class="row child-cols-12 g-4 sm:g-6 xl:g-8">
                                <div>
                                    <div class="section-header panel vstack items-center sm:items-start text-center sm:text-start m-auto sm:m-0 gap-2 xl:gap-3">
                                        <div class="fs-6 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25"><span>Articles</span></div>
                                        <h3 class="title h3 sm:h2 xl:display-6 m-0">Lastest blog posts</h3>
                                    </div>
                                </div>
                                <div>
                                    <div class="section-content panel expand-container ms-0">
                                        <div class="swiper" data-uc-swiper="items: 1.1; gap: 16; loop: true; next: .swiper-nav-next; prev: .swiper-nav-prev;" data-uc-swiper-s="items: 2.3; gap: 24;" data-uc-swiper-m="items: 3.22; gap: 24;" data-uc-swiper-l="items: 3.22; gap: 32;">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <article class="post-item panel overflow-hidden vstack gap-2 xl:gap-3">
                                                        <div class="ratio ratio-3x2 rounded rounded-1-5 uc-transition-toggle overflow-hidden">
                                                            <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/blog/blog-01.jpg" alt="Agency launches experts media expert workshops">
                                                            <a href="blog-detail.html" class="position-cover" data-caption="Agency launches experts media expert workshops"></a>
                                                        </div>
                                                        <div class="post-content panel vstack gap-1">
                                                            <span class="catigory fs-5 fw-bold text-primary">
                                                                <a class="text-none" href="#" data-uc-cursor="sm bg-white opacity-10">Design</a>
                                                            </span>
                                                            <div class="hstack items-start gap-4 justify-between" data-uc-cursor="md bg-white opacity-10">
                                                                <div>
                                                                    <h3 class="title h4 xl:h3 m-0">
                                                                        <a class="text-none" href="blog-detail.html">Agency launches experts media expert workshops</a>
                                                                    </h3>
                                                                </div>
                                                                <div class="mt-1">
                                                                    <i class="icon-1 xl:icon-2 fw-bold unicon-arrow-up-right"></i>
                                                                </div>
                                                            </div>
                                                            <p class="desc fs-6 xl:fs-5 opacity-70">We believe in the synergy of human expertise and innovative technology.</p>
                                                            <div class="author hstack items-center gap-2 mt-1 xl:mt-2">
                                                                <div class="ratio ratio-1x1 rounded rounded-circle w-48px uc-transition-toggle overflow-hidden">
                                                                    <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/avatars/08.jpg" alt="client image">
                                                                </div>
                                                                <div class="vstack justify-center gap-narrow">
                                                                    <h5 class="h6 m-0">Alexander Davis</h5>
                                                                    <p class="position fs-6 opacity-50">Jan 17, 2023</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="swiper-slide">
                                                    <article class="post-item panel overflow-hidden vstack gap-2 xl:gap-3">
                                                        <div class="ratio ratio-3x2 rounded rounded-1-5 uc-transition-toggle overflow-hidden">
                                                            <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/blog/blog-02.jpg" alt="10 Proven strategies for marketing success">
                                                            <a href="blog-detail.html" class="position-cover" data-caption="10 Proven strategies for marketing success"></a>
                                                        </div>
                                                        <div class="post-content panel vstack gap-1">
                                                            <span class="catigory fs-5 fw-bold text-primary">
                                                                <a class="text-none" href="#" data-uc-cursor="sm bg-white opacity-10">Business</a>
                                                            </span>
                                                            <div class="hstack items-start gap-4 justify-between" data-uc-cursor="md bg-white opacity-10">
                                                                <div>
                                                                    <h3 class="title h4 xl:h3 m-0">
                                                                        <a class="text-none" href="blog-detail.html">10 Proven strategies for marketing success</a>
                                                                    </h3>
                                                                </div>
                                                                <div class="mt-1">
                                                                    <i class="icon-1 xl:icon-2 fw-bold unicon-arrow-up-right"></i>
                                                                </div>
                                                            </div>
                                                            <p class="desc fs-6 xl:fs-5 opacity-70">We believe in the synergy of human expertise and innovative technology.</p>
                                                            <div class="author hstack items-center gap-2 mt-1 xl:mt-2">
                                                                <div class="ratio ratio-1x1 rounded rounded-circle w-48px uc-transition-toggle overflow-hidden">
                                                                    <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/avatars/10.jpg" alt="client image">
                                                                </div>
                                                                <div class="vstack justify-center gap-narrow">
                                                                    <h5 class="h6 m-0">David Brown</h5>
                                                                    <p class="position fs-6 opacity-50">Jan 17, 2023</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="swiper-slide">
                                                    <article class="post-item panel overflow-hidden vstack gap-2 xl:gap-3">
                                                        <div class="ratio ratio-3x2 rounded rounded-1-5 uc-transition-toggle overflow-hidden">
                                                            <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/blog/blog-03.jpg" alt="How to effectively conduct market research">
                                                            <a href="blog-detail.html" class="position-cover" data-caption="How to effectively conduct market research"></a>
                                                        </div>
                                                        <div class="post-content panel vstack gap-1">
                                                            <span class="catigory fs-5 fw-bold text-primary">
                                                                <a class="text-none" href="#" data-uc-cursor="sm bg-white opacity-10">Design</a>
                                                            </span>
                                                            <div class="hstack items-start gap-4 justify-between" data-uc-cursor="md bg-white opacity-10">
                                                                <div>
                                                                    <h3 class="title h4 xl:h3 m-0">
                                                                        <a class="text-none" href="blog-detail.html">How to effectively conduct market research</a>
                                                                    </h3>
                                                                </div>
                                                                <div class="mt-1">
                                                                    <i class="icon-1 xl:icon-2 fw-bold unicon-arrow-up-right"></i>
                                                                </div>
                                                            </div>
                                                            <p class="desc fs-6 xl:fs-5 opacity-70">We believe in the synergy of human expertise and innovative technology.</p>
                                                            <div class="author hstack items-center gap-2 mt-1 xl:mt-2">
                                                                <div class="ratio ratio-1x1 rounded rounded-circle w-48px uc-transition-toggle overflow-hidden">
                                                                    <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/avatars/03.png" alt="client image">
                                                                </div>
                                                                <div class="vstack justify-center gap-narrow">
                                                                    <h5 class="h6 m-0">James Lee</h5>
                                                                    <p class="position fs-6 opacity-50">Jan 17, 2023</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="swiper-slide">
                                                    <article class="post-item panel overflow-hidden vstack gap-2 xl:gap-3">
                                                        <div class="ratio ratio-3x2 rounded rounded-1-5 uc-transition-toggle overflow-hidden">
                                                            <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/blog/blog-04.jpg" alt="A comprehensive guide to marketing">
                                                            <a href="blog-detail.html" class="position-cover" data-caption="A comprehensive guide to marketing"></a>
                                                        </div>
                                                        <div class="post-content panel vstack gap-1">
                                                            <span class="catigory fs-5 fw-bold text-primary">
                                                                <a class="text-none" href="#" data-uc-cursor="sm bg-white opacity-10">Creative</a>
                                                            </span>
                                                            <div class="hstack items-start gap-4 justify-between" data-uc-cursor="md bg-white opacity-10">
                                                                <div>
                                                                    <h3 class="title h4 xl:h3 m-0">
                                                                        <a class="text-none" href="blog-detail.html">A comprehensive guide to marketing</a>
                                                                    </h3>
                                                                </div>
                                                                <div class="mt-1">
                                                                    <i class="icon-1 xl:icon-2 fw-bold unicon-arrow-up-right"></i>
                                                                </div>
                                                            </div>
                                                            <p class="desc fs-6 xl:fs-5 opacity-70">We believe in the synergy of human expertise and innovative technology.</p>
                                                            <div class="author hstack items-center gap-2 mt-1 xl:mt-2">
                                                                <div class="ratio ratio-1x1 rounded rounded-circle w-48px uc-transition-toggle overflow-hidden">
                                                                    <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/avatars/04.png" alt="client image">
                                                                </div>
                                                                <div class="vstack justify-center gap-narrow">
                                                                    <h5 class="h6 m-0">William Martinez</h5>
                                                                    <p class="position fs-6 opacity-50">Jan 17, 2023</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="swiper-slide">
                                                    <article class="post-item panel overflow-hidden vstack gap-2 xl:gap-3">
                                                        <div class="ratio ratio-3x2 rounded rounded-1-5 uc-transition-toggle overflow-hidden">
                                                            <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/blog/blog-05.jpg" alt="How can marketing help your business?">
                                                            <a href="blog-detail.html" class="position-cover" data-caption="How can marketing help your business?"></a>
                                                        </div>
                                                        <div class="post-content panel vstack gap-1">
                                                            <span class="catigory fs-5 fw-bold text-primary">
                                                                <a class="text-none" href="#" data-uc-cursor="sm bg-white opacity-10">Marketing</a>
                                                            </span>
                                                            <div class="hstack items-start gap-4 justify-between" data-uc-cursor="md bg-white opacity-10">
                                                                <div>
                                                                    <h3 class="title h4 xl:h3 m-0">
                                                                        <a class="text-none" href="blog-detail.html">How can marketing help your business?</a>
                                                                    </h3>
                                                                </div>
                                                                <div class="mt-1">
                                                                    <i class="icon-1 xl:icon-2 fw-bold unicon-arrow-up-right"></i>
                                                                </div>
                                                            </div>
                                                            <p class="desc fs-6 xl:fs-5 opacity-70">We believe in the synergy of human expertise and innovative technology.</p>
                                                            <div class="author hstack items-center gap-2 mt-1 xl:mt-2">
                                                                <div class="ratio ratio-1x1 rounded rounded-circle w-48px uc-transition-toggle overflow-hidden">
                                                                    <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/avatars/05.png" alt="client image">
                                                                </div>
                                                                <div class="vstack justify-center gap-narrow">
                                                                    <h5 class="h6 m-0">Henry Kim</h5>
                                                                    <p class="position fs-6 opacity-50">Jan 17, 2023</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel hstack items-end gap-1">
                                        <a href="#" class="swiper-nav swiper-nav-prev btn w-40px h-40px xl:w-48px xl:h-48px p-0 border rounded-circle text-primary dark:text-white hover:text-white bg-white dark:bg-gray-700 hover:bg-primary order-1" data-uc-cursor="md bg-white opacity-10">
                                            <span class="icon-1 xl:icon-2 unicon-arrow-left"></span>
                                        </a>
                                        <a href="#" class="swiper-nav swiper-nav-next btn w-40px h-40px xl:w-48px xl:h-48px p-0 border rounded-circle text-primary dark:text-white hover:text-white bg-white dark:bg-gray-700 hover:bg-primary order-2" data-uc-cursor="md bg-white opacity-10">
                                            <span class="icon-1 xl:icon-2 unicon-arrow-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section end -->

            <!-- Section start -->
            <div id="uni_faq" class="faq section panel overflow-hidden swiper-parent py-4 sm:py-6 xl:py-9">
                <div class="section-outer panel">
                    <div class="container max-w-2xl">
                        <div class="section-inner panel vstack gap-4 sm:gap-6 xl:gap-9">
                            <div class="section-header panel vstack items-center sm:items-start text-center sm:text-start gap-2 xl:gap-3" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                <div class="fs-6 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25"><span>Help center</span></div>
                                <h3 class="title h3 sm:h2 xl:display-6 m-0">Frequently Asked Questions</h3>
                            </div>
                            <div class="section-content panel">
                                <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 justify-center g-4 xl:g-6" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 700});">
                                    <div>
                                        <div class="panel vstack gap-2 xl:gap-3">
                                            <div class="icon-box cstack w-56px h-56px xl:w-64px xl:h-64px rounded-circle bg-primary">
                                                <i class="icon-2 xl:icon-3 unicon-view text-secondary"></i>
                                            </div>
                                            <div class="panel vstack gap-1 xl:gap-2">
                                                <h2 class="title h5 xl:h4 m-0">Is there a free trial available ?</h2>
                                                <p class="desc fs-6 xl:fs-5">Yes, you can try us for free for 30 days. Our friendly team will work with you to get you up and running as soon as possible.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel vstack gap-2 xl:gap-3">
                                            <div class="icon-box cstack w-56px h-56px xl:w-64px xl:h-64px rounded-circle bg-primary">
                                                <i class="icon-2 xl:icon-3 unicon-renew text-secondary"></i>
                                            </div>
                                            <div class="panel vstack gap-1 xl:gap-2">
                                                <h2 class="title h5 xl:h4 m-0">Can I change my plan later ?</h2>
                                                <p class="desc fs-6 xl:fs-5">Of course. Our pricing scales with your company. Chat to our friendly team to find a solution that works for you.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel vstack gap-2 xl:gap-3">
                                            <div class="icon-box cstack w-56px h-56px xl:w-64px xl:h-64px rounded-circle bg-primary">
                                                <i class="icon-2 xl:icon-3 unicon-tool-box text-secondary"></i>
                                            </div>
                                            <div class="panel vstack gap-1 xl:gap-2">
                                                <h2 class="title h5 xl:h4 m-0">What is your cancellation policy ?</h2>
                                                <p class="desc fs-6 xl:fs-5">We understand that things change. You can cancel your plan at any time and we’ll refund you the difference already paid.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel vstack gap-2 xl:gap-3">
                                            <div class="icon-box cstack w-56px h-56px xl:w-64px xl:h-64px rounded-circle bg-primary">
                                                <i class="icon-2 xl:icon-3 unicon-email text-secondary"></i>
                                            </div>
                                            <div class="panel vstack gap-1 xl:gap-2">
                                                <h2 class="title h5 xl:h4 m-0">How do I change my account email ?</h2>
                                                <p class="desc fs-6 xl:fs-5">You can change the email address associated with your account by going to untitled.com/account from a laptop or desktop.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel vstack gap-2 xl:gap-3">
                                            <div class="icon-box cstack w-56px h-56px xl:w-64px xl:h-64px rounded-circle bg-primary">
                                                <i class="icon-2 xl:icon-3 unicon-word-cloud text-secondary"></i>
                                            </div>
                                            <div class="panel vstack gap-1 xl:gap-2">
                                                <h2 class="title h5 xl:h4 m-0">How does billing work ?</h2>
                                                <p class="desc fs-6 xl:fs-5">Plans are per workspace, not per account. You can upgrade one workspace, and still have any number of free workspaces.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel vstack gap-2 xl:gap-3">
                                            <div class="icon-box cstack w-56px h-56px xl:w-64px xl:h-64px rounded-circle bg-primary">
                                                <i class="icon-2 xl:icon-3 unicon-wallet text-secondary"></i>
                                            </div>
                                            <div class="panel vstack gap-1 xl:gap-2">
                                                <h2 class="title h5 xl:h4 m-0">Can other info be added to an invoice ?</h2>
                                                <p class="desc fs-6 xl:fs-5">At the moment, the only way to add additional information to invoices is to add the information to the workspace's name.</p>
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
        </div>

        <!-- Wrapper end -->

        <!-- Footer start -->

        <!-- Cta Start -->
        <div id="cta" class="cta section panel">
            <div class="section-outer panel" data-anime="onview: -100; translateY: [24, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 200;">
                <div class="container max-w-2xl">
                    <div class="section-inner panel overflow-hidden rounded px-2 sm:px-0 py-5 sm:py-6 lg:py-8 xl:py-9 bg-gradient-45n from-primary-400 to-primary rounded lg:rounded-3 text-white">
                        <div class="position-cover opacity-70 blend-multiply" data-src="../assets/images/common/footer-cta-bg.jpg" data-uc-img></div>
                        <div class="panel vstack items-center gap-2 lg:gap-3 max-w-500px lg:max-w-700px mx-auto text-center z-99" data-anime="onview:-100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: anime.stagger(100, {start: 200});">
                            <h2 class="h3 sm:h1 lg:display-6 m-0 text-white">Start scaling your business with Innovar</h2>
                            <p class="fs-5 sm:fs-4 xl:fs-3 text-white text-opacity-80">14-day free trial. No credit card required.</p>
                            <a href="page-contact.html" class="btn btn-md xl:btn-lg btn-secondary text-primary fs-6 xl:fs-4 mt-2" data-uc-cursor="md bg-white opacity-10">
                                <span>Get a quote</span>
                                <i class="icon icon-1 unicon-arrow-right d-none sm:d-block"></i>
                            </a>
                        </div>
                        <div class="d-none lg:d-block" data-anime="onview:-100; targets: >*; scale: [0, 1]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: anime.stagger(100, {start: 750});">
                            <div class="position-absolute" style="top: 25%; left: 10%">
                                <img class="w-32px xl:w-48px" src="https://starplatethemes.com/php/innovar/assets/images/common/gold-stare.svg" alt="star-icon">
                            </div>
                            <div class="position-absolute" style="bottom: 25%; right: 15%">
                                <img class="w-24px xl:w-32px" src="https://starplatethemes.com/php/innovar/assets/images/common/gold-stare.svg" alt="star-icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cta End -->

        <!-- Animation JS -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cards = document.querySelectorAll('.feature-card');

        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-20px)';
                card.style.boxShadow = '0 1rem 2rem rgba(255, 0, 0, 1)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
                card.style.boxShadow = '0 0.5rem 1rem rgba(255, 0, 0, 1)';
            });
        });
    });
</script>
@endsection