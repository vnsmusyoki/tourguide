<!-- - var menuBorder = true-->
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Tourist | @yield('title')</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/buttons.dataTables.min.css') }}">
    <!-- END: Custom CSS-->
    <style>
        .imgGallery img {
            padding: 8px;
            width: 100px;
            height: 100px;
        }

        .cardcheck::-webkit-scrollbar {
            width: .3em;
        }

        .cardcheck::-webkit-scrollbar-track {
            box-shadow: inset 0 0 3px rgba(22, 211, 154, 0.3);
        }

        .cardcheck::-webkit-scrollbar-thumb {
            background-color: rgb(22, 211, 154);
            outline: 1px solid #c7ddd7;
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
                    <li class="nav-item"><a class="navbar-brand" href="{{ route('tourist') }}"><img class="brand-logo"
                                alt="stack admin logo"
                                src="{{ asset('backend/app-assets/images/logo/stack-logo.png') }}">
                            <h2 class="brand-text">Tourist</h2>
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

                                <div class="avatar avatar-online">

                                    @if (Auth::user()->picture == null)
                                        <img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                            alt="avatar">
                                    @else
                                        <img src="{{ asset('storage/profiles/' . Auth::user()->picture) }}" alt=""
                                            style="height:60px;width:60px;border-radius:50%;">
                                    @endif
                                </div>
                                <span class="user-name">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">

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

                <li class=" nav-item"><a href="{{ route('tourist') }}"><i class="feather icon-home"></i><span
                            class="menu-title" data-i18n="Dashboard">Dashboard</span></a>

                </li>
                <li class=" nav-item"><a href=""><i class="feather icon-monitor"></i><span class="menu-title"
                            data-i18n="Templates">Destinations</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ url('tourist/all-destinations') }}"
                                data-i18n="Vertical">All Destinations</a> </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-layout"></i><span class="menu-title"
                            data-i18n="Layouts">Accomodations</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ url('tourist/all-accomodations') }}"
                                data-i18n="Page Layouts">All Accomodations</a> </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="{{ url('tourist/all-packages') }}"><i
                            class="feather icon-mail"></i><span class="menu-title" data-i18n="Email Application">All
                            Packages</span></a>
                </li>
                <li class=" nav-item"><a href="{{ url('tourist/plan-my-trip') }}"><i
                            class="feather icon-mail"></i><span class="menu-title"
                            data-i18n="Email Application">Plan My Trip</span></a>
                </li>
                <li class=" nav-item"><a href="{{ url('tourist/all-personal-plans') }}"><i
                            class="feather icon-user"></i><span class="menu-title" data-i18n="Users">All Personal
                            Trips</span></a>

                </li>
                <li class=" nav-item"><a href="{{ url('tourist/my-reviews') }}"><i
                            class="feather icon-user"></i><span class="menu-title" data-i18n="Users">All Acc. Reviews</span></a>

                </li>
                <li class=" nav-item"><a href="{{ url('tourist/generate-report') }}"><i
                            class="feather icon-user"></i><span class="menu-title" data-i18n="Users">Generate Report</span></a>

                </li>
                <li class=" nav-item"><a href="{{ url('tourist/account-security') }}"><i
                            class="feather icon-user"></i><span class="menu-title" data-i18n="Users">Account
                            Security</span></a>

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

    <script src="{{ asset('backend/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/buttons.print.min.js') }}"></script>
    {!! Toastr::message() !!}
    @livewireScripts
    <script>
        $(document).ready(function() {
            $('#exampleds').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>
</body>
<!-- END: Body-->

</html>
