<?php
include "koneksi.php";

$kdPaket		= $_GET['kdPaket'];

$delete = mysqli_query ($koneksi, "delete from paket where kd_paket='$kdPaket'");
?>

	<script>
		alert("Data Berhasil Dihapus");
		document.location = "showinsertpaket.php";
	</script>