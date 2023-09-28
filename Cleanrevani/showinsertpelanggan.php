<?php  
error_reporting(0);
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="witdh=device-width, initial-scale=1">
	<title>DATA PELANGGAN</title>
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
	<form action="" method="POST">
		<fieldset>
			<h1 align="center">SHOW DATA PELANGGAN</h1>
			<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
			<center><input type="text" name="search_pelanggan" placeholder="Masukkan Kode atau Nama Pelanggan ...">
			<input type="submit" name="cari" value="Cari">
			<?php
			$url = isset($_SERVER ['HTTP_REFERER']) ? htmlspecialchars($_SERVER ['HTTP_REFERER']):'';
			?>
			<a href="<?=$url?>">Refresh</a></center>
			<table border="1" align="center">
				<tr>
					<th>NO</th>
					<th>KODE PELANGGAN</th>
					<th>NAMA PELANGGAN</th>
					<th>ALAMAT</th>
					<th>TELP</th>
					<th>OPSI</th>
				</tr>

			<?php
				
				$query = $_POST ['search_pelanggan'];
				if ($query !=''){
					$showpelanggan = mysqli_query ($koneksi, "select*from pelanggan where kd_pelanggan like '%".$query."%' OR nama_pelanggan like '%".$query."%' order by kd_pelanggan asc");
				}else{
					$showpelanggan = mysqli_query ($koneksi, "select*from pelanggan order by kd_pelanggan asc");
				}

				if(mysqli_num_rows($showpelanggan)){
				$no = 1;
				foreach ($showpelanggan as $row) {
					echo "
					<tr>
						<th> $no </th>
						<td>".$row['kd_pelanggan']."</td>
						<td>".$row['nama_pelanggan']."</td>
						<td>".$row['alamat']."</td>
						<td>".$row['no_telp']."</td>
							<td>
								<a href='updatedatapelanggan.php?kdPelanggan=$row[kd_pelanggan]'> Update </a> ||
								<a href='deletedatapelanggan.php?kdPelanggan=$row[kd_pelanggan]'> Delete </a>
							</td>
					</tr>";
					$no++;
				}
			?>
			<?php } else{
				echo '<tr><td colspan="5"> Tidak ada data</td></tr>';
			}  

			?>
			</table>
			<br>
			<center>
			<table>
				<tr>
				<form action="">
				</form> &nbsp;
				<form action="showinsertpaket.php">
					<input type="submit" name="btndatapaket" value="Data Paket">
				</form>&nbsp;
				<form action="showtransaksi.php">
					<input type="submit" name="btndatapeminjaman" value="Data Transaksi">
				</form>&nbsp;
				<form action="forminsertpelanggan.php">
					<input type="submit" name="btninsertpelanggan" value="Insert">
				</form>&nbsp;
				<form action="index.php">
	 				<input type="submit" name="logout" value="Logout">
				 </form>
				</tr>
			</table>
		</center>
		</fieldset>
	</form>
</body>
</html>