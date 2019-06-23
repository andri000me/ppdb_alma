<?php
include '../config/koneksi.php';
$nomor_pendaftaran = $_POST['nomor_pendaftaran'];
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

echo $row;
?>