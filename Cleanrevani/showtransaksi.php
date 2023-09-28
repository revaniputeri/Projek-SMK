<?php
error_reporting(0);
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Transaksi</title>
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
	<h2 align="center"> LIST TRANSAKSI </h2>
	<center>
		<table>
	<form action="" method="POST">
	<input type="text" name="search_trans" placeholder="Masukkan No Nota atau Nama Pelanggan..."> &nbsp;
	<input type="submit" name="cari" value="Cari"> &nbsp;
	<input type="submit" name="refresh" value="Refresh">
	</table>
	<br>

	<table border="1">
		<tr>
			<th> NO </th>
			<th> NO NOTA </th>
			<th> TANGGAL TRANSAKSI</th>
			<th> NAMA PELANGGAN </th>
			<th> TOTAL BAYAR </th>
			<th> OPSI </th>
		</tr>

	<?php
	$query=$_POST['search_trans'];
	if ($query !=''){
		$show_trans = mysqli_query ($koneksi, "select * from transaksi inner join pelanggan on pelanggan.kd_pelanggan = transaksi.kd_pelanggan where no_nota like '%".$query."%' OR nama_pelanggan like '%".$query."%' order by no_nota asc");
	}else{
		$show_trans = mysqli_query ($koneksi, "select * from transaksi inner join pelanggan on pelanggan.kd_pelanggan = transaksi.kd_pelanggan order by no_nota asc");
	}
	if(mysqli_num_rows($show_trans)){
	$no=1;
	foreach ($show_trans as $row)
	{
		echo "<tr>
		<th> $no </th>
		<td> ".$row['no_nota']."</td>
		<td> ".$row['tgl_transaksi']."</td>
		<td> ".$row['nama_pelanggan']."</td>
		<td> ".$row['total_bayar']."</td>
		<td>

	<a href='showdetail.php?no_nota=$row[no_nota]'> detail </a> ||
	<a href='deletetransaksi.php?no_nota=$row[no_nota]'> delete </a> ||
	<a href='formupdatetransaksi.php?no_nota=$row[no_nota]'> update </a>

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
<center>
	<table>
		<tr>
		<form action="">
		</form> &nbsp;
		<form action="showinsertpaket.php">
			<input type="submit" name="btndatapaket" value="Data Paket">
		</form>&nbsp;
		<form action="showinsertpelanggan.php">
			<input type="submit" name="btndatapeminjaman" value="Data Pelanggan">
		</form>&nbsp;
		<form action="forminserttransaksi.php">
			<input type="submit" name="btninsertpelanggan" value="Insert">
		</form>&nbsp;
		<form action="index.php">
				<input type="submit" name="logout" value="Logout">
		 </form>
		</tr>
	</table>
</center>
</center>
</body>
</html>