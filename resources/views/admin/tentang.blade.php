
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
        <link rel="stylesheet" href="">
        <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIKI-Institut Teknologi Del</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('/assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>About</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>

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
                            <li class="active">
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
                        <div class="row">
                            <h3 class="col-12">Tentang</h3>
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
                            <ul class="breadcrumbs pull-left">
                                <li><a href="/homeadmin">Home</a></li>
                                <li><span>Tentang</span></li>
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
                                <a class="dropdown-item" href="/adminprofile">Profile</a>
                                <a class="dropdown-item" href="/">Keluar</a>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <br>

            <div class="main-content-inner">

                <!-- overview area start -->
                <div class="container">
                <div class="page-wrapper" style="min-height:100%;">
                <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="/assets/images/icon/logo.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/assets/images/icon/itdel.jpg" alt="Second slide">
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
        </div>
      </div>
        <div class="col-12">
          <br><h1><span style="color: #003366;"><strong>Sistem Informasi Karya Ilmiah Institut Teknologi Del</strong></span></h1>
          <p style="text-align:justify">
          Sistem Informasi Karya Ilmiah Institut Teknologi Del (SIKI IT Del) merupakan salah satu sistem informasi kampus yang memiliki tujuan untuk melestarikan aset intelektual yang dihasilkan oleh civitas institut serta memastikan aset tersebut dapat diakses dengan mudah. Keberadaan SIKI IT Del ini diharapkan dapat memberi kontribusi yang signifikan terhadap perkembangan ilmu pengetahuan terutama bidang pendidikan.
Aset intelektual yang dikelola pada SIKI IT Del saat ini meliputi Tugas akhir, Makalah, Paper, Skripsi, Artikel, dan Program Kreativitas Mahasiswa.<br>
          </p>
          <br><h3><span style="color: #3366ff;"><strong>Yayasan Del</strong></span><h3>
          <p style="text-align:justify">
          Jenderal TNI (Purn.) Luhut B. Pandjaitan mendirikan Yayasan Simargala pada tanggal 30 Agustus 2001 di Jakarta. 
          Simargala adalah nama desa kelahiran beliau di Huta Namora, Kecamatan Silaen, Kabupaten Toba Samosir, Sumatera 
          Utara. Pendirian Yayasan Simargala dilandasi oleh keinginan luhur untuk meningkatkan keterampilan dan kesejahteraan 
          masyarakat perdesaan yang kurang tersentuh pembangunan. Tekad yang kuat untuk berpartisipasi pada program 
          pemerintahan dalam bidang pendidikan, sosial, kemanusiaan, seni dan budaya, dan kelestarian lingkungan.
          <br><br>
          Masih pada tahun 2001, karena pertimbangan nama yang bersifat lokal, Yayasan Simargala diubah menjadi Yayasan 
          Del. Kata “Del” berasal dari usulan salah satu anggota Yayasan untuk menggunakan istilah “Del”, yang 
          mengandung arti “pemimpin yang selalu berada selangkah lebih maju”. Yayasan Del adalah organisasi nir laba 
          yang didirikan untuk membawa perubahan dan pembaharuan bagi individu dan juga masyarakat.</p>
          <br><h3><span style="color: #3366ff;"><strong>Visi Yayasan Del</strong></span><h3>
          <p style="text-align:justify">
          “Menjadi lembaga selangkah lebih depan dalam pengembangan talenta manusia yang memberikan kontribusi 
          berarti pada inovasi teknologi dan keberlanjutan sosial”. (Becoming one-step-ahead Institution in the 
          development of human talent that gives meaningful contribution to technological innovation and social 
          sustainability)</p>
          <br><h3><span style="color: #3366ff;"><strong>Misi Yayasan Del</strong></span><h3>
          <p style="text-align:justify">
          “Mengotimalkan manusia paripurna dan memberdayakan masyarakat dalam mencerdaskan kehidupan bangsa”. 
          (To optimize human completely and to empower community in nurturing the nation’s intellectual life)
          <br><br>
          Tujuan Yayasan Del adalah untuk menyediakan akses pendidikan berkualitas di daerah terpencil bagi 
          siswa-siswa berprestasi dengan latar belakang masyarakat ekonomi lemah, dengan mendirikan Institut 
          Teknologi Del, SMA Unggul Del, Sekolah Noah, dan Rumah Faye.
          <br><br>
          Politeknik Informatika Del didirikan pada tahun 2001. Sesuai dengan perkembangan keilmuan dan industri, 
          Politeknik Informatika Del ditingkatkan statusnya menjadi Institut Teknologi Del pada tahun 2013. 
          Yayasan Del mendirikan SMA Unggul Del di Laguboti pada tahun 2012. Selain itu, Yayasan Del juga 
          mendirikan Sekolah NOAH di Kalisari Cijantung pada tahun 2007 dan Rumah Faye.
          <br><br>
          Tidak hanya berkiprah di bidang pendidikan, Yayasan Del yang berkantor pusat di Gedung Sopo Del 
          Jakarta Selatan ini, juga aktif bekerjasama dengan pemerintah daerah dan lembaga sosial yang ada di 
          Indonesia untuk meningkatkan pelayanan serta memperluas cakrawala bidang pelayanan strategis lainnya.</p>
          <br><h3><span style="color: #3366ff;"><strong>Nilai-Nilai Del</strong></span><h3>
          <p style="text-align:justify">
          Karakter Del adalah:
          <br><br>
          “sikap dan perilaku untuk selalu selangkah lebih maju di dalam upaya-upaya membentuk masa depan yang 
          lebih baik berlandaskan iman, hati nurani yang bersih, dan akal budi yang terpelajar”. Nila-nilai 
          dasar IT Del adalah MarTuhan (godliness), Marroha (conscious), dan Marbisuk (wise).</p>
          <br><h3><span style="color: #3366ff;"><strong>Institut Teknologi Del (IT Del)</strong></span><h3>
          <p style="text-align:justify">
          Presiden Susilo Bambang Yudiyono meresmikan kampus IT Del pada tanggal 1 Desember 2005. Peresmian IT Del 
          bersamaan dengan penyelenggaraan Simposium tentang “Dukungan IT untuk Mewujudkan Good Governance”. Acara 
          peresmian IT Del turut disaksikan oleh Gubernur Sumatera Utara, para Bupati Kabupaten di sekitar Danau 
          Toba, Rektor ITB,  dan Prof. Miranda Goeltom dari Bank Indonesia.
          <br><br>
          Perubahan Politeknik Informatika del (PI Del) menjadi Institut Teknologi Del (IT Del) terjadi pada 
          tanggal 5 Juli 2013, yang dinyatakan dalam Surat Keputusan Kementerian Pendidikan dan Kebudayaan, 
          Direktorat Jenderal Pendidikan Tinggi, No. 1220/E.1.3//HK/2013, tentang Penyampaian Salinan Keputusan 
          Menteri Pendidikan dan Kebudayaan No. 266/E/0/023.
          <br><br>
          Perubahan mencakup kepada izin menyelenggarakan pendidikan program Sarjana,  Diploma IV, dan Diploma 
          III. Dengan demikian, setelah perubahan dimaksud, di IT Del terdapat 3 Fakultas, dengan 8 Program 
          Studi yang diselenggarakan, yakni:
          <br>
          1. Teknik Informatika (S1)
          <br>
          2. Teknik Elektro (S1)
          <br>
          3. Sistem Informasi (S1)
          <br>
          4. Teknik Informatika (DIV)
          <br>
          5. Teknik Informatika (DIII)
          <br>
          6. Teknik Komputer (DIII)
          <br>
          7. Manajemen Rekayasa (S1)
          <br>
          8. Teknik Bioproses (S1)
        </div>

    </div><!-- End About Me -->
    </div>
      </div>
      <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                <?php
                $karyai = \DB::select("SELECT * FROM karyailmiah where Status='Requested'");
                ?>
                @foreach($karyai as $k)
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>{{ $k->Judul }}</h4>
                            <span class="time"><i class="ti-time"></i>{{ $k->created_at }}</span>
                            <span class="time">{{ $k->Status }}</span>
                        </div>
                        <p>{{ $k->Deskripsi }}</p>
                    </div>
                @endforeach
                <?php
                $karyail = \DB::select("SELECT * FROM karyailmiah where NOT Status='Requested'");
                ?>
                @foreach($karyail as $kl)
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>{{ $kl->Judul }}</h4>
                            <span class="time"><i class="ti-time"></i>{{ $kl->updated_at }}</span>
                            <span class="time">{{ $kl->Status }}</span>
                        </div>
                        <p>{{ $kl->Deskripsi }}</p>
                    </div>
                @endforeach
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
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
