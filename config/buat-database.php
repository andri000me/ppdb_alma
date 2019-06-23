 <?php  
 $dbHost = "localhost";  
 $dbUser = "root";  
 $dbPass = "";  

 // membuat koneksi mysql  
 $conn = mysqli_connect($dbHost, $dbUser, $dbPass);  

 // Mengecek koneksi mysql  
 if (!$conn) {  
 	die("Koneksi Gagal: " . mysqli_connect_error());  
 }  

 // Membuat database  
 $sql = "CREATE DATABASE IF NOT EXISTS ppdb_smanjor";  
 if (mysqli_query($conn, $sql)) {  
 	header('Location:database.php');
 } else {  
 	echo "Database gagal dibuat: " . mysqli_error($conn);  
 }  

 //menutup koneksi
 mysqli_close($conn);  
 ?> 