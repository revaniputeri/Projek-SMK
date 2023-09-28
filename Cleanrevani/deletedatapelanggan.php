<?php
include "koneksi.php";

$kdPelanggan		= $_GET['kdPelanggan'];

$delete = mysqli_query ($koneksi, "delete from pelanggan where kd_pelanggan='$kdPelanggan'");
?>

	<script>
		alert("Data Berhasil Dihapus");
		document.location = "showinsertpelanggan.php";
	</script>