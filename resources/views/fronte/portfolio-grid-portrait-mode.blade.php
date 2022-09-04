@extends('fronte.layouts.master')

@section('content')
<div id="content-wrap">


        <!-- *************************************
            *********** Begin page content ***********
            ************************************** -->
        <div id="page-content">

            <div class="tt-portfolio-carousel pci-hover pci-caption-stroke cursor-drag-mouse-down pc-scale-down" data-simulate-touch="true" data-mousewheel="true" data-keyboard="true" data-grab-cursor="true" data-pagination-type="fraction">

                <!-- Begin swiper container -->
                <div class="swiper">

                    <!-- Begin swiper wrapper (required) -->
                    <div class="swiper-wrapper">

                        <!-- Begin swiper slide
                            ======================== -->
                        @foreach($portfolios as $portfolio)
                        <div class="swiper-slide">

                            <!-- Begin portfolio carousel item
                                ===================================
                                * Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
                                -->
                            <a href="{{route('portfolios.show', $portfolio->id)}}" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

                                <!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
                                <figure class="tt-pci-image-wrap cover-opacity-2">
                                    <img class="tt-pci-image swiper-lazy" src="{{asset('storage/'. $portfolio->coverImg)}}" data-src="{{asset('storage/'. $portfolio->coverImg)}}" alt="Image">
                                </figure>
                                <!-- /.tt-pci-image-wrap -->

                                <div class="tt-pci-caption-front">
                                    <div class="tt-pci-caption">
                                        <div class="tt-pci-caption-inner">
                                            <h2 class="tt-pci-title">{{$portfolio->title}} </h2>
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
                                        <h2 class="tt-pci-title">{{$portfolio->title}}</h2>
                                        <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
                                        <div class="tt-pci-categories">
                                            <div class="tt-pci-category">{{$portfolio->category->title}}</div>
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
                        @endforeach

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





    </div>
@endsection

