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
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Invoice</h4>
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
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <h3><b>INVOICE</b> <span class="pull-right">#5669626</span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger">Masta Tech</b></h3>
                                            <p class="text-muted m-l-5">7-59-03, Bangi Sentral,
                                                <br/> Jalan Medan Pusat Bandar 8A,
                                                <br/> 43650 Bandar Baru Bangi,
                                                <br/> Selangor, Malaysia.</p>
                                        </address>
                                    </div>
                                    <!-- <div class="pull-right text-right">
                                        <address>
                                            <h3>To,</h3>
                                            <h4 class="font-bold">Gaala & Sons,</h4>
                                            <p class="text-muted m-l-30">E 104, Dharti-2,
                                                <br/> Nr' Viswakarma Temple,
                                                <br/> Talaja Road,
                                                <br/> Bhavnagar - 364002</p>
                                            <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> 23rd Jan 2018</p>
                                            <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2018</p>
                                        </address>
                                    </div>
                                </div> -->
                                                                                                                                  
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    <th class="text-right">Quantity</th>
                                                    <th class="text-right">Price</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            @php
                                    $count=1;
                                    @endphp
                                        @foreach ($data_product as $product) 
                                            <tbody>
                                                <tr>
                                                    
                                                    <td class="text-center">{{$count++}}</td>
                                                    <td>{{$product->product_name}}</td>
                                                    <td class="text-right"># </td>
                                                    <td class="text-right"> {{$product->product_price}} </td>
                                                    <td class="text-right"> # </td>
                                                    
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub - Total amount: $13,848</p>
                                        <p>vat (10%) : $138 </p>
                                        <hr>
                                        <h3><b>Total :</b> $13,986</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <button class="btn btn-danger" type="submit"> Proceed to payment </button>
                                        <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
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

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
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
    <script>
    $(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>
</body>

</html>