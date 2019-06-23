<?php
include '../config/koneksi.php';


if(!empty($_POST['password'])){
    
    $query = mysqli_query($konek, 'update user set username ="'.$_POST['username'].'", password="'.md5($_POST['password']).'", level = "'.$_POST['level'].'" where id = "'.$_POST['id'].'" ');
    
    if($query){
        ?>
        <script type="text/javascript">
        	alert("Ubah Password & level berhasil");
        	window.location.href="../panel/admin/index.php?page=user_ppdb";
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
        	alert("Terjadi Kesalahan ganti password / ganti level");
        	window.location.href="../panel/admin/index.php?page=user_ppdb";
        </script>
        <?php
    }
    
}else{
 
    $query = mysqli_query($konek, 'update user set username ="'.$_POST['username'].'", level = "'.$_POST['level'].'" where id = "'.$_POST['id'].'" ');
    
    if($query){
        ?>
        <script type="text/javascript">
        	alert("Ubah Level berhasil");
        	window.location.href="../panel/admin/index.php?page=user_ppdb";
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
        	alert("Terjadi Kesalahan ganti level");
        	window.location.href="../panel/admin/index.php?page=user_ppdb";
        </script>
        <?php
    }
    
}



?>