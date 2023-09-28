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
    <title>Update Transaksi</title>
</head>
<body>
    <div>
    <h2 align='center'> Form Update Transaksi </h2>
        <center>
        <?php
		include "koneksi.php";
		$no_nota = $_GET['no_nota'];
		$query = mysqli_query ($koneksi, "select * from transaksi inner join pelanggan on pelanggan.kd_pelanggan = transaksi.kd_pelanggan where no_nota = '$no_nota' ");
		$row = mysqli_fetch_array($query);
		?>
        <form method="POST" action="prosesupdatetransaksi.php">
        <table border="1">
            <tr>
                <td> No Nota </td>
                <td> : </td>
                <td> <input type="text" name="no_nota" readonly="readonly"
                    value="<?php echo $row['no_nota']; ?>"> </td>
            </tr>
            <tr>
                <td> Tanggal Transaksi </td>
                <td> : </td>
                <td> <input type="date" name="tgl_transaksi" value="<?php echo $row['tgl_transaksi']; ?>"> </td>
            </tr>
            <tr>
                <td> Nama Pelanggan </td>
                <td> : </td>
                <td> 
                    <select name = "kd_pelanggan">
                        <option value = "<?php echo $row['kd_pelanggan'];?>"> <?php echo $row['nama_pelanggan'];?> </option>
                        <?php
                        include "koneksi.php";
                        $query = mysqli_query($koneksi, "select * from pelanggan");
                        while ($hasil = mysqli_fetch_array($query))
                        {
                            echo "<option value = '$hasil[0]'> $hasil[1] </option>";
                        } 
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <!-- total_bayar ditampilkan karena sebelumnya sudah disimpan -->
                <td> Total Bayar </td>
                <td> : </td>
                <td> <input type="text" name="total_bayar" value="<?php echo $row['total_bayar'];?>" readonly="readonly"> </td>
            </tr>
            <tr>
                <td colspan="3"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <button> Simpan </button> </td>
            </tr>
        </table>
        </form>
	    <br>
        <a href='showtransaksi.php'> BACK </a>
    </div>
</body>
</html>