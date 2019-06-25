<?php
include '../config/koneksi.php';
include '../include/helper.php';
    
    $tingkatan = isset($_POST['tingkatan']) ? $_POST['tingkatan'] : '';

    if(in_array($tingkatan, dua_huruf())){

        $select = "SELECT *, 
                    SUBSTR(register_nomor_pendaftaran,1,2) AS dua,
                    SUBSTR(register_nomor_pendaftaran,1,3) AS tiga
                    FROM tb_registrasi as r where substr(r.register_nomor_pendaftaran,1,2)  ='$tingkatan' ";

    }else if(in_array($tingkatan, tiga_huruf())){

        $select = "SELECT *,
                    SUBSTR(register_nomor_pendaftaran,1,2) AS dua,
                    SUBSTR(register_nomor_pendaftaran,1,3) AS tiga
                FROM tb_registrasi as r where substr(r.register_nomor_pendaftaran,1,3)  ='$tingkatan' ";

    }else{

        $select = "SELECT *,
                    SUBSTR(register_nomor_pendaftaran,1,2) AS dua,
                    SUBSTR(register_nomor_pendaftaran,1,3) AS tiga
                    FROM tb_registrasi as r ";

    }
    // die($select);
    $result = mysqli_query($konek, $select);
    
?>
<table id="tabel-data" class="table table-responsive table-bordered">
    <thead>
        <th>No</th>
        <th>Nomor Urut</th>
        <th>Nama</th>
        <th>Asal Sekolah</th>
        <th>Sekolah Tujuan</th>
    </thead>
    <tbody>
    <?php
        $no = 1;
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            
            if($row['register_nomor_pendaftaran']){
                echo '<tr>
                        <td>'.$no.'</td>
                        <td>'.$row['register_nomor_pendaftaran'].'</td>
                        <td>'.$row['nama'].'</td>
                        <td>'.$row['nama_smp2'].'</td>';

                    if(in_array($row['dua'], dua_huruf())){
                        
                        $tingkatan = $row['dua'];
                        
                    }else if(in_array($row['tiga'], tiga_huruf())){

                        $tingkatan = $row['tiga'];

                    }
                echo '<td>'.$tingkatan.'</td>
                    </tr>';
            }
            $no++;
        }
    ?>
    </tbody>
</table>

<script>
    $(document).ready(function () {
        $('#tabel-data').DataTable();
    });
</script>