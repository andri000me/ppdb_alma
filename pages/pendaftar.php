<?php
include '../config/koneksi.php';

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="bootstrap/favicon.ico">

  <title>PPDB SMK AL-MAHRUSIYAH KEDIRI</title>

  <!-- Bootstrap core CSS -->
  <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/DataTables/jquery.dataTables.min.css">
  <!-- data tables -->
  <script src="../assets/DataTables/jquery-3.1.0.js"></script>
  <script src="../assets/DataTables/jquery.dataTables.min.js"></script>
  
  <link href="../dist/css/carousel.css" rel="stylesheet">
</head>
<body>
  <?php include '../include/nav2.php'; ?>
  <div class="container"><br><br>
    <h2>Pendaftar Sementara</h2>
    <p>Berikut ini adalah data calon peserta didik baru</p>
    <div class="alert alert-danger">Jika ada data berstatus silang ( <img src="../images/validasi/silang.png" width="10px"> ),  silahkan menghubungi panitia untuk mengumpulkan berkas pendaftaran.</div>
    <br>          
    <table id="tabel-data1" class="table table-responsive table-bordered" width="100%" >
      <thead >
        <tr class="tabel-data">
          <th width="20px">No</th>
          <th style="text-align: center;">Nama</th>
          <th max-width="200px" style="text-align: center;">Sekolah Asal</th>
		  <th style="text-align: center;">No UNAS/NISN SMP</th>
          <th style="text-align: center;">Ijazah</th>
          <th style="text-align: center;">SKHUN</th>
          <th style="text-align: center;">KTP ORTU</th>
          <th style="text-align: center;">KK</th>
          <th style="text-align: center;">Akta</th>
          <th style="text-align: center;">Foto</th>
		  <th style="text-align: center;">Registrasi</th>
        </tr>
      </thead>

      <tbody>
        <?php
// buat koneksi dengan MySQL, gunakan database: universitas
        include "../config/koneksi.php";
        $no=1;
// jalankan query
        $result = mysqli_query($konek, "SELECT * FROM tb_registrasi");
// tampilkan query
        while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
          {?>
           <tr>
            <td style="text-align: right;"><?php echo $no++;?></td>
            <td><?php echo $row['nama']." ";?></td>
            <td style="text-align: center;"><?php 
                        if ($row['nama_smp2']!=="") {
                            echo $row['nama_smp2']." ";
                        }else{
                            echo $row['nama_smp']." ";
                        }
                        ?></td>			
			<td style="text-align: center;"><?php
            if($row['v_smp']!=1){ ?>
              <img src="../images/validasi/silang.png" width="10px">
            <?php }else { ?>
              <img src="../images/validasi/ceklis.gif" width="10px">
            <?php }
            ?>
          </td>

            <td style="text-align: center;"><?php
            if($row['valid']!=1){ ?>
              <img src="../images/validasi/silang.png" width="10px">
            <?php }else { ?>
              <img src="../images/validasi/ceklis.gif" width="10px">
            <?php }
            ?>
          </td>
          <td style="text-align: center;"><?php
          if($row['v_skhun']!=1){ ?>
            <img src="../images/validasi/silang.png" width="10px">
          <?php }else { ?>
            <img src="../images/validasi/ceklis.gif" width="10px">
          <?php }
          ?>

          <td style="text-align: center;"><?php
          if($row['v_raport']!=1){ ?>
            <img src="../images/validasi/silang.png" width="10px">
          <?php }else { ?>
            <img src="../images/validasi/ceklis.gif" width="10px">
          <?php }
          ?>

          <td style="text-align: center;"><?php
          if($row['v_kk']!=1){ ?>
            <img src="../images/validasi/silang.png" width="10px">
          <?php }else { ?>
            <img src="../images/validasi/ceklis.gif" width="10px">
          <?php }
          ?>

          <td style="text-align: center;"><?php
          if($row['v_akta']!=1){ ?>
            <img src="../images/validasi/silang.png" width="10px">
          <?php }else { ?>
            <img src="../images/validasi/ceklis.gif" width="10px">
          <?php }
          ?>
        </td>

        <td style="text-align: center;"><?php
        if($row['v_foto']!=1){ ?>
          <img src="../images/validasi/silang.png" width="10px">
        <?php }else { ?>
          <img src="../images/validasi/ceklis.gif" width="10px">
        <?php }
        ?>
		
		<td style="text-align: center;"><?php
        if($row['v_regis']!=1){ ?>
          <img src="../images/validasi/silang.png" width="10px">
        <?php }else { ?>
          <img src="../images/validasi/ceklis.gif" width="10px">
        <?php }
        ?>
      </tr>
    <?php }
    ?>
  </tbody>
</table>
</div>

<br><br><br><hr>
<!-- FOOTER -->
<?php include '../include/footer.php'; ?>
</main>

    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->

      <script src="../assets/js/vendor/popper.min.js"></script>
      <script src="../dist/js/bootstrap.min.js"></script>
      <script>
        $(document).ready(function(){
          $('#tabel-data1').DataTable();
        });
      </script>
      

      <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
      <script src="../assets/js/vendor/holder.min.js"></script>
      
    </body>
    </html>
