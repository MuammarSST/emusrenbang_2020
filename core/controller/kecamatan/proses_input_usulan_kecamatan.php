<?php  

require_once("../../../core/controller/system/conn.php");
$con = connect();

$id_kecamatan			=	$_POST['id_kecamatan'];
$id_gampong				=	$_POST['id_gampong'];
$nama_usulan			=	$_POST['nama_usulan'];
$volume					=	$_POST['volume'];
$id_satuan				=	$_POST['id_satuan'];
$tipe_kegiatan			=	$_POST['tipe_kegiatan'];
$id_bidang_bappeda		=	$_POST['id_bidang_bappeda'];
$id_skpd				=	$_POST['id_skpd'];
$lokasi					=	$_POST['lokasi'];
$kondisi_saat_ini		=	$_POST['kondisi_saat_ini'];
$tingkat_kebutuhan		=	$_POST['tingkat_kebutuhan'];
$dampak_kegiatan		=	$_POST['dampak_kegiatan'];
$alasan_usulan			=	$_POST['alasan_usulan'];
$keterangan_lainnya		=	$_POST['keterangan_lainnya'];
$cp_nama				=	$_POST['cp_nama'];
$cp_alamat				=	$_POST['cp_alamat'];
$cp_hp					=	$_POST['cp_hp'];
$tanggal_usulan			=	$_POST['tanggal_usulan'];
$status_usulan			=	$_POST['status_usulan'];


$foto_kondisi_lapangan	=	$_POST['foto_kondisi_lapangan'];


?>