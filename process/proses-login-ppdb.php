<?php 
include '../config/koneksi.php';
session_start();
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($konek, "select * from user where username='$username' and password='$password' and level='ppdb'");
if(mysqli_num_rows($login)==1){
// jika berhasil
	$berhasil = mysqli_fetch_array($login);
	
	if($username == 'ppdb'){
	    $_SESSION['tingkatan'] = 'all';    
	}else{
	    $tingkatan = explode('_', $username);
		// $_SESSION['tingkatan'] = strtoupper(substr($tingkatan[1], 0 , 2));
		$_SESSION['tingkatan'] = strtoupper($tingkatan[1]);
	}
	$_SESSION['username'] = $berhasil['username'];
	$_SESSION['nama'] = $berhasil['nama'];
	$_SESSION['role'] = 'PPDB';
	
	header("location:../panel/ppdb/index.php");
}
else {
	?>
	<script language="javascript">
		alert('Username atau Password tidak sesuai. Silahkan diulang kembali');
		document.location='../panel/ppdb/login.php';
	</script>
	<?php } ?>