@extends('fronte.layouts.master')

@section('content')
<div id="content-wrap">
    <div id="page-header" class="ph-full ph-cap-sm ph-center ph-bg-image ph-image-shadow ph-image-cover-6 ph-content-parallax">
        <div class="page-header-inner tt-wrap max-width-1400">

            <!-- Begin page header image
                ============================= -->
            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="{{url('public/Image/'. $post->postimg)}}" alt="Image">
                </div>
            </div>
            <!-- End page header image -->

            <!-- Begin page header caption
                ===============================
                Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
                -->
            <div class="ph-caption">
                <div class="ph-categories ph-appear">
                    {{$post->category->title}}
                    <!-- <a href="blog-archive.html" class="ph-category">Uncategorized</a> -->
                </div>
                <!-- /.ph-categories -->

                <h2 class="ph-caption-title ph-appear">{{$post->title}}</h2>
                <!-- You can use <br class="hide-from-lg"> to break a text line if needed -->

                <div class="ph-meta ph-appear">
                    <span class="published">
                        {{$post->created_at->format('M')}}
                        {{$post->created_at->format('d')}},
                        {{$post->created_at->format('Y')}}
                    </span>

                    <span class="ph-meta-posted-by">by: {{$post->author->name}}</span>
                </div>
                <!-- /.ph-meta -->
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
                    <div class="ph-share-subtitle ph-share-appear">Share this article with your friends</div>

                    <div class="social-buttons ph-share-appear">
                        <ul>
                            @foreach($social as $key => $value )
                                <li><a href="{{$value}}" target="_blank" class="magnetic-item" rel="noopener" title="Share on {{ucfirst($key)}}"> <i class="fab fa-{{$key}}"></i></a></li>
                            @endforeach
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
        <div class="tt-section">
            <div class="tt-section-inner tt-wrap max-width-900">

                <!-- Begin blog post
                    ===================== -->
                <article class="tt-blog-post lightgallery">

                    <!-- Begin blog post content -->
                    <div class="tt-blog-post-content">

{{--                        <h3>Heading</h3>--}}

                        {!! $post->description !!}

                    </div>
                    <!-- End blog post content -->

                    <!-- Begin blog post tags -->
                    <div class="tt-blog-post-tags">
                        <ul>
                            <li><span>Tags:</span></li>
                            @foreach($post->tags as $tag)
                            <li>#{{$tag->title}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End blog post tags -->

                    <!-- Begin blog post share (Note: for design purposes only!)
                        ===========================
                        * Use class "bss-fixed-bottom" to enable post share fixed bottom position (effect only on small screens!!!).
                        -->
                    <div class="tt-blog-post-share">
                        <div class="tt-bps-text">Share:</div>
                        <div class="social-buttons">
                            <ul>
                            @foreach($social as $key => $value )
                                <li><a href="{{$value}}" target="_blank" class="magnetic-item" rel="noopener" title="Share on {{ucfirst($key)}}"> <i class="fab fa-{{$key}}"></i></a></li>
                            @endforeach
                            </ul>
                        </div>
                        <!-- /.social-buttons -->
                    </div>
                    <!-- End blog post share -->

                </article>
                <!-- End blog post -->


                <!-- Begin blog post nav
                    ======================== -->
                <div class="tt-blog-post-nav">
                    @if($previous)
                    <div class="tt-bp-nav-col tt-bp-nav-left">
                        <div class="tt-bp-nav-text"><span><i class="fas fa-angle-left"></i></span>Prew Post</div>
                        <h4 class="tt-bp-nav-title"><a href="{{route( 'posts.show', $previous->id ) }}">{{ $previous->title }}</a></h4>
                    </div>
                    @endif
                @if($next)
                    <div class="tt-bp-nav-col tt-bp-nav-right">
                        <div class="tt-bp-nav-text">Next Post<span><i class="fas fa-angle-right"></i></span></div>
                        <h4 class="tt-bp-nav-title"><a href="{{route( 'posts.show', $next->id ) }}">{{ $next->title }}</a></h4>
                    </div>
                    @endif
                </div>
                <!-- End blog post nav -->


                <!-- Begin post comments
                    ========================= -->
                <div id="tt-blog-post-comments">

                    <h4 class="tt-bpc-heading">{{$post->comments->count()}} Comments</h4>

                    <!-- Begin tt-Comments list
                        ============================ -->
                    <ul class="tt-comments-list">
                        @foreach($post->comments as $comment)

                        <!-- Begin tt-comment -->
                        <li class="tt-comment">
                            <a href="#" class="tt-comment-avatar">
                                <img src="{{asset('front/img/low-qlt-thumb.jpg')}}" data-src="{{asset('front/img/blog/avatar.jpg')}}" class="tt-lazy" alt="image">
                            </a>
                            <div class="tt-comment-body">
                                <div class="tt-comment-meta">
                                    <h4 class="tt-comment-heading"><a href="#">{{ $comment->commentByName }}</a></h4>
                                    <span class="tt-comment-time">{{$comment->created_at}}</span>
                                </div>
{{--                                <span class="tt-comment-reply"><a href="#">Reply</a></span>--}}
                                <div class="tt-comment-text">
                                    <p>{{$comment->body}}</p>
                                </div>
                                <!-- /.tt-comment-text -->
                            </div>
                            <!-- /.tt-comment-body -->
                        </li>
                        <!-- End tt-comment -->
                        @endforeach


                    </ul>
                    <!-- End tt-Comments list -->

                    <!-- Begin post comment form (Note: post comment form is for design purposes only!)
                        =============================
                        * Use class "tt-form-filled" or "tt-form-minimal" to change form style.
                        * Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
                        -->



                    <form id="tt-post-comment-form" class="tt-form-minimal anim-fadeinup" method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <h4 class="tt-post-comment-form-heading">Leave a Comment:</h4>
                        @if(!auth()->user())
                            <div class="tt-row">
                                <div class="tt-col-lg-6">
                            <div class="tt-form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="tt-form-control" id="name" name="commentByName">
                            </div>
                                </div>
                                <div class="tt-col-lg-6">

                                <div class="tt-form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="tt-form-control" id="email" name="commentByEmail">
                            </div>
                                </div>
                            </div>
                        @endif
                        <div class="tt-form-group">
                            <label for="message">Message</label>
                            <textarea name="body" id="message" cols="30" rows="7" class="tt-form-control"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}"/>

                        </div>
                        <div class="tt-btn tt-btn-light-outline margin-top-40">
                            <button type="submit" value="submit" data-hover="Post Comment">Post Comment</button>
                        </div>

                    </form>

                </div>
                <!-- End post comments -->


                <!-- Begin sliding sidebar
                    ===========================
                    * Use class "tt-ss-right" to align sidebar to right.
                    -->
{{--                <div class="tt-sliding-sidebar-wrap">--}}
{{--                    <div class="tt-sliding-sidebar">--}}
{{--                        <div class="tt-sliding-sidebar-inner">--}}

