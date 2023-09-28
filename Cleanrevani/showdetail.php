<?php
error_reporting(0);
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Detail Transaksi</title>
	<style>
		body
		{
			background-image: url('https://images.unsplash.com/photo-1570475735025-6cd1cd5c779d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>
	<h2 align="center"> LIST DETAIL TRANSAKSI </h2>
	<center>
		<table>
	<form action="" method="POST">
	<input type="text" name="search_detailtrans" placeholder="Masukkan KD Detil...">
	<input type="submit" name="cari" value="Cari">&nbsp;
	<input type="submit" name="refresh" value="Refresh">
</table>
	<br>
	<table border="1">
		<tr>
			<th> NO </th>
			<th> KODE DETAIL </th>
			<th> NO NOTA </th>
			<th> KD PAKET </th>
			<th> NAMA PAKET </th>
			<th> HARGA/KG </th>
			<th> BERAT </th>
			<th> TOTAL BIAYA </th>
			<th> OPSI </th>
		</tr>

	<?php
	//skrip select untuk detail transaksi, dari tabel transaksi dan paket
	$query=$_POST['search_detailtrans'];
	$no_nota = $_GET['no_nota'];
	if ($query !=''){
		$show_detailtrans = mysqli_query ($koneksi, "select * from detail_transaksi inner join paket on paket.kd_paket = detail_transaksi.kd_paket where no_nota = '$no_nota' and kd_detail like '%".$query."%' order by kd_detail asc");
	}else{
		$show_detailtrans = mysqli_query ($koneksi, "select * from detail_transaksi inner join paket on paket.kd_paket = detail_transaksi.kd_paket where no_nota = '$no_nota' ");
	}
	if(mysqli_num_rows($show_detailtrans)){
	$no=1;
	foreach ($show_detailtrans as $row)
	{
		echo "<tr>
		<th> $no </th>
		<td> ".$row['kd_detail']."</td>
		<td> ".$row['no_nota']."</td>
		<td> ".$row['kd_paket']."</td>
		<td> ".$row['jenis_paket']."</td>
		<td> ".$row['harga']."</td>
		<td> ".$row['berat']."</td>
		<td> ".$row['total_biaya']."</td>
		<td>
			<a href='deletedetail.php?kd_detail=$row[kd_detail]'> delete </a> ||
			<a href='formupdatedetail.php?kd_detail=$row[kd_detail]'> update </a>
		</td>
		</tr>";
		$no++;
	}
	?>
	<?php }else{
		echo '<tr><td colspan = "6">Tidak ada data</td></tr>';
	}

	?>
	</table>
</form>
<br>
<a href='forminsertdetail.php?kd_detail=$row[kd_detail]'
		<?php //skrip php untuk mengirimkan value no_nota ke forminsertdetil.php
		session_start();
		$_SESSION['noNota']=$no_nota;
		?>
	> INSERT </a>
<br> <br>
<a href='showtransaksi.php'> BACK </a>
</center>
</body>
</html>