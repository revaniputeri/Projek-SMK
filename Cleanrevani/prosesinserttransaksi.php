<?php
include "koneksi.php";
//menyimpan transaksi
$no_nota     	=$_POST ['no_nota'];
$tglTransaksi   =$_POST ['tgl_transaksi'];
$kdPelanggan1   =$_POST ['kdPelanggan1'];
$totalBayar     =$_POST ['total_bayar'];
$query =mysqli_query ($koneksi,"insert into transaksi values( 
	'$no_nota','$tglTransaksi','$kdPelanggan1','$totalBayar')");
//menggunakan metode SESSION untuk mengirim variabel dan value no_nota menuju ke forminsertdetil.php
session_start();
$_SESSION['no_nota']=$no_nota;
header ("location:forminsertdetail.php");
?>
