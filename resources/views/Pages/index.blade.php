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
            
                
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                   
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
    </nav>
    </header>
    </div>
        <br>
        <br>
        <br>
        <br>
    <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                        <div class="col-5 align-self-center">
                            <h4 class="page-title">Product by {{Auth::user()->name}}</h4>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                </div>
    <br>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @php
                $count=1;
                    @endphp
                        @foreach ($data_product as $product)
            <div class="container-fluid">
           
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row el-element-overlay">
                    <div class="col-lg-5 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                            
                                <div class="el-card-avatar el-overlay-1"> <img src="{{$product->getproduct_image()}}" width="50%" height="50%" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="/ProductPage/detail/{{$data_user}}/{{$product->id}}"><i class="sl-icon-magnifier"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="sl-icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div class="m-l-10">
                                        <h4 class="m-b-0">{{$product->product_name}}</h4>
                                    </div>
                                    <div class="ml-auto m-r-15">
                                        <button type="button" class="btn btn-dark btn-circle">{{$product->product_price}}</button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    
                    
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
                </div>
                
            </div>
            
            @endforeach

                    <footer class="footer text-center">
                            All Rights Reserved by Mastatech Admin. Designed and Developed by <a href="https://mastatech.com">MastaTech</a>.
                        </footer>
                        <!-- ============================================================== -->
                        <!-- End footer -->
                        <!-- ============================================================== -->
        </div>
        
                        <!-- ============================================================== -->
                        <!-- End Page wrapper  -->
                        <!-- ============================================================== -->
</div>

             


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