<?php
include "koneksi.php";

$kdPelanggan     	=$_POST ['kdPelanggan'];
$nama_pelanggan     =$_POST ['nama_pelanggan'];
$alamat             =$_POST ['alamat'];
$telp               =$_POST ['telp'];

$query =mysqli_query ($koneksi,"update pelanggan set  kd_pelanggan='$kdPelanggan',
	nama_pelanggan='$nama_pelanggan',alamat='$alamat', no_telp='$telp' where kd_pelanggan='$kdPelanggan'");
if ($query)
	{
		?>
		<script>
			alert("Update Data Pelanggan Berhasil");
			window.location.href="showinsertpelanggan.php";
		</script>
		<?php
	}
	?>m