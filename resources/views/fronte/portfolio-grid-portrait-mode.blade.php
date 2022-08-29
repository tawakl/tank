@extends('fronte.layouts.master')

@section('content')
<div id="content-wrap">


        <!-- *************************************
            *********** Begin page content ***********
            ************************************** -->
        <div id="page-content">


            <!-- ======================================================
                ///// Begin portfolio carousel (full screen carousel) /////
                ===========================================================
                * Use class "pc-scale-down" to enable scale down animation on click (data-simulate-touch attribute must be enabled).
                * Use class "cursor-drag-mouse-down" to enable cursor drag style on mouse down (data-simulate-touch attribute must be enabled).
                * Use class "pci-hover" to enable item hover effect.
                * Use class "pci-caption-center" to set caption position.
                * Use class "pci-caption-stroke" to enable caption title stroke style.
                * Available data attributes:
                        data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
                        data-mousewheel="true"................(true/false)
                        data-keyboard="true"..................(true/false)
                        data-simulate-touch="true"............(true/false)
                        data-grab-cursor="true"...............(true/false)
                        data-pagination-type="fraction".......(bullets/fraction/progressbar)
                -->
            <div class="tt-portfolio-carousel pci-hover pci-caption-stroke cursor-drag-mouse-down pc-scale-down" data-simulate-touch="true" data-mousewheel="true" data-keyboard="true" data-grab-cursor="true" data-pagination-type="fraction">

                <!-- Begin swiper container -->
                <div class="swiper">

                    <!-- Begin swiper wrapper (required) -->
                    <div class="swiper-wrapper">

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">

                            <!-- Begin portfolio carousel item
                                ===================================
                                * Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
                                -->
                            <a href="single-project-1.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

                                <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                                <figure class="tt-pci-image-wrap cover-opacity-2">
                                    <img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-1.jpg" alt="Image">
                                </figure>
                                <!-- /.tt-pci-image-wrap -->

                                <div class="tt-pci-caption-front">
                                    <div class="tt-pci-caption">
                                        <div class="tt-pci-caption-inner">
                                            <h2 class="tt-pci-title">Victorian<br class="hide-from-sm"> Girls</h2>
                                            <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                            <div class="tt-pci-categories">
                                                <div class="tt-pci-category">People</div>
                                                <!-- <div class="tt-pci-category">Varia</div> -->
                                            </div>
                                            <!-- /.tt-pci-categories -->
                                        </div>
                                        <!-- /.tt-pci-caption-inner -->
                                    </div>
                                    <!-- /.tt-pci-caption -->
                                </div>
                                <!-- /.tt-pci-caption-front -->

                                <div class="tt-pci-caption tt-pci-caption-back">
                                    <div class="tt-pci-caption-inner">
                                        <h2 class="tt-pci-title">Victorian<br class="hide-from-sm"> Girls</h2>
                                        <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            <div class="tt-pci-category">People</div>
                                            <!-- <div class="tt-pci-category">Varia</div> -->
                                        </div>
                                        <!-- /.tt-pci-categories -->
                                    </div>
                                    <!-- /.tt-pci-caption-inner -->
                                </div>
                                <!-- /.tt-pci-caption -->
                            </a>
                            <!-- End portfolio carousel item -->

                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">

                            <!-- Begin portfolio carousel item
                                ===================================
                                * Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
                                -->
                            <a href="single-project-2.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

                                <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                                <figure class="tt-pci-image-wrap cover-opacity-2">
                                    <img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-2.jpg" alt="Image">
                                </figure>
                                <!-- /.tt-pci-image-wrap -->

                                <div class="tt-pci-caption-front">
                                    <div class="tt-pci-caption">
                                        <div class="tt-pci-caption-inner">
                                            <h2 class="tt-pci-title">Smithy</h2>
                                            <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                            <div class="tt-pci-categories">
                                                <div class="tt-pci-category">Creative</div>
                                                <!-- <div class="tt-pci-category">Varia</div> -->
                                            </div>
                                            <!-- /.tt-pci-categories -->
                                        </div>
                                        <!-- /.tt-pci-caption-inner -->
                                    </div>
                                    <!-- /.tt-pci-caption -->
                                </div>
                                <!-- /.tt-pci-caption-front -->

                                <div class="tt-pci-caption tt-pci-caption-back">
                                    <div class="tt-pci-caption-inner">
                                        <h2 class="tt-pci-title">Smithy</h2>
                                        <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            <div class="tt-pci-category">Creative</div>
                                            <!-- <div class="tt-pci-category">Varia</div> -->
                                        </div>
                                        <!-- /.tt-pci-categories -->
                                    </div>
                                    <!-- /.tt-pci-caption-inner -->
                                </div>
                                <!-- /.tt-pci-caption -->
                            </a>
                            <!-- End portfolio carousel item -->

                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">

                            <!-- Begin portfolio carousel item
                                ===================================
                                * Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
                                -->
                            <a href="single-project-3.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

                                <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                                <figure class="tt-pci-image-wrap cover-opacity-2">
                                    <video class="tt-pci-video" loop muted preload="metadata" poster="assets/vids/fashion-week.jpg">
                                        <source src="assets/vids/fashion-week.mp4" type="video/mp4">
                                        <source src="assets/vids/fashion-week.webm" type="video/webm">
                                    </video>
                                </figure>
                                <!-- /.tt-pci-image-wrap -->

                                <div class="tt-pci-caption-front">
                                    <div class="tt-pci-caption">
                                        <div class="tt-pci-caption-inner">
                                            <h2 class="tt-pci-title">Fashion<br class="hide-from-sm"> Week</h2>
                                            <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                            <div class="tt-pci-categories">
                                                <div class="tt-pci-category">People</div>
                                                <!-- <div class="tt-pci-category">Varia</div> -->
                                            </div>
                                            <!-- /.tt-pci-categories -->
                                        </div>
                                        <!-- /.tt-pci-caption-inner -->
                                    </div>
                                    <!-- /.tt-pci-caption -->
                                </div>
                                <!-- /.tt-pci-caption-front -->

                                <div class="tt-pci-caption tt-pci-caption-back">
                                    <div class="tt-pci-caption-inner">
                                        <h2 class="tt-pci-title">Fashion<br class="hide-from-sm"> Week</h2>
                                        <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            <div class="tt-pci-category">People</div>
                                            <!-- <div class="tt-pci-category">Varia</div> -->
                                        </div>
                                        <!-- /.tt-pci-categories -->
                                    </div>
                                    <!-- /.tt-pci-caption-inner -->
                                </div>
                                <!-- /.tt-pci-caption -->
                            </a>
                            <!-- End portfolio carousel item -->

                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">

                            <!-- Begin portfolio carousel item
                                ===================================
                                * Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
                                -->
                            <a href="single-project-4.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

                                <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                                <figure class="tt-pci-image-wrap cover-opacity-2">
                                    <img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-3.jpg" alt="Image">
                                </figure>
                                <!-- /.tt-pci-image-wrap -->

                                <div class="tt-pci-caption-front">
                                    <div class="tt-pci-caption">
                                        <div class="tt-pci-caption-inner">
                                            <h2 class="tt-pci-title">Mystery<br class="hide-from-sm"> Forest</h2>
                                            <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                            <div class="tt-pci-categories">
                                                <div class="tt-pci-category">Nature</div>
                                                <!-- <div class="tt-pci-category">Varia</div> -->
                                            </div>
                                            <!-- /.tt-pci-categories -->
                                        </div>
                                        <!-- /.tt-pci-caption-inner -->
                                    </div>
                                    <!-- /.tt-pci-caption -->
                                </div>
                                <!-- /.tt-pci-caption-front -->

                                <div class="tt-pci-caption tt-pci-caption-back">
                                    <div class="tt-pci-caption-inner">
                                        <h2 class="tt-pci-title">Mystery<br class="hide-from-sm"> Forest</h2>
                                        <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            <div class="tt-pci-category">Nature</div>
                                            <!-- <div class="tt-pci-category">Varia</div> -->
                                        </div>
                                        <!-- /.tt-pci-categories -->
                                    </div>
                                    <!-- /.tt-pci-caption-inner -->
                                </div>
                                <!-- /.tt-pci-caption -->
                            </a>
                            <!-- End portfolio carousel item -->

                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">

                            <!-- Begin portfolio carousel item
                                ===================================
                                * Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
                                -->
                            <a href="single-project-5.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

                                <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                                <figure class="tt-pci-image-wrap cover-opacity-2">
                                    <img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-4.jpg" alt="Image">
                                </figure>
                                <!-- /.tt-pci-image-wrap -->

                                <div class="tt-pci-caption-front">
                                    <div class="tt-pci-caption">
                                        <div class="tt-pci-caption-inner">
                                            <h2 class="tt-pci-title">Red<br class="hide-from-sm"> Package</h2>
                                            <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                            <div class="tt-pci-categories">
                                                <div class="tt-pci-category">Branding</div>
                                                <!-- <div class="tt-pci-category">Varia</div> -->
                                            </div>
                                            <!-- /.tt-pci-categories -->
                                        </div>
                                        <!-- /.tt-pci-caption-inner -->
                                    </div>
                                    <!-- /.tt-pci-caption -->
                                </div>
                                <!-- /.tt-pci-caption-front -->

                                <div class="tt-pci-caption tt-pci-caption-back">
                                    <div class="tt-pci-caption-inner">
                                        <h2 class="tt-pci-title">Red<br class="hide-from-sm"> Package</h2>
                                        <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            <div class="tt-pci-category">Branding</div>
                                            <!-- <div class="tt-pci-category">Varia</div> -->
                                        </div>
                                        <!-- /.tt-pci-categories -->
                                    </div>
                                    <!-- /.tt-pci-caption-inner -->
                                </div>
                                <!-- /.tt-pci-caption -->
                            </a>
                            <!-- End portfolio carousel item -->

                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">

                            <!-- Begin portfolio carousel item
                                ===================================
                                * Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
                                -->
                            <a href="single-project-6.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

                                <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                                <figure class="tt-pci-image-wrap cover-opacity-2">
                                    <img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-5.jpg" alt="Image">
                                </figure>
                                <!-- /.tt-pci-image-wrap -->

                                <div class="tt-pci-caption-front">
                                    <div class="tt-pci-caption">
                                        <div class="tt-pci-caption-inner">
                                            <h2 class="tt-pci-title">Studio<br class="hide-from-sm"> Shoot</h2>
                                            <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                            <div class="tt-pci-categories">
                                                <div class="tt-pci-category">People</div>
                                                <!-- <div class="tt-pci-category">Varia</div> -->
                                            </div>
                                            <!-- /.tt-pci-categories -->
                                        </div>
                                        <!-- /.tt-pci-caption-inner -->
                                    </div>
                                    <!-- /.tt-pci-caption -->
                                </div>
                                <!-- /.tt-pci-caption-front -->

                                <div class="tt-pci-caption tt-pci-caption-back">
                                    <div class="tt-pci-caption-inner">
                                        <h2 class="tt-pci-title">Studio<br class="hide-from-sm"> Shoot</h2>
                                        <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            <div class="tt-pci-category">People</div>
                                            <!-- <div class="tt-pci-category">Varia</div> -->
                                        </div>
                                        <!-- /.tt-pci-categories -->
                                    </div>
                                    <!-- /.tt-pci-caption-inner -->
                                </div>
                                <!-- /.tt-pci-caption -->
                            </a>
                            <!-- End portfolio carousel item -->

                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">

                            <!-- Begin portfolio carousel item
                                ===================================
                                * Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
                                -->
                            <a href="single-project-7.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

                                <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                                <figure class="tt-pci-image-wrap cover-opacity-2">
                                    <img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-6.jpg" alt="Image">
                                </figure>
                                <!-- /.tt-pci-image-wrap -->

                                <div class="tt-pci-caption-front">
                                    <div class="tt-pci-caption">
                                        <div class="tt-pci-caption-inner">
                                            <h2 class="tt-pci-title">Breaking<br class="hide-from-sm"> Wave</h2>
                                            <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                            <div class="tt-pci-categories">
                                                <div class="tt-pci-category">Nature</div>
                                                <!-- <div class="tt-pci-category">Varia</div> -->
                                            </div>
                                            <!-- /.tt-pci-categories -->
                                        </div>
                                        <!-- /.tt-pci-caption-inner -->
                                    </div>
                                    <!-- /.tt-pci-caption -->
                                </div>
                                <!-- /.tt-pci-caption-front -->

                                <div class="tt-pci-caption tt-pci-caption-back">
                                    <div class="tt-pci-caption-inner">
                                        <h2 class="tt-pci-title">Breaking<br class="hide-from-sm"> Wave</h2>
                                        <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            <div class="tt-pci-category">Nature</div>
                                            <!-- <div class="tt-pci-category">Varia</div> -->
                                        </div>
                                        <!-- /.tt-pci-categories -->
                                    </div>
                                    <!-- /.tt-pci-caption-inner -->
                                </div>
                                <!-- /.tt-pci-caption -->
                            </a>
                            <!-- End portfolio carousel item -->

                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">

                            <!-- Begin portfolio carousel item
                                ===================================
                                * Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
                                -->
                            <a href="single-project-8.html" class="tt-portfolio-carousel-item pci-image-is-light" data-cursor="View<br>Project">

                                <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                                <figure class="tt-pci-image-wrap cover-opacity-4">
                                    <img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-7.jpg" alt="Image">
                                </figure>
                                <!-- /.tt-pci-image-wrap -->

                                <div class="tt-pci-caption-front">
                                    <div class="tt-pci-caption">
                                        <div class="tt-pci-caption-inner">
                                            <h2 class="tt-pci-title">Wall<br class="hide-from-sm"> Lamp</h2>
                                            <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                            <div class="tt-pci-categories">
                                                <div class="tt-pci-category">Branding</div>
                                                <!-- <div class="tt-pci-category">Varia</div> -->
                                            </div>
                                            <!-- /.tt-pci-categories -->
                                        </div>
                                        <!-- /.tt-pci-caption-inner -->
                                    </div>
                                    <!-- /.tt-pci-caption -->
                                </div>
                                <!-- /.tt-pci-caption-front -->

                                <div class="tt-pci-caption tt-pci-caption-back">
                                    <div class="tt-pci-caption-inner">
                                        <h2 class="tt-pci-title">Wall<br class="hide-from-sm"> Lamp</h2>
                                        <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            <div class="tt-pci-category">Branding</div>
                                            <!-- <div class="tt-pci-category">Varia</div> -->
                                        </div>
                                        <!-- /.tt-pci-categories -->
                                    </div>
                                    <!-- /.tt-pci-caption-inner -->
                                </div>
                                <!-- /.tt-pci-caption -->
                            </a>
                            <!-- End portfolio carousel item -->

                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">

                            <!-- Begin portfolio carousel item
                                ===================================
                                * Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
                                -->
                            <a href="single-project-9.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

                                <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                                <figure class="tt-pci-image-wrap cover-opacity-2">
                                    <img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-8.jpg" alt="Image">
                                </figure>
                                <!-- /.tt-pci-image-wrap -->

                                <div class="tt-pci-caption-front">
                                    <div class="tt-pci-caption">
                                        <div class="tt-pci-caption-inner">
                                            <h2 class="tt-pci-title">Elegant<br class="hide-from-sm"> Stoves</h2>
                                            <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                            <div class="tt-pci-categories">
                                                <div class="tt-pci-category">Creative</div>
                                                <!-- <div class="tt-pci-category">Varia</div> -->
                                            </div>
                                            <!-- /.tt-pci-categories -->
                                        </div>
                                        <!-- /.tt-pci-caption-inner -->
                                    </div>
                                    <!-- /.tt-pci-caption -->
                                </div>
                                <!-- /.tt-pci-caption-front -->

                                <div class="tt-pci-caption tt-pci-caption-back">
                                    <div class="tt-pci-caption-inner">
                                        <h2 class="tt-pci-title">Elegant<br class="hide-from-sm"> Stoves</h2>
                                        <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            <div class="tt-pci-category">Creative</div>
                                            <!-- <div class="tt-pci-category">Varia</div> -->
                                        </div>
                                        <!-- /.tt-pci-categories -->
                                    </div>
                                    <!-- /.tt-pci-caption-inner -->
                                </div>
                                <!-- /.tt-pci-caption -->
                            </a>
                            <!-- End portfolio carousel item -->

                        </div>
                        <!-- End swiper slide -->

                    </div>
                    <!-- End swiper wrapper -->

                </div>
                <!-- End swiper container -->

                <!-- Begin portfolio carousel navigation
                    ========================================= -->
                <div class="tt-pc-navigation tt-swiper-nav">
                    <div class="tt-pc-nav-prev">
                        <div class="tt-pc-arrow tt-pc-arrow-prev magnetic-item"></div>
                    </div>
                    <div class="tt-pc-nav-next">
                        <div class="tt-pc-arrow tt-pc-arrow-next magnetic-item"></div>
                    </div>
                    <div class="tt-pc-pagination"></div>
                </div>
                <!-- End portfolio carousel navigation -->

            </div>
            <!-- End portfolio carousel -->


        </div>
        <!-- End page content -->


        <!-- ======================
            ///// Begin tt-footer /////
            =========================== -->
        <footer id="tt-footer" class="footer-absolute">
            <div class="tt-footer-inner">

                <!-- Begin footer column
                    ========================= -->
                <div class="footer-col tt-align-center-left">
                    <div class="footer-col-inner">

                        <!-- You can use whatever button or link here -->
                        <div class="tt-btn tt-btn-link">
                            <a href="contact.html" data-hover="Get in Touch">Get in Touch</a>
                        </div>

                    </div>
                    <!-- /.footer-col-inner -->
                </div>
                <!-- Begin footer column -->

                <!-- Begin footer column
                    ========================= -->
                <div class="footer-col tt-align-center-right">
                    <div class="footer-col-inner">

                        <div class="footer-social">
                            <div class="footer-social-text"><span>Follow</span><i class="fas fa-share-alt"></i></div>
                            <div class="social-buttons">
                                <ul>
                                    <li><a href="https://www.facebook.com/themetorium" class="magnetic-item" target="_blank" rel="noopener">Fb.</a></li>
                                    <li><a href="https://twitter.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Tw.</a></li>
                                    <li><a href="https://www.youtube.com/" class="magnetic-item" target="_blank" rel="noopener">Yt.</a></li>
                                    <li><a href="https://dribbble.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Dr.</a></li>
                                    <li><a href="https://www.behance.net/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Be.</a></li>
                                </ul>
                            </div>
                            <!-- /.social-buttons -->
                        </div>
                        <!-- /.footer-social -->

                    </div>
                    <!-- /.footer-col-inner -->
                </div>
                <!-- Begin footer column -->

            </div>
            <!-- /.tt-section-inner -->
        </footer>
        <!-- End tt-footer -->


    </div>
@endsection

