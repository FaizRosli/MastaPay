<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/Asset1-1.png')}}">
    <title>MastaPay</title>
    <!-- Custom CSS -->

    <link href="{{asset('admin/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    

    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/home">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('admin/assets/images/Asset1-1.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{asset('admin/assets/images/Asset1-1.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{asset('admin/assets/images/Asset2-1.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{asset('admin/assets/images/Asset2-1.png')}}" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="sl-icon-menu font-20"></i>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-gift font-20"></i>
                            </a>
                            <div class="dropdown-menu animated bounceInDown">
                                <div class="mega-dropdown-menu row">
                                    <div class="col-lg-3 col-xlg-2 m-b-30">
                                        <h5 class="m-b-20">Carousel</h5>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container p-0">
                                                        <img class="d-block img-fluid" src="{{asset('admin/assets/images/big/img1.jpg')}}" alt="First slide">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container p-0">
                                                        <img class="d-block img-fluid" src="{{asset('admin/assets/images/big/img2.jpg')}}" alt="Second slide">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container p-0">
                                                        <img class="d-block img-fluid" src="{{asset('admin/assets/images/big/img3.jpg')}}" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </div>
                                    <div class="col-lg-3 m-b-30">
                                        <h5 class="m-b-20">Accordion</h5>
                                        <!-- Accordian -->
                                        <div id="accordion">
                                            <div class="card m-b-5">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-5">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-5">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3  m-b-30">
                                        <h5 class="m-b-20">Contact Us</h5>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </div>
                                    <div class="col-lg-3 col-xlg-4 m-b-30">
                                        <h5 class="m-b-20">List style</h5>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> You can give link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Give link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Another Give link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Forth link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-check text-success"></i> Another fifth link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-bell font-20"></i>

                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-primary text-white">
                                            <h4 class="m-b-0 m-t-5">4 New</h4>
                                            <span class="font-light">Notifications</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-danger btn-circle">
                                                    <i class="fa fa-link"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Luanch Admin</h5>
                                                    <span class="mail-desc">Just see the my new admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-success btn-circle">
                                                    <i class="ti-calendar"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Event today</h5>
                                                    <span class="mail-desc">Just a reminder that you have event</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-info btn-circle">
                                                    <i class="ti-settings"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Settings</h5>
                                                    <span class="mail-desc">You can customize this template as you want</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-primary btn-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center m-b-5" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-20 ti-email"></i>

                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                                <span class="with-arrow">
                                    <span class="bg-danger"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-danger text-white">
                                            <h4 class="m-b-0 m-t-5">5 New</h4>
                                            <span class="font-light">Messages</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="{{asset('admin/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle">
                                                    <span class="profile-status online pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="{{asset('admin/assets/images/users/2.jpg')}}" alt="user" class="rounded-circle">
                                                    <span class="profile-status busy pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Sonu Nigam</h5>
                                                    <span class="mail-desc">I've sung a song! See you at</span>
                                                    <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="{{asset('admin/assets/images/users/3.jpg')}}" alt="user" class="rounded-circle">
                                                    <span class="profile-status away pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Arijit Sinh</h5>
                                                    <span class="mail-desc">I am a singer!</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                                    <img src="{{asset('admin/assets/images/users/4.jpg')}}" alt="user" class="rounded-circle">
                                                    <span class="profile-status offline pull-right"></span>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);">
                                            <b>See all e-Mails</b>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->


                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <i class="ti-search font-16"></i>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="{{asset('admin/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="{{asset('admin/assets/images/users/1.jpg')}}" alt="user" class="img-circle" width="60">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0">Steave Jobs</h4>
                                        <p class=" m-b-0">varun@gmail.com</p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a>
                                </div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile dropdown m-t-20">
                                <div class="user-pic">
                                    <img src="{{asset('admin/assets/images/users/1.jpg')}}" alt="users" class="rounded-circle img-fluid" />
                                </div>
                                <div class="user-content hide-menu m-t-10">
                                    <h5 class="m-b-10 user-name font-medium">Steave Jobs</h5>
                                    <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </a>
                                    <a href="{{route('logout')}}" title="Logout" class="btn btn-circle btn-sm">
                                        <i class="ti-power-off"></i>
                                    </a>
                                    <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/logout">
                                            <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                            
                        </li>
						
						<!-- 1 -->
                        <!-- User Profile-->
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Profile</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Car-Wheel"></i>
                                <span class="hide-menu">
								 </span>
                            </a>
							

                            <ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item">
                                    <a href="my-profile.html" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> My Profile </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="edit-profile.html" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Edit Profile </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						
						<!-- 2 -->
						<!--Sales category side bar-->
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Sales</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Folder-WithDocument"></i>
                                <span class="hide-menu">Invoice </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="manage-invoice.html" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Manage Invoice </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Quotes"></i>
                                <span class="hide-menu">Quotes </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="manage-quotes.html" class="sidebar-link">
                                        <i class="mdi mdi-book-multiple"></i>
                                        <span class="hide-menu"> Manage Quotes </span>
                                    </a>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Files"></i>
                                <span class="hide-menu">Recurring Invoice </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="recurring-invoice.html" class="sidebar-link">
                                        <i class="mdi mdi-comment-processing-outline"></i>
                                        <span class="hide-menu"> Manage Recurring Invoice </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						
						<!-- 3 -->
						<!--Store category side bar-->
						<li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Store</span>
                        </li>
						
						<!--Product side bar -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Box-Open"></i>
                                <span class="hide-menu">Product </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="/Admin/product" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Manage Product </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						
						<!--Coupon side bar -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Ticket"></i>
                                <span class="hide-menu">Coupon </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="manage-coupon.html" class="sidebar-link">
                                        <i class="mdi mdi-comment-processing-outline"></i>
                                        <span class="hide-menu"> Manage Coupon </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						
						<!--shipping side bar-->
						<li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Mail-Send"></i>
                                <span class="hide-menu">Shipping </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="manage-shipping.html" class="sidebar-link">
                                        <i class="mdi mdi-comment-processing-outline"></i>
                                        <span class="hide-menu"> Manage Shipping </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						
						<!--Product category side bar-->
						<li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-File-HorizontalText"></i>
                                <span class="hide-menu">Category </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="view-product.html" class="sidebar-link">
                                        <i class="mdi mdi-comment-processing-outline"></i>
                                        <span class="hide-menu"> View Product </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						
						<!--Order side bar-->
						<li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-content-paste"></i>
                                <span class="hide-menu">Order </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="manage-order.html" class="sidebar-link">
                                        <i class="mdi mdi-comment-processing-outline"></i>
                                        <span class="hide-menu"> Manage Orders </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						
						<!-- 4 -->
						<!--Reports category side bar-->
						<li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Reports</span>
                        </li>
						
						<!--income side bar -->
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="report-income.html" aria-expanded="false">
                                <i class="icon-Money"></i>
                                <span class="hide-menu">Income</span>
                            </a>
                        </li>
						
						<!--Expenses side bar -->
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="report-expenses.html" aria-expanded="false">
                                <i class="icon-Money-Bag"></i>
                                <span class="hide-menu">Expenses</span>
                            </a>
                        </li>
						
						<!--Transaction side bar -->
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="report-transaction.html" aria-expanded="false">
                                <i class="icon-Credit-Card"></i>
                                <span class="hide-menu">Transaction</span>
                            </a>
                        </li>
						
						<!--Performance side bar -->
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="report-performance.html" aria-expanded="false">
                                <i class="icon-Line-Chart"></i>
                                <span class="hide-menu">Performance</span>
                            </a>
                        </li>
						
								
						
						<!-- 6 -->
						<!--Customer category side bar-->
						<li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Roles</span>
                        </li>
						
						<!-- Affiliator roles-->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Mailbox-Empty"></i>
                                <span class="hide-menu">Affiliate </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="/Admin/Affiliate" class="sidebar-link">
                                        <i class="icon-User"></i>
                                        <span class="hide-menu"> Manage of Affiliator </span>
                                    </a>
                                </li>
								<li class="sidebar-item">
                                    <a href="statistic-affiliate.html" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Statistic </span>
                                    </a>
                                </li>
								<li class="sidebar-item">
                                    <a href="commission-datatable-affiliate.html" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Comission </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						@if(Auth::user()->package_type != 'Basic')
						<!-- Dropship roles-->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Dropbox"></i>
                                <span class="hide-menu">Dropship </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item">
                                    <a href="/Admin/Dropship" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Manage Dropship </span>
                                    </a>
                                </li>
								<li class="sidebar-item">
                                    <a href="statistic-dropship.html" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Statistic </span>
                                    </a>
                                </li>
								<li class="sidebar-item">
                                    <a href="commission-datatable-dropship.html" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Comission </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @else
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Dropbox"></i>
                                <span class="hide-menu">Dropship </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item">
                                    <a href="/Admin/Dropship" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Manage Dropship </span>
                                    </a>
                                </li>
								<li class="sidebar-item">
                                    <a href="statistic-dropship.html" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Statistic </span>
                                    </a>
                                </li>
								<li class="sidebar-item">
                                    <a href="commission-datatable-dropship.html" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                            
                                        <span class="hide-menu"> Comission </span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->

                        @endif

                    
						
						<!-- Customer roles-->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Add-UserStar"></i>
                                <span class="hide-menu">Customer </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item">
                                    <a href="/Admin/Customer" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Manage customer </span>
                                    </a>
                                </li>
								<li class="sidebar-item">
                                    <a href="statistic-customer.html" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Statistic </span>
                                    </a>
                                </li>
								<li class="sidebar-item">
                                    <a href="commission-datatable-customer.html" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Comission </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
			
						
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Extra</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../../docs/documentation.html
                                   " aria-expanded="false">
                                <i class="mdi mdi-content-paste"></i>
                                <span class="hide-menu">Documentation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login1.html
                                   " aria-expanded="false">
                                <i class="mdi mdi-directions"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Welcome back  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card  bg-light no-card-border">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10">
                                        <img src="../../assets/images/users/2.jpg" alt="user" width="60" class="rounded-circle" />
                                    </div>
                                    <div>
                                        <h3 class="m-b-0">Hello !</h3>
                                        <span>Monday, 9 March 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales Summery -->
                <!-- ============================================================== -->
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>86%</h3>
                                    <h6 class="card-subtitle">Total Product</h6>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>40%</h3>
                                    <h6 class="card-subtitle">Pending Product</h6>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>56%</h3>
                                    <h6 class="card-subtitle">Product A</h6>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3>26%</h3>
                                    <h6 class="card-subtitle">Product B</h6>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-inverse" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- place order / Exchange -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white">
                                            <i class="ti-pie-chart"></i>
                                        </h1>
                                    </div>
                                    <div>
                                        <h4 class="card-title">Bandwidth usage</h4>
                                        <h6 class="text-white op-5">March 2019</h6>
                                    </div>

                                </div>

                                <div class="row m-t-20 align-items-center">
                                    <div class="col-4">
                                        <h3 class="font-light text-white">50 GB</h3>
                                    </div>
                                    <div class="col-8 text-right">
                                        <div class="bandwidth"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-cyan text-white">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white">
                                            <i class="ti-pie-chart"></i>
                                        </h1>
                                    </div>
                                    <div>
                                        <h4 class="card-title">Download count</h4>
                                        <h6 class="text-white op-5">March 2019</h6>
                                    </div>

                                </div>

                                <div class="row m-t-20 align-items-center">
                                    <div class="col-4">
                                        <h3 class="font-light text-white">14506</h3>
                                    </div>
                                    <div class="col-8 text-right">
                                        <div class="spark-count"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card ">
                            <div class="card-body">
                                <h4 class="card-title">Product Sale</h4>
                                <div id="visitor" style="height:223px; width:100%;" class="m-t-20"></div>
                                <!-- row -->
                                <div class="row m-t-30 m-b-15">
                                    <!-- column -->
                                    <div class="col-4 birder-right text-left">
                                        <h4 class="m-b-0">60%
                                            <small>
                                                <i class="ti-arrow-up text-success"></i>
                                            </small>
                                        </h4>Iphone</div>
                                    <!-- column -->
                                    <div class="col-4 birder-right text-center">
                                        <h4 class="m-b-0">28%
                                            <small>
                                                <i class="ti-arrow-down text-danger"></i>
                                            </small>
                                        </h4>Samsung</div>
                                    <!-- column -->
                                    <div class="col-4 text-right">
                                        <h4 class="m-b-0">12%
                                            <small>
                                                <i class="ti-arrow-up text-success"></i>
                                            </small>
                                        </h4>One+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4>Last Month Income</h4>
                                <div id="income" class="m-t-30"></div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- project of the month -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12 col-lg-8">
                        <div class="card">
                            <div class="card-body p-b-0">
                                <h4 class="card-title">Projects of the Month</h4>
                                <div class="table-responsive">
                                    <table class="table v-middle">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Team Lead</th>
                                                <th class="border-top-0">Project</th>
                                                <th class="border-top-0">Weeks</th>
                                                <th class="border-top-0">Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10">
                                                            <img src="../../assets/images/users/d1.jpg" alt="user" class="rounded-circle" width="45">
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Hanna Gover</h4>
                                                            <span>hgover@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>35</td>
                                                <td class="font-medium">$96K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10">
                                                            <img src="../../assets/images/users/d2.jpg" alt="user" class="rounded-circle" width="45">
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16 font-medium">Daniel Kristeen</h4>
                                                            <span>Kristeen@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>35</td>
                                                <td class="font-medium">$96K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10">
                                                            <img src="../../assets/images/users/d3.jpg" alt="user" class="rounded-circle" width="45">
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16 font-medium">Julian Josephs</h4>
                                                            <span>Josephs@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>35</td>
                                                <td class="font-medium">$96K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10">
                                                            <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle" width="45">
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16 font-medium">Jan Petrovic</h4>
                                                            <span>hgover@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>35</td>
                                                <td class="font-medium">$96K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10">
                                                            <img src="../../assets/images/users/d2.jpg" alt="user" class="rounded-circle" width="45">
                                                        </div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16 font-medium">Daniel Kristeen</h4>
                                                            <span>Kristeen@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>35</td>
                                                <td class="font-medium">$96K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h4 class="card-title">Temp Guide</h4>
                                <div class="d-flex align-items-center flex-row m-t-30">
                                    <div class="display-5 text-info">
                                        <i class="wi wi-day-showers"></i>
                                        <span>73
                                            <sup>°</sup>
                                        </span>
                                    </div>
                                    <div class="m-l-10">
                                        <h3 class="m-b-0">Saturday</h3>
                                        <small>Ahmedabad, India</small>
                                    </div>
                                </div>
                                <table class="table no-border mini-table m-t-20">
                                    <tbody>
                                        <tr>
                                            <td class="text-muted">Wind</td>
                                            <td class="font-medium">ESE 17 mph</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Humidity</td>
                                            <td class="font-medium">83%</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Pressure</td>
                                            <td class="font-medium">28.56 in</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Cloud Cover</td>
                                            <td class="font-medium">78%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <ul class="row list-style-none text-center m-t-30">
                                    <li class="col-3">
                                        <h4 class="text-info">
                                            <i class="wi wi-day-sunny"></i>
                                        </h4>
                                        <span class="d-block text-muted">09:30</span>
                                        <h3 class="m-t-5">70
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="text-info">
                                            <i class="wi wi-day-cloudy"></i>
                                        </h4>
                                        <span class="d-block text-muted">11:30</span>
                                        <h3 class="m-t-5">72
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="text-info">
                                            <i class="wi wi-day-hail"></i>
                                        </h4>
                                        <span class="d-block text-muted">13:30</span>
                                        <h3 class="m-t-5">75
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                    <li class="col-3">
                                        <h4 class="text-info">
                                            <i class="wi wi-day-sprinkle"></i>
                                        </h4>
                                        <span class="d-block text-muted">15:30</span>
                                        <h3 class="m-t-5">76
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Task, Feeds -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Task List</h4>
                                <div class="todo-widget scrollable" style="height:450px;">
                                    <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label todo-label" for="customCheck">
                                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                                    <span class="badge badge-pill badge-danger float-right">Today</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee">
                                                    <img class="assignee-img" src="../../assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Steave">
                                                </li>
                                                <li class="assignee">
                                                    <img class="assignee-img" src="../../assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Jessica">
                                                </li>
                                                <li class="assignee">
                                                    <img class="assignee-img" src="../../assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Priyanka">
                                                </li>
                                                <li class="assignee">
                                                    <img class="assignee-img" src="../../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Selina">
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label todo-label" for="customCheck1">
                                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing</span>
                                                    <span class="badge badge-pill badge-primary float-right">1 week </span>
                                                </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2017</div>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label todo-label" for="customCheck2">
                                                    <span class="todo-desc">Give Purchase report to</span>
                                                    <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee">
                                                    <img class="assignee-img" src="../../assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Priyanka">
                                                </li>
                                                <li class="assignee">
                                                    <img class="assignee-img" src="../../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Selina">
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label todo-label" for="customCheck3">
                                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing </span>
                                                    <span class="badge badge-pill badge-warning float-right">2 weeks</span>
                                                </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2017</div>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label todo-label" for="customCheck4">
                                                    <span class="todo-desc">Give Purchase report to</span>
                                                    <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee">
                                                    <img class="assignee-img" src="../../assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Priyanka">
                                                </li>
                                                <li class="assignee">
                                                    <img class="assignee-img" src="../../assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Selina">
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Feeds</h4>
                                <div class="feed-widget scrollable" style="height:450px;">
                                    <ul class="list-style-none feed-body m-0 p-b-20">
                                        <li class="feed-item">
                                            <div class="feed-icon bg-info">
                                                <i class="far fa-bell"></i>
                                            </div>
                                            <a href="">You have 4 pending tasks.</a>
                                            <span class="ml-auto font-12 text-muted">Just Now</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-success">
                                                <i class="ti-server"></i>
                                            </div>
                                            <a href=""> Server #1 overloaded.</a>
                                            <span class="ml-auto font-12 text-muted">2 Hours ago</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-warning">
                                                <i class="ti-shopping-cart"></i>
                                            </div>
                                            <a href="">New order received.</a>
                                            <span class="ml-auto font-12 text-muted">31 May</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-danger">
                                                <i class="ti-user"></i>
                                            </div>
                                            <a href="">New user registered.</a>
                                            <span class="ml-auto font-12 text-muted">30 May</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-inverse">
                                                <i class="far fa-bell"></i>
                                            </div>
                                            <a href="">New user registered.</a>
                                            <span class="ml-auto font-12 text-muted">27 May</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-info">
                                                <i class="far fa-bell"></i>
                                            </div>
                                            <a href="">You have 4 pending tasks.</a>
                                            <span class="ml-auto font-12 text-muted">Just Now</span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-danger">
                                                <i class="ti-user"></i>
                                            </div>
                                            <a href="">New user registered.</a>
                                            <span class="ml-auto font-12 text-muted">30 May</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Reviews</h4>
                                        <h5 class="card-subtitle">Overview of Review</h5>
                                        <h2 class="font-medium m-t-40 m-b-0">25426</h2>
                                        <span class="text-muted">This month we got 346 New Reviews</span>
                                        <div class="image-box m-t-30 m-b-30">
                                            <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simmons">
                                                <img src="../../assets/images/users/1.jpg" class="rounded-circle" width="45" alt="user">
                                            </a>
                                            <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitz">
                                                <img src="../../assets/images/users/2.jpg" class="rounded-circle" width="45" alt="user">
                                            </a>
                                            <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Phil">
                                                <img src="../../assets/images/users/3.jpg" class="rounded-circle" width="45" alt="user">
                                            </a>
                                            <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Melinda">
                                                <img src="../../assets/images/users/4.jpg" class="rounded-circle" width="45" alt="user">
                                            </a>
                                        </div>
                                        <a href="javascript:void(0)" class="btn btn-lg btn-info waves-effect waves-light">Checkout All Reviews</a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-6 border-left">
                                    <div class="card-body">
                                        <ul class="list-style-none">
                                            <li class="m-t-30">
                                                <div class="d-flex align-items-center">
                                                    <i class="mdi mdi-emoticon-happy display-5 text-muted"></i>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Positive Reviews</h5>
                                                        <span class="text-muted">25547 Reviews</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="m-t-40">
                                                <div class="d-flex align-items-center">
                                                    <i class="mdi mdi-emoticon-sad display-5 text-muted"></i>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Negative Reviews</h5>
                                                        <span class="text-muted">5547 Reviews</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="m-t-40 m-b-40">
                                                <div class="d-flex align-items-center">
                                                    <i class="mdi mdi-emoticon-neutral display-5 text-muted"></i>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Neutral Reviews</h5>
                                                        <span class="text-muted">547 Reviews</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card earning-widget">
                            <div class="card-body">
                                <h4 class="m-b-0">Total Earning</h4>
                            </div>
                            <div class="border-top scrollable" style="height:365px;">
                                <table class="table v-middle no-border">
                                    <tbody>
                                        <tr>
                                            <td style="width:40px">
                                                <img src="../../assets/images/users/1.jpg" width="50" class="rounded-circle" alt="logo">
                                            </td>
                                            <td>Andrew Simon</td>
                                            <td align="right">
                                                <span class="label label-info">$2300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../../assets/images/users/2.jpg" width="50" class="rounded-circle" alt="logo">
                                            </td>
                                            <td>Daniel Kristeen</td>
                                            <td align="right">
                                                <span class="label label-success">$3300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../../assets/images/users/3.jpg" width="50" class="rounded-circle" alt="logo">
                                            </td>
                                            <td>Dany John</td>
                                            <td align="right">
                                                <span class="label label-primary">$4300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../../assets/images/users/4.jpg" width="50" class="rounded-circle" alt="logo">
                                            </td>
                                            <td>Chris gyle</td>
                                            <td align="right">
                                                <span class="label label-warning">$5300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../../assets/images/users/5.jpg" width="50" class="rounded-circle" alt="logo">
                                            </td>
                                            <td>Opera mini</td>
                                            <td align="right">
                                                <span class="label label-danger">$4567</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="../../assets/images/users/6.jpg" width="50" class="rounded-circle" alt="logo">
                                            </td>
                                            <td>Microsoft edge</td>
                                            <td align="right">
                                                <span class="label label-megna">$7889</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Trade history / Exchange -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by MastaTech admin. Designed and Developed by
            <a href="https://masta.tech">Masta.Tech</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- apps -->
        <script src="{{asset('admin/dist/js/app.min.js')}}"></script>
        <script src="{{asset('admin/dist/js/app.init.dark.js')}}"></script>
        <script src="{{asset('admin/dist/js/app-style-switcher.js')}}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
        <!--Wave Effects -->
        <script src="{{asset('admin/dist/js/waves.js')}}"></script>
        <!--Menu sidebar -->
        <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
        <!--Custom JavaScript -->
        <script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
        <!--This page plugins -->
        <script src="{{asset('admin/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
    </body>
</html>