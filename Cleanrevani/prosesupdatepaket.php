<?php
include "koneksi.php";

$kdPaket     	=$_POST ['kdPaket'];
$nama_paket     =$_POST ['nama_paket'];
$jenis_paket    =$_POST ['jenis_paket'];
$harga          =$_POST ['harga'];

$query =mysqli_query ($koneksi,"update paket set  kd_paket='$kdPaket',
	nama_paket='$nama_paket',jenis_paket='$jenis_paket', harga='$harga' where kd_paket='$kdPaket'");
if ($query)
	{
		?>
		<script>
			alert("Update Data Paket Berhasil");
			window.location.href="showinsertpaket.php";
		</script>
		<?php
	}
	?>m