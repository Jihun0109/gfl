<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>GFL Offical Website</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        {{-- <div>
            {{route(\Illuminate\Support\Facades\Route::currentRouteName(), [Request::segment(1), Request::segment(2)??''])}}            
        </div>
        <div>
            {{Request::segment(4)}}
        </div> --}}
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <div>
                    <a href="{{route('home',app()->getLocale())}}" class="navbar-brand">
                        <img src="{{asset('img/logo.png')}}" alt="AdminLTE Logo" class="brand-image">
                    </a>
                </div>
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-between">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div></div>
                        <!-- SEARCH FORM -->
                        <div class="d-flex">                            
                            <form class="form-inline ml-0 ml-md-3">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <ul class="d-flex ml-auto">
                                @foreach (config('app.available_locales') as $locale)
                                <li class="navbar-nav">                                    
                                    <a class="nav-link"
                                        @if (app()->getLocale() == $locale) style="text-decoration: underline" @endif
                                        href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), [$locale, Request::segment(4)??'']) }}" class="nav-link">{{strtoupper($locale)}}</a>
                                </li>
                                @endforeach                                
                            </ul>
                        </div>
                    </div>
                    

                    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('home', app()->getLocale()) }}" class="nav-link">{{ __('Home') }}</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="nav-link dropdown-toggle">Solution</a>
                                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                    <li><a href="{{route('solutions.startups', app()->getLocale())}}" class="dropdown-item">Start-ups </a></li>
                                    <li><a href="{{route('solutions.brands', app()->getLocale())}}" class="dropdown-item">Brands</a></li>
                                    <li><a href="{{route('solutions.ecommerce', app()->getLocale())}}" class="dropdown-item">E-commerce</a></li>
                                    <li><a href="{{route('solutions.industrials', app()->getLocale())}}" class="dropdown-item">Industrial</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="nav-link dropdown-toggle">Partners</a>
                                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">                                    
                                    <li class="dropdown-submenu dropdown-hover">
                                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="dropdown-item dropdown-toggle">Kornit</a>
                                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                            <li><a tabindex="-1" href="#" class="dropdown-item">Introduction</a></li>
                                            <li><a tabindex="-1" href="#" class="dropdown-item">DTG</a></li>
                                            <li><a tabindex="-1" href="#" class="dropdown-item">DTF</a></li>
                                            <li><a tabindex="-1" href="#" class="dropdown-item">Used Machine</a></li>
                                            <li><a tabindex="-1" href="#" class="dropdown-item">Supplies & Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropdown-hover">
                                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="dropdown-item dropdown-toggle">Melco</a>
                                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                            <li><a tabindex="-1" href="#" class="dropdown-item">Introduction</a></li>
                                            <li><a tabindex="-1" href="#" class="dropdown-item">Single Head</a></li>
                                            <li><a tabindex="-1" href="#" class="dropdown-item">Multi Head</a></li>
                                            <li><a tabindex="-1" href="#" class="dropdown-item">Supplies & Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropdown-hover">
                                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="dropdown-item dropdown-toggle">Inkcups</a>
                                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                            <li><a tabindex="-1" href="#" class="dropdown-item">Introduction</a></li>
                                            <li><a tabindex="-1" href="#" class="dropdown-item">Products</a></li>
                                            <li><a tabindex="-1" href="#" class="dropdown-item">Supplies & Accessories</a></li>
                                            <li><a tabindex="-1" href="#" class="dropdown-item">Sustainability</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="nav-link dropdown-toggle">News & Insights</a>
                                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                    <li><a href="{{route('events.index', app()->getLocale())}}" class="dropdown-item">News</a></li>
                                    <li><a href="#" class="dropdown-item">Blogs</a></li>
                                    <li><a href="#" class="dropdown-item">Events</a></li>
                                    <li><a href="#" class="dropdown-item">Reports & Insights</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Support</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact', app()->getLocale())}}" class="nav-link">Contact Us</a>
                            </li>
                        </ul>

                        
                        
                    </div>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <div class="content">
                <div class="" id="app">
                    @yield('content')
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <!-- Main Footer -->
            <footer class="main-footer" style="background-image: linear-gradient(-90deg, #4e6dde,#6ecbe9 )">
                <div class="d-flex justify-content-between" style="color:white;">
                    <div>
                        <a href="{{route('home',app()->getLocale())}}" class="navbar-brand">
                            <img src="{{asset('img/logo1.png')}}" alt="" class="brand-image">
                        </a>
                        <div class="text-center">Copyright &copy; 2020 Global Fortune Limited all rights reserved</div>
                    </div>
                    <div class="d-flex justify-content-end">                        
                        <div class="pr-5">
                            <h3>Follow Us</h3>
                            <ul class="social-links">
                                <li><a href="#"><img src="{{asset('img/social/instagram.svg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/social/facebook.svg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/social/youtube.svg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/social/linkedin.svg')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/social/weibo.svg')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <img class="qr-image" src="{{asset('img/qr.png')}}" alt="">
                    </div>
                </div>
            </footer>
        </div>
        <!-- ./wrapper -->

        <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>