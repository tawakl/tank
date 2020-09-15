@extends('front.layouts.master')
@section('head')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/liv1.jpeg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">About</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/ynwa.jpg);">
                    <a href="https://vimeo.com/85733251" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-md-5">
                <div class="row justify-content-start pt-3 pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Welcome to YNWA</span>
                        <h2 class="mb-4">We give you the best articles you want.</h2>
                        <div class="tabulation-2 mt-4">
                            <div class="tab-content bg-light rounded mt-2">
                                <div class="tab-pane container p-0 active" id="home1">
                                    <p>YNWA is the digital news channel of The Liverpool Echo - one of the most famous and trusted regional news brands in the world.

                                        The Echo covers Liverpool and Merseyside without fear or favour and we base our journalism on the following principles:

                                        We get the big stories

                                        We get them first

                                        We fight for our readers and our city

                                        We don’t betray the trust our readers place in us

                                        Since 1879 we have been proud to serve our region and our readers and we have built our reputation as a strong campaigning newspaper.

                                        Among our most famous campaigns are: Freeport status for Liverpool, the battle to bring beautiful but derelict buildings back into use, defiance of the Militant movement, fundraising for our local Children's Hospital and taking crime-linked scrambler bikes off the roads of Merseyside.

                                        The Echo has supported and stood alongside the families of the 96 victims of the Hillsborough Disaster to the point where ultimate justice is within sight.

                                        We are committed to excellent and comprehensive coverage of both Everton and Liverpool football clubs.

                                        We also support local Business through a monthly magazine, City Region Business Post, as well as hosting the Regional Business Awards, the region's Premier Business Event.

                                        We also seek to celebrate the best in education through our Schools Awards, the green agenda through our annual Environment Awards and community champions through our Echo Heroes event.

                                        Politically, the Echo stands with its readers and supports those initiatives which are right for Liverpool rather than those which serve the agenda of any political party.

                                        We are based in, and committed to, Liverpool City Centre, where our hundreds of staff ply their trade. Our City centre office is also home to the Widnes and Runcorn Weekly News.

                                        We are delighted to be a launch partner of The Trust Project as we endeavour to make it simpler for readers of all ages and from all around the world to discover more about who we are and what we believe in.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">Happy Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    @foreach($testimonials as $testimonial)
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">{{$testimonial->description}}</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('storage/'. $testimonial->testimonialimg)}})"></div>
                                    <div class="pl-3">
                                        <p class="name">{{$testimonial->title}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
