<?php
include '../config/koneksi.php';
// menyimpan data kedalam variabel

$hari = $_POST['hari'];
$tanggal = $_POST['tanggal'];
$kegiatan = $_POST['kegiatan'];
$tempat	= $_POST['tempat'];
$keterangan = $_POST['keterangan'];

// query SQL untuk insert data
$query="UPDATE tb_jadwal SET hari='$hari', tanggal='$tanggal', kegiatan='$kegiatan', tempat='$tempat', keterangan='$keterangan' ";
mysqli_query($konek, $query);
if(mysqli_query){
	?>
	<script type="text/javascript">
		alert("Data berhasil disimpan");
		window.location.href="../panel/admin/index.php?page=data-sekolah";
	</script>
<?php }
else {
	?>
	<script type="text/javascript">
		alert("Data gagal disimpan");
		window.location.href="../panel/admin/index.php?page=data-sekolah";
	</script>
	<<?php } ?>