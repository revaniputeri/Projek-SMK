<?php
error_reporting(0);
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Laundry - Revani</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clean Laundry RPL - Revani</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <span class="text-primary">Update Data Paket</span>
                    </h1>
                    <?php
                    include "koneksi.php";
                    $kdpaket = $_GET['kdPaket'];
                    $query = mysqli_query ($koneksi, "select * from paket
                        where kd_paket = '$kdpaket'");
                    $row = mysqli_fetch_array($query);
                    ?>
                <form method="POST" action="prosesupdatepaket.php">
                    <table align = "center"border='1.5'>
                        <tr>
                            <td><b>Kode Paket</b></td>
                            <td>:</td>
                            <td><input type="text" name="kdPaket" readonly="readonly" value="<?php echo $row['kd_paket']; ?>"> </td>
                        </tr>
                        <tr>
                            <td><b>Nama Paket</b></td>
                            <td>:</td>
                            <td><input type="text" name="nama_paket" value="<?php echo $row['nama_paket']; ?>"> </td>
                        </tr>
                        <tr>
                            <td><b>Jenis Paket</b></td>
                            <td>:</td>
                            <td><input type="text" name="jenis_paket" value="<?php echo $row['jenis_paket']; ?>"></td>
                        </tr>
                        <tr>
                            <td><b>Harga</b></td>
                            <td>:</td>
                            <td><input type="text" name="harga" value="<?php echo $row['harga']; ?>"></td>
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
                    <br>
                    <center>
                    <a href="home.php #experience">Kembali</a>
                </center>
                </form>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <!-- Education-->
            <!-- Skills-->
            <!-- Interests-->
            <!-- Awards-->
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
