<?php
function dua_huruf(){
    $dua_huruf = array('SD', 'TK', 'MA');
	return $dua_huruf;
}

function tiga_huruf(){
    $tiga_huruf = array('SMP','MTS','SMK', 'MDK', 'MDN');
    return $tiga_huruf;
}

function tingkatan(){
    
    $tingkatan = array('SD', 'TK', 'MA','SMP','MTS', 'MDK', 'MDN');
    return $tingkatan;
    
}

function logo_panel($tingkatan){
    // die($tingkatan);
    $kemenag = ['MTS', 'MA', 'MDN', 'MDK'];
    $dinas = ['SD','SMP'];
    $logo = '';

    if(in_array($tingkatan, $kemenag)){

        $logo = '../../../assets/img/logo-kemenag.jpeg';

    }else if(in_array($tingkatan, $dinas)){

        $logo = '../../../images/logo/download.png';

    }

    return $logo;
}
?>