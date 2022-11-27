<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blutspender</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public\AdminLTE\plugins\fontawesome-free\css\all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="public\AdminLTE\plugins\tempusdominus-bootstrap-4\css\tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="public\AdminLTE\plugins\icheck-bootstrap\icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="public\AdminLTE\plugins\jqvmap\jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public\AdminLTE\dist\css\adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="public\AdminLTE\plugins\overlayScrollbars\css\OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="public\AdminLTE\plugins\daterangepicker\daterangepicker.css">
    <!-- summernote -->
  <link rel="stylesheet" href="public\AdminLTE\plugins\summernote\summernote-bs4.min.css">
</head>

<form action='{{ url('addstok') }}' method="POST" >
  @csrf 

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                               
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                           
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index">
                                    <img src="img/logo4.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index">home</a></li>
                                        <li><a href="Profile">Profile</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="addblog">Add blog</a></li>
                                                <li><a href="viewblog">View blog</a></li>
                                               
                                                
                                            </ul>
                                        </li>
                                        <li><a href="#">Stok Darah<i class="ti-angle-down"></i></a>
                                            <ul class="submenu"> 
                                                    <li> <a href="/addstok"> Add Stok</a></li>
                                                    <li> <a href="/addstok/create"> View Stok</a></li>
                                                  
                                                    </ul>
                                        <li><a href="lokasi">Lokasi Donor<i class="ti-angle-down"></i></a>
                                                <ul class="submenu"> 
                                                    <li> <a href="addlokasi"> Add Lokasi</a></li>
                                                    <li> <a href="viewlokasi"> View Lokasi</a></li>
                                                    
                                                    </ul>
                                                    </li>
                                        </li>
                                        <li><a href="contact">Butuh donor<i class="ti-angle-down"></i></a>
                                        <ul class="submenu"> 
                                                    <li> <a href="adddetail"> Add Detail</a></li>
                                                    <li> <a href="viewdetail"> View Detail</a></li>
                                                   
                                                    </ul>
                                    </li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
<br><br><br><br><br><br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Blog</h3>

                <p>untuk mengelola blog</p>
              </div>
              
              <a href="viewblog" class="small-box-footer">More info </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Stok Darah<sup style="font-size: 20px"></sup></h3>

                <p>untuk mengelola stok darah</p>
              </div>
              
              <a href="viewstok" class="small-box-footer">More info</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Lokasi Donor</h3>

                <p>untuk mengelola lokasi</p>
              </div>
              
              <a href="viewlokasi" class="small-box-footer">More info </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Butuh Donor</h3>

                <p>untuk mengelola butuh donor</p>
              </div>
              
              <a href="viewdetail" class="small-box-footer">More info </a>
            </div>
          </div>
          <!-- ./col --> 
        