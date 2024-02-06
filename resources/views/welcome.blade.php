<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sudipto | Backend Developer</title>
    <meta name="keywords" content="sudipto,dipto,sudiptobiswas,SudiptoBiswas,Biswas,dip,DiptoBiswas,diptobiswas" />
    <meta name="description" content="Backend Developer ( Golang ),I am a Programmer, Backend Web Developer from Khulna, Bangladesh. I love to Code" />
    <meta name="author" content="SudiptoBiswas" />
    <meta property="og:title" content="Sudipto Biswas" />
    <meta property="og:description" content="Backend Developer" />
    <meta property="og:image" content="{{asset('sudiptobiswas.jpg')}}" />
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}">

    <link rel="stylesheet" href="{{asset("frontend/css/bootstrap.min.css")}}" />

    <link rel="stylesheet" href="{{asset("frontend/css/materialdesignicons.min.css")}}">

    <link rel="stylesheet" href="{{asset("frontend/css/mobiriseicons.css")}}">

    <link rel="stylesheet" href="{{asset("frontend/css/magnific-popup.css")}}">

    <link rel="stylesheet" href="{{asset("frontend/css/animate.min.css")}}">

    <link rel="stylesheet" href="{{asset("frontend/css/owl.carousel.css")}}" />
    <link rel="stylesheet" href="{{asset("frontend/css/owl.theme.css")}}" />
    <link rel="stylesheet" href="{{asset("frontend/css/owl.transitions.css")}}" />

    <link rel="stylesheet" href="{{asset("frontend/css/style.css")}}">
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
    <div class="container">

        <a class="navbar-brand logo" href="{{route("me")}}">
            <img src="{{asset('frontend/images/logo.png')}}" alt="" class="img-fluid logo-light">
            <img src="{{asset('frontend/images/logo-dark.png')}}" alt="" class="img-fluid logo-dark">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="{{route("me")}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#education" class="nav-link">Experiance</a>
                </li>
                <li class="nav-item">
                    <a href="{{route("me.Blog")}}" class="nav-link">Blog</a>
                </li>

                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section class="section h-100vh jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('{{asset('sudiptobiswas_coder1.jpg')}}');" id="home">
    <div class="bg-overlay"></div>
    <div class="home-table">
        <div class="home-table-center">
            <div class="container position-relative z-index">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-white text-center">
                            <h4>Hello & Welcome</h4>

                            <h1 class="header_title mb-0 mt-3">I Am <span class="element font-weight-bold" data-elements="Sudipto Biswas.,A Backend Developer.,A Programmer."></span></h1>
                            <ul class="social_home list-unstyled text-center pt-4">
                                <li class="list-inline-item"><a href="https://www.facebook.com/developer.sudipto" target="_blank"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/in/developer-sudipto" target="_blank"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/Sudipto_biswas0" target="_blank"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://github.com/dipto0079" target="_blank"><i class="mdi mdi-github-box"></i></a></li>
                                <li class="list-inline-item"><a href="https://stackoverflow.com/users/17133454/sudipto-biswas" target="_blank"><i class="mdi mdi-stackoverflow"></i></a></li>
                                <li class="list-inline-item"><a href="https://wa.me/+8801625049939" target="_blank"><i class="mdi mdi-whatsapp"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll_down">
        <a href="#about" class="scroll">
            <i class="mbri-arrow-down text-white"></i>
        </a>
    </div>
</section>


<section class="section" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2><span class="font-weight-bold">About </span>Me</h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">Hello, I'm Sudipto, a software developer with a passion for building innovative and efficient solutions. With over {{$diffYears}} years of experience in the industry, I have worked on a variety of projects ranging from web applications to mobile apps.

My expertise lies in [Go (Programming Language),gRPC,Object-Oriented Programming (OOP),Model-View-Controller (MVC),REST APIs,PostgreSQL,Linux,GitHub,JavaScript,PHP], and I enjoy working with [go]. I am always looking to expand my skill set and stay up-to-date with the latest technologies and industry trends.

