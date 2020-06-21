<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIKI-Institut Teknologi Del</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/metisMenu.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="/assets/css/typography.css">
    <link rel="stylesheet" href="/assets/css/default-css.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="/assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
             <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li >
                                <a href="/homeadmin" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="/admin/koleksi" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Koleksi</span></a>
                            </li>
                            <li>
                                <a href="/admin/penulis" aria-expanded="true"><i class="ti-pie-chart"></i><span>Penulis</span></a>
                            </li>
                            <li>
                                <a href="/admin/prodi" aria-expanded="true"><i class="ti-palette"></i><span>Prodi</span></a>
                            </li>
                            <li>
                                <a href="/Publikasi" aria-expanded="true"><i class="ti-palette"></i><span>Publikasi</span></a>
                            </li>
                            <li>
                                <a href="/rejected" aria-expanded="true"><i class="ti-palette"></i><span>Rejected Karya Ilmiah</span></a>
                            </li>
                            <li>
                                <a href="/admin/tentang" aria-expanded="true"><i class="ti-slice"></i><span>Tentang</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Cari Karya Ilmiah" required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>

                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <?php
                                    $karya = \DB::select("SELECT * FROM karyailmiah where Status='Requested'");
                                ?>
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>{{count($karya)}}</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have new notifications <a href="/Publikasi">view all</a></span>
                                    <div class="nofity-list">
                                    @foreach($karya as $ky)
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <a href="/Publikasi">
                                                <p>{{ $ky->Judul }}</p>
                                                <span>{{ $ky->created_at }}</span>
                                                </a>
                                            </div>
                                    @endforeach
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Edit Profile</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="homeadmin">Home</a></li>
                                <li><a href="adminprofile">Profile</a><li>
                                <li><span>Edit Profile</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                        <?php
                        $adm = \DB::select("SELECT Nama_admin FROM admin");
                        ?>
                        @foreach($adm as $a)
                            <img class="avatar user-thumb" src="/assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{$a -> Nama_admin}}<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="adminprofile">Profile</a>
                                <a class="dropdown-item" href="/">Keluar</a>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- overview area end -->
            <!-- market value area start -->
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="market-status-table mt-4">
                            <div class="table-responsive">
                                <form class="form-horizontal" action ="{{ route('admin.update', $admin->Id_admin) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PUT')
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="Nama_admin" value="{{$admin->Nama_admin}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="Email" value="{{$admin->Email}}">
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telepon</label>
                                        <input type="text" class="form-control" name="No.telp" value="{{$admin->No_telp}}">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                  </form>  
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/metisMenu.min.js"></script>
    <script src="/assets/js/jquery.slimscroll.min.js"></script>
    <script src="/assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="/assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="/assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/scripts.js"></script>
   <footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #3c8dbc;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us!</h6>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Sistem Informasi Karya Ilmiah Institut Teknologi Del</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p> Sistem Informasi Karya Ilmiah Institut Teknologi Del (SIKI IT Del) merupakan salah satu sistem 
        informasi kampus yang memiliki tujuan untuk melestarikan aset intelektual yang dihasilkan oleh civitas institut serta memastikan aset tersebut dapat diakses dengan mudah.</p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Location</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a>Institut Teknologi Del</a>
        </p>
        <p>
          <a>JL. Sisimangaraja, Sitoluama</a>
        </p>
        <p>
          <a>Laguboti, Toba Samosir</a>
        </p>
        <p>
          <a>Sumatera Utara, Indonesia</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact Information</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a>Kode Pos: 22381</a>
        </p>
        <p>
          <a>Telp : +62632331234</a>
        </p>
        <p>
          <a>Fax  :  +62632331116</a>
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">About</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
           <li><i class="icofont-rounded-right"></i> <strong>Email Us:</strong> <br> info@del.ac.id </li> <br>
        <p>
           <li><i class="icofont-rounded-right"></i> <strong>Learn more about IT Del:</strong><p><a  href="https://www.del.ac.id/?lang=en">Detail</a></p> </li>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> PSI - 04</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>

</html>
