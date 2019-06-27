<?php 
include '../config/koneksi.php';
$no_un = $_GET['no_un'];
mysqli_query($konek, "update tb_registrasi set data_status = '0' where register_nomor_pendaftaran = '$no_un'");
mysqli_query($konek, "update tb_siswadaftar set data_status = '0' where no_pendaftaran='$no_un'");
// echo 'nyapo';
// die();
?>
<script type="text/javascript">
	window.location.href="../panel/ppdb/index.php?page=ubah-data-pendaftar";
</script>