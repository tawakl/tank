@extends('fronte.layouts.master')

@section('content')
<div id="content-wrap">
    <div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-image-cover-2 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <!-- Begin page header image
                ============================= -->
            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="{{asset('front/img/page-header/ph-3.jpg')}}" alt="Image">
                </div>
            </div>
            <!-- End page header image -->

            <!-- Begin page header caption
                ===============================
                Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
                -->
            <div class="ph-caption">
                <h1 class="ph-caption-title ph-appear">Contact</h1>
                <div class="ph-caption-title-ghost ph-appear">Contact</div>
                <!-- <div class="ph-caption-subtitle ph-appear">Subtitle</div> -->
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
                    <div class="tt-col-lg-5 padding-right-lg-5-p">

                        <!-- Begin tt-Heading
                            ======================
                            * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                            * Use class "tt-heading-stroke" to enable stroke style.
                            * Use class "tt-heading-center" to align tt-Heading to center.
                            * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                            -->
                        <div class="tt-heading tt-heading-lg margin-bottom-10-p anim-fadeinup">
                            <h3 class="tt-heading-subtitle text-gray">Get in Touch</h3>
                            <h2 class="tt-heading-title">Drop Us<br> A Line</h2>
                        </div>
                        <!-- End tt-Heading -->

                        <!-- <div class="text-gray padding-bottom-40 anim-fadeinup">
                                <p>Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Molestias assumenda, ratione voluptatibus. Libero nisi laudantium.</p>
                            </div> -->

                        <!-- Begin contact info
                            ======================== -->
                        <ul class="tt-contact-info padding-bottom-40 text-gray">
                            <li class="anim-fadeinup">
                                <span class="tt-ci-icon"><i class="fas fa-map-marker-alt"></i></span> 121 King Street, Melbourne, Australia
                            </li>
                            <li class="anim-fadeinup">
                                <span class="tt-ci-icon"><i class="fas fa-phone"></i></span>
                                <a href="tel:+123456789000" class="tt-link">+(123) 456 789 000</a>
                            </li>
                            <li class="anim-fadeinup">
                                <span class="tt-ci-icon"><i class="fas fa-envelope"></i></span>
                                <a href="mailto:company@email.com" class="tt-link">company@email.com</a>
                            </li>
                            <li class="anim-fadeinup">
                                <h6 class="no-margin-bottom margin-top-40">Follow:</h6>
                                <!-- Begin social buttons -->
                                <div class="social-buttons">
                                    <ul>
                                        <li><a href="https://www.facebook.com/themetorium" class="magnetic-item" target="_blank" rel="noopener">Fb.</a></li>
                                        <li><a href="https://twitter.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Tw.</a></li>
                                        <li><a href="https://www.youtube.com/" class="magnetic-item" target="_blank" rel="noopener">Yt.</a></li>
                                        <li><a href="https://dribbble.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Dr.</a></li>
                                        <li><a href="https://www.behance.net/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Be.</a></li>
                                    </ul>
                                </div>
                                <!-- End social buttons -->
                            </li>
                        </ul>
                        <!-- End contact info -->

                    </div>
                    <!-- /.tt-col -->

                    <div class="tt-col-lg-7">

                        <!-- Begin form
                            ================
                            * Use class "tt-form-filled" or "tt-form-minimal" to change form style.
                            * Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
                            -->
                        <form method="post" action="{{ route('contacts.store') }}" class="tt-form-minimal anim-fadeinup">
                            @csrf
                            <div class="tt-row">
                                <div class="tt-col-md-6">
                            <div class="tt-form-group">
                                <label>Name <span class="required">*</span></label>
                                <input type="text" class="tt-form-control" placeholder="" name="name">
                            </div>
                                </div>
                                <div class="tt-col-md-6">

                                <div class="tt-form-group">
                                <label>Email address <span class="required">*</span></label>
                                <input type="text" class="tt-form-control" placeholder="" name="email">
                            </div>
                                </div>
                            </div>
                            <div class="tt-form-group">
                                <label>Subject <span class="required">*</span></label>
                                <input type="text" class="tt-form-control" placeholder="" name="subject">
                            </div>
                            <div class="tt-form-group">
                                <label>Message <span class="required">*</span></label>
                                <textarea name="body" id="" cols="30" rows="7" class="tt-form-control" placeholder=""></textarea>
                            </div>
                            <div class="tt-btn tt-btn-light-outline margin-top-40 tt-form-group">
                                <button type="submit" value="submit" data-hover="Send Message">Send Message</button>
                            </div>
                        </form>
                        <!-- End form -->

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
        <div class="tt-section padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">

                <!-- Begin page nav
                    ====================
                    * Use class "tt-pn-stroke" to enable title stroke style.
                    * Use class "tt-pn-scroll" to enable hover title scroll. Note: If "tt-pn-hover-title" text is wider than "tt-pn-link" then it scrolls by default. The longer the text, the faster it scrolls.
                    -->
                <div class="tt-page-nav tt-pn-scroll">
                    <a href="{{route('portfolios')}}" class="tt-pn-link anim-fadeinup">
                        <div class="tt-pn-title">Portfolio</div>
                        <div class="tt-pn-hover-title">Portfolio</div>
                    </a>
                    <!-- /.tt-pn-link -->

                    <div class="tt-pn-subtitle anim-fadeinup">Selected Works</div>

                    <!-- Use if destination page contains page header image -->
                    <div class="tt-pn-image">
                        <img src="{{asset('front/img/page-header/ph-1.jpg')}} alt="image">
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
