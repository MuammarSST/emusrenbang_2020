<?php
session_start();
$_SESSION = []; //empty array. 
session_write_close(); 
session_unset();
session_destroy();

header("Location:../../../index.php");
?>