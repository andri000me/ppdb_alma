<?php 
// $host = "192.168.23.207";
// $user = "ppdb";
// $userpass = "kediribersemi123";
// $db = "ppdb";

$host = "localhost";
$user = "root";
$userpass = "";
$db = "ppdb_smanjor";

// $host = "localhost";
// $user = "u9773311_wp79";
// $userpass = "p7T[S-9sk7";
// $db = "u9773311_ppdb";



$konek = mysqli_connect($host, $user, $userpass) or die ();
$koneksi = mysqli_select_db($konek, $db) or die (header('Location:install.php'));
//info sekolah
$info = mysqli_query($konek, "SELECT*FROM tb_sekolah ");
$inf = mysqli_fetch_array($info, MYSQLI_ASSOC);

//panitia
$panit = mysqli_query($konek, "SELECT*FROM tb_panitia");

//jadwal
$jadwal = mysqli_query($konek, "SELECT*FROM tb_jadwal ORDER BY keterangan");

?>