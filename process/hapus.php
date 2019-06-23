<?php 
include '../config/koneksi.php';
$no_un = $_GET['no_un'];
mysqli_query($konek, "DELETE FROM tb_registrasi WHERE no_un='$no_un'")or die(mysqli_error());
mysqli_query($konek, "DELETE FROM tb_siswadaftar WHERE no_un='$no_un'")or die(mysqli_error());
?>
<script type="text/javascript">
	window.location.href="../panel/admin/index.php?page=ubah-data-pendaftar";
</script>