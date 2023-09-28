<?php  
error_reporting(0);
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean RPL - Insert Transaksi</title>
</head>
<body>
<form method = "POST" action="prosesinserttransaksi.php">
		<fieldset>
			<legend>FORM INSERT DATA TRANSAKSI</legend>
			<table border='1.5'>
				<tr>
					<td><b>No Nota</b></td>
					<td>:</td>
					<td><input type="text" name="no_nota"></td>
				</tr>
				<tr>
					<td><b>Tgl. Transaksi</b></td>
					<td>:</td>
					<td><input type="date" name="tgl_transaksi"></td>
				</tr>
				<tr>
					<td><b>Kode Pelanggan</b></td>
					<td>:</td>
					<td>
						<select name="kdPelanggan1">
							<option value=""> - PILIH - </option>
							<?php
							include "koneksi.php";
							$query = mysqli_query ($koneksi, "select*from pelanggan");
							while ($hasil=mysqli_fetch_array($query)) {
								echo "<option value= '$hasil[0]'> $hasil[1]</option>";
							}
							?>
						</select>
					</td>
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
					<button type="submit" name="Simpan" value="Simpan">Tambah Detail</button>
					</td>
				</tr>
			</table>
            <br>
            <a href='showtransaksi.php'> BACK </a>
            <br>
            <br>
		</fieldset>
</form>
</body>
</html>