<?php
session_start();
if($_SESSION[user_level]==null){
    header("Location:../../../core/view/system/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>e-Musrenbang Kabupaten Pidie</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="shortcut icon" href="../../../assets/img/favicon.png">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="../../../assets/fonts/font-face.css">
  <!-- CSS Files -->
  <link rel="stylesheet" href="../../../assets/css/material-dashboard.min.css"  />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="white" data-image="../../../assets/img/sidebar-1.jpg">
		<div class="card card-profile" style="margin-top: -5px;margin-bottom: 0px;">
         <div class="logo">
           <img class="img" src="../../../assets/img/pidiekab.png">
			<a href="/" class="simple-text logo-normal">
				e-musrenbang
			</a>
		<marquee style="font-size: 14px;">
		Mewujudkan Transparansi Perencanaan Pembangunan Daerah
		</marquee>
				Anda Masuk Sebagai User :<br>
		<?php echo $_SESSION[user_name]  ?>
      </div>
	    </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
		 <li class="nav-item active">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./rakortek.php">
              <i class="material-icons">content_paste</i>
              <p>Hasil Rakortek</p>
            </a>
          </li>          
		  <li class="nav-item ">
            <a class="nav-link" href="./forum.php">
              <i class="material-icons">content_copy</i>
              <p>Forum Perangkat Daerah</p>
            </a>
          </li>
         </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
			<a  href="../../../core/controller/system/logout.php" class="btn btn-white btn-round btn-just-icon" rel="tooltip" title=""  data-original-title="Logout dari Aplikasi" aria-describedby="tooltip314314">
                 <i class="material-icons">logout</i>
            </a>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
			<div class="container-fluid">


          <div class="row">
              <div class="col-lg-6 col-md-12">
                  <div class="card">
                      <div class="card-header card-header-tabs card-header-primary">
                      <h4 class="card-title">Selamat datang User : <?php echo $_SESSION[user_id]  ?> </h4>
                      <p class="card-category">Anda Masuk Sebagai User : <?php echo $_SESSION[user_name]  ?> </p>
                    </div>
                      <div class="card-body table-responsive">
                        <p>Menu Hasil Rakortek digunakan untuk melakukan verifikasi usulan. </p>
							
										Buku panduan aplikasi e-musrenbang untuk user Admin Bidang BAPPEDA. Buku panduannya dapat didownload pada link berikut.<br><br>
										<ul>
											<li><a href="../../../../2019/assets/modul/8. BUKU PANDUAN APLIKASI ADMIN BIDANG BAPPEDA.pdf">Buku Panduan Admin Bidang BAPPEDA</a></li><br>
										</ul>
									</span>
                      </div>
                    </div>
                  </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Pengumuman</h4>
                  <p class="card-category">Pelaksanaan Musrenbang Gampong dan Musrenbang Kecamatan dalam Kabupaten Pidie Tahun 2019</p>
                </div>
                <div class="card-body table-responsive">
                  <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 content no-top-border" style="text-align: justify;">
                    <p class="m-b-xs"><strong>Pelaksanaan Musrenbang Gampong dan Musrenbang Kecamatan dalam Kabupaten Pidie Tahun 2019</strong></p>
                    <p></p><p>Sesuai dengan amanat Undang-Undang Nomor 25 Tahun 2004 tentang Sistem Perencanaan Pembangunan Nasional dan Undang-Undang Nomor 6 Tahun 2014 tentang Desa, maka Kami menginstruksikan kepada Saudara Para Camat dalam Kabupaten Pidie untuk melaksanakan Musrenbang dengan jadwal sebagai berikut :</p><ol><li><strong>Musrenbang Gampong</strong> tanggal 28 Januari s/d 04 Februari 2019</li><li><strong>Pra Musrenbang Kecamatan</strong> tanggal 30 Januari s/d 06 Februari 2019</li><li><strong>Musrenbang Kecamatan</strong> tanggal 11 Februari s/d 16 Februari 2019</li></ol><p>Berita Acara Hasil Pelaksanaan Musrenbang Gampong dan Pra Musrenbang Kecamatan agar <strong>segera </strong>disampaikan kepada Bupati Pidie c.q BAPPEDA Kabupaten Pidie setelah pelaksanaan Musrenbang dimaksud dan paling lambat tanggal <strong>06 Februari 2019</strong> untuk diinput ke dalam aplikasi e-Musrenbang.</p><p>Demikian kami sampaikan untuk dilaksanakan sebagaimana mestinya.</p>.<p></p>
               </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-left">
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear())
            </script> <a href="#">Bappeda Kabupaten Pidie</a> - All Right Reserved.
          </div>
        </div>
      </footer>
    </div>
  </div>
  

  <!--   Core JS Files   -->
  <script src="../../../assets/js/core/jquery.min.js"></script>
  <script src="../../../assets/js/core/popper.min.js"></script>
  <script src="../../../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../../../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../../../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../../../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../../../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../../../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../../../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../../../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../../../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../../../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../../../assets/js/plugins/fullcalendar.min.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../../../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="../../../assets/js/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../../../assets/js/plugins/arrive.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="../../../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../../assets/js/material-dashboard.min.js" type="text/javascript"></script>

  <script>
  $(document).ready(function(){
	$('#data').DataTable();
});
  </script>
</body>

</html>
