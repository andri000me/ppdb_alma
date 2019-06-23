<?php 
include '../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($konek, "DELETE FROM tb_smp WHERE id='$id'")or die(mysqli_error());
?>
<script type="text/javascript">
	window.location.href="../panel/admin/index.php?page=data-smp";
</script>