<?php
include '../config/koneksi.php';
// menyimpan data kedalam variabel
$nama_sekolah = $_POST['nama_sekolah'];
$tempat_sekolah = $_POST['tempat_sekolah'];
$tanggal_ppdb = $_POST['tanggal_ppdb'];
$tutup_ppdb	= $_POST['tutup_ppdb'];
$tanggal_pengumuman = $_POST['tanggal_pengumuman'];
$kuota = $_POST['kuota'];

// query SQL untuk insert data
$query="UPDATE tb_sekolah SET nama_sekolah='$nama_sekolah', tempat_sekolah='$tempat_sekolah', tanggal_ppdb='$tanggal_ppdb', tutup_ppdb='$tutup_ppdb', tanggal_pengumuman='$tanggal_pengumuman', kuota='$kuota' ";
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