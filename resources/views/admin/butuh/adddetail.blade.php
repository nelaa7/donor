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
                                                    <li> <a href="addstok"> Add Stok</a></li>
                                                    <li> <a href="viewstok"> View Stok</a></li>


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
                <div class="col-lg-12">
                    <h1 class="page-header">Formulir Butuh Donor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- Awal Form -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Input Data Butuh Darah:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="addedblood.php" method="post">

                                        <div class="form-group">
                                            <label>Masukkan Nama Lengkap</label>
                                            <input class="form-control" type="text" placeholder="" name="name" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="gender">
                                                <option></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="dob" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Masukkan Golongan Darah</label>
                                            <select class="form-control" name="goldar">
                                                <option></option>
                                                <option value="A+">A+</option>
                                                <option value="B+">B+</option>
                                                <option value="AB+">AB+</option>
                                                <option value="O+">O+</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Masukkan Alamat Lengkap</label>
                                            <input class="form-control" placeholder="" type="text" name="address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Masukkan Nomor HP</label>
                                            <input class="form-control" placeholder="" type="text" name="contact" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Kantong</label>
                                            <input class="form-control" placeholder="" type="number" name="bloodqty" required>
                                        </div>


                                        <div class="form-group">
                                            <label>Lokasi Donor</label>
                                            <select class="form-control" name="lokasi">
											    <option></option>
									            <option value="1">RS Universitas Airlangga</option>
									            <option value="1">RSUD Dr.Moh.Soewandhi</option>
									            <option value="1">RSUD Dr.Soetomo</option>
									            <option value="1">RSUD Bhakti Dharma Husada</option>
                                                <option value="1">RS Brawijaya</option>
                                                <option value="1">RS Bunda</option>
									        </select>
								        </div>


                                        <button type="submit" class="btn btn-success" name="oksimpan">Simpan</button>
                                        <button type="reset" class="btn btn-danger" name="noreset">Kosongkan</button>


                                    </form>
                                </div>

                                <!-- Akhir Form -->

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

            <!-- Akhir Form -->


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
                            </div>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

<footer>

    </footer>

	<style>
	footer{
   background-color: #424558;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
	</style>

</html>



