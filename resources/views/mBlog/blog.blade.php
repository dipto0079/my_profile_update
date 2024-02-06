<!DOCTYPE html>
<html>

<head>
    <title>Sudipto | Backend Developer</title>
    <meta name="keywords" content="sudipto,dipto,sudiptobiswas,SudiptoBiswas,Biswas,dip,DiptoBiswas,diptobiswas" />
    <meta name="description" content="Backend Developer ( Golang ),I am a Programmer, Backend Web Developer from Khulna, Bangladesh. I love to Code" />
    <meta name="author" content="SudiptoBiswas" />

    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}">

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="{{asset("frontend/css/bootstrap.min.css")}}" />


    <link rel="stylesheet" href="{{asset("frontend/css/materialdesignicons.min.css")}}">

    <!-- Mobirise icons Css -->
    <link rel="stylesheet" href="{{asset("frontend/css/mobiriseicons.css")}}">

    <!-- Magnific-popup -->
    <link rel="stylesheet" href="{{asset("frontend/css/magnific-popup.css")}}">

    <!-- Animate Css -->
    <link rel="stylesheet" href="{{asset("frontend/css/animate.min.css")}}">
    <!-- Owl Slider -->
    <link rel="stylesheet" href="{{asset("frontend/css/owl.carousel.css")}}" />
    <link rel="stylesheet" href="{{asset("frontend/css/owl.theme.css")}}" />
    <link rel="stylesheet" href="{{asset("frontend/css/owl.transitions.css")}}" />

    <link rel="stylesheet" href="{{asset("frontend/css/style.css")}}">
</head>
<body>

<!-- END LOADER -->

<!-- START NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo" href="{{route("me")}}">
            <img src="{{asset('frontend/images/logo.png')}}" alt="" class="img-fluid logo-light">
            <img src="{{asset('frontend/images/logo-dark.png')}}" alt="" class="img-fluid logo-dark">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route("me")}}" class="nav-link">Go Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->

<!--Start Home-->
<section class="header_section section">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-white text-center">
                    <h2 class="font-weight-bold">Latest News</h2>
                    <div class="home_divider mt-3 mb-3 mx-auto"></div>
                    <div class="page_link text-uppercase">
                        <a href="{{route("me")}}" class="d-inline-block mr-1">Home</a> / <span class="text-white ml-1">Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Home-->

