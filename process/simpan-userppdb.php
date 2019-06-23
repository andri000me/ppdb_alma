<?php
include '../config/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

$select = "SELECT * FROM `user` where username = '$username'";
$ada = mysqli_query($konek, $select);
$cekuser = mysqli_fetch_array($ada, MYSQLI_ASSOC);

// die();
// die(var_dump(array($_POST['username'], $_POST['password'], $_POST['level'])));

if(mysqli_num_rows($ada) > 0){
    ?>
        <script type="text/javascript">
        	alert("Username <?php echo $cekuser['username'];?> sudah tersedia");
        	window.location.href="../panel/admin/index.php?page=user_ppdb";
        </script>
    <?php
}else{
    
    // die(var_dump(array($_POST['username'], $_POST['password'], $_POST['level'])));
    $query = mysqli_query($konek, "INSERT INTO user SET username='$username', password='$password', level='$level'");
    
    if($query){
        ?>
        <script type="text/javascript">
        	alert("Berhasil Menambahkan user");
        	window.location.href="../panel/admin/index.php?page=user_ppdb";
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
        	alert("Gagal menambahkan user");
        	window.location.href="../panel/admin/index.php?page=user_ppdb";
        </script>
        <?php
    }
    
}

?>