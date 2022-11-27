

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blutspender</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

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
    
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="public\css\bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="public\css\metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public\css\sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public\css\font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="public\css\icofont.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<br><br><br><br>
<body>
<div class="container text-center">
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header">Tambah Stok Darah</h1>
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill up the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="POST" action="/addstok/{{$data[0]->id}}?id={{$data[0]->id}}" >
                                        @method('put')
                                     @csrf
                                     
                                        <div class="form-group">
                                            <label>Masukkan Jenis Transfusi</label>
                                            <input class="form-control" type="text" value="{{ $data[0]->jenis_transfusi}}" placeholder="Plasma" name="name" required>
                                        </div>
                                       

                                        <div class="form-group">
                                            <label>Masukkan Golongan Darah</label>
                                            <input class="form-control" value="{{ $data[0]->golongan_darah}}" placeholder="Eg: B+" name="bloodgroup" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Masukkan Jumlah Stok</label>
                                            <input class="form-control" value="{{ $data[0]->jumlah_stok}}" placeholder="Eg: 10" name="bloodgroup1" required>
                                        </div>
                                        <div class="container text-center">
                                        <button type="submit" class="btn btn-success btn-default" style="border-radius: 0%;">Submit Form</button>
                                     </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
                            </div>
    <!-- jQuery -->
    <script src="{{ asset ('../vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset ('../vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset ('../vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset ('../dist/js/sb-admin-2.js') }}"></script>

</body>
<footer>      
    </footer>
</form>



