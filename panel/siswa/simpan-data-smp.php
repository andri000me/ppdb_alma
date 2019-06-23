<?php
include '../../config/koneksi.php';
// menyimpan data kedalam variabel
$no_un				= $_POST['no_un'];
$tinggi_badan			= $_POST['tinggi_badan'];
$berat_badan			= $_POST['berat_badan'];
$jarak_sekolah			= $_POST['jarak_sekolah'];
$jarak_km				= $_POST['jarak_km'];
$tempuh_jam				= $_POST['tempuh_jam'];
$tempuh_menit			= $_POST['tempuh_menit'];
$saudara_kandung		= $_POST['saudara_kandung'];

$jenis_prestasi1		= $_POST['jenis_prestasi1'];
$tingkat_prestasi1		= $_POST['tingkat_prestasi1'];
$nama_prestasi1			= $_POST['nama_prestasi1'];
$tahun_prestasi1		= $_POST['tahun_prestasi1'];
$penyelenggara_prestasi1= $_POST['penyelenggara_prestasi1'];

$jenis_beasiswa1		= $_POST['jenis_beasiswa1'];
$keterangan_beasiswa1	= $_POST['keterangan_beasiswa1'];
$mulai_tahun_bea1		= $_POST['mulai_tahun_bea1'];
$akhir_tahun_bea1		= $_POST['akhir_tahun_bea1'];

$nama_smp				= $_POST['nama_smp'];
$kabupaten_smp			= $_POST['kabupaten_smp'];
$alamat_smp				= $_POST['alamat_smp'];


?>

<?php 

// query SQL untuk insert data
$query="UPDATE tb_siswadaftar SET tinggi_badan='$tinggi_badan', berat_badan='$berat_badan', jarak_sekolah='$jarak_sekolah', jarak_km='$jarak_km', tempuh_jam='$tempuh_jam', tempuh_menit='$tempuh_menit', saudara_kandung='$saudara_kandung', jenis_prestasi1='$jenis_prestasi1', tingkat_prestasi1='$tingkat_prestasi1', nama_prestasi1='$nama_prestasi1', tahun_prestasi1='$tahun_prestasi1', penyelenggara_prestasi1='$penyelenggara_prestasi1', jenis_beasiswa1='$jenis_beasiswa1', keterangan_beasiswa1='$keterangan_beasiswa1', mulai_tahun_bea1='$mulai_tahun_bea1', akhir_tahun_bea1='$akhir_tahun_bea1', nama_smp='$nama_smp', kabupaten_smp='$kabupaten_smp', alamat_smp='$alamat_smp' WHERE no_un='$no_un' ";
mysqli_query($konek, $query);

?>

<script type="text/javascript">
	alert("Data berhasil disimpan");
	window.location.href="index.php?no_un=<?php echo $no_un ; ?>";
</script>
