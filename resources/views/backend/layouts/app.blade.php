<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>dd</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="icon" type="image/x-icon" href="">

    <link href="{{asset('backend/css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> --}}
    @stack('css')
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
                <span>
                    <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                </button>
                </span>
        </div>
        <div class="app-header__content">
            <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                       class="p-0 btn">
                                        <img width="42" class="rounded-circle"
                                             src="{{asset('backend/images/avatars/admin.png')}}" alt="">
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                         class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-info">
                                                <div class="menu-header-content text-left">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                     src="{{asset('backend/images/avatars/admin.png')}}"
                                                                     alt="{{auth()->user()->name}}">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div
                                                                    class="widget-heading">{{auth()->user()->name}}</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <form method="POST" action="{{ route('logout') }}">
                                                                    @csrf
                                                                    <a class="btn-pill btn-shadow btn-shine btn btn-focus"
                                                                       href="{{route('logout')}}" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">Logout</a>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="scroll-area-xs" style="height: 150px;">--}}
{{--                                            <div class="scrollbar-container ps">--}}
{{--                                                <ul class="nav flex-column">--}}
{{--                                                    <li class="nav-item-header nav-item">Activity</li>--}}
{{--                                                    <li class="nav-item">--}}
{{--                                                        <a href="{{route('profile')}}" class="nav-link">Change--}}
{{--                                                            Password</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                    <span>
                        <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                    </button>
                    </span>
            </div>
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Menu</li>


                        <li>
                            <a href="{{route('home.blog')}}" class="mm-active">
                                <i class="metismenu-icon pe-7s-mail-open-file"></i>Blog
                            </a>
                        </li>

                        <li>
                            <a href=""
                               class="mm-active">
                                <i class="metismenu-icon pe-7s-settings"></i>Setting
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('content')
            </div>
            <div class="app-wrapper-footer">
                <div class="app-footer">
                    <div class="app-footer__inner">
                        <div class="app-footer-left">

                        </div>
                        <div class="app-footer-right">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form id="delete-form" action="" method="post">
    @csrf
    <input id="method" type="hidden" name="_method" value="DELETE">
</form>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> --}}
<script type="text/javascript" src="{{asset('backend/scripts/main.js')}}"></script>
<script>
    $(document).on("click", ".delete-row", function (e) {
        e.preventDefault();
        // if(confirm("Are You Sure?")){
        let confirmStr = "Are You Sure?"
        if ($(this).attr("data-confirm")) {
            confirmStr = $(this).attr("data-confirm");
        }
        if (confirm(confirmStr)) {
            let href = $(this).attr("href");
            $("#delete-form").attr("action", href);
            $("#delete-form").submit();
        }
    })
</script>
@stack('js')
</body>
</html>
