@extends('fronte.layouts.master')

@section('content')
<div id="content-wrap">
        <div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-image-cover-2 ph-content-parallax">
            <div class="page-header-inner tt-wrap">

                <!-- Begin page header image
                    ============================= -->
                <div class="ph-image">
                    <div class="ph-image-inner">
                        <img src="{{asset('front/img/page-header/ph-1.jpg')}}" alt="Image">
                    </div>
                </div>
                <!-- End page header image -->

                <!-- Begin page header caption
                    ===============================
                    Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
                    -->
                <div class="ph-caption">
                    <h1 class="ph-caption-title ph-appear">Portfolio</h1>
                    <div class="ph-caption-title-ghost ph-appear">Portfolio</div>
                    <div class="ph-caption-subtitle ph-appear">Selected Works</div>
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
            <div class="tt-section padding-bottom-xlg-150">
                <div class="tt-section-inner tt-wrap max-width-1400">

                    <!-- Begin portfolio interactive
                        =================================
                        * Use class "pi-compact" to enable compact style.
                        * Use class "pi-borders" to enable borders.
                        * Use class "pi-stroke" to enable title stroke style.
                        * Use class "pi-force-scroll" to also force shorter hover titles to scroll. Note: If "pi-item-title" text is wider than "pi-item-title-link" then hover title scrolls by default (the longer the text, the faster it scrolls). You may need to adjust the "data-scroll-speed" attribute on each item separately to find a suitable speed. No effect on mobile devices!
                        -->
                    <div class="portfolio-interactive pi-borders pi-stroke pi-force-scroll">

                        <!-- Begin portfolio interactive item
                            ======================================
                            * Adjust the "data-scroll-speed" attribute to find a suitable scrolling speed (no effect on mobile devices!).
                            -->
                        @foreach($portfolios as $portfolio )

                        <div class="portfolio-interactive-item anim-skewinup" data-scroll-speed="3">
                            <a href="{{route('portfolios.show', $portfolio->id)}}" class="pi-item-title-link">
                                <h2 class="pi-item-title">{{$portfolio->title}}</h2>
                                <div class="pi-item-hover-title">{{$portfolio->title}}</div>
                            </a>
                            <div class="pi-item-category-wrap">
                                <div class="pi-item-category">{{$portfolio->category->title}}</div>
                                <!-- <div class="pi-item-category">Varia</div> -->
                            </div>
                            <figure class="pi-item-image cover-opacity-2">
                                <img src="{{asset('storage/'. $portfolio->coverImg)}}" alt="image">
                            </figure>
                        </div>
                        @endforeach

                        <!-- End portfolio interactive item -->


                    </div>
                    <!-- End portfolio interactive -->


                </div>
                <!-- /.tt-section-inner -->
            </div>
            <!-- End tt-section -->


            <!-- =======================
                ///// Begin tt-section /////
                ============================
                * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                -->
            <div class="tt-section padding-bottom-xlg-150">
                <div class="tt-section-inner tt-wrap">

                    <!-- Begin page nav
                        ====================
                        * Use class "tt-pn-stroke" to enable title stroke style.
                        * Use class "tt-pn-scroll" to enable hover title scroll. Note: If "tt-pn-hover-title" text is wider than "tt-pn-link" then it scrolls by default. The longer the text, the faster it scrolls.
                        -->
                    <div class="tt-page-nav tt-pn-scroll">
                        <a href="{{route('contact')}}" class="tt-pn-link anim-fadeinup">
                            <div class="tt-pn-title">Let's talk</div>
                            <div class="tt-pn-hover-title">Let's talk</div>
                        </a>
                        <!-- /.tt-pn-link -->

                        <div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>

                        <!-- Use if destination page contains page header image -->
                        <div class="tt-pn-image">
                            <img src="assets/img/page-header/ph-3.jpg" alt="image">
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
