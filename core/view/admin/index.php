<?php  
session_start();
if($_SESSION['user_level']<>10)
{
	  header("Location:../../../index.php");
	  exit;
}

?>
<!DOCTYPE html>
<html>
<?php include '../../../core/view/system/header.php'?>

<body class="md-skin">
    <div id="wrapper">
	<?php  include '../../../core/view/kecamatan/nav-sidebar.php' ?>
        <div id="page-wrapper" class="gray-bg">
        <?php include '../../../core/view/system/nav-top-up.php' ?>
		
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
                            <h2><?php echo $_SESSION['user_level']  ?></h2>
                        </div>
                        <div class="ibox-content">
                           <!--isi konten -->
						   
						   
						
						 <!--isi konten-->
                        </div>
                    </div>
                </div>
            </div>
			
					
			
            <?php include '../../../core/view/system/footer.php' ?>
        </div>
        </div>

	 <?php include '../../../core/view/system/javascript.php' ?>
</body>

</html>
