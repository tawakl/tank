@extends('fronte.layouts.master')

@section('content')
<div id="content-wrap">
    <div id="page-header" class="ph-full ph-cap-sm ph-center ph-bg-image ph-image-shadow ph-image-cover-6 ph-content-parallax">
        <div class="page-header-inner tt-wrap max-width-1400">

            <!-- Begin page header image
                ============================= -->
            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="{{asset('storage/'. $post->postimg)}}" alt="Image">
                </div>
            </div>
            <!-- End page header image -->

            <!-- Begin page header caption
                ===============================
                Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
                -->
            <div class="ph-caption">
                <div class="ph-categories ph-appear">
                    <a href="blog-archive.html" class="ph-category">{{$post->category->title}}</a>
                    <!-- <a href="blog-archive.html" class="ph-category">Uncategorized</a> -->
                </div>
                <!-- /.ph-categories -->

                <h2 class="ph-caption-title ph-appear">{{$post->title}}</h2>
                <!-- You can use <br class="hide-from-lg"> to break a text line if needed -->

                <div class="ph-meta ph-appear">
                    <span class="published">{{$post->created_at->format('M')}}</span>
                    <span class="published">{{$post->created_at->format('d')}}</span>
                    <span class="published">{{$post->created_at->format('Y')}}</span>
                    <span class="ph-meta-posted-by">by: <a href="blog-archive.html" title="View all posts by John Doe">{{$post->author->name}}</a></span>
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
                            <li><a href="#0" class="magnetic-item" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0" class="magnetic-item" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0" class="magnetic-item" title="Share on Pinterest"><i class="fab fa-pinterest"></i></a></li>
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

                        <h3>Heading</h3>

                        <p>Tank is a creative portfolio showcase HTML website template. Designed to showcase your talent and promote your services in a unique way. Attachment apartments in delightful by motionless it no. And now she burst sir
                            learn total. Hearing hearted shewing own ask. Solicitude uncommonly use her business not collecting age. The properly agencies required mistaken outlived bed and. Remainder admitting neglected is he belonging.</p>

                        <p>Maids creative how learn drift but freelancers stand yet set. Smooth GSAP (TweenMax) animations. Piqued our sister shy nature almost his wicket. Hand dear so we hour to. He we be hastily influencers effects he service.
                            Sympathize it <a href="https://1.envato.market/tank" target="_blank" rel="noopener">senectus nec ipsum</a> celebrated my pianoforte indulgence. Tank is extremely flexible showcase template. Elegance exercise as
                            laughing proposal mistaken if. We up modern an it photography portfolio invitation.</p>

                        <!-- Begin post image -->
                        <figure class="tt-blog-post-image">
                            <a href="{{asset('storage/'. $post->postimg)}}" class="tt-bpi-link lg-trigger" data-exthumbnail="assets/img/blog/single/thumb/img-4.jpg" data-cursor="View">
                                <img class="tt-lazy" src="{{asset('storage/'. $post->postimg)}}" data-src="assets/img/blog/single/blog-post-1.jpg" alt="image">
                            </a>
                            <figcaption class="tt-bpi-caption">
                                Photo by <a href="http://unsplash.com/" target="_blank" rel="noopener">Unsplash</a>
                            </figcaption>
                        </figure>
                        <!-- End post image -->

                        <p>Is at purse tried website china ready decay parallax. Small its shy way had woody downs power. To denoting admitted speaking learning my exercise so in. Procured shutters its feelings. To or three offer well commented
                            am at. As dissuade cheerfully overcame so of friendly he indulged unpacked. Alteration connection to so as collecting me. Difficult in delivered extensive at direction allowance. Alteration put use diminution can
                            be considered.</p>

                        <blockquote class="open-quote">
                            "Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma – which is living with the results of other people's thinking."
                            <footer>Steve Jobs</footer>
                        </blockquote>

                        <p>Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. Assured company hastily looking garrets in oh. Most have love my gone to this so. Discovered interested prosperous
                            the our affronting insipidity day. Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regrets passed. Absolute one hastened mrs any sensible.</p>

                        <br>

                        <h3>Embed video</h3>

                        <p>Now indulgence dissimilar for his thoroughly has responsive. Agreement offending commanded my an. Change wholly say why eldest period. Are projection put celebrated particular unreserved joy unsatiable its? In then
                            dare good am rose bred or. On am in nearer square wanted.</p>

                        <!-- Begin tt-Embed (YouTube video) -->
                        <div class="tt-embed hide-cursor">
                            <iframe class="tt-embed-item" data-src="https://www.youtube.com/embed/cJ_bnfIJpKM" allowfullscreen=""></iframe>
                        </div>
                        <!-- End tt-Embed -->

                        <!-- Begin tt-Embed (Vimeo video) -->
                        <!-- <div class="tt-embed hide-cursor">
                                <iframe class="tt-embed-item" data-src="https://player.vimeo.com/video/78194687" allowfullscreen=""></iframe>
                            </div> -->
                        <!-- End tt-Embed -->

                    </div>
                    <!-- End blog post content -->

                    <!-- Begin blog post tags -->
                    <div class="tt-blog-post-tags">
                        <ul>
                            <li><span>Tags:</span></li>
                            @foreach($post->tags as $tag)
                            <li><a href="blog-archive.html">#{{$tag->title}}</a></li>
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
                                <li><a href="#0" class="magnetic-item" rel="noopener" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#0" class="magnetic-item" rel="noopener" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#0" class="magnetic-item" rel="noopener" title="Share on Pinterest"><i class="fab fa-pinterest"></i></a></li>
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
                <div class="tt-sliding-sidebar-wrap">
                    <div class="tt-sliding-sidebar">
                        <div class="tt-sliding-sidebar-inner">

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-search">
                                <h3 class="sidebar-heading">Search</h3>

                                <!-- Begin form (Note: for design purposes only!)
                                    ================
                                    * Use class "tt-form-filled" or "tt-form-minimal" to change form style.
                                    * Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
                                    -->
                                <form>
                                    <div class="tt-form-btn-inside">
                                        <input class="tt-form-control" type="text" id="search" placeholder="Type something & hit enter" required>
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                                <!-- End form -->

                            </div>
                            <!-- End sidebar widget -->

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-categories">
                                <h3 class="sidebar-heading">Categories</h3>
                                <ul class="list-unstyled">
                                    @foreach($categories as $category)
                                    <li><a href="blog-archive.html">{{$category->title}} <span title="Entries in this category">{{$category->posts->count()}}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-post-list">
                                <!-- Can be "Recent Posts" or "Popular Posts" etc. -->
                                <h3 class="sidebar-heading">Popular Posts</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="sidebar-post-data">
                                            <h5 class="sidebar-post-title"><a href="">Why Some People Almost Always Save Money With This Method</a></h5>
                                            <!-- <span class="sidebar-post-author">By: <a href="">John Doe</a></span> -->
                                            <span class="sidebar-post-date">May 14, 2021</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-post-data">
                                            <h5 class="sidebar-post-title"><a href="">Want to Step Up Your Skills? You Need to Read This First</a></h5>
                                            <!-- <span class="sidebar-post-author">By: <a href="">John Doe</a></span> -->
                                            <span class="sidebar-post-date">May 12, 2021</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-post-data">
                                            <h5 class="sidebar-post-title"><a href="">Secrets to Getting Your Project to Complete Quickly and Efficiently</a></h5>
                                            <!-- <span class="sidebar-post-author">By: <a href="">Henry Harrison</a></span> -->
                                            <span class="sidebar-post-date">May 17, 2021</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-post-data">
                                            <h5 class="sidebar-post-title"><a href="">How to Win Friends and Influence People?</a></h5>
                                            <!-- <span class="sidebar-post-author">By: <a href="">Henry Harrison</a></span> -->
                                            <span class="sidebar-post-date">May 21, 2021</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-comments-list">
                                <h3 class="sidebar-heading">Recent Comments</h3>
                                <ul class="list-unstyled">
                                    <li class="sidebar-comment">
                                        <div class="sidebar-comment-meta">
                                            <div class="sidebar-comment-data">
                                                <span class="sidebar-comment-author"><a href="">John Doe</a></span>
                                                <span class="sidebar-comment-date">May 14, 2021</span>
                                            </div>
                                        </div>
                                        <div class="sidebar-comment-text">
                                            <a href="">Aliquet praesent tempor ac dolor aliquet. Risus mi vitae hendrerit orci vitae amet lacus tertis ...</a>
                                        </div>
                                    </li>

                                    <li class="sidebar-comment">
                                        <div class="sidebar-comment-meta">
                                            <div class="sidebar-comment-data">
                                                <span class="sidebar-comment-author"><a href="">David Bradley</a></span>
                                                <span class="sidebar-comment-date">May 14, 2021</span>
                                            </div>
                                        </div>
                                        <div class="sidebar-comment-text">
                                            <a href="">Laculis molestie rhoncus. Amet maecenas ut orci id dui. Et dui morbi. Non mauris nautis trettis ...</a>
                                        </div>
                                    </li>

                                    <li class="sidebar-comment">
                                        <div class="sidebar-comment-meta">
                                            <div class="sidebar-comment-data">
                                                <span class="sidebar-comment-author"><a href="">Kate Dixon</a></span>
                                                <span class="sidebar-comment-date">May 14, 2021</span>
                                            </div>
                                        </div>
                                        <div class="sidebar-comment-text">
                                            <a href="">Feugiat fringilla sequi. Anunc adipiscing nisl lorem morbi tincidunt gravida vistrim nocktac fitset ...</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-tags">
                                <h3 class="sidebar-heading">Tags</h3>
                                <div class="sidebar-tags-list">
                                    <ul>
                                        @foreach($tags as $tag)
                                            <li><a href="blog-archive.html">#{{$tag->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- /.sidebar-tags-list -->
                            </div>
                            <!-- End sidebar widget -->

                            <!-- Begin sidebar widget -->
                            <div class="sidebar-widget sidebar-meta">
                                <h3 class="sidebar-heading">Meta</h3>
                                <ul class="list-unstyled">
                                    <li><a href="">Log In</a></li>
                                    <li><a href="">Entries RSS</a></li>
                                    <li><a href="">Comments RSS</a></li>
                                    <li><a href="https://themetorium.net" target="_blank" rel="noopener" class="tt-link">Themetorium.net</a></li>
                                </ul>
                            </div>
                            <!-- End sidebar widget -->

                        </div>
                        <!-- /.tt-sliding-sidebar-inner -->
                    </div>
                    <!-- /.tt-sliding-sidebar -->

                    <!-- Begin sliding sidebar trigger -->
                    <div class="tt-sliding-sidebar-trigger hide-cursor">
                        <span class="tt-ss-icon"><i class="fas fa-align-justify"></i></span>
                        <span class="tt-ss-icon-close"><i class="fas fa-times"></i></span>
                    </div>
                    <!-- End sliding sidebar trigger -->

                    <!-- Close overlay -->
                    <div class="tt-sliding-sidebar-close cursor-close"></div>

                </div>
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
                    <a href="portfolio-grid-modern.html" class="tt-pn-link anim-fadeinup">
                        <div class="tt-pn-title">Portfolio</div>
                        <div class="tt-pn-hover-title">Portfolio</div>
                    </a>
                    <!-- /.tt-pn-link -->

                    <div class="tt-pn-subtitle anim-fadeinup">Selected Works</div>

                    <!-- Use if destination page contains page header image -->
                    <div class="tt-pn-image">
                        <img src="assets/img/page-header/ph-1.jpg" alt="image">
                    </div>
                </div>
                <!-- End page nav -->

            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


    </div>
    <!-- End page content -->


    <!-- ======================
        ///// Begin tt-footer /////
        =========================== -->
{{--    <footer id="tt-footer">--}}
{{--        <div class="tt-footer-inner">--}}

