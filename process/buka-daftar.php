<?php
include '../config/koneksi.php';
$data = mysqli_query($konek, "SELECT * FROM tb_sekolah");
if(!$data){
  die('SQL Error:' . mysqli_error($konek));
}
$row = mysqli_fetch_array($data);
$tanggal_daftar = $row['tanggal_ppdb'];
$start_date = strtotime($tanggal_daftar);
$end = $row['tutup_ppdb'];
$end_date = strtotime($end);
$todays_date = strtotime(date("Y-m-d H:m:s"));
if ($todays_date >= $start_date && $todays_date <= $end_date)
{
    $buka == 1;
    header('location:../pages/registrasi.php');

}
else
{
    if($todays_date < $start_date)
        { ?>
            <script type="text/javascript">
                alert("Pendaftaran belum dibuka");
                window.location.href="../index.php";
            </script>
        <?php  }
        else
            { ?>
                <script type="text/javascript">
                    alert("Pendaftaran sudah tutup, Silahkan cek di menu Pengumuman");
                    window.location.href="../index.php";
                </script>
                <?php 
            }
        }
        ?>