{{--                            <!-- Begin sidebar widget -->--}}
{{--                            <div class="sidebar-widget sidebar-search">--}}
{{--                                <h3 class="sidebar-heading">Search</h3>--}}

{{--                                <!-- Begin form (Note: for design purposes only!)--}}
{{--                                    ================--}}
{{--                                    * Use class "tt-form-filled" or "tt-form-minimal" to change form style.--}}
{{--                                    * Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).--}}
{{--                                    -->--}}
{{--                                <form>--}}
{{--                                    <div class="tt-form-btn-inside">--}}
{{--                                        <input class="tt-form-control" type="text" id="search" placeholder="Type something & hit enter" required>--}}
{{--                                        <button type="submit"><i class="fas fa-search"></i></button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <!-- End form -->--}}

{{--                            </div>--}}
{{--                            <!-- End sidebar widget -->--}}

{{--                            <!-- Begin sidebar widget -->--}}
{{--                            <div class="sidebar-widget sidebar-categories">--}}
{{--                                <h3 class="sidebar-heading">Categories</h3>--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    @foreach($categories as $category)--}}
{{--                                    <li><a href="blog-archive.html">{{$category->title}} <span title="Entries in this category">{{$category->posts->count()}}</span></a></li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <!-- End sidebar widget -->--}}

{{--                            <!-- Begin sidebar widget -->--}}
{{--                            <div class="sidebar-widget sidebar-post-list">--}}
{{--                                <!-- Can be "Recent Posts" or "Popular Posts" etc. -->--}}
{{--                                <h3 class="sidebar-heading">Popular Posts</h3>--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <div class="sidebar-post-data">--}}
{{--                                            <h5 class="sidebar-post-title"><a href="">Why Some People Almost Always Save Money With This Method</a></h5>--}}
{{--                                            <!-- <span class="sidebar-post-author">By: <a href="">John Doe</a></span> -->--}}
{{--                                            <span class="sidebar-post-date">May 14, 2021</span>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="sidebar-post-data">--}}
{{--                                            <h5 class="sidebar-post-title"><a href="">Want to Step Up Your Skills? You Need to Read This First</a></h5>--}}
{{--                                            <!-- <span class="sidebar-post-author">By: <a href="">John Doe</a></span> -->--}}
{{--                                            <span class="sidebar-post-date">May 12, 2021</span>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="sidebar-post-data">--}}
{{--                                            <h5 class="sidebar-post-title"><a href="">Secrets to Getting Your Project to Complete Quickly and Efficiently</a></h5>--}}
{{--                                            <!-- <span class="sidebar-post-author">By: <a href="">Henry Harrison</a></span> -->--}}
{{--                                            <span class="sidebar-post-date">May 17, 2021</span>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="sidebar-post-data">--}}
{{--                                            <h5 class="sidebar-post-title"><a href="">How to Win Friends and Influence People?</a></h5>--}}
{{--                                            <!-- <span class="sidebar-post-author">By: <a href="">Henry Harrison</a></span> -->--}}
{{--                                            <span class="sidebar-post-date">May 21, 2021</span>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <!-- End sidebar widget -->--}}

