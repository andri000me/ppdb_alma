   <link rel="stylesheet" type="text/css" href="../../assets/DataTables/jquery.dataTables.min.css">
   <!-- data tables -->
   <script src="../../assets/DataTables/jquery-3.1.0.js"></script>
   <script src="../../assets/DataTables/jquery.dataTables.min.js"></script>
   <div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Validasi fisik data pendaftar
        </div>

        <div class="panel-body">
           <table id="example" class="table table-hover table-info table-bordered" width="100%" cellspacing="0" >
            <thead style="text-align: center;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
					<th>No UNAS</th>
                    <th>FC Ijazah Legalisir</th>
                    <th>FC SKHUN Legalisir</th>
                    <th>FC KTP ORTU</th>
                    <th>FC Akta</th>
                    <th>FC KK</th>
                    <th>Foto Asli</th>
                    <th>Validasi Semua</th>
                </tr>
            </thead>

            <tbody style="font-size: 8pt;">
              <?php

              $no=1;
// jalankan query
            // die($_SESSION['tingkatan']);
            if(in_array($_SESSION['tingkatan'], dua_huruf())){

                $select = "SELECT * FROM tb_registrasi as r where substr(r.register_nomor_pendaftaran,1,2)  ='".$_SESSION['tingkatan']."'";

            }else if(in_array($_SESSION['tingkatan'], tiga_huruf())){

                $select = "SELECT * FROM tb_registrasi as r where substr(r.register_nomor_pendaftaran,1,3)  ='".$_SESSION['tingkatan']."'";
            }
            // die($select);
              $result = mysqli_query($konek, $select);
// tampilkan query
              while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                {?>
                   <tr>
                    <td style="text-align: right;"><?php echo $no++;?></td>
                    <td><?php echo $row['nama']." ";?></td>
                    <td style="text-align: center;">
                        <?php
                        if($row['v_smp']!=1){ ?>
                            <form action="../../process/v_smp.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
                        <?php }else {
                            ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
                        <?php }
                        ?>
                    </td>
					
					<td style="text-align: center;"><?php
                    if($row['valid']!=1){ ?>
                        <form action="../../process/validasi.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
                    <?php }else {
                        ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
                    <?php }
                    ?></td>

                    <td style="text-align: center;"><?php
                    if($row['v_skhun']!=1){ ?>
                        <form action="../../process/v_skhun.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
                    <?php }else {
                        ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
                    <?php }
                    ?></td>

                    <td style="text-align: center;"><?php
                    if($row['v_raport']!=1){ ?>
                        <form action="../../process/v_raport.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
                    <?php }else {
                        ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
                    <?php }
                    ?></td>

                    <td style="text-align: center;"><?php
                    if($row['v_akta']!=1){ ?>
                        <form action="../../process/v_akta.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
                    <?php }else {
                        ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
                    <?php }
                    ?>
                </td>

                <td style="text-align: center;"><?php
                if($row['v_kk']!=1){ ?>
                    <form action="../../process/v_kk.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
                <?php }else {
                    ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
                <?php }
                ?>
            </td>
            <td style="text-align: center;"><?php
            if($row['v_foto']!=1){ ?>
                <form action="../../process/v_foto.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" value="validasi"><i style="font-size: 8pt">Ada</i></button></form>
            <?php }else {
                ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"><i style="font-size: 8pt">OK!</i></button>
            <?php }
            ?></td>
            <td style="text-align: center;"><?php
            if($row['v_semua']!=1){ ?>
                <form action="../../process/v_semua.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                    <input type="hidden" id="valid" name="valid" value="1">
                    <button class="btn btn-outline-danger btn-sm" type="submit" value="validasi" onclick="javascript: return confirm('Anda yakin Validasi semua data <?php echo $row['nama']; ?>?')"><i style="font-size: 8pt">Validasi Semua</i></button></form>
                <?php }else {
                    ?> <button class="btn btn-success btn-sm" disabled type="submit" value="validasi"> <i style="font-size: 8pt">OK!</i></button>
                <?php }
                ?></td>

            </tr>
        <?php }
        ?>
    </tbody>
</table>
</div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>


