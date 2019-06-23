<?php 
include "../config/koneksi.php";
$id=$_POST['id'];
$query1="UPDATE tb_registrasi SET valid='1' WHERE id='$id'";
mysqli_query($konek, $query1);
header('location:../panel/admin/index.php?page=validasi');
?>
