<?php
include '../../../config/koneksi.php';
$id = $_POST['rowid'];

$dataku = mysqli_query($konek, "SELECT*FROM user WHERE id=$id");
$baris = mysqli_fetch_array($dataku, MYSQLI_ASSOC);
if(!$dataku){
	die('SQL Error:' . mysqli_error($konek));
}
?>

<div class="row">
    <form class="form-control" method="post" action="../../process/proses-ubah-userppdb.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $baris['id'];?>">
        <div class="col-lg-6 col-lg-offset-3">
            <label>Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo $baris['username'];?>">
        </div>
        <div class="col-lg-6 col-lg-offset-3">
            <label>Ganti Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="col-lg-6 col-lg-offset-3">
            <label>Level</label>
            <select name="level" class="form-control">
                <?php
                    
                    if($baris['level'] == 'admin'){
                        
                        echo "<option> admin </option>
                             <option> ppdb </option>";
                        
                    }elseif($baris['level'] == 'ppdb'){
                        
                        echo "<option> ppdb </option>
                             <option> admin </option>";
                        
                    }
                
                ?>
            </select>
        </div>
        <div class="col-lg-6 col-lg-offset-3">
            <input type="submit" class="btn btn-info right" value="Ubah User PPDB">
        </div>
    </form>
</div>