In addition to my technical skills, I am also a strong communicator and collaborator. I believe that open communication and teamwork are essential for delivering successful projects. I am always willing to share my knowledge and expertise with my colleagues and learn from them as well.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-12">
                <div>
                    <img src="{{asset('frontend/images/sign.png')}}" alt="" class="img-fluid mx-auto d-block">
                </div>
                <div class="text-center about-detail mx-auto mt-5">
                    <h3 class="mb-3">Hello! <span class="font-weight-bold text-custom">I'M Sudipto Biswas.</span></h3>
                    <ul class="mb-0 list-inline text-center about-work">
                        <li class="list-inline-item mr-0 text-muted">Devloper </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="progress-bars skill-custom">
                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">Go (Programming Language)</div>
                        <div class="text-muted float-right">77%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 77%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">gRPC</div>
                        <div class="text-muted float-right">80%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">Laravel</div>
                        <div class="text-muted float-right">80%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">Object-Oriented Programming (OOP)</div>
                        <div class="text-muted float-right">80%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">Mysql</div>
                        <div class="text-muted float-right">90%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">Linux</div>
                        <div class="text-muted float-right">90%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="progress-bars skill-custom">
                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">Protocol Buffers</div>
                        <div class="text-muted float-right">65%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width:65%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">PHP</div>
                        <div class="text-muted float-right">80%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">JavaScript</div>
                        <div class="text-muted float-right">70%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">Model-View-Controller (MVC)</div>
                        <div class="text-muted float-right">90%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width:90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">PostgreSQL</div>
                        <div class="text-muted float-right">90%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width:90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>





