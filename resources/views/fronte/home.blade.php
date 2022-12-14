@extends('fronte.layouts.master')

@section('content')
<div id="content-wrap">

        <div id="page-header" class="ph-full ph-cap-sm ph-image-cropped ph-image-cover-3 ph-content-parallax">
            <div class="page-header-inner tt-wrap">

                <!-- Begin page header image
                    ============================= -->
                <div class="ph-image">
                    <div class="ph-image-inner">
                        <img src="{{asset('front/img/page-header/ph-6.jpg')}}" alt="Image">
                    </div>
                </div>
                <!-- End page header image -->

                <!-- Begin page header caption
                    ===============================
                    Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
                    -->
                <div class="ph-caption max-width-1000">
                    <h1 class="ph-caption-title ph-appear font-normal"><em>Hello stranger!</em><br> We are a creative design agency based in Melbourne. We bring your <em><u>ideas</u></em> to life.</h1>
                    <div class="ph-caption-title-ghost ph-appear">Hello!</div>
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



            <div id="Portfolio" class="tt-heading tt-heading-lg tt-heading-center anim-fadeinup" style="">
                <h3 class="tt-heading-subtitle text-gray">What We Do</h3>
                <h2 class="tt-heading-title">Portfolio</h2>
            </div>
            <div class="tt-section">
                <div class="tt-section-inner tt-wrap max-width-1600">

                    <!-- Begin portfolio grid (works combined with tt-Ggrid!)
                    ==========================
                    * Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
                    * Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
                    * Use class "pgi-cap-center" to position portfolio grid item caption to center.
                    * Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
                    -->
                    <div id="portfolio-grid" class="pgi-cap-inside pgi-hover">

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
                        <div class="tt-grid ttgr-layout-3 ttgr-portrait ttgr-shifted ttgr-gap-4">



                            <!-- Begin tt-Grid items wrap
                            ============================== -->
                            <div class="tt-grid-items-wrap isotope-items-wrap">

                                <!-- Begin tt-Grid item
                                ======================== -->
                                @foreach($portfolios as $portfolio)
                                <div class="tt-grid-item isotope-item people">
                                    <div class="ttgr-item-inner">

                                        <!-- Begin portfolio grid item
                                        ===============================
                                        * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"! Also no effect on small screens!).
                                        -->
                                        <div class="portfolio-grid-item">
                                            <a href="{{route('portfolios.show', $portfolio->id)}}" class="pgi-image-wrap" data-cursor="View<br>Project">
                                                <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                                <div class="pgi-image-holder cover-opacity-2">
                                                    <div class="pgi-image-inner anim-zoomin">
                                                        <figure class="pgi-image ttgr-height">
                                                            <img src="{{url('public/Image/'.$portfolio->coverImg)}}" alt="image">
                                                        </figure>
                                                        <!-- /.pgi-image -->
                                                    </div>
                                                    <!-- /.pgi-image-inner -->
                                                </div>
                                                <!-- /.pgi-image-holder -->
                                            </a>
                                            <!-- /.pgi-image-wrap -->

                                            <div class="pgi-caption">
                                                <div class="pgi-caption-inner">
                                                    <h2 class="pgi-title">{{$portfolio->title}}</h2>
                                                    <div class="pgi-categories-wrap">
                                                        <div class="pgi-category">{{$portfolio->category->title}}</div>
                                                        <!-- <div class="pgi-category">Varia</div> -->
                                                    </div>
                                                    <!-- /.pli-categories-wrap -->
                                                </div>
                                                <!-- /.pgi-caption-inner -->
                                            </div>
                                            <!-- /.pgi-caption -->
                                        </div>
                                        <!-- End portfolio grid item -->

                                    </div>
                                    <!-- /.ttgr-item-inner -->
                                </div>
                                <!-- End tt-Grid item -->
                                @endforeach

                            </div>
                            <!-- End tt-Grid items wrap  -->

                        </div>
                        <!-- End tt-Grid -->

                    </div>
                    <!-- End portfolio grid -->


                </div>
                <!-- /.tt-section-inner -->
            </div>




            <!-- =======================
                ///// Begin tt-section /////
                ============================
                * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                -->

            <!-- End tt-section -->


            <!-- =======================
                ///// Begin tt-section /////
                ============================
                * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                -->
            <div class="tt-section padding-bottom-xlg-150 padding-left-sm-3-p padding-right-sm-3-p">
                <div class="tt-section-inner tt-wrap max-width-1100">

                    <!-- Begin tt-Heading
                        ======================
                        * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                        * Use class "tt-heading-stroke" to enable stroke style.
                        * Use class "tt-heading-center" to align tt-Heading to center.
                        * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                        -->
                    <div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-15-p anim-fadeinup">
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

            <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-100 padding-left-sm-3-p padding-right-sm-3-p bg-white-accent-3">
                <div class="tt-section-inner">

                    <div class="tt-testimonials-slider ts-full-width text-center cursor-drag ts-scale-down ts-hide-navigation anim-fadeinup" data-loop="true" data-simulate-touch="true" data-speed="900">

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
                                            {!! $testimonial->description !!}
                                        </div>
                                        <div class="tt-ts-subtext">- {{$testimonial->name}}</div>
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



            <!-- =======================
                ///// Begin tt-section /////
                ============================
                * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                -->
            <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
                <div class="tt-section-inner">

                    <!-- Begin scrolling text
                        ==========================
                        Change data-scroll-speed="*" to adjust scrolling speed.
                        Use class "scr-text-reverse" to reverse scrolling direction.
                        Use class "scr-text-stroke" to enable text stroke style (no effect on smaller screens!).
                        -->
                    <div class="tt-scrolling-text scr-text-stroke font-italic" data-scroll-speed="15">
                        <div class="tt-scrolling-text-inner text-dark-3" data-text="Let's create something awesome together! -">
                            Let's create something awesome together! -
                        </div>
                        <!-- /.tt-scrolling-text-inner -->
                    </div>
                    <!-- End scrolling text -->

                    <!-- Begin scrolling text
                        ==========================
                        Change data-scroll-speed="*" to adjust scrolling speed.
                        Use class "scr-text-reverse" to reverse scrolling direction.
                        Use class "scr-text-stroke" to enable text stroke style (no effect on smaller screens!).
                        -->
                    <div class="tt-scrolling-text scr-text-stroke scr-text-reverse font-italic" data-scroll-speed="15">
                        <div class="tt-scrolling-text-inner text-dark-3" data-text="Let's create something awesome together! -">
                            Let's create something awesome together! -
                        </div>
                        <!-- /.tt-scrolling-text-inner -->
                    </div>
                    <!-- End scrolling text -->

                </div>
                <!-- /.tt-section-inner -->
            </div>
            <!-- End tt-section -->


            <!-- =======================
                ///// Begin tt-section /////
                ============================
                * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                -->
            <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 padding-left-sm-3-p padding-right-sm-3-p bg-white-accent-3">
                <div class="tt-section-inner tt-wrap max-width-900">

                    <!-- Begin tt-Heading
                        ======================
                        * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                        * Use class "tt-heading-stroke" to enable stroke style.
                        * Use class "tt-heading-center" to align tt-Heading to center.
                        * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                        -->
                    <div class="tt-heading tt-heading-lg margin-bottom-10-p anim-fadeinup">
                        <h3 class="tt-heading-subtitle text-gray">Get in Touch</h3>
                        <h2 class="tt-heading-title">Drop Us<br> a Line</h2>
                    </div>
                    <!-- End tt-Heading -->

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
                <!-- /.tt-section-inner -->
            </div>
            <!-- End tt-section -->


        </div>
        <!-- End page content -->


    </div>
@endsection

