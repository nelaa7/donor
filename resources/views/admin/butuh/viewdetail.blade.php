<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "blutspender";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
?>

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

</head>
<br><br><br><br>
<body>
<div class="container text-center">
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Butuh Donor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<!-- Awal Tabel -->
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Butuh Darah:
                        </div>
                        <div class="panel-body">
                            <div class="row">

                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Golongan Darah</th>
                                    <th>Alamat</th>
                                    <th>Nomor HP</th>
                                    <th>Jumlah Kantong</th>
                                    <th>Lokasi Donor</th>
                                </tr>

                                <?php
                                    $no = 1;
                                    $tampil = mysqli_query($koneksi, "SELECT * from butuh_darah order by id_butdar desc");
                                    while($data = mysqli_fect_array($tampil)) :

                                ?>

                                <tr>
                                    <td><?=$no++;?></td>
                                    <td><?=$data['nama']?></td>
                                    <td><?=$data['jk']?></td>
                                    <td><?=$data['tgl_lahir']?></td>
                                    <td><?=$data['gol_darah']?></td>
                                    <td><?=$data['alamat']?></td>
                                    <td><?=$data['no_hp']?></td>
                                    <td><?=$data['kantong']?></td>
                                    <td><?=$data['lokasi']?></td>
                                </tr>
                                <?php endwhile; ?>
                            </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>







<!-- Akhir Tabel -->
