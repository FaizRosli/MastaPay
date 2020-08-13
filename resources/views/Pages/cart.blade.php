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
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Product Cart</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-9 col-lg-9">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h5 class="m-b-0 text-white">Your Cart (4 items)</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table product-overview">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product info</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th style="text-align:center">Total</th>
                                                <th style="text-align:center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $count=1;
                                                @endphp
                                                    @foreach ($data_product as $product)
                                            <tr>
                                                <td width="150"><img src="{{$product->getproduct_image()}}" alt="iMac" width="80"></td>
                                                <td width="550">
                                                    <h5 class="font-500">{{$product->product_name}}</h5>
                                                    <p>{{$product->product_detail}}</p>
                                                </td>
                                                <td>RM {{$product->product_price}}</td>
                                                <td width="70">
                                                    <input type="text" class="form-control" placeholder="1">
                                                </td>
                                                <td width="150" align="center" class="font-500">#TOTAL</td>
                                                <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                            </tr>
                                            </tbody>
                                            @endforeach
                                    </table>
                                    
                                    <hr>
                                    <div class="d-flex no-block align-items-center">
                                        <button class="btn btn-dark btn-outline"><i class="fas fa-arrow-left"></i> Continue shopping</button>
                                        <div class="ml-auto">
                                            <button class="btn btn-danger"><i class="fa fa fa-shopping-cart"></i> Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">CART SUMMARY</h5>
                                <hr>
                                <small>Total Price</small>
                                <h2>$612</h2>
                                <hr>
                                <button class="btn btn-success">Checkout</button>
                                <button class="btn btn-secondary btn-outline">Cancel</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">For Any Support</h5>
                                <hr>
                                <h4><i class="ti-mobile"></i> 011-562770088 (Whatsapp Support)</h4> <small>Please contact with us if you have any questions. We'll reply as soon as possible. </small>
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
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
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