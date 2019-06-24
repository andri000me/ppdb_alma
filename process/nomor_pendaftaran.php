<?php
include '../config/koneksi.php';
$nomor_pendaftaran = $_POST['nomor_pendaftaran'];
$dua_huruf = array('SD', 'TK', 'MA');
$tiga_huruf = array('SMP','MTS','SMK', 'MDN', 'MDK');

if(in_array($nomor_pendaftaran, $dua_huruf)){

    $cek_nomor_pendaftaran = mysqli_query($konek, "SELECT register_nomor_pendaftaran FROM tb_registrasi where substr(register_nomor_pendaftaran,1,2) = '$nomor_pendaftaran' order by register_nomor_pendaftaran desc");

}else if(in_array($nomor_pendaftaran, $tiga_huruf)){

    $cek_nomor_pendaftaran = mysqli_query($konek, "SELECT register_nomor_pendaftaran FROM tb_registrasi where substr(register_nomor_pendaftaran,1,3) = '$nomor_pendaftaran' order by register_nomor_pendaftaran desc");

}

if(!$cek_nomor_pendaftaran){
  die('SQL Error:' . mysqli_error($konek));
}
$row = mysqli_fetch_array($cek_nomor_pendaftaran);
// die($row);
if($row){
    if(in_array($nomor_pendaftaran, $dua_huruf)){

        $get_angka_akhir = str_split( $row['register_nomor_pendaftaran'], 2);
        $get_angka_akhir = $get_angka_akhir[1] + 1;

    }else if(in_array($nomor_pendaftaran, $tiga_huruf)){

        $get_angka_akhir = str_split( $row['register_nomor_pendaftaran'], 3);
        $get_angka_akhir = $get_angka_akhir[1] + 1;

    }
	
    
    $row = $nomor_pendaftaran.$get_angka_akhir;
	// $arr_angka = [
    //                 '10' => '00000',
    //                 '100' => '0000',
    //                 '1000' => '000',
    //                 '10000' => '00',
    //                 '100000' => '0',
    //             ];
                
    // foreach($arr_angka as $key_angka => $value_angka){
        
    //     if($get_angka_akhir < $key_angka){
            
    //         $row = $nomor_pendaftaran.$value_angka.$get_angka_akhir;
    //         break;

    //     }

    // }

}else{
	$row = $nomor_pendaftaran.'1';
}

echo $row;
?>