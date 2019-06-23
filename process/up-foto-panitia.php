<?php
include '../config/koneksi.php';
if($_POST['upload7']){
	$ekstensi_diperbolehkan = array('png','jpg','gif');
	$nama = $_FILES['images']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['images']['size'];
	$file_tmp = $_FILES['images']['tmp_name'];  

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 10044070){     
			move_uploaded_file($file_tmp, '../images/logo/'.$nama);
			$query = mysqli_query($konek, "UPDATE tb_sekolah SET logo_sekolah='$nama' WHERE id=1");
			if($query){ ?>
				<script type="text/javascript">
					alert("Berhasil Menyimpan Data");
					window.location.href="../panel/admin/index.php?page=data-sekolah";
				</script>
				<?php
			}else{ ?>
				<script type="text/javascript">
					alert("Gagal Mengupload Foto");
					window.location.href="../panel/admin/index.php?page=data-sekolah";
				</script>
				<?php
			}
		}else{ ?>
			<script type="text/javascript">
				alert("Ukuran File Terlalu Besar");
				window.location.href="../panel/admin/index.php?page=data-sekolah";
			</script>
		<?php }
	}else{ ?>
		<script type="text/javascript">
			alert("Foto Belum Dipilih atau Ekstensi Tidak Sesuai");
			window.location.href="../panel/admin/index.php?page=data-sekolah";
		</script>

	<?php }
}
?>
<?php
include '../config/koneksi.php';
if($_POST['upload8']){
	$ekstensi_diperbolehkan = array('png','jpg','gif');
	$nama = $_FILES['images']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['images']['size'];
	$file_tmp = $_FILES['images']['tmp_name'];  

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 10044070){     
			move_uploaded_file($file_tmp, '../images/logo/'.$nama);
			$query = mysqli_query($konek, "UPDATE tb_sekolah SET logo_dinas='$nama' WHERE id=1");
			if($query){ ?>
				<script type="text/javascript">
					alert("Berhasil Menyimpan Data");
					window.location.href="../panel/admin/index.php?page=data-sekolah";
				</script>
				<?php
			}else{ ?>
				<script type="text/javascript">
					alert("Gagal Mengupload Foto");
					window.location.href="../panel/admin/index.php?page=data-sekolah";
				</script>
				<?php
			}
		}else{ ?>
			<script type="text/javascript">
				alert("Ukuran File Terlalu Besar");
				window.location.href="../panel/admin/index.php?page=data-sekolah";
			</script>
		<?php }
	}else{ ?>
		<script type="text/javascript">
			alert("Foto Belum Dipilih atau Ekstensi Tidak Sesuai");
			window.location.href="../panel/admin/index.php?page=data-sekolah";
		</script>

	<?php }
}
?>



