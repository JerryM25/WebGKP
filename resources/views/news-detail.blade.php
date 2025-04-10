@extends('templates.navs')
@section('title', 'News')

@section('content')
<section class="page-title">
    <div class="page-title-shadow" style="background-image:url(assets/images/main-slider/background-daun-adjust-upscale.jpg)"></div>
    <div class="auto-container">
        <h2>News</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li>News</li>
        </ul>
    </div>
</section>

<div class="auto-container">
    <div class="inner-container">
        <div class="row clearfix">
            <br><br>
        </div>
    </div>
</div>

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-detail">
                    <div class="blog-detail_inner">
                        <div class="blog-detail_image">
                            <img src="assets/images/resource/news-19.jpg" alt="" />
                        </div>
                        <div class="blog-detail_content">
                            <h3 class="blog-detail_heading">Transforming industries and shaping the future</h3>
                            <div class="blog-detail_author-outer d-flex align-items-center flex-wrap">
                                <div class="blog-detail-author d-flex align-items-center flex-wrap">
                                    <div class="blog-detail-author-image">
                                        <img src="assets/images/resource/author-6.png" alt="" />
                                    </div>
                                    <i>By Ellena M.Rice</i>
                                </div>
                                <ul class="blog-detail-meta d-flex align-items-center flex-wrap">
                                    <li><span class="icon fa-regular fa-calendar fa-fw"></span>20 Jan, 2024</li>
                                    <li><span class="icon fa-regular fa-comment-dots fa-fw"></span>03 Comments</li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa me. Aliquam  hendrerit urna  vitae mattis tellus ultrices.. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultric Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non our suscipit magna interdum eu. Curabitur pellentesque sit amet sapien.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam  hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices Maecenas</p>
                            <blockquote>
                                <div class="blockquote_bg" style="background-image:url(assets/images/background/blockquote-bg.png)"></div>
                                <i class="icon-quote-1"></i>
                                The purpose of the patent system is to foster and encourage new inventions of usefulness.
                                <div class="text-right">
                                    <span>Thomas Jefferson</span>
                                </div>
                            </blockquote>
                            <div class="video-box">
                                <img src="assets/images/resource/news-20.jpg" alt="" />
                                <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video overlay-box"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                            </div>
                            <h3>Top transforming process</h3>
                            <p>We are a team of the our dedicated patent professionals, united by our commitment toour  excellence patent protection. With years of collective experience acros diverse industries team of this dedicated patent professionals, united by our </p>
                            <ul class="blog-detail_list">
                                <li><i class="fa-solid fa-check fa-fw"></i>Expertise in Patent Protection</li>
                                <li><i class="fa-solid fa-check fa-fw"></i>Commitment to Excellence</li>
                                <li><i class="fa-solid fa-check fa-fw"></i>Collaborative Partnership</li>
                            </ul>
                            <p>We are a team of the dedicated patent professionals, united by our commitment toour  excellence patent protection. With years of collective experience acros diverse industries.</p>
                            <!-- Post Share Options-->
                            <div class="post-share-options">
                                <div class="post-share-inner d-flex justify-content-between flex-wrap">
                                    <div class="post-tags"><a href="#">DataAI</a> <a href="#">AIFuture</a> <a href="#">AIExperts</a></div>
                                    <ul class="social-links">
                                        <li><a href="#" class="fa-brands fa-facebook-f fa-fw"></a></li>
                                        <li><a href="#" class="fa-brands fa-twitter fa-fw"></a></li>
                                        <li><a href="#" class="fa-brands fa-google fa-fw"></a></li>
                                        <li><a href="#" class="fa-brands fa-dribbble fa-fw"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Author Box -->
                            <div class="blog-author_box">
                                <div class="blog-author-box_inner">
                                    <div class="blog-author-box_content">
                                        <div class="blog-author-box_image">
                                            <img src="assets/images/resource/author-7.png" alt="" />
                                        </div>
                                        <h5>Ellena M. Ricee</h5>
                                        <div class="blog-author_box-designation">UI/UX Instructor</div>
                                        <div class="blog-author_box-text">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut massa mi. Aliquam in hendrerit Pellentesque sit amet sapien fringilla.</div>
                                        <ul class="author-social_links">
                                            <li><a href="#" class="fa-brands fa-facebook-f fa-fw"></a></li>
                                            <li><a href="#" class="fa-brands fa-twitter fa-fw"></a></li>
                                            <li><a href="#" class="fa-brands fa-google fa-fw"></a></li>
                                            <li><a href="#" class="fa-brands fa-dribbble fa-fw"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    <div class="sidebar-inner">

                        <!-- Post Widget -->
                        <div class="sidebar-widget post-widget">
                            <div class="widget-content">
                                <h5 class="sidebar-widget_title">Latest post</h5>

                                <div class="post">
                                    <div class="thumb"><a href="blog-detail.html"><img src="assets/images/resource/post-thumb-1.png" alt=""></a></div>
                                    <h6><a href="blog-detail.html">Redefining tomorrow adventures in ai and technology</a></h6>
                                    <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i> Mar 18, 2028</div>
                                </div>

                                <div class="post">
                                    <div class="thumb"><a href="blog-detail.html"><img src="assets/images/resource/post-thumb-2.png" alt=""></a></div>
                                    <h6><a href="blog-detail.html">Beyond binary navigating the ai landscape</a></h6>
                                    <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i> Mar 18, 2028</div>
                                </div>

                                <div class="post">
                                    <div class="thumb"><a href="blog-detail.html"><img src="assets/images/resource/post-thumb-3.png" alt=""></a></div>
                                    <h6><a href="blog-detail.html">Algorithmic horizons a glimpse into our ai world</a></h6>
                                    <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i> Mar 18, 2028</div>
                                </div>

                            </div>
                        </div>

                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
@endsection
