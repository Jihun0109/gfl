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

    <title>AdminLTE 3 | Top Navigation</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="hold-transition layout-top-nav layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <div>
                    <a href="/" class="navbar-brand">
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
                        <!-- SEARCH FORM -->
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
                    </div>
                    

                    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="nav-link dropdown-toggle">Solution</a>
                                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                    <li><a href="#" class="dropdown-item">Start-ups </a></li>
                                    <li><a href="#" class="dropdown-item">Brands</a></li>
                                    <li><a href="#" class="dropdown-item">E-commerce</a></li>
                                    <li><a href="#" class="dropdown-item">Industrial</a></li>
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
                                    <li><a href="#" class="dropdown-item">News</a></li>
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
                                <a href="#" class="nav-link">Contact Us</a>
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
                <div class="container">
                    @yield('content')
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
                reserved.
            </footer>
        </div>
        <!-- ./wrapper -->

        <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>