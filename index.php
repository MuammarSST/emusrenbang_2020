<?php 
session_start();


if($_SESSION['user_level'] =='999'){
     header ("Location:core/view/cluster/index.php");
	
	}elseif($_SESSION['user_level']=='601'){
    header("Location:core/view/bidang_bappeda/index.php");
	}elseif($_SESSION['user_level']=='10'){
    header("Location:core/view/admin/index.php");
	}elseif($_SESSION['user_level']=='8'){
    header("Location:core/view/bappeda/index.php");
	}elseif($_SESSION['user_level']=='6'){
    header("Location:core/view/skpd/index.php");
	}elseif($_SESSION['user_level']=='7'){
    header("Location:core/view/mitra_skpd/index.php");
	}elseif($_SESSION['user_level']=='5'){
    header("Location:core/view/pemetaan/index.php");
	}elseif($_SESSION['user_level']=='4'){
    header("Location:core/view/kecamatan/index.php");
	}elseif($_SESSION['user_level']=='3'){
    header("Location:core/view/gampong/index.php");
	}elseif($_SESSION['user_level']=='2'){
    header("Location:core/view/admin_gampong/index.php");
	}elseif($_SESSION['user_level']=='612'){
    header("Location:core/view/user_bappeda_verif/index.php");
	}elseif($_SESSION['user_level']=='777'){
    header("Location:core/view/epokir/index.php");
	}elseif($_SESSION['user_level']=='700'){
    header("Location:core/view/verif_pokir/index.php");
	
}else{
    header("Location:core/view/system/login.php");
}
?>