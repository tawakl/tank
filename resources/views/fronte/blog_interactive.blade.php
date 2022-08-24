@extends('fronte.layouts.master')

@section('content')
    <div id="content-wrap">

        <div id="page-header" class="ph-cap-lg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
            <div class="page-header-inner tt-wrap">

                <div class="ph-caption">
                    <h1 class="ph-caption-title ph-appear">Blog</h1>
                    <div class="ph-caption-title-ghost ph-appear">Blog</div>
                    <div class="ph-caption-subtitle ph-appear">Articles &amp; News</div>
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

                    <!-- Begin blog interactive
                        =================================
                        * Use class "bi-borders" to enable borders.
                        -->
                    <div class="blog-interactive bi-borders">

                        <!-- Begin blog interactive item
                            ====================================== -->
                        @foreach($posts as $post)

                        <article class="blog-interactive-item anim-skewinup">
                            <a href="{{route('posts.show', $post->id)}}" class="bi-item-image">
                                <!-- if exist -->
                                <img src="{{asset('storage/'. $post->postimg)}}" alt="image">
                            </a>
                            <div class="bi-item-categories">
                                <a href="blog-archive.html">{{$post->category->title}}</a>
                                <!-- <a href="blog-archive.html">Uncategorized</a> -->
                            </div>
                            <h2 class="bi-item-title"><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2>
                            <div class="bi-item-meta">
                                <span class="published">{{$post->created_at->format('M')}}</span>
                                <span class="published">{{$post->created_at->format('d')}}</span>
                                <span class="published">{{$post->created_at->format('Y')}}</span>
                                <span class="posted-by">- by <a href="blog-archive.html" title="View all posts by John Doe">{{$post->author->name}}</a></span>
                            </div>
                        </article>
                        @endforeach

                        <!-- End blog interactive item -->


                    </div>
                    <!-- End blog interactive -->


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
                                        <li><a href="blog-archive.html">Web Design <span title="Entries in this category">26</span></a></li>
                                        <li><a href="blog-archive.html">Resources <span title="Entries in this category">12</span></a></li>
                                        <li><a href="blog-archive.html">Tutorials <span title="Entries in this category">19</span></a></li>
                                        <li><a href="blog-archive.html">Freebies <span title="Entries in this category">31</span></a></li>
                                        <li><a href="blog-archive.html">Inspiration <span title="Entries in this category">67</span></a></li>
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
                                                <h5 class="sidebar-post-title"><a href="blog-post.html">Why Some People Almost Always Save Money With This Method</a></h5>
                                                <!-- <span class="sidebar-post-author">By: <a href="">John Doe</a></span> -->
                                                <span class="sidebar-post-date">May 14, 2021</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-post-data">
                                                <h5 class="sidebar-post-title"><a href="blog-post.html">Want to Step Up Your Skills? You Need to Read This First</a></h5>
                                                <!-- <span class="sidebar-post-author">By: <a href="">John Doe</a></span> -->
                                                <span class="sidebar-post-date">May 12, 2021</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-post-data">
                                                <h5 class="sidebar-post-title"><a href="blog-post.html">Secrets to Getting Your Project to Complete Quickly and Efficiently</a></h5>
                                                <!-- <span class="sidebar-post-author">By: <a href="">Henry Harrison</a></span> -->
                                                <span class="sidebar-post-date">May 17, 2021</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-post-data">
                                                <h5 class="sidebar-post-title"><a href="blog-post.html">How to Win Friends and Influence People?</a></h5>
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
                                            <li><a href="blog-archive.html">#portfolio</a></li>
                                            <li><a href="blog-archive.html">#multipurpose</a></li>
                                            <li><a href="blog-archive.html">#minimal</a></li>
                                            <li><a href="blog-archive.html">#agency</a></li>
                                            <li><a href="blog-archive.html">#creatives</a></li>
                                            <li><a href="blog-archive.html">#freelancers</a></li>
                                            <li><a href="blog-archive.html">#design</a></li>
                                            <li><a href="blog-archive.html">#bootstrap</a></li>
                                            <li><a href="blog-archive.html">#responsive</a></li>
                                            <li><a href="blog-archive.html">#simple</a></li>
                                            <li><a href="blog-archive.html">#creative</a></li>
                                            <li><a href="blog-archive.html">#blog</a></li>
                                            <li><a href="blog-archive.html">#wordpress</a></li>
                                            <li><a href="blog-archive.html">#black &amp; white</a></li>
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
                        <div class="tt-sliding-sidebar-trigger">
                            <span class="tt-ss-icon"><i class="fas fa-align-justify"></i></span>
                            <span class="tt-ss-icon-close"><i class="fas fa-times"></i></span>
                        </div>
                        <!-- End sliding sidebar trigger -->

                        <!-- Close overlay -->
                        <div class="tt-sliding-sidebar-close cursor-close"></div>

                    </div>
                    <!-- End sliding sidebar -->


                    <!-- Begin tt-pagination
                        =========================
                        * Use class "tt-pagin-center" to align center.
                        -->
                    <div class="tt-pagination tt-pagin-center margin-top-xlg-100 anim-fadeinup">
                        <div class="tt-pagin-prev">
                            <a href="" class="tt-pagin-item magnetic-item"><i class="fas fa-chevron-left"></i></a>
                        </div>
                        <div class="tt-pagin-numbers">
                            <a href="#0" class="tt-pagin-item magnetic-item active">1</a>
                            <a href="" class="tt-pagin-item magnetic-item">2</a>
                            <a href="" class="tt-pagin-item magnetic-item">3</a>
                            <a href="" class="tt-pagin-item magnetic-item">4</a>
                        </div>
                        <div class="tt-pagin-next">
                            <a href="" class="tt-pagin-item tt-pagin-next magnetic-item"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!-- End tt-pagination -->

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
                        <a href="contact.html" class="tt-pn-link anim-fadeinup">
                            <div class="tt-pn-title">Let's talk</div>
                            <div class="tt-pn-hover-title">Let's talk</div>
                        </a>
                        <!-- /.tt-pn-link -->

                        <div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>

                        <!-- Use if destination page contains page header image -->
                        <div class="tt-pn-image">
                            <img src="assets/img/page-header/ph-3.jpg" alt="image">
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
        <footer id="tt-footer">
            <div class="tt-footer-inner">

                <!-- Begin footer column
                    ========================= -->
                <div class="footer-col tt-align-center-left">
                    <div class="footer-col-inner">

                        <!-- You can use whatever button or link here -->
                        <div class="tt-btn tt-btn-link">
                            <a href="#" class="scroll-to-top" data-hover="Back to top">Back to top</a>
                        </div>

                    </div>
                    <!-- /.footer-col-inner -->
                </div>
                <!-- Begin footer column -->

                <!-- Begin footer column
                    ========================= -->
                <div class="footer-col tt-align-center order-m-last">
                    <div class="footer-col-inner">

                        <div class="tt-copyright">
                            © Copyright - <a href="https://themetorium.net" target="_blank" rel="noopener" class="tt-link">Themetorium.net</a>
                        </div>

                    </div>
                    <!-- /.footer-col-inner -->
                </div>
                <!-- Begin footer column -->

                <!-- Begin footer column
                    ========================= -->
                <div class="footer-col tt-align-center-right">
                    <div class="footer-col-inner">

                        <div class="footer-social">
                            <div class="footer-social-text"><span>Follow</span><i class="fas fa-share-alt"></i></div>
                            <div class="social-buttons">
                                <ul>
                                    <li><a href="https://www.facebook.com/themetorium" class="magnetic-item" target="_blank" rel="noopener">Fb.</a></li>
                                    <li><a href="https://twitter.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Tw.</a></li>
                                    <li><a href="https://www.youtube.com/" class="magnetic-item" target="_blank" rel="noopener">Yt.</a></li>
                                    <li><a href="https://dribbble.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Dr.</a></li>
                                    <li><a href="https://www.behance.net/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Be.</a></li>
                                </ul>
                            </div>
                            <!-- /.social-buttons -->
                        </div>
                        <!-- /.footer-social -->

                    </div>
                    <!-- /.footer-col-inner -->
                </div>
                <!-- Begin footer column -->

            </div>
            <!-- /.tt-section-inner -->
        </footer>
        <!-- End tt-footer -->


    </div>
@endsection
