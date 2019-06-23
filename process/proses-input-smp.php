<?php 
include '../config/koneksi.php';
$input_smp = $_POST['input_smp'];
$query_smp = mysqli_query($konek, "INSERT INTO tb_smp SET nama_smp='$input_smp' ");
?>
<script type="text/javascript">
	window.location.href="../panel/admin/index.php?page=data-smp";
</script>