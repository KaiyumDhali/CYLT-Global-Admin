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
            <!-- Section start -->
            <div id="hero_header" class="hero-header section panel overflow-hidden">
                <div class="position-absolute top-0 start-0 end-0 min-h-600px z-0 bg-gray-25"></div>
                <div class="position-absolute top-0 start-0 end-0 min-h-screen overflow-hidden d-none lg:d-block" data-anime="targets: >*; scale: [0, 1]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 750});">
                    <div class="position-absolute top-0 start-0 rotate-45" style="top: 30% !important; left: 18% !important">
                        <img class="w-32px text-warning" src="https://starplatethemes.com/php/innovar/assets/images/common/gold-stare.svg" alt="star-1" data-uc-svg>
                    </div>
                    <div class="position-absolute top-0 end-0 rotate-45" style="top: 15% !important; right: 18% !important">
                        <img class="w-24px text-warning" src="https://starplatethemes.com/php/innovar/assets/images/common/gold-stare.svg" alt="star-2" data-uc-svg>
                    </div>
                </div>
                <div class="section-outer panel pt-9 lg:pt-10 pb-6 sm:pb-8 lg:pb-9">
                    <div class="container max-w-xl">
                        <div class="section-inner panel mt-2 sm:mt-4 lg:mt-0" data-anime="targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                            <div class="vstack items-center gap-2 lg:gap-4 mb-4 sm:mb-6 lg:mb-8 max-w-750px mx-auto text-center">
                                <h1 class="h2 sm:h1 lg:display-6 xl:display-5 m-0">Contact us</h1>
                                <p class="fs-6 sm:fs-5 text-black text-opacity-70">Feel free to reach out to us using the options below, and our dedicated team will respond to your inquiries promptly.</p>
                            </div>
                            <div class="panel max-w-750px mx-auto">
                                <form class="vstack gap-2 p-3 sm:p-6 xl:p-8 rounded bg-gray-50">
                                    <p class="fs-6 text-black text-opacity-70 mb-2">Have a question or feedback? Fill out the form below, and we'll get back to you as soon as possible.</p>
                                    <div class="row child-cols-12 md:child-cols-6 g-2">
                                        <div>
                                            <input class="form-control h-48px w-full bg-white" type="text" placeholder="Full name" required>
                                        </div>
                                        <div>
                                            <input class="form-control h-48px w-full bg-white" type="email" placeholder="Your email" required>
                                        </div>
                                    </div>
                                    <input class="form-control h-48px w-full bg-white" type="text" placeholder="Subject">
                                    <textarea class="form-control min-h-150px w-full bg-white" placeholder="Your message.." required></textarea>
                                    <button class="btn btn-primary btn-md text-white mt-2" type="submit" data-uc-cursor="md bg-white opacity-10">Send message</button>
                                    <p class="text-center">Or drop us a message via <a class="uc-link" data-uc-cursor="md bg-white opacity-10" href="mailto:hello@innovar.co">email</a>.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section end -->

            <!-- Section start -->
            <div id="helpful-links" class="section panel overflow-hidden">
                <div class="section-outer panel">
                    <div class="container max-w-lg">
                        <div class="section-inner panel">
                            <div class="panel vstack gap-4 sm:gap-6 xl:gap-8">
                                <h2 class="h4 sm:h3 lg:h2 m-0 text-center" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 100;">Other ways to reach us</h2>
                                <div class="row child-cols-12 sm:child-cols-6 g-2 lg:g-4 justify-between col-match" data-anime="onview: -100; targets: > *; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                                    <div>
                                        <div class="panel hstack gap-2 lg:gap-3 items-center justify-between px-3 py-4 lg:p-4 rounded bg-gray-25 lg:hover:scale-105 duration-150 transition-all">
                                            <div class="cstack w-64px h-64px bg-secondary p-1 rounded">
                                                <span><i class="icon-3 unicon-location text-primary"></i></span>
                                            </div>
                                            <div class="vstack justify-center">
                                                <h5 class="h5 lg:h4 m-0">Our office</h5>
                                                <p class="fs-6 lg:fs-5 opacity-70">Don Valley, Toronto</p>
                                            </div>
                                            <a class="btn btn-text fs-5 xl:fs-4 text-primary border-bottom gap-1 xl:gap-2 mt-1" href="#" data-uc-cursor="md bg-white opacity-10">
                                                <span>Visit us</span>
                                                <i class="position-relative icon icon-1 unicon-arrow-right translate-y-px"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel hstack gap-2 lg:gap-3 items-center justify-between px-3 py-4 lg:p-4 rounded bg-gray-25 lg:hover:scale-105 duration-150 transition-all">
                                            <div class="cstack w-64px h-64px bg-secondary p-1 rounded">
                                                <span><i class="icon-3 unicon-chat-bot text-primary"></i></span>
                                            </div>
                                            <div class="vstack justify-center">
                                                <h5 class="h5 lg:h4 m-0">Via chat</h5>
                                                <p class="fs-6 lg:fs-5 opacity-70">Get instant answers.</p>
                                            </div>
                                            <a class="btn btn-text fs-5 xl:fs-4 text-primary border-bottom gap-1 xl:gap-2 mt-1" href="#" data-uc-cursor="md bg-white opacity-10">
                                                <span>Let's chat</span>
                                                <i class="position-relative icon icon-1 unicon-arrow-right translate-y-px"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel hstack gap-2 lg:gap-3 items-center justify-between px-3 py-4 lg:p-4 rounded bg-gray-25 lg:hover:scale-105 duration-150 transition-all">
                                            <div class="cstack w-64px h-64px bg-secondary p-1 rounded">
                                                <span><i class="icon-3 unicon-events text-primary"></i></span>
                                            </div>
                                            <div class="vstack justify-center">
                                                <h5 class="h5 lg:h4 m-0">Report Issue</h5>
                                                <p class="fs-6 lg:fs-5 opacity-70">Get priority support.</p>
                                            </div>
                                            <a class="btn btn-text fs-5 xl:fs-4 text-primary border-bottom gap-1 xl:gap-2 mt-1" href="#" data-uc-cursor="md bg-white opacity-10">
                                                <span>Send report</span>
                                                <i class="position-relative icon icon-1 unicon-arrow-right translate-y-px"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel hstack gap-2 lg:gap-3 items-center justify-between px-3 py-4 lg:p-4 rounded bg-gray-25 lg:hover:scale-105 duration-150 transition-all">
                                            <div class="cstack w-64px h-64px bg-secondary p-1 rounded">
                                                <span><i class="icon-3 unicon-events text-primary"></i></span>
                                            </div>
                                            <div class="vstack justify-center">
                                                <h5 class="h5 lg:h4 m-0">Our community</h5>
                                                <p class="fs-6 lg:fs-5 opacity-70">Connect with users.</p>
                                            </div>
                                            <a class="btn btn-text fs-5 xl:fs-4 text-primary border-bottom gap-1 xl:gap-2 mt-1" href="#" data-uc-cursor="md bg-white opacity-10">
                                                <span>Join us</span>
                                                <i class="position-relative icon icon-1 unicon-arrow-right translate-y-px"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section end -->

            <!-- Section start -->
            <div id="counter" class="uni-counter section panel overflow-hidden bg-primary my-7 md:my-9 xl:my-10">
                <div class="section-outer panel py-5 xl:py-8">
                    <div class="container max-w-xl">
                        <div class="section-inner panel">
                            <div class="row child-cols-12 lg:child-cols items-center g-4 sm:g-6 xl:g-9">
                                <div class="col-5">
                                    <div class="panel">
                                        <h3 class="h4 xl:h3 m-0 text-center lg:text-start text-white">
                                            Trusted by more than 500,00+ <br class="d-none sm:d-block">
                                            people across the globe
                                        </h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="panel">
                                        <div class="row child-cols-6 xl:child-cols-3 justify-center g-4 md:g-6 xl:g-8">
                                            <div>
                                                <div class="brand-item text-center">
                                                    <img class="brand-item-image h-40px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-01.svg" alt="Shopify" data-uc-svg>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="brand-item text-center">
                                                    <img class="brand-item-image h-40px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-02.svg" alt="Netflix" data-uc-svg>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="brand-item text-center">
                                                    <img class="brand-item-image h-40px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-03.svg" alt="Huawei" data-uc-svg>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="brand-item text-center">
                                                    <img class="brand-item-image h-40px text-white" src="https://starplatethemes.com/php/innovar/assets/images/brands/brand-04.svg" alt="Lexus" data-uc-svg>
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
            <div class="uni-blog section panel overflow-hidden my-8 md:my-9 xl:my-10">
                <div class="section-outer panel">
                    <div class="container max-w-xl">
                        <div class="section-inner panel vstack gap-5 sm:gap-6 lg:gap-8 xl:gap-9">
                            <header>
                                <div class="panel vstack gap-2">
                                    <div class="fs-5 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25 w-fit"><span>Articles</span></div>
                                    <h1 class="h2 md:h1 lg:display-6 m-0">
                                        Uncover the Latest Industry <br class="d-none md:d-block">
                                        Insights and Articles
                                    </h1>
                                </div>
                            </header>
                            <div class="panel">
                                <div class="row child-cols-12 sm:child-cols-4 g-3 xl:g-4">
                                    <div>
                                        <div class="post-item vstack gap-3 xl:gap-5">
                                            <div class="post-item-image panel">
                                                <div class="ratio ratio-3x2 rounded rounded uc-transition-toggle overflow-hidden">
                                                    <img class="media-cover image rounded-default uc-transition-scale-up uc-transition-opaque" src="../assets/images/blog/blog-01.jpg" alt="Agency launches experts media expert workshops">
                                                </div>
                                                <a class="position-cover" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10"></a>
                                            </div>
                                            <div class="post-item-content vstack items-start gap-2 lg:gap-3">
                                                <h3 class="h4 lg:h3 m-0"><a class="text-none" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10">Agency launches experts media expert workshops</a></h3>
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
                                                <a class="position-cover" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10"></a>
                                            </div>
                                            <div class="post-item-content vstack items-start gap-2 lg:gap-3">
                                                <h3 class="h4 lg:h3 m-0"><a class="text-none" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10">10 Proven strategies for marketing success</a></h3>
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
                                                <a class="position-cover" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10"></a>
                                            </div>
                                            <div class="post-item-content vstack items-start gap-2 lg:gap-3">
                                                <h3 class="h4 lg:h3 m-0"><a class="text-none" href="blog-detail.html" data-uc-cursor="md bg-white opacity-10">How to effectively conduct market research</a></h3>
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
                                <div class="row xl:child-cols-6 g-4 col-match">
                                    <div class="panel">
                                        <header>
                                            <div class="vstack justify-between h-100">
                                                <div class="panel vstack gap-2">
                                                    <div class="fs-5 xl:fs-4 px-3 xl:px-4 py-1 rounded bg-gray-25 w-fit"><span>Help Center</span></div>
                                                    <h1 class="h2 md:h1 lg:display-6 m-0">
                                                        Frequenlty asked <br class="d-none md:d-block">
                                                        questions
                                                    </h1>
                                                </div>
                                                <a class="fs-5 xl:fs-4 btn btn-sm xl:btn-md btn-primary text-none w-fit mt-4" href="#" data-uc-cursor="md bg-white opacity-10">Learn more <i class="icon-1 ms-1 unicon-arrow-right"></i></a>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="panel">
                                        <ul class="gap-4" data-uc-accordion="targets: > li;">
                                            <li class="panel p-3 lg:p-4 rounded bg-gray-25">
                                                <a class="uc-accordion-title text-none h5 sm:h4 m-0 fw-bold" href="#" data-uc-cursor="md bg-white opacity-10">1. What is business consulting ?</a>
                                                <div class="uc-accordion-content">
                                                    <p>Yes, you need to have a fair amount of knowledge in dealing with HTML/CSS as well as JavaScript in order to be able to use Varium.</p>
                                                </div>
                                            </li>
                                            <li class="panel p-3 lg:p-4 rounded bg-gray-25">
                                                <a class="uc-accordion-title text-none h5 sm:h4 m-0 fw-bold" href="#" data-uc-cursor="md bg-white opacity-10">2. Why wouldn’t I just hire my own animator ?</a>
                                                <div class="uc-accordion-content">
                                                    <p>Feel free to do so. Kloomix does exist to evolve every commercial project. You can also use it to build stunning websites for your own clients (we won’t breathe a word).</p>
                                                </div>
                                            </li>
                                            <li class="panel p-3 lg:p-4 rounded bg-gray-25">
                                                <a class="uc-accordion-title text-none h5 sm:h4 m-0 fw-bold" href="#" data-uc-cursor="md bg-white opacity-10">3. How Does variuem Ensure Data Privacy ?</a>
                                                <div class="uc-accordion-content">
                                                    <p>Definitely! Please use it however you like; we don’t limit it.</p>
                                                </div>
                                            </li>
                                            <li class="panel p-3 lg:p-4 rounded bg-gray-25">
                                                <a class="uc-accordion-title text-none h5 sm:h4 m-0 fw-bold" href="#" data-uc-cursor="md bg-white opacity-10">4. Can I use this to create and sell a product ?</a>
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

        <!-- Wrapper end -->

</main>

@endsection