
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Validasi Data dan Berkas Pendaftar</h1>
</div>


<div class="img-thumbnail"> <br>
    <table id="tabel-data" class="table table-hover table-info table-bordered" width="100%" cellspacing="0" >
        <thead style="text-align: center;">
            <tr>
                <th width="20px">No</th>
                <th>Nama</th>
                <th>Data Valid</th>
                <th>SKHUN</th>
                <th>Raport</th>
                <th>Akta</th>
                <th>KK</th>
                <th>Foto</th>
                <th>validasi Semua</th>


            </tr>
        </thead>

        <tbody style="font-size: 8pt;">
          <?php
// buat koneksi dengan MySQL, gunakan database: universitas
          include "../../../config/koneksi.php";
          $no=1;
// jalankan query
          $result = mysqli_query($konek, "SELECT * FROM tb_registrasi");
// tampilkan query
          while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
            {?>
             <tr>
                <th style="text-align: right;"><?php echo $no++;?></th>
                <th><?php echo $row['nama']." ";?></th>
                <th style="text-align: center;">
                    <?php
                    if($row['valid']!=1){ ?>
                        <form action="validasi.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Validasi</i></button></form>
                    <?php }else {
                        ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
                    <?php }
                    ?>
                </th>

                <th style="text-align: center;"><?php
                if($row['v_skhun']!=1){ ?>
                    <form action="v_skhun.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
                <?php }else {
                    ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
                <?php }
                ?></th>

                <th style="text-align: center;"><?php
                if($row['v_raport']!=1){ ?>
                    <form action="v_raport.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
                <?php }else {
                    ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
                <?php }
                ?></th>

                <th style="text-align: center;"><?php
                if($row['v_akta']!=1){ ?>
                    <form action="v_akta.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
                <?php }else {
                    ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
                <?php }
                ?>
            </th>

            <th style="text-align: center;"><?php
            if($row['v_kk']!=1){ ?>
                <form action="v_kk.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
            <?php }else {
                ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
            <?php }
            ?>
        </th>
        <th style="text-align: center;"><?php
        if($row['v_foto']!=1){ ?>
            <form action="v_foto.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
        <?php }else {
            ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
        <?php }
        ?></th>
        <th style="text-align: center;"><?php
        if($row['v_semua']!=1){ ?>
            <form action="v_semua.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                <input type="hidden" id="valid" name="valid" value="1">
                <button class="btn btn-outline-danger btn-sm" type="submit" value="validasi" onclick="javascript: return confirm('Anda yakin VALIDASI semua data <?php echo $row['nama']; ?>?')"><i style="font-size: 8pt">Validasi Semua</i></button></form>
            <?php }else {
                ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"> <i style="font-size: 8pt">OK!</i></button>
            <?php }
            ?></th>

        </tr>
    <?php }
    ?>
</tbody>
</table>
</div>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>


