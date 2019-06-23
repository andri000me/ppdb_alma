<?php 
include '../config/koneksi.php';
session_start();
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($konek, "select * from user where username='$username' and password='$password'");
if(mysqli_num_rows($login)==1){
// jika berhasil
	$berhasil = mysqli_fetch_array($login);
	$_SESSION['username'] = $berhasil['username'];
	$_SESSION['nama'] = $berhasil['nama'];
	header("location:../panel/admin/index.php");
}
else {
	?>
	<script language="javascript">
		alert('Username atau Password tidak sesuai. Silahkan diulang kembali');
		document.location='../panel/admin/login.php';
	</script>
	<?php } ?>