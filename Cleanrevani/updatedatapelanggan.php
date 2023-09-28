<!DOCTYPE html>
<html>
<head>
	<title>UPDATE DATA PELANGGAN</title>
</head>
<body>
<h1 align= "center">FORM UPDATE DATA PELANGGAN</h1>
	<?php
	include "koneksi.php";
	$kdPelanggan = $_GET['kdPelanggan'];
	$query = mysqli_query ($koneksi, "select * from pelanggan
		where kd_pelanggan = '$kdPelanggan'");
	$row = mysqli_fetch_array($query);
	?>
<form method="POST" action="prosesupdatepelanggan.php">
	<table align = "center"border='1.5'>
				<tr>
					<td><b>Kode Pelanggan</b></td>
					<td>:</td>
					<td><input type="text" name="kdPelanggan" readonly="readonly" value="<?php echo $row['kd_pelanggan']; ?>"> </td>
				</tr>
				<tr>
					<td><b>Nama Pelanggan</b></td>
					<td>:</td>
					<td><input type="text" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan']; ?>"> </td>
				</tr>
				<tr>
					<td><b>Alamat</b></td>
					<td>:</td>
					<td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
				</tr>
                <tr>
					<td><b>No. Telp</b></td>
					<td>:</td>
					<td><input type="text" name="telp" value="<?php echo $row['no_telp']; ?>"></td>
				</tr>
				<tr>
					<td colspan="3"> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;
					<button type="submit" name="Simpan" value="Simpan">SIMPAN</button>
					</td>
				</tr>
			</table>
		</form>
</body>
</html>