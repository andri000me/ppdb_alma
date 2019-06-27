<?php
include_once '../config/koneksi.php';
session_start();

$nomor_pendaftaran = $_SESSION['tingkatan'];
$username = $_SESSION['username'];
$cek_nomor_pendaftaran = mysqli_query($konek, "SELECT register_nomor_pendaftaran FROM tb_registrasi where register_nomor_pendaftaran like '%$nomor_pendaftaran%' order by register_nomor_pendaftaran desc");
if(!$cek_nomor_pendaftaran){
  die('SQL Error:' . mysqli_error($konek));
}
$row = mysqli_fetch_array($cek_nomor_pendaftaran);

if($row){

	$get_angka_akhir = substr($row['register_nomor_pendaftaran'], -6);
	$get_angka_akhir = $get_angka_akhir + 1;
	$arr_angka = [
                    '10' => '00000',
                    '100' => '0000',
                    '1000' => '000',
                    '10000' => '00',
                    '100000' => '0',
                ];
                
    foreach($arr_angka as $key_angka => $value_angka){
        
        if($get_angka_akhir < $key_angka){
            
            $row = $nomor_pendaftaran.$value_angka.$get_angka_akhir;
            break;

        }

    }

}else{
	$row = $nomor_pendaftaran.'000001';
}

if($_POST['nama_smp']){
	$asal_sekolah = $_POST['nama_smp'];
}else{
	$asal_sekolah = $_POST['nama_smp2'];
}
// var_dump($asal_sekolah);die();
// menyimpan data kedalam variabel
$nomor_registrasi 		= $row;
$nama         		  	= $_POST['nama'];
$jenis_kelamin       	= $_POST['jenis_kelamin'];
$nisn					= $_POST['nisn'];
$nkk					= $_POST['nkk'];
$nik					= $_POST['nik'];
$tempat_lahir			= $_POST['tempat_lahir'];
$tanggal_lahir			= $_POST['tanggal_lahir'];
$no_akta				= $_POST['no_akta'];
$agama					= $_POST['agama'];
$kewarganegaraan		= $_POST['kewarganegaraan'];
$kbk					= $_POST['kbk'];
$domis					= $_POST['domis'];
$almt_jl				= $_POST['almt_jl'];
$rt						= $_POST['rt'];
$nm_dsn					= $_POST['nm_dsn'];
$nm_ds					= $_POST['nm_ds'];
$nm_kec					= $_POST['nm_kec'];
$nm_kt					= $_POST['nm_kt'];
$nm_prov				= $_POST['nm_prov'];
$kode_pos				= $_POST['kode_pos'];
$tmpt_tinggal			= $_POST['tmpt_tinggal'];
$moda_transport			= $_POST['moda_transport'];
$no_kks					= $_POST['no_kks'];
$anak_ke				= $_POST['anak_ke'];
$penerima_kps			= $_POST['penerima_kps'];
$no_kps					= $_POST['no_kps'];
$lyk_pip				= $_POST['lyk_pip'];
$penerima_kip			= $_POST['penerima_kip'];
$no_kip					= $_POST['no_kip'];
$nm_kip					= $_POST['nm_kip'];
$terima_kip				= $_POST['terima_kip'];
$alasan_pip				= $_POST['alasan_pip'];
$nm_bank				= $_POST['nm_bank'];
$rek_bank				= $_POST['rek_bank'];
$nm_rek					= $_POST['nm_rek'];
$nm_ayh					= $_POST['nm_ayh'];
$glr_ayh				= $_POST['glr_ayh'];
$nik_ayh				= $_POST['nik_ayh'];
$lhr_ayh				= $_POST['lhr_ayh'];
$pnddk_ayh				= $_POST['pnddk_ayh'];
$pkrj_ayh				= $_POST['pkrj_ayh'];
$spk_ayh				= $_POST['spk_ayh'];
$pghsl_ayh				= $_POST['pghsl_ayh'];
$bk_ayh					= $_POST['bk_ayh'];
$nm_ibu					= $_POST['nm_ibu'];
$nik_ibu				= $_POST['nik_ibu'];
$lhr_ibu				= $_POST['lhr_ibu'];
$pnddk_ibu				= $_POST['pnddk_ibu'];
$pkrj_ibu				= $_POST['pkrj_ibu'];
$spk_ibu				= $_POST['spk_ibu'];
$pghsl_ibu				= $_POST['pghsl_ibu'];
$bk_ibu					= $_POST['bk_ibu'];
$nm_wali				= $_POST['nm_wali'];
$stts_wali				= $_POST['stts_wali'];
$nik_wali				= $_POST['nik_wali'];
$lhr_wali				= $_POST['lhr_wali'];
$pnddk_wali				= $_POST['pnddk_wali'];
$spk_wali				= $_POST['spk_wali'];
$pghsl_wali				= $_POST['pghsl_wali'];
$alt_wali				= $_POST['alt_wali'];
$rt_wali				= $_POST['rt_wali'];
$nm_dsn_wali			= $_POST['nm_dsn_wali'];
$nm_ds_wali				= $_POST['nm_ds_wali'];
$nm_kec_wali			= $_POST['nm_kec_wali'];
$nm_kt_wali				= $_POST['nm_kt_wali'];
$nm_prov_wali			= $_POST['nm_prov_wali'];
$kode_pos_wali			= $_POST['kode_pos_wali'];
$tlp_wali				= $_POST['tlp_wali'];
$no_rumah				= $_POST['no_rumah'];
$no_hpwa_ayah			= $_POST['no_hp'];
$no_hpwa_ibu			= $_POST['no_wa'];
$email					= $_POST['email'];
$tggi_bdn				= $_POST['tggi_bdn'];
$brt_bdn				= $_POST['brt_bdn'];
$hobi					= $_POST['hobi'];
$jarak_sekolahan		= $_POST['jarak_sekolahan'];
$tempuh_sekolahan		= $_POST['tempuh_sekolahan'];
$jml_sdr				= $_POST['jml_sdr'];
$jenis_prestasi 		= $_POST['jenis_prestasi'];
$tingkat_prestasi 		= $_POST['tingkat_prestasi'];
$nama_prestasi 			= $_POST['nama_prestasi'];
$tahun_prestasi 		= $_POST['tahun_prestasi'];
$penyelenggara_prestasi = $_POST['penyelenggara_prestasi'];
$jns_beasiswa 			= $_POST['jns_beasiswa'];
$ket_beasiswa 			= $_POST['ket_beasiswa'];
$awl_beasiswa 			= $_POST['awl_beasiswa'];
$akhr_beasiswa 			= $_POST['akhr_beasiswa'];
$jrsn_smk	 			= isset($_POST['jrsn_smk']) ? $_POST['jrsn_smk'] : '';
$jns_pendaftaran		= $_POST['jns_pendaftaran'];
$nis					= $_POST['nis'];
$msk_skl				= $_POST['msk_skl'];
$tgl_lulus				= $_POST['tgl_lulus'];
$d_kelas				= $_POST['d_kelas'];
$nama_smp				= '';
$nama_smp2				= $asal_sekolah;
$no_un					= $_POST['no_un'];
$no_ijazah				= $_POST['no_ijazah'];
$no_skhun				= $_POST['no_skhun'];
$almt_smp				= $_POST['almt_smp'];
$kota_smp				= $_POST['kota_smp'];
$prov_smp				= $_POST['prov_smp'];
$valid					= $_POST['valid'];
$v_skhun				= $_POST['v_skhun'];
$v_raport				= $_POST['v_raport'];
$v_kk					= $_POST['v_kk'];
$v_akta					= $_POST['v_akta'];
$v_foto					= $_POST['v_foto'];
$v_semua 				= $_POST['v_semua'];


