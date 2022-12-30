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
  <title>emusrenbang</title>
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
		 <li class="nav-item">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="./rakortek.php">
              <i class="material-icons">content_paste</i>
              <p>Hasil Rakortek</p>
            </a>
          </li>
          <li class="nav-item active">
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
			<a   href="../../../core/controller/system/logout.php" class="btn btn-white btn-round btn-just-icon" rel="tooltip" title=""  data-original-title="Logout dari Aplikasi" aria-describedby="tooltip314314">
                 <i class="material-icons">logout</i>
            </a>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row" id="root"> 
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Forum Perangkat Daerah</h4>
                  <p class="card-category"> Digunakan untuk melakukan pemilihan usulan dalam pembahasan pada tahapan Forum Perangkat Daerah</p>
                </div>
                <div class="card-body">
					<div id="tabel">
					</div>
                </div>
              </div>
            </div>  

<!-- Modal -->
			<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
				<div class="modal-content" >
				  <form id="form-update" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" action="../../controller/bidang/update_forum.php">
					  
				  <div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Edit Usulan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
				     <div id="data-edit">
						
                     </div>  
				  </div>

				  <div class="modal-footer">
					<button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-just-icon" data-dismiss="modal" data-original-title="Membatal edit Rakortek" aria-describedby="tooltip314314"><i class="material-icons">close</i>
                            </button>
                              <button type="submit" rel="tooltip" title="" class="btn btn-success btn-round btn-just-icon" data-original-title="Menyimpan edit Rakortek" aria-describedby="tooltip314314">
                                <i class="material-icons">save</i>
							  </button>
				  </div>
				   </form>
				</div>
			  </div>
			</div>
				<!-- Modal -->
				
								<!-- Modal -->
			<div class="modal fade" id="modal-rincian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
				<div class="modal-content" >
				  <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
					  
				  <div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Rincian Usulan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
				   <div id="data-rincian">
                     </div>  
	
				  </div>
				  <div class="modal-footer">
					<button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-just-icon" data-dismiss="modal" data-original-title="Membatal edit Rakortek" aria-describedby="tooltip314314"><i class="material-icons">close</i>
                            </button>

				  </div>
				   </form>
				</div>
			  </div>
			</div>
			
				<!-- Modal -->
			
		  </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-left">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script> Bappeda Kabupaten Pidie - All Right Reserved.
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
	  var tabel_rakortek="tabel_forum.php";
	  $('#tabel').load(tabel_rakortek);
	  $("#tabel").html('<img src="../../../assets/img/loading.gif" style="margin: auto;display: -webkit-box;">');

});


  $(document).on('click','#edit',function(e){
	e.preventDefault();
		$("#modal-edit").modal('show');
			$.post('modal_edit_forum.php',
				{id:$(this).attr('data-id')},
				function(html){
					$("#data-edit").html(html);
					

				}  
			);
		}); 
		
	/*	$("#form-update").submit(function(e) {
	       e.preventDefault();
		    var tabel_rakortek="tabel_forum.php";
			$("#tabel").html('<img src="../../../assets/img/loading.gif" style="margin: auto;display: -webkit-box;">');
			var dataform = $("#form-update").serialize();
			$.ajax({
			url: "../../controller/bidang/update_forum.php",
					type: "post",
					data: dataform,
					success: function(result) {
						$('#modal-edit').modal('hide');
						$('#tabel').load(tabel_rakortek);
						
					}
				});
	    });

	*/

	$(document).on('click','#rincian',function(e){
	e.preventDefault();
		$("#modal-rincian").modal('show');
			$.post('modal_rincian_forum.php',
				{id:$(this).attr('data-id')},
				function(html){
					$("#data-rincian").html(html);
				}  
			);
		});
   
  </script>
</body>

</html>
