<?php 
include "../config/koneksi.php";
$id=$_POST['id'];
$query="UPDATE tb_registrasi SET v_smp='1', v_skhun='1', v_raport='1', v_kk='1', v_akta='1', v_foto='1', valid='1', v_semua='1' WHERE id='$id'";
mysqli_query($konek, $query);
header('location:../panel/admin/index.php?page=validasi');
?>
