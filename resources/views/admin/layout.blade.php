<!-- - var menuBorder = true-->
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Admin | @yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('backend/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/app-assets/images/ico/favicon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/extensions/unslider.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/fonts/meteocons/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/charts/morris.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/components.min.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/fonts/simple-line-icons/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/timeline.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/toastr.min.css') }}">
    <!-- END: Custom CSS-->
    <style>
        .imgGallery img {
            padding: 8px;
            width: 100px;
            height: 100px;
        }

    </style>
     @livewireStyles
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="feather icon-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href=""><img class="brand-logo"
                                alt="stack admin logo"
                                src="{{ asset('backend/app-assets/images/logo/stack-logo.png') }}">
                            <h2 class="brand-text">Admin</h2>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                            data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="feather icon-menu"></i></a></li>
                        <li class="dropdown nav-item mega-dropdown d-none d-lg-block"><a
                                class="dropdown-toggle nav-link" href="{{ url('admin/account-security') }}"
                                data-toggle="dropdown">Secure Account</a>

                        </li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i
                                    class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Stack..." tabindex="0"
                                    data-search="template-search">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="flag-icon flag-icon-ke"></i><span
                                    class="selected-language"></span></a>

                        </li>

                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                data-toggle="dropdown"><i class="ficon feather icon-mail"></i><span
                                    class="badge badge-pill badge-warning badge-up"></span></a>

                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="avatar avatar-online"><img
                                        src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                        alt="avatar"><i></i></div><span
                                    class="user-name">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ url('admin/account-security') }}"><i
                                        class="feather icon-user"></i>
                                    Edit Profile</a><a class="dropdown-item" href=""><i class="feather icon-mail"></i>
                                    Pending </a><a class="dropdown-item" href=""><i
                                        class="feather icon-check-square"></i> Payments</a>
                                <a class="dropdown-item" href=""><i class="feather icon-message-square"></i> New
                                    Bookings</a>
                                <div class="dropdown-divider"></div> <a class="dropdown-item"
                                    href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="feather icon-power"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" nav-item"><a href="{{ route('admin') }}"><i class="feather icon-home"></i><span
                            class="menu-title" data-i18n="Dashboard">Dashboard</span></a>

                </li>
                <li class=" nav-item"><a href=""><i class="feather icon-monitor"></i><span class="menu-title"
                            data-i18n="Templates">Destinations</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ url('admin/all-destinations') }}"
                                data-i18n="Vertical">All Destinations</a> </li>
                        <li><a class="menu-item" href="{{ url('admin/add-destination') }}"
                                data-i18n="Horizontal">Add New Destination</a> </li>
                        <li><a class="menu-item" href="{{ url('admin/generate-destination-receipts') }}"
                                data-i18n="Horizontal">Generate Report</a> </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-layout"></i><span class="menu-title"
                            data-i18n="Layouts">Accomodations</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ url('admin/all-accomodations') }}"
                                data-i18n="Page Layouts">All Accomodations</a> </li>
                        <li><a class="menu-item" href="{{ url('admin/add-accomodation') }}"
                                data-i18n="Navbars">Add New</a> </li>
                        <li><a class="menu-item" href="{{ url('admin/generate-accomodation-reports') }}"
                                data-i18n="Vertical Nav">Generate Reports</a> </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title"
                            data-i18n="Starter kit">Packages</span><span
                            class="badge badge badge-danger badge-pill float-right mr-2"></span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ url('admin/create-package') }}" data-i18n="1 column">
                                Create New Package</a>
                        </li>
                        <li><a class="menu-item" href="{{ url('admin/all-pending-package-bookings') }}"
                                data-i18n="2 columns">Pending Package Bookings</a>
                        </li>
                        <li><a class="menu-item" href="{{ url('admin/all-packages') }}"
                                data-i18n="2 columns">All Packages</a>
                        </li>
                        <li><a class="menu-item" href="{{ url('admin/generate-tourists-report') }}"
                                data-i18n="2 columns">Generate Report</a>
                        </li>

                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title"
                            data-i18n="Starter kit">Tourists</span><span
                            class="badge badge badge-danger badge-pill float-right mr-2"></span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ url('admin/all-tourists') }}" data-i18n="1 column">All
                                Tourists</a>
                        </li>
                        <li><a class="menu-item" href="{{ url('admin/generate-tourists-report') }}"
                                data-i18n="2 columns">Generate Report</a>
                        </li>

                    </ul>
                </li>

                <li class=" nav-item"><a href="{{ url('admin/all-tour-plans') }}"><i class="feather icon-mail"></i><span class="menu-title"
                            data-i18n="Email Application">All Tour Plans</span></a>
                </li>
                <li class=" nav-item"><a href="{{ url('admin/all-payments') }}"><i class="feather icon-message-square"></i><span
                            class="menu-title" data-i18n="Chat Application">All Payments</span></a>
                </li>

                <li class=" nav-item"><a href="{{ url('admin/account-security') }}"><i class="feather icon-users"></i><span class="menu-title"
                            data-i18n="Contacts">Account Security</span></a>
                </li>
                <li class=" nav-item"><a href=""><i class="feather icon-airplay"></i><span
                            class="menu-title" data-i18n="Project Summary">Update Password</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                            data-i18n="Users">Manage Admins</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                            data-i18n="Users">Logout</span></a>
                </li>


            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                class="float-md-left d-block d-md-inline-block">Copyright &copy; 2022 <a
                    class="text-bold-800 grey darken-2" href="" target="_blank">TourGuide </a></span><span
                class="float-md-right d-none d-lg-block">Hand-crafted &
                Made with <i class="feather icon-heart pink"></i></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/charts/raphael-min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/charts/morris.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/extensions/unslider-min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/timeline/horizontal-timeline.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('backend/app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('backend/app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}"></script>
    <!-- END: Page JS-->
    <script src="{{ asset('backend/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
    @livewireScripts
</body>
<!-- END: Body-->

</html>
