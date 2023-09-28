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
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Data Paket</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Data Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Data Transaksi</a></li>
                    <br>
                    <br>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="proseslogout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Welcome
                        <span class="text-primary">to Clean Laundry RPL - Revani</span>
                    </h1>
                    <div class="subheading mb-5">
                        Jl. Madyopuro, Kedungkandang, Malang ·
                        <a href="mailto:revaninanda2345@email.com">revaninanda2345@email.com</a>
                    </div>
                    <p class="lead mb-5">Selamat datang di Clean Laundry RPL. Utamakan kebersihan karena kebersihan sebagian dari iman. Kita selalu memprioritaskan kualitas jasa kita, dengan memperhatikan bahan-bahan dan alat yang digunakan untuk proses Laundry.</p>
                    <!-- <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div> -->
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Data Paket</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                                <center>
                                <table>
                                <form action="" method="POST">
                                <input type="text" name="search_paket" placeholder="Masukkan KD Paket atau Nama Paket..."> &nbsp;
                                <input type="submit" name="cari" value="Cari">
                                </table>
                                <br>

                                <table border="1">
                                    <tr>
                                        <th> NO </th>
                                        <th> KODE PAKET </th>
                                        <th> NAMA PAKET </th>
                                        <th> JENIS PAKET </th>
                                        <th> HARGA </th>
                                        <th> OPSI </th>
                                    </tr>

                                <?php
                                $query=$_POST['search_paket'];
                                if ($query !=''){
                                    $show_paket = mysqli_query ($koneksi, "select * from paket where kd_paket like '%".$query."%' OR nama_paket like '%".$query."%' order by kd_paket asc");
                                }else{
                                    $show_paket = mysqli_query ($koneksi, "select * from paket order by kd_paket asc");
                                }
                                if(mysqli_num_rows($show_paket)){
                                $no=1;
                                foreach ($show_paket as $row)
                                {
                                    echo "<tr>
                                    <th> $no </th>
                                    <td> ".$row['kd_paket']."</td>
                                    <td> ".$row['nama_paket']."</td>
                                    <td> ".$row['jenis_paket']."</td>
                                    <td> ".$row['harga']."</td>
                                    <td>

                                <a href='updatedatapaket.php?kd_paket=$row[kd_paket]'> update </a> ||
                                <a href='deletepaket.php?kd_paket=$row[kd_paket]'> delete </a>

                                    </td>
                                    </tr>";
                                    $no++;
                                }
                                ?>
                                <?php }else{
                                    echo '<tr><td colspan = "6">Tidak ada data</td></tr>';
                                }

                                ?>
                                </table>
                                </form>
                            <br>
                            <a href='forminsertpaket.php'> INSERT </a>
                            <br> <br>
                            <a href='home.php'> HOME </a>
                            </center>
                        </div>
                        
                    </div>
                    
                    
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Data Pelanggan</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <center>
                            <table>
                            <form action="" method="POST">
                            <input type="text" name="search_pelanggan" placeholder="Masukkan KD Pelanggan atau Nama Pelanggan..."> &nbsp;
                            <input type="submit" name="cari" value="Cari">
                            </table>
                            <br>

                            <table border="1">
                                <tr>
                                    <th> NO </th>
                                    <th> KODE PELANGGAN </th>
                                    <th> NAMA PELANGGAN </th>
                                    <th> ALAMAT </th>
                                    <th> NO TELP </th>
                                    <th> OPSI </th>
                                </tr>

                            <?php
                            $query=$_POST['search_pelanggan'];
                            if ($query !=''){
                                $show_pelanggan = mysqli_query ($koneksi, "select * from pelanggan where kd_pelanggan like '%".$query."%' OR nama_pelanggan like '%".$query."%' order by kd_pelanggan asc");
                            }else{
                                $show_pelanggan = mysqli_query ($koneksi, "select * from pelanggan order by kd_pelanggan asc");
                            }
                            if(mysqli_num_rows($show_pelanggan)){
                            $no=1;
                            foreach ($show_pelanggan as $row)
                            {
                                echo "<tr>
                                <th> $no </th>
                                <td> ".$row['kd_pelanggan']."</td>
                                <td> ".$row['nama_pelanggan']."</td>
                                <td> ".$row['alamat']."</td>
                                <td> ".$row['no_telp']."</td>
                                <td>

                            <a href='formupdatepelanggan.php?kd_pelanggan=$row[kd_pelanggan]'> update </a> ||
                            <a href='deletepelanggan.php?kd_pelanggan=$row[kd_pelanggan]'> delete </a>

                                </td>
                                </tr>";
                                $no++;
                            }
                            ?>
                            <?php }else{
                                echo '<tr><td colspan = "6">Tidak ada data</td></tr>';
                            }

                            ?>
                            </table>
                        </form>
                        <br>
                        <a href='forminsertpelanggan.php'> INSERT </a>
                        <br> <br>
                        <a href='home.php'> HOME </a>
                        </center>
                        </div>
                    </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Data Transaksi</h2>
                    <div class="flex-grow-1">
                        <center>
                            <table>
                        <form action="" method="POST">
                        <input type="text" name="search_trans" placeholder="Masukkan No Nota atau Nama Pelanggan..."> &nbsp;
                        <input type="submit" name="cari" value="Cari"> &nbsp;
                        <input type="submit" name="refresh" value="Refresh">
                        </table>
                        <br>

                        <table border="1">
                            <tr>
                                <th> NO </th>
                                <th> NO NOTA </th>
                                <th> TANGGAL TRANSAKSI</th>
                                <th> NAMA PELANGGAN </th>
                                <th> TOTAL BAYAR </th>
                                <th> OPSI </th>
                            </tr>

                        <?php
                        $query=$_POST['search_trans'];
                        if ($query !=''){
                            $show_trans = mysqli_query ($koneksi, "select * from transaksi inner join pelanggan on pelanggan.kd_pelanggan = transaksi.kd_pelanggan where no_nota like '%".$query."%' OR nama_pelanggan like '%".$query."%' order by no_nota asc");
                        }else{
                            $show_trans = mysqli_query ($koneksi, "select * from transaksi inner join pelanggan on pelanggan.kd_pelanggan = transaksi.kd_pelanggan order by no_nota asc");
                        }
                        if(mysqli_num_rows($show_trans)){
                        $no=1;
                        foreach ($show_trans as $row)
                        {
                            echo "<tr>
                            <th> $no </th>
                            <td> ".$row['no_nota']."</td>
                            <td> ".$row['tgl_transaksi']."</td>
                            <td> ".$row['nama_pelanggan']."</td>
                            <td> ".$row['total_bayar']."</td>
                            <td>

                        <a href='showdetail.php?no_nota=$row[no_nota]'> detail </a> ||
                        <a href='deletetransaksi.php?no_nota=$row[no_nota]'> delete </a> ||
                        <a href='formupdatetransaksi.php?no_nota=$row[no_nota]'> update </a>

                            </td>
                            </tr>";
                            $no++;
                        }
                        ?>
                        <?php }else{
                            echo '<tr><td colspan = "6">Tidak ada data</td></tr>';
                        }

                        ?>
                        </table>
                    </form>
                    <br>
                    <center>
                        <table>
                            <tr>
                            <form action="">
                            </form> &nbsp;
                            <form action="#experience">
                                <input type="submit" name="btndatapaket" value="Data Paket">
                            </form>&nbsp;
                            <form action="#education">
                                <input type="submit" name="btndatapeminjaman" value="Data Pelanggan">
                            </form>&nbsp;
                            <form action="forminserttransaksi.php">
                                <input type="submit" name="btninsertpelanggan" value="Insert">
                            </form>&nbsp;
                            <form action="home.php">
                                    <input type="submit" name="logout" value="Home">
                             </form>
                            </tr>
                        </table>
                    </center>
                    </center>
                    </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <!-- Awards-->
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
