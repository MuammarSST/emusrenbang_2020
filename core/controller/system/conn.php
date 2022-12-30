<?php


$db_host = "127.0.0.1";
$db_port = "5432";
$db_user = "postgres";
$db_passwd = "postgres";
$db_name = "emusrenbang_2020_pengembangan";


function connect()
{

    $host = $GLOBALS[db_host];
    $port = $GLOBALS[db_port];
    $user = $GLOBALS[db_user];
    $passwd = $GLOBALS[db_passwd];
    $db_name = $GLOBALS[db_name];


    $hasil = pg_connect("host=$host port=$port dbname=$db_name user=$user password=$passwd");
    if(!$hasil) die ("Koneksi gagal1 : ". pg_last_error());
    /*
	if(!$hasil){
        header("location: system/maintenance.php");
    }
    */
	return $hasil;
}



function disconnect($resource_id)
{
	@pg_close($resource_id);
}

