@extends('front.layouts.master')
@section('head')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/liv1.jpeg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Contact us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-4">
                <p><strong>Address :</strong> 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
            <div class="col-md-4">
                <p><strong>Phone :</strong> <a href="tel://01211440047">01211440047</a></p>
            </div>
            <div class="col-md-4">
                <p><strong>Email :</strong> <a href="mailto:info@yoursite.com">tawakl.at@gmail.com</a></p>
            </div>

        </div>
        <div class="row block-9 no-gutters">
            <div class="col-lg-6 order-md-last d-flex">
                <form method="post" action="{{ route('contacts.store') }}" class="bg-light p-4 p-md-5 contact-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                        <textarea name="body" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-lg-6 d-flex">
                <img src="/images/bg_1.jpg" width="590" height="558">
            </div>
        </div>
    </div>
</section>
@endsection
