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
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      </head>
      <body>
    
      <div class="container mt-5">
        <h1 class="text-center mb-5"> Stok Darah</h1>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        
                        <th>Nama Lokasi</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
    
                    @foreach ($lokasi as $item)
                        <tr>
                            
                            <th>{{ $item->nama_lokasi}}</th>
                            <th>{{ $item->Alamat}}</th>
                            
                            <th>
                                <a href="" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{url ('viewlokasi/'.$item->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </th>
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      </body>
    </html>
    
    