<?php
include "../config/koneksi.php";
$id = $_GET['id'];

$select = "update user set user_status = '0' where id = $id";
$query = mysqli_query($konek, $select);

if($query){
?>
    <script type="text/javascript">
        alert("Sukses Hapus User");
        window.location.href="../panel/admin/index.php?page=user_ppdb";
    </script>
<?php
}else{
?>
    <script type="text/javascript">
        alert("Gagal hapus user");
        window.location.href="../panel/admin/index.php?page=user_ppdb";
    </script>
<?php
}

?>