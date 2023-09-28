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
    <title>Update Detail</title>
</head>
<body>
    <div>
    <h2 align='center'> Form Update Detail Transaksi </h2>
        <center>
        <?php
		include "koneksi.php";
		$kd_detail = $_GET['kd_detail'];
		$query = mysqli_query ($koneksi, "select * from detail_transaksi inner join paket on paket.kd_paket = detail_transaksi.kd_paket where kd_detail = '$kd_detail' ");
		$row = mysqli_fetch_array($query);
		?>
        <form method="post" action="prosesupdatedetail.php">
        <table border="1">
            <tr>
                <td> Kd Detail </td>
                <td> : </td>
                <td> <input type="text" name="kd_detail" readonly="readonly"
                    value="<?php echo $row['kd_detail']; ?>"> </td>
            </tr>
            <tr>
                <td> No Nota </td>
                <td> : </td>
                <td> <input type="text" name="no_nota" readonly = "readonly" value = "<?php echo $row['no_nota']; ?>"> </td>
            </tr>
            <tr>
                <td> Nama Paket </td>
                <td> : </td>
                <td> 
                    <select name = "kd_paket">
                        <option value = "<?php echo $row['kd_paket']; ?>"> <?php echo $row['jenis_paket']; ?> </option>
                        <?php
                        include "koneksi.php";
                        $query = mysqli_query($koneksi, "select * from paket");
                        while ($hasil = mysqli_fetch_array($query))
                        {
                            echo "<option value = '$hasil[0]'> $hasil[2] - $hasil[3] </option>";
                        } 
                        ?>
                    </select>
                </td>
                </tr>
            </tr>
            <tr>
                <td> Berat </td>
                <td> : </td>
                <td> <input type="text" name="berat" value="<?php echo $row['berat']; ?>"> </td>
            </tr>
            <!-- total_biaya tidak perlu ditampilkan, karena nanti dihitung di prosesupdatedetil.php
            <tr>
                <td> Total Biaya </td>
                <td> : </td>
                <td> <input type="text" name="total_biaya"> </td>
            </tr>
            -->
            <tr>
                <td colspan="3"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <button> Simpan </button>
                </td>
            </tr>
        </table>
        </form>
	    <br>
    </div>
</body>
</html>