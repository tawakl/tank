@extends('front.layouts.master')
@section('head')
    @include('front.layouts.header')
@endsection
@section('content')
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            @foreach($posts as $post)
                <div class="col-md-4  ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{route('posts.show', $post->id)}}" class="block-20" style="background-image: url({{asset('storage/'. $post->postimg)}});">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">{{$post->created_at->format('d')}}</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">{{$post->created_at->format('Y')}}</span>
                                    <span class="mos">{{$post->created_at->format('M')}}</span>
                                </div>
                            </div>
                            <h3 class="heading mb-3"><a href="#">{{$post->title}}</a></h3>
                            <p>{!! Str::limit($post->description, 120)!!}</p>
                            <p><a href="{{route('posts.show', $post->id)}}" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li>{{$posts->links("pagination::bootstrap-4")}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
