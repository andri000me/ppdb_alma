<?php 

include 'config/koneksi.php';

if(isset($_SESSION['username'])){

	unset($_SESSION['username']);

}

 

if($koneksi) {

	header('Location:panel/ppdb/login.php');

}else{

	header('Location:install.php');

}

?>