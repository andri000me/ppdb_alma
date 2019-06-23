<?php 
include '../config/koneksi.php';
session_start();
$no_un = $_POST['username'];
$nisn = $_POST['password'];

$login = mysqli_query($konek, "SELECT*FROM tb_siswadaftar where no_un='$no_un' and nisn='$nisn'");
if(mysqli_num_rows($login)==1){
// jika berhasil
	$berhasil = mysqli_fetch_array($login);
	$_SESSION['no_un'] = $berhasil['no_un'];
	?>
	<script type="text/javascript">
		window.location.href="../panel/siswa/index.php?no_un=<?php echo $no_un ; ?>";
	</script>
	<?php 
}else {
	?>
	<script language="javascript">
		alert('Nomor UN tidak terdaftar. Silahkan diulang kembali');
		document.location='../index.php';
	</script>
	<?php } ?>