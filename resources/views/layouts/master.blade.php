<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
          content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
          content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/semantic/semantic.min.css">
    <script src="{{url('/')}}/semantic/semantic.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{url('/')}}/public/assets/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/feather.css">

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/font-awesome-n.min.css">

    <link rel="stylesheet" href="{{url('/')}}/public/assets/css/chartist.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/datatables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/buttons.datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/widget.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    @yield('css')

    <script>
        $(function () {
            $(".datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>

    <script src="{{url('/')}}/public/vendor/tinymce/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

<div class="loader-bg">
    <div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a href="index.html">
                        <img class="img-fluid" src="{{url('/')}}/public/assets/png/logo.png" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu icon-toggle-right"></i>
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!"
                               onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                               class="waves-effect waves-light" data-cf-modified-d2d1d6e2f87cbebdf4013b26-="">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-red">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu"
                                    data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{url('/')}}/public/assets/jpg/avatar-4.jpg"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{url('/')}}/public/assets/jpg/avatar-3.jpg"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{url('/')}}/public/assets/jpg/avatar-4.jpg"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-message-square"></i>
                                    <span class="badge bg-c-green">3</span>
                                </div>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{url('/')}}/public/assets/jpg/avatar-3.jpg" class="img-radius"
                                         alt="User-Profile-Image">
                                    <span>{{ auth()->user()->name }}</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu"
                                    data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                            <i class="feather icon-mail"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                            <i class="feather icon-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-search-box">
                            <a class="back_friendlist">
                                <i class="feather icon-x"></i>
                            </a>
                            <div class="right-icon-control">
                                <div class="input-group input-group-button">
                                    <input type="text" id="search-friends" name="footer-email" class="form-control"
                                           placeholder="Search Friend">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                                class="feather icon-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box waves-effect waves-light" data-id="1"
                                 data-status="online" data-username="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius"
                                         src="{{url('/')}}/public/assets/jpg/avatar-3.jpg" alt="Generic placeholder image ">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="2"
                                 data-status="online" data-username="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{url('/')}}/public/assets/jpg/avatar-2.jpg"
                                         alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="3"
                                 data-status="online" data-username="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{url('/')}}/public/assets/jpg/avatar-4.jpg"
                                         alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="4"
                                 data-status="offline" data-username="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{url('/')}}/public/assets/jpg/avatar-3.jpg"
                                         alt="Generic placeholder image">
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min
                                            ago</small></div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="5"
                                 data-status="offline" data-username="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{url('/')}}/public/assets/jpg/avatar-2.jpg"
                                         alt="Generic placeholder image">
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min
                                            ago</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-x"></i> Josephin Doe
                </a>
            </div>
            <div class="main-friend-chat">
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="{{url('/')}}/public/assets/jpg/avatar-2.jpg"
                             alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?
                            </p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">Ohh! very nice</p>
                        </div>
                        <p class="chat-time">8:22 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="{{url('/')}}/public/assets/jpg/avatar-2.jpg"
                             alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">can you come with me?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="chat-reply-box">
                <div class="right-icon-control">
                    <div class="input-group input-group-button">
                        <input type="text" class="form-control" placeholder="Write hear . . ">
                        <div class="input-group-append">
                            <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                    class="feather icon-message-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                <nav class="pcoded-navbar">
                    <div class="nav-list">
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigation-label">CRM System</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="{{Request::segment(1) == 'dashboard' ? 'active' : ''}}">
                                    <a href="{{ route('admin.dashboard') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="feather icon-home"></i>
                                            </span>
                                        <span class="pcoded-mtext">Home</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="pcoded-navigation-label">Content Management</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="{{Request::segment(1) == 'customers' ? 'active' : ''}}">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Customers</span>
                                    </a>
                                </li>
                                <li class="{{Request::segment(1) == 'accounts' ? 'active' : ''}}">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                                        <span class="pcoded-mtext">Accounts</span>
                                    </a>
                                </li>
                                <li class="{{Request::segment(1) == 'vouchers' ? 'active' : ''}}">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-shield"></i></span>
                                        <span class="pcoded-mtext">Vouchers</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Reports</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Create Account Report</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{Request::segment(1) == 'categories' ? 'active' : ''}}">
                                    <a href="#" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="fa fa-wrench"></i>
                                            </span>
                                        <span class="pcoded-mtext">Categories</span>
                                    </a>
                                </li>
                                <li class="{{Request::segment(1) == 'currencies' ? 'active' : ''}}">
                                    <a href="#" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="fa fa-cog"></i>
                                            </span>
                                        <span class="pcoded-mtext">Currencies</span>
                                    </a>
                                </li>
                                <li class="{{Request::segment(1) == 'reservations' ? 'active' : ''}}">
                                    <a href="#" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="fa fa-flag"></i>
                                            </span>
                                        <span class="pcoded-mtext">Reservations</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Accounting & Billing</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Revenues</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Expenses</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Billing</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Cash</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="pcoded-content">

                    <div class="page-header card">
                        <div class="row align-items-end">

                            @yield('pageHeaderTitle')

                            @yield('breadcrumb')

                        </div>
                    </div>

                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">

                                    @if(session()->has('success'))
                                        <div class="alert alert-success background-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="icofont icofont-close-line-circled text-white"></i>
                                            </button>
                                            <strong>{{ session()->get('success') }}</strong>
                                        </div>
                                    @endif

                                    @if(session()->has('error'))
                                        <div class="alert alert-danger background-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="icofont icofont-close-line-circled text-white"></i>
                                            </button>
                                            <strong>{{ session()->get('error') }}</strong>
                                        </div>
                                    @endif

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="icofont icofont-close-line-circled"></i>
                                            </button>
                                            @foreach ($errors->all() as $error)
                                                <strong>{{ $error }} <br></strong>
                                            @endforeach
                                        </div>
                                    @endif

                                    @yield('content')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="styleSelector">
                </div>

            </div>
        </div>
    </div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
