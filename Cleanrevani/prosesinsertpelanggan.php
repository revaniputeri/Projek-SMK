<?php
include "koneksi.php";

$kdPelanggan     	=$_POST ['kdPelanggan'];
$nama_pelanggan     =$_POST ['nama_pelanggan'];
$alamat             =$_POST ['alamat'];
$telp               =$_POST ['telp'];

$query =mysqli_query ($koneksi,"insert into pelanggan values( 
	'$kdPelanggan','$nama_pelanggan','$alamat','$telp')");
header("location:showinsertpelanggan.php");
?>
