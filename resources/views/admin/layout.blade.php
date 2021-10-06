<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Upzet - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- jvectormap -->
        <link href="{{ asset('assets/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box text-center">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-sm-dark" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo-dark" height="24">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="logo-light" height="24">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="ri-search-line"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="mb-3 m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="{{ asset('assets/images/flags/us.jpg') }}" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-apps-2-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="px-lg-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('assets/images/brands/github.png') }}" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('assets/images/brands/bitbucket.png') }}" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('assets/images/brands/dribbble.png') }}" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('assets/images/brands/dropbox.png') }}" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('assets/images/brands/mail_chimp.png') }}" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ asset('assets/images/brands/slack.png') }}" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-notification-3-line"></i>
                                <span class="noti-dot"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="ri-shopping-cart-line"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" class="rounded-circle avatar-xs" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="ri-checkbox-circle-line"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" class="rounded-circle avatar-xs" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">Kevin</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-cog"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="mdi mdi-home-variant-outline"></i><span
                                        class="badge rounded-pill bg-primary float-end">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="calendar.html" class=" waves-effect">
                                    <i class="mdi mdi-calendar-outline"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span>Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read Email</a></li>
                                    <li><a href="email-compose.html">Email Compose</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Layouts</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-gradient"></i>
                                    <span>Vertical</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                                    <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                    <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                    <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-page-layout-header"></i>
                                    <span>Horizontal</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="layouts-horizontal.html">Default</a></li>
                                    <li><a href="layouts-hori-topbar-dark.html">Topbar Dark</a></li>
                                    <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Pages</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-account-circle-outline"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html">Login</a></li>
                                    <li><a href="auth-register.html">Register</a></li>
                                    <li><a href="auth-recoverpw.html">Recover Password</a></li>
                                    <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-format-page-break"></i>
                                    <span>Utility</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-faqs.html">FAQs</a></li>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Components</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-briefcase-variant-outline"></i>
                                    <span>UI Elements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-lightbox.html">Lightbox</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-offcanvas.html">Offcavas</a></li>
                                    <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                    <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-sweet-alert.html">Sweetalert 2</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popovers &amp; Tooltips</a></li>
                                    <li><a href="ui-rating.html">Rating</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ri-eraser-fill"></i>
                                    <span class="badge rounded-pill bg-danger float-end">8</span>
                                    <span>Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced Plugins</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-xeditable.html">Form X-editable</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-table-2"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-bar-chart-line"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-apex.html">Apex Charts</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                                    <li><a href="charts-flot.html">Flot Charts</a></li>
                                    <li><a href="charts-knob.html">Jquery Knob Charts</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-brush-line"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-remix.html">Remix Icons</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome </a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-map-pin-line"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-share-line"></i>
                                    <span>Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upzet</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex text-muted">
                                            <div class="flex-shrink-0 me-3 align-self-center">
                                                <div id="radialchart-1" class="apex-charts" dir="ltr"></div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="mb-1">Users</p>
                                                <h5 class="mb-3">2.2k</h5>
                                                <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3 align-self-center">
                                                <div id="radialchart-2" class="apex-charts" dir="ltr"></div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="mb-1">Views per minute</p>
                                                <h5 class="mb-3">50</h5>
                                                <p class="text-truncate mb-0"><span class="text-success me-2"> 1.7% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex text-muted">
                                            <div class="flex-shrink-0 me-3 align-self-center">
                                                <div id="radialchart-3" class="apex-charts" dir="ltr"></div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="mb-1">Bounce Rate</p>
                                                <h5 class="mb-3">24.03 %</h5>
                                                <p class="text-truncate mb-0"><span class="text-danger me-2"> 0.01% <i class="ri-arrow-right-down-line align-bottom ms-1"></i></span> From previous</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex text-muted">
                                            <div class="flex-shrink-0  me-3 align-self-center">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                        <i class="ri-group-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="mb-1">New Visitors</p>
                                                <h5 class="mb-3">435</h5>
                                                <p class="text-truncate mb-0"><span class="text-success me-2"> 0.01% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="card-title">Overview</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        ALL
                                                    </button>
                                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                                        1M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        6M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm active">
                                                        1Y
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="mixed-chart" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->

                                    <div class="card-body border-top">
                                        <div class="text-muted text-center">
                                            <div class="row">
                                                <div class="col-4 border-end">
                                                    <div>
                                                        <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-primary me-1"></i> Expenses</p>
                                                        <h5 class="font-size-16 mb-0">$ 8,524 <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>1.2 %</span></h5>
                                                    </div>
                                                </div>
                                                <div class="col-4 border-end">
                                                    <div>
                                                        <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-light me-1"></i> Maintenance</p>
                                                        <h5 class="font-size-16 mb-0">$ 8,524 <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>2.0 %</span></h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div>
                                                        <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-danger me-1"></i> Profit</p>
                                                        <h5 class="font-size-16 mb-0">$ 8,524 <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>0.4 %</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex  align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="card-title">Social Source</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <select class="form-select form-select-sm mb-0 my-n1">
                                                    <option value="MAY" selected="">May</option>
                                                    <option value="AP">April</option>
                                                    <option value="MA">March</option>
                                                    <option value="FE">February</option>
                                                    <option value="JA">January</option>
                                                    <option value="DE">December</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="radialBar-chart" class="apex-charts" dir="ltr"></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                                        <span class="avatar-title rounded-circle bg-primary font-size-18">
                                                            <i class="ri  ri-facebook-circle-fill text-white"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-15">Facebook</h5>
                                                    <p class="text-muted mb-0">125 sales</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                                        <span class="avatar-title rounded-circle bg-info font-size-18">
                                                            <i class="ri  ri-twitter-fill text-white"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-15">Twitter</h5>
                                                    <p class="text-muted mb-0">112 sales</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                                        <span class="avatar-title rounded-circle bg-danger font-size-18">
                                                            <i class="ri ri-instagram-line text-white"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-15">Instagram</h5>
                                                    <p class="text-muted mb-0">104 sales</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Order Stats</h5>
                                        <div>
                                            <ul class="list-unstyled">
                                                <li class="py-3">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs align-self-center me-3">
                                                            <div class="avatar-title rounded-circle bg-light text-primary font-size-18">
                                                                <i class="ri-checkbox-circle-line"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-2">Completed</p>
                                                            <div class="progress progress-sm animated-progess">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs align-self-center me-3">
                                                            <div class="avatar-title rounded-circle bg-light text-primary font-size-18">
                                                                <i class="ri-calendar-2-line"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-2">Pending</p>
                                                            <div class="progress progress-sm animated-progess">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs align-self-center me-3">
                                                            <div class="avatar-title rounded-circle bg-light text-primary font-size-18">
                                                                <i class="ri-close-circle-line"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-2">Cancel</p>
                                                            <div class="progress progress-sm animated-progess">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 19%" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <hr>

                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-2">
                                                        <p class="text-muted mb-2">Completed</p>
                                                        <h5 class="font-size-16 mb-0">70</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-2">
                                                        <p class="text-muted mb-2">Pending</p>
                                                        <h5 class="font-size-16 mb-0">45</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-2">
                                                        <p class="text-muted mb-2">Cancel</p>
                                                        <h5 class="font-size-16 mb-0">19</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Notifications</h4>

                                        <div class="pe-3" data-simplebar style="max-height: 287px;">
                                            <a href="#" class="text-body d-block">
                                                <div class="d-flex py-3">
                                                    <div class="flex-shrink-0 me-3 align-self-center">
                                                        <img class="rounded-circle avatar-xs" alt="" src="{{ asset('assets/images/users/avatar-2.jpg') }}">
                                                    </div>

                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-14 mb-1">Scott Elliott</h5>
                                                        <p class="text-truncate mb-0">
                                                            If several languages coalesce
                                                        </p>
                                                    </div>
                                                    <div class="flex-shrink-0 font-size-13">
                                                        20 min ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="text-body d-block">
                                                <div class="d-flex py-3">
                                                    <div class="flex-shrink-0 me-3 align-self-center">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title bg-soft-primary rounded-circle text-primary">
                                                                <i class="mdi mdi-account-supervisor"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-14 mb-1">Team A</h5>
                                                        <p class="text-truncate mb-0">
                                                            Team A Meeting 9:15 AM
                                                        </p>
                                                    </div>
                                                    <div class="flex-shrink-0 font-size-13">
                                                        9:00 am
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="text-body d-block">
                                                <div class="d-flex py-3">
                                                    <div class="flex-shrink-0 me-3 align-self-center">
                                                        <img class="rounded-circle avatar-xs" alt="" src="{{ asset('assets/images/users/avatar-3.jpg') }}">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-14 mb-1">Frank Martin</h5>
                                                        <p class="text-truncate mb-0">
                                                            Neque porro quisquam est
                                                        </p>
                                                    </div>
                                                    <div class="flex-shrink-0 font-size-13">
                                                        8:54 am
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="text-body d-block">
                                                <div class="d-flex py-3">
                                                    <div class="flex-shrink-0 me-3 align-self-center">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title bg-soft-primary rounded-circle text-primary">
                                                                <i class="mdi mdi-email-outline"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-14 mb-1">Updates</h5>
                                                        <p class="text-truncate mb-0">
                                                            It will be as simple as fact
                                                        </p>
                                                    </div>
                                                    <div class="flex-shrink-0 font-size-13">
                                                        27-03-2020
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#" class="text-body d-block">
                                                <div class="d-flex py-3">
                                                    <div class="flex-shrink-0 me-3 align-self-center">
                                                        <img class="rounded-circle avatar-xs" alt=""
                                                            src="{{ asset('assets/images/users/avatar-4.jpg') }}">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-14 mb-1">Terry Garrick</h5>
                                                        <p class="text-truncate mb-0">
                                                            At vero eos et accusamus et
                                                        </p>
                                                    </div>
                                                    <div class="flex-shrink-0 font-size-13">
                                                        27-03-2020
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Revenue by Location</h5>

                                        <div>
                                            <div id="usa" style="height: 226px"></div>
                                        </div>

                                        <div class="text-center mt-4">
                                            <a href="#" class="btn btn-primary btn-sm">View More</a>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Latest Transaction</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"  style="width: 50px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheckall">
                                                                <label class="form-check-label" for="customCheckall"></label>
                                                            </div>
                                                        </th>
                                                        <th scope="col"  style="width: 60px;"></th>
                                                        <th scope="col">ID & Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="user" class="avatar-xs rounded-circle" />
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">#AP1234</p>
                                                            <h5 class="font-size-15 mb-0">David Wiley</h5>
                                                        </td>
                                                        <td>02 Nov, 2019</td>
                                                        <td>$ 1,234</td>
                                                        <td>1</td>

                                                        <td>
                                                            $ 1,234
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Confirm
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                                                    W
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">#AP1235</p>
                                                            <h5 class="font-size-15 mb-0">Walter Jones</h5>
                                                        </td>
                                                        <td>04 Nov, 2019</td>
                                                        <td>$ 822</td>
                                                        <td>2</td>

                                                        <td>
                                                            $ 1,644
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Confirm
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                                <label class="form-check-label" for="customCheck3"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="user" class="avatar-xs rounded-circle" />
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">#AP1236</p>
                                                            <h5 class="font-size-15 mb-0">Eric Ryder</h5>
                                                        </td>
                                                        <td>05 Nov, 2019</td>
                                                        <td>$ 1,153</td>
                                                        <td>1</td>

                                                        <td>
                                                            $ 1,153
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-danger me-1"></i> Cancel
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                                <label class="form-check-label" for="customCheck4"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset('assets/images/users/avatar-6.jpg') }}" alt="user" class="avatar-xs rounded-circle" />
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">#AP1237</p>
                                                            <h5 class="font-size-15 mb-0">Kenneth Jackson</h5>
                                                        </td>
                                                        <td>06 Nov, 2019</td>
                                                        <td>$ 1,365</td>
                                                        <td>1</td>

                                                        <td>
                                                            $ 1,365
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Confirm
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck5">
                                                                <label class="form-check-label" for="customCheck5"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                                                    R
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">#AP1238</p>
                                                            <h5 class="font-size-15 mb-0">Ronnie Spiller</h5>
                                                        </td>
                                                        <td>08 Nov, 2019</td>
                                                        <td>$ 740</td>
                                                        <td>2</td>

                                                        <td>
                                                            $ 1,480
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-warning me-1"></i> Pending
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Upzet.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">

                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-1.png') }}" class="img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-2.png') }}" class="img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-3.png') }}" class="img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts js -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{ asset('assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

        <script src="{{ asset('assets/js/pages/dashboard.init.js')}}"></script>

        <script src="{{ asset('assets/js/app.js')}}"></script>

    </body>
</html>