<h1>Warning!!</h1>
<p>You are using an outdated version of Internet Explorer, please upgrade
    <br/>to any of the following web browsers to access this website.
</p>
<div class="iew-container">
    <ul class="iew-download">
        <li>
            <a href="http://www.google.com/chrome/">
                <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                <div>Chrome</div>
            </a>
        </li>
        <li>
            <a href="https://www.mozilla.org/en-US/firefox/new/">
                <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                <div>Firefox</div>
            </a>
        </li>
        <li>
            <a href="http://www.opera.com">
                <img src="../files/assets/images/browser/opera.png" alt="Opera">
                <div>Opera</div>
            </a>
        </li>
        <li>
            <a href="https://www.apple.com/safari/">
                <img src="../files/assets/images/browser/safari.png" alt="Safari">
                <div>Safari</div>
            </a>
        </li>
        <li>
            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                <img src="../files/assets/images/browser/ie.png" alt="">
                <div>IE (9 & above)</div>
            </a>
        </li>
    </ul>
</div>
<p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script data-cfasync="false" src="{{url('/')}}/public/assets/js/email-decode.min.js"></script>

<script type="1dc21dc544476ddffbc54af6-text/javascript" src="{{url('/')}}/public/assets/js/jquery.min.js"></script>
<script type="1dc21dc544476ddffbc54af6-text/javascript" src="{{url('/')}}/public/assets/js/jquery-ui.min.js"></script>
<script type="1dc21dc544476ddffbc54af6-text/javascript" src="{{url('/')}}/public/assets/js/popper.min.js"></script>
<script type="1dc21dc544476ddffbc54af6-text/javascript" src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>

<script src="{{url('/')}}/public/assets/js/waves.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>


<script type="1dc21dc544476ddffbc54af6-text/javascript" src="{{url('/')}}/public/assets/js/jquery.slimscroll.js"></script>

<script type="1dc21dc544476ddffbc54af6-text/javascript" src="{{url('/')}}/public/assets/js/modernizr.js"></script>
<script type="1dc21dc544476ddffbc54af6-text/javascript" src="{{url('/')}}/public/assets/js/css-scrollbars.js"></script>

<script src="{{url('/')}}/public/assets/js/waves.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>

<script src="{{url('/')}}/public/assets/js/jquery.datatables.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>

<script src="{{url('/')}}/public/assets/js/datatables.buttons.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>

<script src="{{url('/')}}/public/assets/js/jszip.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/pdfmake.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/vfs_fonts.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/buttons.print.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/buttons.html5.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/datatables.bootstrap4.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/datatables.responsive.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/responsive.bootstrap4.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>

<script src="{{url('/')}}/public/assets/js/data-table-custom.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/pcoded.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/vertical-layout.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/jquery.mcustomscrollbar.concat.min.js" type="1dc21dc544476ddffbc54af6-text/javascript"></script>
<script type="1dc21dc544476ddffbc54af6-text/javascript" src="{{url('/')}}/public/assets/js/script.js"></script>

<script src="{{url('/')}}/public/assets/js/jquery.flot.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/jquery.flot.categories.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/curvedlines.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/jquery.flot.tooltip.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script type="6a728206c8ede063a939d6d6-text/javascript" src="{{url('/')}}/public/assets/js/jquery.wavify.js"></script>
<script type="6a728206c8ede063a939d6d6-text/javascript" src="{{url('/')}}/public/assets/js/tweenmax.min.js"></script>

<script src="{{url('/')}}/public/assets/js/chartist.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="{{url('/')}}/public/assets/js/amcharts.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/serial.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/light.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script type="6a728206c8ede063a939d6d6-text/javascript" src="{{url('/')}}/public/assets/js/owl.carousel.min.js"></script>
<script src="{{url('/')}}/public/assets/js/pcoded.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{url('/')}}/public/assets/js/vertical-layout.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script type="6a728206c8ede063a939d6d6-text/javascript" src="{{url('/')}}/public/assets/js/widget-statistic.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{url('/')}}/public/assets/js/custom-dashboard.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{url('/')}}/public/assets/js/script.min.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script type="d2d1d6e2f87cbebdf4013b26-text/javascript">
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="{{url('/')}}/public/assets/js/rocket-loader.min.js" data-cf-settings="1dc21dc544476ddffbc54af6-|49" defer=""></script>

@yield('scripts')

</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->

</html>
