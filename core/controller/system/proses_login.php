<?php
session_start();
require_once("conn.php");



if($_POST[user_id]) {
		$user_id=$_POST[user_id];

		$user_password=$_POST[user_password];
			$con = connect();
			$query = "
			SELECT
				*
			FROM
				master_user
			WHERE

				user_id='$user_id' and user_password='".md5($user_password)."'";
			

			$result = pg_query($con,$query);
			if(pg_num_rows($result)>0)
			{

				$rows = pg_fetch_assoc($result);
				//print_r($rows);exit;
				 extract($rows);
				$_SESSION["rw"]=$rw;
				$_SESSION["kec_kode"]=$kec_kode;
				$_SESSION["kel_kode"]=$kel_kode;
				$_SESSION["user_level"]=$user_level;
				$_SESSION["user_id"]=$user_id;
				$_SESSION["user_name"]=$user_name;
				$_SESSION["lock"]=$lock;

				$_SESSION["user_enable"]=$user_enable;

				$sukses=1;
			}
			else
			{
				$sukses=0;
			}


		if($user_level==601){
			header("Location:../../view/bidang/index.php");

		}elseif($_SESSION['user_level']=='10'){
		header("Location:../../view/admin/index.php");
		}elseif($_SESSION['user_level']=='8'){
		header("Location:../../view/bappeda/index.php");
		}elseif($_SESSION['user_level']=='6'){
		header("Location:../../view/skpd/index.php");
		}elseif($_SESSION['user_level']=='7'){
		header("Location:../../view/mitra_skpd/index.php");
		}elseif($_SESSION['user_level']=='5'){
		header("Location:../../view/pemetaan/index.php");
		}elseif($_SESSION['user_level']=='4'){
		header("Location:../../view/kecamatan/index.php");
		}elseif($_SESSION['user_level']=='3'){
		header("Location:../../view/gampong/index.php");
		}elseif($_SESSION['user_level']=='2'){
		header("Location:../../view/admin_gampong/index.php");
		}elseif($_SESSION['user_level']=='612'){
		header("Location:../../view/user_bappeda_verif/index.php");
		}elseif($_SESSION['user_level']=='777'){
		header("Location:../../view/epokir/index.php");
		}elseif($_SESSION['user_level']=='700'){
		header("Location:../../view/verif_pokir/index.php");
		
		}else{
			echo "<script> 
			alert('Username dan password salah');
			location.href='../../../index.php';
			
			</script>";
		
			
		
		}


		


	}






?>