//PERINTAH MENGECEK AGAR TIDAK TERDAPAT USER YANG SAMA
?>
<?php
// $cekdata="select no_un from tb_registrasi where no_un='$no_un'";
// $ada=mysqli_query($konek, $cekdata);
// if(mysqli_num_rows($ada)>0)
// 	{ ?>
 		<!-- <script type="text/javascript"> -->
<!-- // 			alert("Nomor UN sudah terdaftar, pastikan nomor UN belum digunakan untuk mendaftar"); -->
<!-- // 			window.location.href="../panel/ppdb/index.php?page=Pendaftaran_siswa"; -->
		<!-- </script> -->
 		<?php
// 	}
// 	else{

	// query SQL untuk insert data
	$insert = "INSERT INTO tb_registrasi SET 
	register_nomor_pendaftaran='$nomor_registrasi',
	nama='$nama',
	jenis_kelamin='$jenis_kelamin',
	nisn='$nisn',
	nkk='$nkk',
	nik='$nik',
	tempat_lahir='$tempat_lahir',
	tanggal_lahir='$tanggal_lahir',
	no_akta='$no_akta',
	agama='$agama',
	kewarganegaraan='$kewarganegaraan',
	kbk='$kbk',
	domis='$domis',
	almt_jl='$almt_jl',
	rt='$rt',
	nm_dsn='$nm_dsn',
	nm_ds='$nm_ds',
	nm_kec='$nm_kec',
	nm_kt='$nm_kt',
	nm_prov='$nm_prov',
	kode_pos='$kode_pos',
	tmpt_tinggal='$tmpt_tinggal',
	moda_transport='$moda_transport',
	no_kks='$no_kks',
	anak_ke='$anak_ke',
	penerima_kps='$penerima_kps',
	no_kps='$no_kps',
	lyk_pip='$lyk_pip',
	penerima_kip='$penerima_kip',
	no_kip='$no_kip',
	nm_kip='$nm_kip',
	terima_kip='$terima_kip',
	alasan_pip='$alasan_pip',
	nm_bank='$nm_bank',
	rek_bank='$rek_bank',
	nm_rek='$nm_rek',
	nm_ayh='$nm_ayh',
	glr_ayh='$glr_ayh',
	nik_ayh='$nik_ayh',
	lhr_ayh='$lhr_ayh',
	pnddk_ayh='$pnddk_ayh',
	pkrj_ayh='$pkrj_ayh',
	spk_ayh='$spk_ayh',
	pghsl_ayh='$pghsl_ayh',
	bk_ayh='$bk_ayh',
	nm_ibu='$nm_ibu',
	nik_ibu='$nik_ibu',
	lhr_ibu='$lhr_ibu',
	pnddk_ibu='$pnddk_ibu',
	pkrj_ibu='$pkrj_ibu',
	spk_ibu='$spk_ibu',
	pghsl_ibu='$pghsl_ibu',
	bk_ibu='$bk_ibu',
	nm_wali='$nm_wali',
	stts_wali='$stts_wali',
	nik_wali='$nik_wali',
	lhr_wali='$lhr_wali',
	pnddk_wali='$pnddk_wali',
	spk_wali='$spk_wali',
	pghsl_wali='$pghsl_wali',
	alt_wali='$alt_wali',
	rt_wali='$rt_wali',
	nm_dsn_wali='$nm_dsn_wali',
	nm_ds_wali='$nm_ds_wali',
	nm_kec_wali='$nm_kec_wali',
	nm_kt_wali='$nm_kt_wali',
	nm_prov_wali='$nm_prov_wali',
	kode_pos_wali='$kode_pos_wali',
	tlp_wali='$tlp_wali',
	no_rumah='$no_rumah',
	no_hpwa_ayah='$no_hpwa_ayah',
	no_hpwa_ibu='$no_hpwa_ibu',
	email='$email',
	tggi_bdn='$tggi_bdn',
	brt_bdn='$brt_bdn',
	hobi='$hobi',
	jarak_sekolahan='$jarak_sekolahan',
	tempuh_sekolahan='$tempuh_sekolahan',
	jml_sdr='$jml_sdr',
	jenis_prestasi='$jenis_prestasi',
	tingkat_prestasi='$tingkat_prestasi',
	nama_prestasi='$nama_prestasi', 
	tahun_prestasi='$tahun_prestasi',
	penyelenggara_prestasi='$penyelenggara_prestasi',
	jns_beasiswa='$jns_beasiswa',
	ket_beasiswa='$ket_beasiswa',
	awl_beasiswa='$awl_beasiswa',
	akhr_beasiswa='$akhr_beasiswa',
	jrsn_smk='$jrsn_smk',
	jns_pendaftaran='$jns_pendaftaran',
	nis='$nis',
	msk_skl='$msk_skl',
	tgl_lulus='$tgl_lulus',
	d_kelas='$d_kelas',
	nama_smp='',
	nama_smp2='$asal_sekolah',
	no_un='$no_un',
	no_ijazah='$no_ijazah',
	no_skhun='$no_skhun',
	almt_smp='$almt_smp',
	kota_smp='$kota_smp',
	prov_smp='$prov_smp',
	valid='$valid',
	v_skhun='$v_skhun',
	v_raport='$v_raport',
	v_kk='$v_kk',
	v_akta='$v_akta',
	v_foto='$v_foto',
	v_semua='$v_semua',
	created_by='$username'";

	$insert2 = "INSERT INTO tb_siswadaftar SET 
							no_pendaftaran='$nomor_registrasi',
							no_un='$no_un',
							nama='$nama',
							nisn='$nisn',
							tempat_lahir='$tempat_lahir',
							tanggal_lahir='$tanggal_lahir',
							jenis_kelamin='$jenis_kelamin',
							agama='$agama',
							no_hp='$no_hpwa_ayah',
							nama_smp='',
							nama_smp2='$asal_sekolah',
							created_by='$username'";

// die(var_dump(array($insert, $insert2)));

		$query = mysqli_query($konek, "$insert");
		
		$query1 = mysqli_query($konek, "$insert2");
	// }

		if($query == $query1){
			?>
				<script type="text/javascript">
					alert("Pendaftaran Berhasil");
					window.location.href="../panel/ppdb/pages/kartu.php?no_un=<?php echo $nomor_registrasi ; ?>";
				</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("Gagal melakukan Pendaftaran");
				window.location.href="../panel/ppdb/index.php?page=Pendaftaran_siswa";
			</script>
			<?php
		}

	?>

	