<!-- Start Blog -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if(!empty($blogs))
                    @foreach($blogs as $key)
                    <div class="text-center mt-3 rounded bg-white p-2">
                        @if(!empty($key->images))
                            <div class="img_blog">
                                <img src="{{asset('storage/'.$key->images)}}" alt="" class="img-fluid rounded mx-auto d-block">
                            </div>
                        @endif
                        <div class="content_blog pt-3 pb-3">
                            <div>
                                <h5 class="font-weight-bold mb-0"><a href="{{route('single.blog',$key->slug)}}" class="text-dark">{{$key->title}}</a></h5>
                            </div>
                            <div class="mt-3">
{{--                                <p class="font-weight-bold h6 mb-3"><a href="#" class="text-custom">Lifestyle</a></p>--}}
{{--                                <p class="h6 text-muted date_blog mb-0">13 February 2018 <a href="#" class="text-dark font-weight-bold">By Envato</a></p>--}}
                                <p class="mt-3 desc_blog pl-2 pr-2 text-muted">{!! \Illuminate\Support\Str::words($key->contents, 150, '.......')  !!}</p>
                                <p class="h6 mb-0"><a href="{{route('single.blog',$key->slug)}}" class="text-muted font-weight-bold">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
{{--                <div class="text-center mt-3 rounded bg-white p-2">--}}
{{--                    <div class="blog_video position-relative">--}}
{{--                        <div class="img_blog">--}}
{{--                            <img src="images/blog/blog-2.jpg" alt="" class="img-fluid rounded mx-auto d-block">--}}
{{--                        </div>--}}
{{--                        <a href="http://vimeo.com/99025203" class="blog_play"><i class="mdi mdi-play"></i></a>--}}
{{--                    </div>--}}
{{--                    <div class="content_blog pt-3 pb-3">--}}
{{--                        <div>--}}
{{--                            <h5 class="font-weight-bold mb-0"><a href="blog-single.html" class="text-dark">Contrary to popular belief</a></h5>--}}
{{--                        </div>--}}
{{--                        <div class="mt-3">--}}
{{--                            <p class="font-weight-bold h6 mb-3"><a href="#" class="text-custom">Travel</a></p>--}}
{{--                            <p class="h6 text-muted date_blog mb-0">13 February 2018 <a href="#" class="text-dark font-weight-bold">By Envato</a></p>--}}
{{--                            <p class="mt-3 desc_blog pl-2 pr-2 text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>--}}
{{--                            <p class="h6 mb-0"><a href="blog-single.html" class="text-muted font-weight-bold">Read More...</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="text-center mt-3 rounded bg-white p-2">--}}
{{--                    <div class="img_blog">--}}
{{--                        <img src="images/blog/blog-5.jpg" alt="" class="img-fluid rounded mx-auto d-block">--}}
{{--                    </div>--}}
{{--                    <div class="content_blog pt-3 pb-3">--}}
{{--                        <div>--}}
{{--                            <h5 class="font-weight-bold mb-0"><a href="blog-single.html" class="text-dark">There are many variations</a></h5>--}}
{{--                        </div>--}}
{{--                        <div class="mt-3">--}}
{{--                            <p class="font-weight-bold h6 mb-3"><a href="#" class="text-custom">Lifestyle</a></p>--}}
{{--                            <p class="h6 text-muted date_blog mb-0">13 February 2018 <a href="#" class="text-dark font-weight-bold">By Envato</a></p>--}}
{{--                            <p class="mt-3 desc_blog pl-2 pr-2 text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>--}}
{{--                            <p class="h6 mb-0"><a href="blog-single.html" class="text-muted font-weight-bold">Read More...</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-3">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="text-center mt-3">--}}
{{--                            <ul class="pagination d-block mx-auto">--}}
{{--                                <li class="next"><a href="#"><i class="mdi mdi-chevron-left"></i></a></li>--}}
{{--                                <li class="active"><a href="#">1</a></li>--}}
{{--                                <li><a href="#">2</a></li>--}}
{{--                                <li><a href="#">3</a></li>--}}
{{--                                <li><a href="#">4</a></li>--}}
{{--                                <li class="prev"><a href="#"><i class="mdi mdi-chevron-right"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="col-lg-4">
                <div class="mt-3 blog_sidebar rounded">
                    <div class="bg-white p-4">
                        <!-- Search widget-->
{{--                        <div class="widget side_widget_search">--}}
{{--                            <div class="sidebar_widget_title font-weight-bold text-uppercase">Search</div>--}}
{{--                            <img src="images/divider.html" alt="" class="d-block mt-2 mb-4">--}}
{{--                            <form>--}}
{{--                                <input class="form-control" type="search" placeholder="Search...">--}}
{{--                                <button class="search_icon" type="submit">--}}
{{--                                    <span class="mdi mdi-magnify"></span>--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </div>--}}

                        <!-- Categories -->
{{--                        <div class="widget mt-5">--}}
{{--                            <div class="sidebar_widget_title font-weight-bold text-uppercase">Categories</div>--}}
{{--                            <img src="images/divider.html" alt="" class="d-block mt-2 mb-3">--}}
{{--                            <ul class="list-unstyled widget_list">--}}
{{--                                <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> Journey</a></li>--}}
{{--                                <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> Photography</a></li>--}}
{{--                                <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> Lifestyle</a></li>--}}
{{--                                <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> Food & Drinks</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                        <!-- Recent Post -->
                        <div class="widget mt-5 widget_recent_entries_custom">
                            <div class="sidebar_widget_title font-weight-bold text-uppercase">Recent Post</div>
{{--                            <img src="images/divider.html" alt="" class="d-block mt-2 mb-4">--}}
                            <ul class="list-unstyled">
                                @if(!empty($res))
                                    @foreach($res as $a)
                                        <li class="clearfix">
                                            @if(!empty($a->images))
                                                <div class="re_post_img">
                                                    <a href="{{route('single.blog',$a->slug)}}">
                                                        <img src="{{asset('storage/'.$a->images)}}" alt="" class="img-fluid rounded">
                                                    </a>
                                                </div>
                                            @endif
                                            <div class="re_post_desc">
                                                <a href="{{route('single.blog',$a->slug)}}" class="font-weight-bold">{{$a->title}}</a>
{{--                                                <span class="post-date fonts-italic">Jun 15, 2017</span>--}}
                                            </div>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>

                        <!-- Archives -->
{{--                        <div class="widget mt-5">--}}
{{--                            <div class="sidebar_widget_title font-weight-bold text-uppercase">Archives</div>--}}
{{--                            <img src="images/divider.html" alt="" class="d-block mt-2 mb-3">--}}
{{--                            <ul class="list-unstyled widget_list">--}}
{{--                                <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> January 2018</a></li>--}}
{{--                                <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> February 2018</a></li>--}}
{{--                                <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> March 2018</a></li>--}}
{{--                                <li><a href="#"><i class="mdi mdi-chevron-double-right"></i> April 2018</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                        <!-- Tags -->
{{--                        <div class="widget mt-5">--}}
{{--                            <div class="sidebar_widget_title font-weight-bold text-uppercase">Tags</div>--}}
{{--                            <img src="images/divider.html" alt="" class="d-block mt-2 mb-4">--}}
{{--                            <div class="blog_tag">--}}
{{--                                <a href="#">Dragon</a>--}}
{{--                                <a href="#">agency</a>--}}
{{--                                <a href="#">corporate</a>--}}
{{--                                <a href="#">e-commerce</a>--}}
{{--                                <a href="#">business</a>--}}
{{--                                <a href="#">responsive</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog -->

<!-- Start Footer -->
<section class="bg-light">
    <div class="container">
        <div class="row pt-4 pb-4">
            <div class="col-lg-12">
                <div class="float-left float_none mt-2 mb-2">
                    <p class="copy-rights text-muted mb-0">2021 &copy; Sudipto.</p>
                </div>
                <div class="float-right float_none mt-2 mb-2">
                    <ul class="list-inline fot_social mb-0">
                        <li class="list-inline-item"><a href="https://www.facebook.com/developer.sudipto" target="_blank" class="social-icon text-muted"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/Sudipto_biswas0"  target="_blank" class="social-icon text-muted"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/developer-sudipto" target="_blank" class="social-icon text-muted"><i class="mdi mdi-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/dipto0079" target="_blank" class="social-icon text-muted"><i class="mdi mdi-github-box"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer -->

<!-- BACK TO TOP -->
<a href="#" class="back_top"> <i class="mbri-arrow-up"> </i> </a>

<!-- JAVASCRIPTS -->
<script src="{{asset("frontend/js/jquery.min.js")}}"></script>
<script src="{{asset("frontend/js/popper.min.js")}}"></script>
<script src="{{asset("frontend/js/bootstrap.min.js")}}"></script>
<!--EASING JS-->
<script src="{{asset("frontend/js/jquery.easing.min.js")}}"></script>
<script src="{{asset("frontend/js/scrollspy.min.js")}}"></script>
<!-- TYPED -->
<script src="{{asset("frontend/js/typed.js")}}"></script>
<!-- MFP JS -->
<script src="{{asset("frontend/js/jquery.magnific-popup.min.js")}}"></script>
<!--PORTFOLIO FILTER JS-->
<script src="{{asset("frontend/js/isotope.js")}}"></script>
<!-- OWL CAROUSEL -->
<script src="{{asset("frontend/js/owl.carousel.min.js")}}"></script>
<!--CUSTOM JS-->
<script src="{{asset("frontend/js/custom.js")}}"></script>

</body>

</html>