{{--                            <!-- Begin sidebar widget -->--}}
{{--                            <div class="sidebar-widget sidebar-comments-list">--}}
{{--                                <h3 class="sidebar-heading">Recent Comments</h3>--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li class="sidebar-comment">--}}
{{--                                        <div class="sidebar-comment-meta">--}}
{{--                                            <div class="sidebar-comment-data">--}}
{{--                                                <span class="sidebar-comment-author"><a href="">John Doe</a></span>--}}
{{--                                                <span class="sidebar-comment-date">May 14, 2021</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="sidebar-comment-text">--}}
{{--                                            <a href="">Aliquet praesent tempor ac dolor aliquet. Risus mi vitae hendrerit orci vitae amet lacus tertis ...</a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}

{{--                                    <li class="sidebar-comment">--}}
{{--                                        <div class="sidebar-comment-meta">--}}
{{--                                            <div class="sidebar-comment-data">--}}
{{--                                                <span class="sidebar-comment-author"><a href="">David Bradley</a></span>--}}
{{--                                                <span class="sidebar-comment-date">May 14, 2021</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="sidebar-comment-text">--}}
{{--                                            <a href="">Laculis molestie rhoncus. Amet maecenas ut orci id dui. Et dui morbi. Non mauris nautis trettis ...</a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}

{{--                                    <li class="sidebar-comment">--}}
{{--                                        <div class="sidebar-comment-meta">--}}
{{--                                            <div class="sidebar-comment-data">--}}
{{--                                                <span class="sidebar-comment-author"><a href="">Kate Dixon</a></span>--}}
{{--                                                <span class="sidebar-comment-date">May 14, 2021</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="sidebar-comment-text">--}}
{{--                                            <a href="">Feugiat fringilla sequi. Anunc adipiscing nisl lorem morbi tincidunt gravida vistrim nocktac fitset ...</a>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <!-- End sidebar widget -->--}}

{{--                            <!-- Begin sidebar widget -->--}}
{{--                            <div class="sidebar-widget sidebar-tags">--}}
{{--                                <h3 class="sidebar-heading">Tags</h3>--}}
{{--                                <div class="sidebar-tags-list">--}}
{{--                                    <ul>--}}
{{--                                        @foreach($tags as $tag)--}}
{{--                                            <li><a href="blog-archive.html">#{{$tag->title}}</a></li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <!-- /.sidebar-tags-list -->--}}
{{--                            </div>--}}
{{--                            <!-- End sidebar widget -->--}}

{{--                            <!-- Begin sidebar widget -->--}}
{{--                            <div class="sidebar-widget sidebar-meta">--}}
{{--                                <h3 class="sidebar-heading">Meta</h3>--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li><a href="">Log In</a></li>--}}
{{--                                    <li><a href="">Entries RSS</a></li>--}}
{{--                                    <li><a href="">Comments RSS</a></li>--}}
{{--                                    <li><a href="https://themetorium.net" target="_blank" rel="noopener" class="tt-link">Themetorium.net</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <!-- End sidebar widget -->--}}

{{--                        </div>--}}
{{--                        <!-- /.tt-sliding-sidebar-inner -->--}}
{{--                    </div>--}}
{{--                    <!-- /.tt-sliding-sidebar -->--}}

{{--                    <!-- Begin sliding sidebar trigger -->--}}
{{--                    <div class="tt-sliding-sidebar-trigger hide-cursor">--}}
{{--                        <span class="tt-ss-icon"><i class="fas fa-align-justify"></i></span>--}}
{{--                        <span class="tt-ss-icon-close"><i class="fas fa-times"></i></span>--}}
{{--                    </div>--}}
{{--                    <!-- End sliding sidebar trigger -->--}}

{{--                    <!-- Close overlay -->--}}
{{--                    <div class="tt-sliding-sidebar-close cursor-close"></div>--}}

{{--                </div>--}}
                <!-- End sliding sidebar -->

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
                    <a href="{{route('portfolio-grid')}}" class="tt-pn-link anim-fadeinup">
                        <div class="tt-pn-title">Portfolio</div>
                        <div class="tt-pn-hover-title">Portfolio</div>
                    </a>
                    <!-- /.tt-pn-link -->

                    <div class="tt-pn-subtitle anim-fadeinup">Selected Works</div>

                    <!-- Use if destination page contains page header image -->
                    <div class="tt-pn-image">
                        <img src="{{asset('front/img/page-header/ph-1.jpg')}}" alt="image">
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
