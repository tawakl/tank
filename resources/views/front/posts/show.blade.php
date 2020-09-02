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

{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}


{{--                            <div class="comment-form-wrap pt-5">--}}
{{--                                <h3 class="mb-5">Leave a comment</h3>--}}
{{--                                <form class="p-5 bg-light" method="post" action="{{ route('comments.store') }}">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    @if(!auth()->user())--}}
{{--                                        <label>{{ trans('comments.name') }}</label>--}}
{{--                                        <input type="text" class="form-control" name="commentByName"--}}
{{--                                               value="">--}}

{{--                                        <label>{{ trans('comments.email') }}</label>--}}
{{--                                        <input type="email" class="form-control" name="commentByEmail"--}}
{{--                                               value="">--}}
{{--                                    @endif--}}
{{--                                    <label>{{ trans('comments.message') }}</label>--}}
{{--                                    <textarea class="form-control" name="body"></textarea>--}}
{{--                                    <input type="hidden" name="post_id" value="{{ $post->id }}"/>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="submit" class="btn btn-success" value="Add Comment"/>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                            </div>--}}
{{--                            <hr/>--}}
{{--                            <h4>{{$post->comments->count()}} Comments</h4>--}}

{{--                            @include('front.posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


                <div class="pt-5 mt-5">
                    <h3 class="mb-5">{{$post->comments->count()}} Comments</h3>
                    @foreach($post->comments as $comment)
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="comment-body">
                                <h3>{{ $comment->commentByName }}</h3>
                                <div class="meta mb-3">{{$comment->created_at}}</div>
                                <p>{{$comment->body}}</p>
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
                                <textarea name="body" id="message" cols="30" rows="10" class="form-control"></textarea>
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
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
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
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url({{asset('images/image_2.jpg')}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">cat</a>
                        <a href="#" class="tag-cloud-link">abstract</a>
                        <a href="#" class="tag-cloud-link">people</a>
                        <a href="#" class="tag-cloud-link">person</a>
                        <a href="#" class="tag-cloud-link">model</a>
                        <a href="#" class="tag-cloud-link">delicious</a>
                        <a href="#" class="tag-cloud-link">desserts</a>
                        <a href="#" class="tag-cloud-link">drinks</a>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>
            </div>

        </div>
    </div>
</div> <!-- .section -->

@endsection
