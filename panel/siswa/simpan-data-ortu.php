<?php
include '../../config/koneksi.php';
error_reporting(0);
// menyimpan data kedalam variabel
$no_un					= $_POST['no_un'];
$nama_ayah						= $_POST['nama_ayah'];
$status_ayah					= $_POST['status_ayah'];
$nik_ayah						= $_POST['nik_ayah'];
$tahun_lahir_ayah		= $_POST['tahun_lahir_ayah'];
$pendidikan_ayah		= $_POST['pendidikan_ayah'];
$pekerjaan_ayah			= $_POST['pekerjaan_ayah'];
$penghasilan_ayah		= $_POST['penghasilan_ayah'];
$bk_ayah						= $_POST['bk_ayah'];
$nama_ibu						= $_POST['nama_ibu'];
$status_ibu					= $_POST['status_ibu'];
$nik_ibu						= $_POST['nik_ibu'];
$tahun_lahir_ibu		= $_POST['tahun_lahir_ibu'];
$pendidikan_ibu			= $_POST['pendidikan_ibu'];
$pekerjaan_ibu			= $_POST['pekerjaan_ibu'];
$penghasilan_ibu		= $_POST['penghasilan_ibu'];
$bk_ibu							= $_POST['bk_ibu'];
$nama_wali						= $_POST['nama_wali'];
$nik_wali						= $_POST['nik_wali'];
$tahun_lahir_wali		= $_POST['tahun_lahir_wali'];
$pendidikan_wali		= $_POST['pendidikan_wali'];
$pekerjaan_wali			= $_POST['pekerjaan_wali'];
$penghasilan_wali		= $_POST['penghasilan_wali'];
$bk_wali				= $_POST['bk_wali'];


?>

<?php

// query SQL untuk insert data
$query="UPDATE tb_siswadaftar SET nama_ayah='$nama_ayah', status_ayah='$status_ayah', nik_ayah='$nik_ayah', tahun_lahir_ayah='$tahun_lahir_ayah', pendidikan_ayah='$pendidikan_ayah', pekerjaan_ayah='$pekerjaan_ayah', penghasilan_ayah='$penghasilan_ayah', bk_ayah='$bk_ayah', nama_ibu='$nama_ibu', status_ibu='$status_ibu', nik_ibu='$nik_ibu', tahun_lahir_ibu='$tahun_lahir_ibu', pendidikan_ibu='$pendidikan_ibu', pekerjaan_ibu='$pekerjaan_ibu', penghasilan_ibu='$penghasilan_ibu', bk_ibu='$bk_ibu', nama_wali='$nama_wali', nik_wali='$nik_wali', tahun_lahir_wali='$tahun_lahir_wali', pendidikan_wali='$pendidikan_wali', pekerjaan_wali='$pekerjaan_wali', penghasilan_wali='$penghasilan_wali', bk_wali='$bk_wali' WHERE no_un='$no_un' ";
mysqli_query($konek, $query);

?>
<script type="text/javascript">
	alert("Berhasil Menyimpan Data");
	window.location.href="index.php?no_un=<?php echo $no_un ; ?>";
</script>
