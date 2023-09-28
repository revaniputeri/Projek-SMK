<?php
include "koneksi.php";

$kdPaket     	=$_POST ['kdPaket'];
$nama_paket     =$_POST ['nama_paket'];
$jenis_paket    =$_POST ['jenis_paket'];
$harga          =$_POST ['harga'];

$query =mysqli_query ($koneksi,"insert into paket values( 
	'$kdPaket','$nama_paket','$jenis_paket','$harga')");
header("location:home.php #experience");
?>
