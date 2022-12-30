<!DOCTYPE html>
<html>
<?php include 'header.php'?>

<body class="md-skin">
    <div id="wrapper">
	<?php include 'nav-sidebar.php' ?>
        <div id="page-wrapper" class="gray-bg">
        <?php include 'nav-top-up.php' ?>
		
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> e-Musrenbang Sign In</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong> e-Musrenbang Sign In</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeIn">
            
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title" style="text-align: center;">
                            <h2>e-Musrenbang Sign In</h2>
                        </div>
                        <div class="ibox-content">
                           <!--isi konten -->
						   
						   <form class="m-t" method="post" role="form" action="../../../core/controller/system/proses_login.php">
							<div class="form-group">
								<input type="text" name="user_id" class="form-control" placeholder="Masukan Username" required="">
							</div>
							<div class="form-group">
								<input type="password" name="user_password" class="form-control" placeholder="Masukan Password" required="">
							</div>
							<button type="submit" class="btn btn-primary block full-width m-b"> <i class="fa fa-sign-in"></i> Login</button>

							
						</form>
						
						 <!--isi konten-->
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title" style="text-align: center;">
                            <h2>Pengumuman</h2>
                        </div>
                        <div class="ibox-content">
                           <!--isi konten -->
						   
						   
						
						 <!--isi konten-->
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title" style="text-align: center;">
                            <h2>Usulan-usulan</h2>
                        </div>
                        <div class="ibox-content">
                           <!--isi konten -->
						   
						   
						
						 <!--isi konten-->
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title" style="text-align: center;">
                            <h2>Detail Usulan Perkecamatan</h2>
                        </div>
                        <div class="ibox-content">
                           <!--isi konten -->
						   
						   
						
						 <!--isi konten-->
                        </div>
                    </div>
                </div>
            </div>		
			
            <?php include 'footer.php' ?>
        </div>
        </div>

	 <?php include 'javascript.php' ?>
</body>

</html>