{{--            <!-- Begin footer column--}}
{{--                ========================= -->--}}
{{--            <div class="footer-col tt-align-center-left">--}}
{{--                <div class="footer-col-inner">--}}

{{--                    <!-- You can use whatever button or link here -->--}}
{{--                    <div class="tt-btn tt-btn-link">--}}
{{--                        <a href="#" class="scroll-to-top" data-hover="Back to top">Back to top</a>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <!-- /.footer-col-inner -->--}}
{{--            </div>--}}
{{--            <!-- Begin footer column -->--}}

{{--            <!-- Begin footer column--}}
{{--                ========================= -->--}}
{{--            <div class="footer-col tt-align-center order-m-last">--}}
{{--                <div class="footer-col-inner">--}}

{{--                    <div class="tt-copyright">--}}
{{--                        © Copyright - <a href="https://themetorium.net" target="_blank" rel="noopener" class="tt-link">Themetorium.net</a>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <!-- /.footer-col-inner -->--}}
{{--            </div>--}}
{{--            <!-- Begin footer column -->--}}

{{--            <!-- Begin footer column--}}
{{--                ========================= -->--}}
{{--            <div class="footer-col tt-align-center-right">--}}
{{--                <div class="footer-col-inner">--}}

{{--                    <div class="footer-social">--}}
{{--                        <div class="footer-social-text"><span>Follow</span><i class="fas fa-share-alt"></i></div>--}}
{{--                        <div class="social-buttons">--}}
{{--                            <ul>--}}
{{--                                <li><a href="https://www.facebook.com/themetorium" class="magnetic-item" target="_blank" rel="noopener">Fb.</a></li>--}}
{{--                                <li><a href="https://twitter.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Tw.</a></li>--}}
{{--                                <li><a href="https://www.youtube.com/" class="magnetic-item" target="_blank" rel="noopener">Yt.</a></li>--}}
{{--                                <li><a href="https://dribbble.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Dr.</a></li>--}}
{{--                                <li><a href="https://www.behance.net/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Be.</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <!-- /.social-buttons -->--}}
{{--                    </div>--}}
{{--                    <!-- /.footer-social -->--}}

{{--                </div>--}}
{{--                <!-- /.footer-col-inner -->--}}
{{--            </div>--}}
{{--            <!-- Begin footer column -->--}}

{{--        </div>--}}
{{--        <!-- /.tt-section-inner -->--}}
{{--    </footer>--}}
    <!-- End tt-footer -->


</div>
@endsection
