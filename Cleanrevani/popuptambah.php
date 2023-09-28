<!DOCTYPE html>
<html>
    <head>
        <title>Dialog Confirm</title>
    </head>
    <body>
    <script>
        var yakin = confirm("Detail berhasil disimpan, tambah Paket lagi? (jika ya klik 'Oke', jika tidak klik 'Cancel')"); //javascript untuk menampilkan popup persetujuan

        if (yakin) {
            <?php //skrip untuk menerima variabel SESSION dari forminsertdetil.php dan menyalurkan kembali ke forminsertdetil.php
            error_reporting(0);
            include "koneksi.php";
            session_start(); 
            $no_nota = "".$_SESSION['no_nota'];
            $_SESSION['no_nota']=$no_nota;
            ?>
            document.location = "forminsertdetail.php";
        } else {
            document.location = "showtransaksi.php";
        }
    </script>
    </body>
</html>