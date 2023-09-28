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
    <title>Insert Detail Transaksi</title>
</head>
<body>
    <div>
    <h2 align='center'> Form Detail Transaksi </h2>
        <center>


        <form method="post" action="prosesinsertdetail.php">
        <table border="1">
            <tr>
                <td> Kd Detail </td>
                <td> : </td>
                <td> <input type="text" name="kd_detail"> </td>
            </tr>
            <tr>
                <td> No Nota </td>
                <td> : </td> <!-- menerima value no_nota dari prosesinsertransaksi.php atau showdetailtransaksi.php menggunakan metode SESSION -->
                <td> <input type="text" name="no_nota" readonly = "readonly" value = "<?php session_start(); echo "".$_SESSION['no_nota']; ?>"> </td>
            </tr>
            <tr>
                <td> Nama Paket </td>
                <td> : </td>
                <td> 
                    <select name = "kd_paket">
                        <option value = ""> - PILIH - </option>
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
                <td> <input type="text" name="berat"> </td>
            </tr>
            <!-- total_biaya tidak perlu ditampilkan, karena akan dihitung di prosesinsertdetil.php
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