{{--<section class="section bg-funfact">--}}
{{--    <div class="bg-overlay"></div>--}}
{{--    <div class="container">--}}
{{--        <div class="row" id="counter">--}}
{{--            <div class="col-lg-3">--}}
{{--                <div class="text-center lan_funfact p-4 mt-3 rounded text-white">--}}
{{--                    <div class="lan_fun_icon mb-3">--}}
{{--                        <i class="mbri-timer h1"></i>--}}
{{--                    </div>--}}
{{--                    <h1 class="lan_fun_value mb-1" data-count="654">4</h1>--}}
{{--                    <p class="lan_fun_name mb-0">Working Hours</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3">--}}
{{--                <div class="text-center lan_funfact p-4 mt-3 rounded text-white">--}}
{{--                    <div class="lan_fun_icon mb-3">--}}
{{--                        <i class="mbri-gift h1"></i>--}}
{{--                    </div>--}}
{{--                    <h1 class="lan_fun_value mb-1" data-count="6400">10</h1>--}}
{{--                    <p class="lan_fun_name mb-0">Completed Projects</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3">--}}
{{--                <div class="text-center lan_funfact p-4 mt-3 rounded text-white">--}}
{{--                    <div class="lan_fun_icon mb-3">--}}
{{--                        <i class="mbri-user h1"></i>--}}
{{--                    </div>--}}
{{--                    <h1 class="lan_fun_value mb-1" data-count="2389">201</h1>--}}
{{--                    <p class="lan_fun_name mb-0">No. of Clients</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3">--}}
{{--                <div class="text-center lan_funfact p-4 mt-3 rounded text-white">--}}
{{--                    <div class="lan_fun_icon mb-3">--}}
{{--                        <i class="mbri-users h1"></i>--}}
{{--                    </div>--}}
{{--                    <h1 class="lan_fun_value mb-1" data-count="653">2</h1>--}}
{{--                    <p class="lan_fun_name mb-0">Team Member</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


<section class="section" id="education">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2><span class="font-weight-bold">Education & Experiance</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-5">
                <div class="cv_edu_exp mt-3">
                    <div class="cv_edu_exp_box mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">Mar 2023 - I am currently working in this role</div>
                                <div class="cb_edu_exp_detail">
                                    <h4>Grow Tech</h4>
                                    <p class="cv_desc mb-0">Khulna-9100, Bangladesh..</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cv_edu_exp_box mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">02/2019 -  06/2021</div>
                                <div class="cb_edu_exp_detail">
                                    <h4>Junior Web Application Developer</h4>
                                    <p class="cv_desc mb-0"><a href="https://apitsoft.com/" target="_blank">APitSoft</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="cv_edu_exp_box mt-4">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">2016 - 2018</div>--}}
{{--                                <div class="cb_edu_exp_detail">--}}
{{--                                    <h4>UI/UX Designer</h4>--}}
{{--                                    <p class="cv_desc mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="col-lg-5 offset-lg-2">
                <div class="cv_edu_exp mt-3">
                    <div class="cv_edu_exp_box mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">Oct 2021 - Mar 2023</div>
                                <div class="cb_edu_exp_detail">
                                    <h4>Backend Developer (Golang)</h4>
                                    <p class="cv_desc mb-0"><a href="https://codemen.org/" target="_blank">Codemen</a></p>
                                    <p class="cv_desc mb-0">4th Floor, 17 R Amin Tower, KDA Avenue Khulna-9100, Bangladesh.</p>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="cv_edu_exp_box mt-4">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">2013 - 2014</div>--}}
{{--                                <div class="cb_edu_exp_detail">--}}
{{--                                    <h4>Studied at South Bangal Institute Of Technology</h4>--}}
{{--                                    <p class="cv_desc mb-0">House 08, Road 112, Khalishpur Housing</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="cv_edu_exp_box mt-4">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">2016 - 2018</div>--}}
{{--                                <div class="cb_edu_exp_detail">--}}
{{--                                    <h4>Freelancer And Themeforest</h4>--}}
{{--                                    <p class="cv_desc mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BLOG -->

{{--<section class="section bg-cta">--}}
{{--    <div class="bg-overlay"></div>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="text-center text-white">--}}
{{--                    <h1>I Am Available For Freelancer.</h1>--}}
{{--                    <div class="mt-4">--}}
{{--                        <a href="" target="_blank" class="btn btn-outline-custom">Hire Me!</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


<section class="section " id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Get In <span class="font-weight-bold">Tuch</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
{{--                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>--}}
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-4">
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-mobile2 text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 font-weight-bold">Call Us On</p>
                        <p class="text-muted">+088 01625049939</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-letter text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 font-weight-bold">Email Us At</p>
                        <p class="text-muted"><a href="" class="__cf_email__" data-cfemail="">[email&#160;protected]</a></p>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="contact_form">
                    <form method="post" action="{{route('mail.sand')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="name" class="font-weight-bold">Name</label>
                                    <input autocomplete="off" name="name" id="name" type="text" class="form-control" placeholder="Your name..." required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="email" class="font-weight-bold">Email address</label>
                                    <input autocomplete="off" name="email" id="email" type="email" class="form-control" placeholder="Your email..." required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <label for="subject" class="font-weight-bold">Subject</label>
                                    <input autocomplete="off" type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject.." required="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <label for="comments" class="font-weight-bold">Message</label>
                                    <textarea autocomplete="off" name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..." required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <input type="submit" class="btn btn-custom" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <div class="row pt-4 pb-4">
            <div class="col-lg-12">
                <div class="float-left float_none mt-2 mb-2">
                    <p class="copy-rights text-muted mb-0">{{\Carbon\Carbon::now()->format('Y')}} &copy; Sudipto.</p>
                </div>
                <div class="float-right float_none mt-2 mb-2">
                    <ul class="list-inline fot_social mb-0">
                        <li class="list-inline-item"><a href="https://www.facebook.com/developer.sudipto" target="_blank" class="social-icon text-muted"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/Sudipto_biswas0"  target="_blank" class="social-icon text-muted"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/developer-sudipto" target="_blank" class="social-icon text-muted"><i class="mdi mdi-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/dipto0079" target="_blank" class="social-icon text-muted"><i class="mdi mdi-github-box"></i></a></li>
                        <li class="list-inline-item"><a href="https://wa.me/+8801625049939" target="_blank" class="social-icon text-muted"><i class="mdi mdi-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<a href="#" class="back_top"> <i class="mbri-arrow-up"> </i> </a>

<script data-cfasync="false" src="{{asset('frontend/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}">

</script>
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/js/scrollspy.min.js')}}"></script>

<script src="{{asset('frontend/js/typed.js')}}"></script>

<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('frontend/js/isotope.js')}}"></script>

<script src="{{asset('frontend/js/particles.js')}}"></script>
<script src="{{asset('frontend/js/particles.app.js')}}"></script>

<script src="{{asset('frontend/js/parallax.js')}}"></script>

<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('frontend/js/custom.js')}}"></script>
<script>
    $(".element").each(function() {
        var $this = $(this);
        $this.typed({
            strings: $this.attr('data-elements').split(','),
            typeSpeed: 100,
            backDelay: 3000
        });
    });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0R1LMPX82B"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0R1LMPX82B');
</script>
</body>

</html>
