<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean RPL - Insert Pelanggan</title>
</head>
<body>
<form method = "POST" action="prosesinsertpelanggan.php">
		<fieldset>
			<legend>FORM INSERT DATA PELANGGAN</legend>
			<table border='1.5'>
				<tr>
					<td><b>Kode Pelanggan</b></td>
					<td>:</td>
					<td><input type="text" name="kdPelanggan"></td>
				</tr>
				<tr>
					<td><b>Nama Pelanggan</b></td>
					<td>:</td>
					<td><input type="text" name="nama_pelanggan"></td>
				</tr>
				<tr>
					<td><b>Alamat</b></td>
					<td>:</td>
					<td><input type="text" name="alamat"></td>
				</tr>
                <tr>
					<td><b>No. Telp</b></td>
					<td>:</td>
					<td><input type="text" name="telp"></td>
				</tr>
				<tr>
					<td colspan="3"> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="submit" name="Simpan" value="Simpan">SIMPAN</button>
					</td>
				</tr>
			</table>
		</form>
					    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;
				<form action="showinsertpelanggan.php">
					<input type="submit" value="Lihat Data/List">
				</form>
		</fieldset>
	</form>
</body>
</html>