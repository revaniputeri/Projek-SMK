<?php  
error_reporting(0);
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="witdh=device-width, initial-scale=1">
	<title>DATA PAKET</title>
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
			<h1 align="center">SHOW DATA PAKET</h1>
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
			<center><input type="text" name="search_paket" placeholder="Masukkan Kode atau Nama Pelanggan ...">
			<input type="submit" name="cari" value="Cari">
			<?php
			$url = isset($_SERVER ['HTTP_REFERER']) ? htmlspecialchars($_SERVER ['HTTP_REFERER']):'';
			?>
			<a href="<?=$url?>">Refresh</a></center>
			<table border="1" align="center">
				<tr>
					<th>NO</th>
					<th>KODE PAKET</th>
					<th>NAMA PAKET</th>
					<th>JENIS PAKET</th>
					<th>HARGA</th>
					<th>OPSI</th>
				</tr>

			<?php
				
				$query = $_POST ['search_paket'];
				if ($query !=''){
					$showpaket = mysqli_query ($koneksi, "select*from paket where kd_paket like '%".$query."%' OR nama_paket like '%".$query."%' order by kd_paket asc");
				}else{
					$showpaket = mysqli_query ($koneksi, "select*from paket order by kd_paket asc");
				}

				if(mysqli_num_rows($showpaket)){
				$no = 1;
				foreach ($showpaket as $row) {
					echo "
					<tr>
						<th> $no </th>
						<td>".$row['kd_paket']."</td>
						<td>".$row['nama_paket']."</td>
						<td>".$row['jenis_paket']."</td>
						<td>".$row['harga']."</td>
							<td>
								<a href='updatedatapaket.php?kdPaket=$row[kd_paket]'> Update </a> ||
								<a href='deletedatapaket.php?kdPaket=$row[kd_paket]'> Delete </a>
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
				<form action="showinsertpelanggan.php">
					<input type="submit" name="btndatapelanggan" value="Data Pelanggan">
				</form>&nbsp;
				<form action="showtransaksi.php">
					<input type="submit" name="btndatapeminjaman" value="Data Transaksi">
				</form>&nbsp;
				<form action="forminsertpaket.php">
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