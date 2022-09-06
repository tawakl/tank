@extends('fronte.layouts.master')

@section('content')
<div id="content-wrap">
    <div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <!-- Begin page header image
                ============================= -->
            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="{{asset('front/img/page-header/ph-4.jpg')}}" alt="Image">
                </div>
            </div>
            <!-- End page header image -->

            <!-- Begin page header caption
                ===============================
                Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
                -->
            <div class="ph-caption">
                <h1 class="ph-caption-title ph-appear">About</h1>
                <div class="ph-caption-title-ghost ph-appear">About</div>
                <div class="ph-caption-subtitle ph-appear">The House</div>
            </div>
            <!-- End page header caption -->

        </div>
        <!-- /.page-header-inner -->

        <!-- Begin scroll down circle (you can change "data-offset" to set scroll top offset)
            ============================== -->
        <a href="#page-content" class="scroll-down-circle" data-offset="30">
            <div class="sdc-inner ph-appear">
                <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
                <svg viewBox="0 0 500 500">
                    <defs>
                        <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
                    </defs>
                    <text dy="30">
                        <textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
                    </text>
                </svg>
            </div>
            <!-- /.sdc-inner -->
        </a>
        <!-- End scroll down circle -->

        <!-- Begin made with love
            ========================== -->
        <div class="made-with-love ph-appear">
            <div class="mwl-inner">
                <div class="mwl-text">Made with</div>
                <div class="mwl-icon"><i class="far fa-heart"></i></div>
            </div>
        </div>
        <!-- End made with love -->

    </div>
    <!-- End page header -->


    <!-- *************************************
        *********** Begin page content ***********
        ************************************** -->
    <div id="page-content">


        <!-- =======================
            ///// Begin tt-section /////
            ============================
            * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
            -->
        <div class="tt-section">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-row">
                    <div class="tt-col-lg-4 padding-right-lg-5-p">

                        <!-- Begin tt-Heading
                            ======================
                            * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                            * Use class "tt-heading-stroke" to enable stroke style.
                            * Use class "tt-heading-center" to align tt-Heading to center.
                            * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                            -->
                        <div class="tt-heading tt-heading-sm margin-bottom-60 anim-fadeinup">
                            <h2 class="tt-heading-title text-gray">The<br class="hide-from-md"> Story</h2>
                            <!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
                        </div>
                        <!-- End tt-Heading -->

                    </div>
                    <!-- /.tt-col -->

                    <div class="tt-col-lg-8">

                        <div class="text-xxlg font-alter">
                            <p class="anim-fadeinup">Hello, we going manor who did. Do ye is considered occasion directly that. May ecstatic did surprise elegance the ignorant age. Own her miss cold. It so numerous if outlived possession.</p>

                            <p class="anim-fadeinup">Fat new smallness few supposing suspicion two. Course sir awesome <a href="https://1.envato.market/tank" target="_blank" rel="noopener">website teplates</a> add entire design. How one dull get busy dare far. At
                                principle perfectly by sweetness do. As mr started arrival.</p>
                        </div>

                    </div>
                    <!-- /.tt-col -->
                </div>
                <!-- /.tt-row -->

            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <!-- =======================
            ///// Begin tt-section /////
            ============================
            * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
            -->
        <div class="tt-section">
            <div class="tt-section-inner">

                <!-- =============================
                    ///// Begin content carousel /////
                    ==================================
                    * Use class "cc-shifted" to enable shifted style (no effect on small screens!).
                    * Use class "cursor-drag" to enable cursor drag on carousel hover ("data-simulate-touch" attribute must be enabled!).
                    * Use class "cc-scale-down" to enable scale down animation on carousel click.
                    * Use class "cc-pagination-outside" to bring pagination outside.
                    * Use class "cc-hide-pagination" to hide pagination (for desktop only!).
                    * Use class "cc-hide-navigation" to hide navigation arrows.
                    * Available data attributes:
                            data-speed="900"......................(milliseconds)
                            data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
                            data-simulate-touch="true"............(true/false)
                            data-loop="true"......................(true/false)
                            data-pagination-type="bullets"........(bullets/fraction/progressbar)
                    -->
                <div class="tt-content-carousel cc-shifted cursor-drag cc-scale-down cc-hide-pagination cc-hide-navigation" data-simulate-touch="true" data-speed="900">

                    <!-- Begin swiper container -->
                    <div class="swiper">

                        <!-- Begin swiper wrapper (required) -->
                        <div class="swiper-wrapper">

                            <!-- Begin swiper slide
                                ======================== -->
                            <div class="swiper-slide">
                                <div class="tt-content-carousel-item">
                                    <figure class="cover-opacity-1">
                                        <img class="tt-cc-image anim-image-parallax swiper-lazy" src="{{asset('front/img/low-qlt-thumb.jpg')}}" data-src="{{asset('front/img/misc/misc-1.jpg')}}" alt="Image">
                                        <!-- <figcaption>Image Caption</figcaption> -->
                                    </figure>
                                </div>
                                <!-- /.tt-content-carousel-item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide
                                ======================== -->
                            <div class="swiper-slide">
                                <div class="tt-content-carousel-item">
                                    <figure class="cover-opacity-1">
                                        <img class="tt-cc-image anim-image-parallax swiper-lazy" src="{{asset('front/img/low-qlt-thumb.jpg')}}" data-src="{{asset('front/img/misc/misc-2.jpg')}}" alt="Image">
                                        <!-- <figcaption>Image Caption</figcaption> -->
                                    </figure>
                                </div>
                                <!-- /.tt-content-carousel-item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide
                                ======================== -->
                            <div class="swiper-slide">
                                <div class="tt-content-carousel-item">
                                    <figure class="cover-opacity-1">
                                        <video class="tt-cc-video" loop muted preload="metadata" poster="{{asset('front/vids/office-team.webm')}}">
                                            <source src="{{asset('front/vids/office-team.webm')}}" type="video/mp4">
                                            <source src="{{asset('front/vids/office-team.webm')}}" type="video/webm">
                                        </video>
                                    </figure>
                                </div>
                                <!-- /.tt-content-carousel-item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide
                                ======================== -->
                            <div class="swiper-slide">
                                <div class="tt-content-carousel-item">
                                    <figure class="cover-opacity-1">
                                        <img class="tt-cc-image anim-image-parallax swiper-lazy" src="{{asset('front/img/low-qlt-thumb.jpg')}}" data-src="assets/img/misc/misc-3.jpg" alt="Image">
                                        <!-- <figcaption>Image Caption</figcaption> -->
                                    </figure>
                                </div>
                                <!-- /.tt-content-carousel-item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide
                                ======================== -->
                            <div class="swiper-slide">
                                <div class="tt-content-carousel-item">
                                    <figure class="cover-opacity-1">
                                        <img class="tt-cc-image anim-image-parallax swiper-lazy" src="{{asset('front/img/low-qlt-thumb.jpg')}}" data-src="assets/img/misc/misc-4.jpg" alt="Image">
                                        <!-- <figcaption>Image Caption</figcaption> -->
                                    </figure>
                                </div>
                                <!-- /.tt-content-carousel-item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide
                                ======================== -->
                            <div class="swiper-slide">
                                <div class="tt-content-carousel-item">
                                    <figure class="cover-opacity-1">
                                        <img class="tt-cc-image anim-image-parallax swiper-lazy" src="{{asset('front/img/low-qlt-thumb.jpg')}}" data-src="assets/img/misc/misc-5.jpg" alt="Image">
                                        <!-- <figcaption>Image Caption</figcaption> -->
                                    </figure>
                                </div>
                                <!-- /.tt-content-carousel-item -->
                            </div>
                            <!-- End swiper slide -->

                        </div>
                        <!-- End swiper wrapper -->

                    </div>
                    <!-- End swiper container -->

                    <!-- Begin content carousel navigation -->
                    <div class="tt-cc-nav-prev">
                        <div class="tt-cc-nav-arrow magnetic-item"></div>
                    </div>
                    <div class="tt-cc-nav-next">
                        <div class="tt-cc-nav-arrow magnetic-item"></div>
                    </div>
                    <!-- End content carousel navigation -->

                    <!-- Content carousel pagination -->
                    <div class="tt-cc-pagination hide-cursor"></div>

                </div>
                <!-- End content carousel -->

            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <!-- =======================
            ///// Begin tt-section /////
            ============================
            * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
            -->
        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-200">
            <div class="tt-section-inner tt-wrap">

                <!-- Begin tt-Heading
                    ======================
                    * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                    * Use class "tt-heading-stroke" to enable stroke style.
                    * Use class "tt-heading-center" to align tt-Heading to center.
                    * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                    -->
                <div class="tt-heading tt-heading-xxlg tt-heading-stroke tt-heading-center margin-bottom-10-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle text-gray">What We Do</h3>
                    <h2 class="tt-heading-title">Services</h2>
                </div>
                <!-- End tt-Heading -->

                <!-- Begin accordion
                    =====================
                    * Use class "tt-ac-sm", "tt-ac-lg", "tt-ac-xlg" or "tt-ac-xxlg" to set accordion size.
                    * Use class "tt-ac-borders" to enable borders.
                    * Add class "is-open" to the "tt-accordion-content" to make this content open by default.
                    -->
                <div class="tt-accordion tt-ac-xlg tt-ac-borders">
                    @foreach($services as $service)
                        <div class="tt-accordion-item anim-fadeinup">
                            <div class="tt-accordion-heading">
                                <h3 class="tt-ac-head-title">{{$service->title}}</h3>
                                <div class="tt-accordion-subtext">{{$service->subtext}}</div>
                                <div class="tt-accordion-caret-wrap">
                                    <div class="tt-accordion-caret magnetic-item"></div>
                                </div>
                            </div>
                            <!-- /.tt-accordion-heading -->
                            <div class="tt-accordion-content max-width-800">
                                <p>{!! Str::limit($service->description, 100)!!}</p>

                                <div class="tt-btn tt-btn-link">
                                    <a href="{{route('service.show',$service->id)}}" data-hover="Read More">Read More</a>
                                </div>
                            </div>
                            <!-- /.tt-accordion-content -->
                        </div>
                        <!-- /.tt-accordion-item -->
                    @endforeach
                </div>
                <!-- End accordion -->

            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <!-- =======================
            ///// Begin tt-section /////
            ============================
            * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
            -->
        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 padding-left-sm-3-p padding-right-sm-3-p bg-white-accent-2">
            <div class="tt-section-inner tt-wrapp">

                <!-- Begin testimonials slider
                    ===============================
                    * Use class "text-center" to align text to the center.
                    * Use class "cursor-drag" to enable cursor drag on carousel hover ("data-simulate-touch" attribute must be enabled!).
                    * Use class "ts-hide-pagination" to hide pagination (for desktop only!).
                    * Use class "ts-hide-navigation" to hide navigation arrows.
                    * Use class "ts-full-width" to enable full width slider.
                    * Available data attributes:
                            data-speed="900"......................(milliseconds)
                            data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
                            data-simulate-touch="true"............(true/false)
                            data-loop="true"......................(true/false)
                    -->
                <div class="tt-testimonials-slider text-center cursor-drag ts-scale-down ts-hide-navigation anim-fadeinup" data-loop="true" data-simulate-touch="true" data-speed="900">

                    <!-- Begin swiper container -->
                    <div class="swiper">

                        <!-- Begin swiper wrapper (required) -->
                        <div class="swiper-wrapper">
                            @foreach($testimonials as $testimonial)

                            <!-- Begin swiper slide
                                ======================== -->
                            <div class="swiper-slide font-alter">
                                <div class="tt-ts-item">
                                    <div class="tt-ts-text">
                                        {{$testimonial->description}}
                                    </div>
                                    <div class="tt-ts-subtext">- {{$testimonial->title}}</div>
                                </div>
                            </div>
                            <!-- End swiper slide -->
                            @endforeach

                        </div>
                        <!-- End swiper wrapper -->

                    </div>
                    <!-- End swiper container -->

                    <!-- Testimonials slider navigation (arrows) -->
                    <div class="tt-ts-nav-prev">
                        <div class="tt-ts-nav-arrow magnetic-item"></div>
                    </div>
                    <div class="tt-ts-nav-next">
                        <div class="tt-ts-nav-arrow magnetic-item"></div>
                    </div>

                    <!-- Testimonials slider pagination -->
                    <div class="tt-ts-pagination hide-cursor"></div>

                </div>
                <!-- End testimonials slider -->

            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <!-- =======================
            ///// Begin tt-section /////
            ============================
            * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
            -->
        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-row">
                    <div class="tt-col-lg-4 padding-right-md-5-p">

                        <!-- Begin tt-Heading
                                ======================
                                * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                                * Use class "tt-heading-stroke" to enable stroke style.
                                * Use class "tt-heading-center" to align tt-Heading to center.
                                * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                                -->
                        <div class="tt-heading tt-heading-sm margin-bottom-60 anim-fadeinup">
                            <h2 class="tt-heading-title text-gray">Honors &amp;<br class="hide-from-md"> Mentions</h2>
                            <!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
                        </div>
                        <!-- End tt-Heading -->

                    </div>
                    <!-- /.tt-col -->

                    <div class="tt-col-lg-4">

                        <ul class="list-styled">
                            <li class="anim-fadeinup">
                                <h5 class="no-margin"><a href="https://1.envato.market/tank" class="tt-link" target="_blank" rel="noopener">World Brand Design Awards</a></h5>
                                <p class="text-gray">Donec fringilla tortor at eros.</p>
                            </li>
                            <li class="anim-fadeinup">
                                <h5 class="no-margin"><a href="https://1.envato.market/tank" class="tt-link" target="_blank" rel="noopener">World Design Awards</a></h5>
                                <p class="text-gray">Cras quis hendrerit nulla.</p>
                            </li>
                            <li class="anim-fadeinup">
                                <h5 class="no-margin"><a href="https://1.envato.market/tank" class="tt-link" target="_blank" rel="noopener">Product Design Awards</a></h5>
                                <p class="text-gray">Pellentesque et fermentum.</p>
                            </li>
                            <li class="anim-fadeinup">
                                <h5 class="no-margin"><a href="https://1.envato.market/tank" class="tt-link" target="_blank" rel="noopener">Lighting Design Awards</a></h5>
                                <p class="text-gray">In non leo quis risus blandit.</p>
                            </li>
                        </ul>

                    </div>
                    <!-- /.tt-col -->

                    <div class="tt-col-lg-4">

                        <ul class="list-styled">
                            <li class="anim-fadeinup">
                                <h5 class="no-margin"><a href="https://1.envato.market/tank" class="tt-link" target="_blank" rel="noopener">Red Dot Award Design Concept</a></h5>
                                <p class="text-gray">Curabitur rhoncus ligula.</p>
                            </li>
                            <li class="anim-fadeinup">
                                <h5 class="no-margin"><a href="https://1.envato.market/tank" class="tt-link" target="_blank" rel="noopener">One Color Award</a></h5>
                                <p class="text-gray">Orci varius natoque penatibus.</p>
                            </li>
                            <li class="anim-fadeinup">
                                <h5 class="no-margin"><a href="https://1.envato.market/tank" class="tt-link" target="_blank" rel="noopener">London International Creative Competition</a></h5>
                                <p class="text-gray">Aliquam tellus leone.</p>
                            </li>
                            <li class="anim-fadeinup">
                                <h5 class="no-margin"><a href="https://1.envato.market/tank" class="tt-link" target="_blank" rel="noopener">Green Concept Award</a></h5>
                                <p class="text-gray">Phasellus a interdum tellus.</p>
                            </li>
                        </ul>

                    </div>
                    <!-- /.tt-col -->
                </div>
                <!-- /.tt-row -->

            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <!-- =======================
            ///// Begin tt-section /////
            ============================
            * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
            -->
        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 bg-white-accent-2">
            <div class="tt-section-inner tt-wrap">

                <!-- Begin tt-Heading
                    ======================
                    * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                    * Use class "tt-heading-stroke" to enable stroke style.
                    * Use class "tt-heading-center" to align tt-Heading to center.
                    * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                    -->
                <div class="tt-heading tt-heading-xxlg tt-heading-stroke tt-heading-center margin-bottom-10-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle text-gray">Proudly Served</h3>
                    <h2 class="tt-heading-title">Brands</h2>
                    <!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
                </div>
                <!-- End tt-Heading -->

                <!-- Begin logo wall
                    =====================
                    * Use class "cl-col-2", "cl-col-3" or "cl-col-4" to change columns.
                    * Hint: for better results make sure all your images are in the same dimensions!
                    -->
                <ul class="tt-logo-wall cl-col-44 anim-fadeinup">
                    <li>
                        <a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img src="{{asset('front/img/clients/client-1.png')}}" alt="Client"></a>
                    </li>
                    <li>
                        <a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img src="{{asset('front/img/clients/client-2.png')}}" alt="Client"></a>
                    </li>
                    <li>
                        <a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img src="{{asset('front/img/clients/client-3.png')}}" alt="Client"></a>
                    </li>
                    <li>
                        <a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img src="{{asset('front/img/clients/client-4.png')}}" alt="Client"></a>
                    </li>
                    <li>
                        <a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img src="{{asset('front/img/clients/client-5.png')}}" alt="Client"></a>
                    </li>
                    <li>
                        <a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img src="{{asset('front/img/clients/client-6.png')}}" alt="Client"></a>
                    </li>
                    <li>
                        <a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img src="{{asset('front/img/clients/client-7.png')}}" alt="Client"></a>
                    </li>
                    <li>
                        <a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img src="{{asset('front/img/clients/client-8.png')}}" alt="Client"></a>
                    </li>
                    <li>
                        <a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img src="{{asset('front/img/clients/client-9.png')}}" alt="Client"></a>
                    </li>
                    <li>
                        <a href="https://1.envato.market/tank" class="cursor-alter" target="_blank" rel="noopener"><img src="{{asset('front/img/clients/client-10.png')}}" alt="Client"></a>
                    </li>

                    <!-- Use the below example if you want a list without links -->
                    <!-- <li><img src="assets/img/clients/client-1.png" alt="Client"></li> -->
                </ul>
                <!-- End logo wall -->

            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <!-- =======================
            ///// Begin tt-section /////
            ============================
            * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
            -->
        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">

                <!-- Begin page nav
                    ====================
                    * Use class "tt-pn-stroke" to enable title stroke style.
                    * Use class "tt-pn-scroll" to enable hover title scroll. Note: If "tt-pn-hover-title" text is wider than "tt-pn-link" then it scrolls by default. The longer the text, the faster it scrolls.
                    -->
                <div class="tt-page-nav tt-pn-scroll">
                    <a href="{{route('portfolio-grid')}}" class="tt-pn-link anim-fadeinup">
                        <div class="tt-pn-title">Portfolio</div>
                        <div class="tt-pn-hover-title">Portfolio</div>
                    </a>
                    <!-- /.tt-pn-link -->

                    <div class="tt-pn-subtitle anim-fadeinup">Selected Works</div>

                    <!-- Use if destination page contains page header image -->
                    <div class="tt-pn-image">
                        <img src="{{asset('front/img/page-header/ph-1.jpg')}}" alt="image">
                    </div>
                </div>
                <!-- End page nav -->
            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


    </div>
    <!-- End page content -->


</div>

@endsection
