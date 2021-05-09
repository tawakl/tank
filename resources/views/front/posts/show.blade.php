@extends('front.layouts.master')
@section('head')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('storage/'. $post->postimg)}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">{{$post->title??''}}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')

<div class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p class="mb-5">
                    <img src="{{asset('storage/'. $post->postimg)}}" alt="" class="img-fluid">
                </p>
                <p> {!! $post->description!!}</p>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        @foreach($post->tags as $tag)
                        <a href="#" class="tag-cloud-link">{{$tag->title}}</a>
                        @endforeach
                    </div>

                </div>

                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                        <img src="{{asset('storage/'. $post->author->image)}}" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                        <h3>{{ $post->author->name}}</h3>
                        <p>{{ $post->author->about}}</p>
                    </div>
                </div>

                <div class="pt-5 mt-5">
                    <h3 class="mb-5">{{$post->comments->count()}} Comments</h3>
                    @foreach($post->comments as $comment)
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="comment-body">
                                <h3>{{ $comment->commentByName }}</h3>
                                <div class="meta mb-3">{{$comment->created_at}}</div>
                                <p class="w-25">{{$comment->body}}</p>
{{--                                <p><a href="#" class="reply">Reply</a></p>--}}
                            </div>
                        </li>
                        @endforeach

                    </ul>
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form class="p-5 bg-light" method="post" action="{{ route('comments.store') }}">
                            @csrf
                        @if(!auth()->user())

                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name" name="commentByName">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" name="commentByEmail">
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="body" id="message" cols="30" rows="7" class="form-control"></textarea>
                                <input type="hidden" name="post_id" value="{{ $post->id }}"/>

                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add Comment" class="btn py-3 px-4 btn-primary">
                            </div>

                        </form>
                    </div>
                </div>

            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        @foreach($categories as $category)
                        <li><a href="#">{{$category->title}} <span class="ion-ios-arrow-forward"></span></a></li>
                        @endforeach
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>

                    @foreach($posts as $post)

                    <div class="block-21 mb-4 d-flex">
                        <img src="{{asset('storage/'. $post->postimg)}}" class="blog-img mr-4">

                        <div class="text">

                            <h3 class="heading"><a href="#">{{$post->title}}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span>{{$post->created_at}}</a></div>
                                <div><a href="#"><span class="icon-person"></span> {{ $post->author->name}}</a></div>
                                <div><a href="#"><span class="icon-chat"></span> {{ $post->comments->count()}}</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        @foreach($tags as $tag)
                            <a href="#">{{$tag->title}} <span class="tag-cloud-link"></span></a>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
</div> <!-- .section -->

@endsection
