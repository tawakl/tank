@extends('fronte.layouts.master')

@section('content')
<div id="content-wrap">


        <!-- ========================
            ///// Begin page header /////
            =============================
            * ATENTION: This page header is slightly different from the default page header!
            It contains some extra elements and classes specifically for a portfolio single project.
            =============================
            * Use class "ph-full" to enable fullscreen size.
            * Use class "ph-cap-sm", "ph-cap-lg", "ph-cap-xlg" or "ph-cap-xxlg" to set caption size (no class = default size).).
            * Use class "ph-center" to enable content center position.
            * Use class "ph-bg-image" to enable page header background image (required for a portfolio single project!).
            * Use class "ph-bg-image-is-light" if needed, it makes the elements dark and more visible if you use a very light image (effect only with class "ph-bg-image").
            * Use class "ph-image-shadow" to enable page header background image (effect only with class "ph-bg-image").
            * Use class "ph-image-cropped" to crop image. It fixes image dimensions (no effect for "ph-bg-image"!).
            * Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5").
            * Use class "ph-content-parallax" to enable content parallax.
            * Use class "ph-stroke" to enable caption title stroke style.
            * Use class "ph-inline" to enable content inline position (for a single project page only! No effect with class "ph-center"!).
            -->
        <div id="page-header" class="ph-full ph-bg-image ph-image-shadow ph-image-cover-5 ph-content-parallax">
            <div class="page-header-inner tt-wrap">

                <!-- Begin page header image
                    ============================= -->
                <div class="ph-image">
                    <div class="ph-image-inner">
                        <!-- <img src="assets/img/page-header/project-ph/project-ph-2.jpg" alt="Image"> -->

                        <div class="ph-video-wrap">
                            <video class="ph-video" loop muted autoplay preload="metadata" poster="assets/vids/fashion-week.jpg">
                                <source src="assets/vids/fashion-week.mp4" type="video/mp4">
                                <source src="assets/vids/fashion-week.webm" type="video/webm">
                            </video>
                        </div>
                    </div>
                </div>
                <!-- End page header image -->

                <!-- Begin page header caption
                    ===============================
                    Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
                    -->
                <div class="ph-caption">
                    <div class="ph-categories ph-appear">
                        <div class="ph-category" style="">People</div>
                        <!-- <div class="ph-category">Varia</div> -->
                    </div>
                    <!-- /.ph-categories -->

                    <h2 class="ph-caption-title ph-appear">Fashion Week</h2>
                    <!-- You can use <br class="hide-from-lg"> to break a text line if needed -->
                    <!-- <h4 class="ph-caption-subtitle ph-appear">Subtitle</h4> -->
                </div>
                <!-- End page header caption -->

                <!-- Begin project info list
                    =============================
                    * You can use the project info list as a standalone element outside of the page header if you want.
                    * Class "ph-appear" is for page header only!
                    -->
                <div class="project-info-list">
                    <ul>
                        <li>
                            <div class="pi-list-heading">Client</div>
                            <div class="pi-list-cont">Themetorium</div>
                        </li>
                        <li>
                            <div class="pi-list-heading">Year</div>
                            <div class="pi-list-cont">2021</div>
                        </li>
                        <li>
                            <div class="pi-list-heading">Role</div>
                            <div class="pi-list-cont">Visualization</div>
                            <!-- Describe in a few words -->
                        </li>
                        <li>
                            <div class="pi-list-heading">Website</div>
                            <div class="pi-list-cont"><a href="https://themetorium.net" target="_blank" rel="noopener">Visit site<span class="pi-list-icon"><i class="fas fa-arrow-right"></i></span></a></div>
                        </li>
                    </ul>
                </div>
                <!-- End project info list -->

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

            <!-- Begin page header share (share buttons are for design purposes only!)
                ============================= -->
            <div class="ph-share">
                <div class="ph-share-trigger ph-appear">
                    <div class="ph-share-text">Share</div>
                    <div class="ph-share-icon magnetic-item"><i class="fas fa-share-alt"></i></div>
                </div>
                <!-- /.ph-share-trigger -->

                <div class="ph-share-content">
                    <div class="ph-share-close cursor-close">
                        <div class="bg-noise"></div>
                    </div>
                    <div class="ph-share-inner">
                        <h1 class="ph-share-title ph-share-appear">Spread the Word!</h1>
                        <div class="ph-share-subtitle ph-share-appear">Share this project with your friends</div>

                        <div class="social-buttons ph-share-appear">
                            <ul>
                                <li><a href="#0" class="magnetic-item" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#0" class="magnetic-item" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#0" class="magnetic-item" title="Share on Pinterest"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.social-buttons -->

                    </div>
                    <!-- /.ph-share-inner -->

                    <div class="ph-share-ghost ph-share-appear">Share</div>
                </div>
                <!-- /.ph-share-content -->
            </div>
            <!-- End page header share -->

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
            <div class="tt-section padding-top-xlg-180 padding-left-sm-3-p padding-right-sm-3-p">
                <div class="tt-section-inner tt-wrap">

                    <div class="tt-row">
                        <div class="tt-col-lg-8">

                            <!-- Begin tt-Heading
                                ======================
                                * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                                * Use class "tt-heading-stroke" to enable stroke style.
                                * Use class "tt-heading-center" to align tt-Heading to center.
                                * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                                -->
                            <div class="tt-heading tt-heading-xsm anim-fadeinup">
                                <h2 class="tt-heading-title">About</h2>
                                <!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
                            </div>
                            <!-- End tt-Heading -->

                            <div class="anim-fadeinup text-gray">
                                <p>Pleased him another was settled for. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire. Stanhill on we if vicinity material in. Saw him smallest you provided ecstatic
                                    supplied. Garret wanted expect remain as mr. Covered parlors concern we express in visited to do.</p>

                                <!-- <div class="tt-btn tt-btn-link no-margin">
                                        <a href="dummy-page.html" data-hover="Explore More">Explore More</a>
                                    </div> -->
                            </div>

                        </div>
                        <!-- /.tt-col -->

                        <div class="tt-col-lg-4">
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
            <div class="tt-section padding-bottom-lg-150">
                <div class="tt-section-inner">

                    <!-- Begin tt-image
                        ====================
                        * Use class "tti-fixed-height" to enable image fixed height (no effect on small screens!).
                        * Use class "anim-image-parallax" on <img> tag to enable parallax effect.
                        * Use class "margin-bottom-*" to enable bottom margins. For example "margin-bottom-100". More info about helper classes can be found in the file "helper.css".
                        -->
                    <div class="tt-image lightgallery tti-fixed-height">
                        <a href="" class="lg-trigger" data-cursor="Play" data-html="
										<video class='lg-video-object lg-html5' controls playsinline preload='auto'>
											<source src='assets/vids/fashion-week.mp4' type='video/mp4'>
											<source src='assets/vids/fashion-week.webm' type='video/webm'>
										</video>">

                            <figure class="cover-opacity-2">
                                <img class="anim-image-parallax tt-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/single-project/project-3/project-3-1.jpg" alt="image">
                                <!-- <figcaption>
                                        Image Caption
                                    </figcaption> -->
                            </figure>

                            <!-- Play button for mobile devices only -->
                            <div class="align-center z-index-2 hide-to-mobile">
                                <div class="tt-btn tt-btn-light tt-btn-round anim-fadeinup">
                                    <div data-hover="Play">Play</div>
                                    <!-- Use short text only! -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End tt-image -->

                </div>
                <!-- /.tt-section-inner -->
            </div>
            <!-- End tt-section -->


            <!-- =======================
                ///// Begin tt-section /////
                ============================
                * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                -->
            <div class="tt-section padding-left-sm-3-p padding-right-sm-3-p">
                <div class="tt-section-inner tt-wrap">

                    <div class="tt-row">
                        <div class="tt-col-lg-4">
                        </div>
                        <!-- /.tt-col -->

                        <div class="tt-col-lg-8">

                            <!-- Begin tt-Heading
                                    ======================
                                    * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                                    * Use class "tt-heading-stroke" to enable stroke style.
                                    * Use class "tt-heading-center" to align tt-Heading to center.
                                    * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                                    -->
                            <div class="tt-heading tt-heading-xsm anim-fadeinup">
                                <h2 class="tt-heading-title">The Mission</h2>
                                <!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
                            </div>
                            <!-- End tt-Heading -->

                            <div class="anim-fadeinup text-gray">
                                <p>Cause dried no solid no an small so still widen. Ten weather evident smiling bed against she examine its. Rendered far opinions two yet moderate sex striking. Sufficient motionless compliment by stimulated assistance
                                    at. Convinced resolving extensive agreeable in it on as remainder. Cordially say affection met who propriety him.</p>
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
            <div class="tt-section no-padding-bottom">
                <div class="tt-section-inner tt-wrap max-width-1600">

                    <!-- Begin tt-Gallery (works combined with tt-Ggrid!)
                        ======================
                        * Use class "ttga-hover" to enable gallery item hover effect (behavior depends on "ttgr-gap-*" classes below).
                        -->
                    <div class="tt-gallery ttga-hover">

                        <!-- Begin tt-Grid
                            ===================
                            * Use class "ttgr-layout-2", "ttgr-layout-3", "ttgr-layout-4" to set grid layout (columns). No class = one column.
                            * Use class "ttgr-layout-1-2", "ttgr-layout-2-1", "ttgr-layout-2-3", "ttgr-layout-3-2", "ttgr-layout-3-4" or "ttgr-layout-4-3" to set grid mixed layout (columns).
                            * Use class "ttgr-layout-creative-1" or "ttgr-layout-creative-2" to set grid creative mixed layout (no effect with classes "ttgr-portrait", "ttgr-portrait-half", "ttgr-not-cropped" and "ttgr-shifted").
                            * Use class "ttgr-portrait" or "ttgr-portrait-half" to enable portrait mode (no effect with classes "ttgr-layout-creative-1", "ttgr-layout-creative-2" and "ttgr-not-cropped").
                            * Use class "ttgr-gap-1", "ttgr-gap-2", "ttgr-gap-3", "ttgr-gap-4", "ttgr-gap-5" or "ttgr-gap-6" to add space between items.
                            * Use class "ttgr-not-cropped" to enable not cropped mode (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
                            * Use class "ttgr-shifted" to enable shifted layout (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
                            -->
                        <div class="tt-grid ttgr-layout-3 ttgr-not-cropped ttgr-shifted ttgr-gap-4">

                            <!-- Begin tt-Grid items wrap
                                ============================== -->
                            <div class="tt-grid-items-wrap isotope-items-wrap lightgallery">

                                <!-- Begin tt-Grid item
                                    ======================== -->
                                <div class="tt-grid-item isotope-item">
                                    <div class="ttgr-item-inner">

                                        <!-- Begin tt-Gallery item
                                            =========================== -->
                                        <a href="assets/img/portfolio/single-project/project-3/project-3-2.jpg" class="tt-gallery-item lg-trigger" data-cursor="View">
                                            <div class="tt-gallery-item-inner">
                                                <div class="tt-gallery-image-wrap anim-zoomin">
                                                    <figure class="tt-gallery-image ttgr-height">
                                                        <img src="assets/img/portfolio/single-project/project-3/project-3-2.jpg" alt="image">
                                                    </figure>
                                                    <!-- /.tt-gallery-image -->
                                                </div>
                                                <!-- /.tt-gallery-image-wrap -->
                                            </div>
                                            <!-- /.tt-gallery-item-inner -->
                                        </a>
                                        <!-- End tt-Gallery item -->

                                    </div>
                                    <!-- /.ttgr-item-inner -->
                                </div>
                                <!-- End tt-Grid item -->

                                <!-- Begin tt-Grid item
                                    ======================== -->
                                <div class="tt-grid-item isotope-item">
                                    <div class="ttgr-item-inner">

                                        <!-- Begin tt-Gallery item
                                            =========================== -->
                                        <a href="assets/img/portfolio/single-project/project-3/project-3-3.jpg" class="tt-gallery-item lg-trigger" data-cursor="View">
                                            <div class="tt-gallery-item-inner">
                                                <div class="tt-gallery-image-wrap anim-zoomin">
                                                    <figure class="tt-gallery-image ttgr-height">
                                                        <img src="assets/img/portfolio/single-project/project-3/project-3-3.jpg" alt="image">
                                                    </figure>
                                                    <!-- /.tt-gallery-image -->
                                                </div>
                                                <!-- /.tt-gallery-image-wrap -->
                                            </div>
                                            <!-- /.tt-gallery-item-inner -->
                                        </a>
                                        <!-- End tt-Gallery item -->

                                    </div>
                                    <!-- /.ttgr-item-inner -->
                                </div>
                                <!-- End tt-Grid item -->

                                <!-- Begin tt-Grid item
                                    ======================== -->
                                <div class="tt-grid-item isotope-item">
                                    <div class="ttgr-item-inner">

                                        <!-- Begin tt-Gallery item
                                            =========================== -->
                                        <a href="assets/img/portfolio/single-project/project-3/project-3-4.jpg" class="tt-gallery-item lg-trigger" data-cursor="View" data-sub-html="Yes, you can use image captions. :)">
                                            <div class="tt-gallery-item-inner">
                                                <div class="tt-gallery-image-wrap anim-zoomin">
                                                    <figure class="tt-gallery-image ttgr-height">
                                                        <img src="assets/img/portfolio/single-project/project-3/project-3-4.jpg" alt="image">
                                                    </figure>
                                                    <!-- /.tt-gallery-image -->
                                                </div>
                                                <!-- /.tt-gallery-image-wrap -->
                                            </div>
                                            <!-- /.tt-gallery-item-inner -->
                                        </a>
                                        <!-- End tt-Gallery item -->

                                    </div>
                                    <!-- /.ttgr-item-inner -->
                                </div>
                                <!-- End tt-Grid item -->

                                <!-- Begin tt-Grid item
                                    ======================== -->
                                <div class="tt-grid-item isotope-item">
                                    <div class="ttgr-item-inner">

                                        <!-- Begin tt-Gallery item
                                            =========================== -->
                                        <a href="assets/img/portfolio/single-project/project-3/project-3-5.jpg" class="tt-gallery-item lg-trigger" data-cursor="View">
                                            <div class="tt-gallery-item-inner">
                                                <div class="tt-gallery-image-wrap anim-zoomin">
                                                    <figure class="tt-gallery-image ttgr-height">
                                                        <img src="assets/img/portfolio/single-project/project-3/project-3-5.jpg" alt="image">
                                                    </figure>
                                                    <!-- /.tt-gallery-image -->
                                                </div>
                                                <!-- /.tt-gallery-image-wrap -->
                                            </div>
                                            <!-- /.tt-gallery-item-inner -->
                                        </a>
                                        <!-- End tt-Gallery item -->

                                    </div>
                                    <!-- /.ttgr-item-inner -->
                                </div>
                                <!-- End tt-Grid item -->

                                <!-- Begin tt-Grid item
                                    ======================== -->
                                <div class="tt-grid-item isotope-item">
                                    <div class="ttgr-item-inner">

                                        <!-- Begin tt-Gallery item
                                            =========================== -->
                                        <a href="assets/img/portfolio/single-project/project-3/project-3-6.jpg" class="tt-gallery-item lg-trigger" data-cursor="View">
                                            <div class="tt-gallery-item-inner">
                                                <div class="tt-gallery-image-wrap anim-zoomin">
                                                    <figure class="tt-gallery-image ttgr-height">
                                                        <img src="assets/img/portfolio/single-project/project-3/project-3-6.jpg" alt="image">
                                                    </figure>
                                                    <!-- /.tt-gallery-image -->
                                                </div>
                                                <!-- /.tt-gallery-image-wrap -->
                                            </div>
                                            <!-- /.tt-gallery-item-inner -->
                                        </a>
                                        <!-- End tt-Gallery item -->

                                    </div>
                                    <!-- /.ttgr-item-inner -->
                                </div>
                                <!-- End tt-Grid item -->

                                <!-- Begin tt-Grid item
                                    ======================== -->
                                <div class="tt-grid-item isotope-item">
                                    <div class="ttgr-item-inner">

                                        <!-- Begin tt-Gallery item
                                            =========================== -->
                                        <a href="assets/img/portfolio/single-project/project-3/project-3-7.jpg" class="tt-gallery-item lg-trigger" data-cursor="View">
                                            <div class="tt-gallery-item-inner">
                                                <div class="tt-gallery-image-wrap anim-zoomin">
                                                    <figure class="tt-gallery-image ttgr-height">
                                                        <img src="assets/img/portfolio/single-project/project-3/project-3-7.jpg" alt="image">
                                                    </figure>
                                                    <!-- /.tt-gallery-image -->
                                                </div>
                                                <!-- /.tt-gallery-image-wrap -->
                                            </div>
                                            <!-- /.tt-gallery-item-inner -->
                                        </a>
                                        <!-- End tt-Gallery item -->

                                    </div>
                                    <!-- /.ttgr-item-inner -->
                                </div>
                                <!-- End tt-Grid item -->

                            </div>
                            <!-- End tt-Grid items wrap  -->

                        </div>
                        <!-- End tt-Grid -->

                    </div>
                    <!-- End tt-Gallery -->

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
                        <a href="single-project-3.html" class="tt-pn-link anim-fadeinup">
                            <div class="tt-pn-title">Next Project</div>
                            <div class="tt-pn-hover-title">Mystery Forest</div>
                        </a>
                        <!-- /.tt-pn-link -->

                        <div class="tt-pn-subtitle anim-fadeinup">Explore More</div>

                        <!-- Use if destination page contains page header image -->
                        <div class="tt-pn-image">
                            <img src="assets/img/portfolio/portfolio-3.jpg" alt="image">
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
