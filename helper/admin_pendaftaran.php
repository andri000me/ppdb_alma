<?php
include '../config/koneksi.php';
include '../include/helper.php';

$tingkatan = isset($_POST['tingkatan']) ? $_POST['tingkatan'] : '';
// die($tingkatan);


    if(in_array($tingkatan, dua_huruf())){

        $select = "SELECT *, 
                    SUBSTR(register_nomor_pendaftaran,1,2) AS dua,
                    SUBSTR(register_nomor_pendaftaran,1,3) AS tiga
                    FROM tb_registrasi as r where substr(r.register_nomor_pendaftaran,1,2)  ='$tingkatan' and data_status='1' ";

    }else if(in_array($tingkatan, tiga_huruf())){

        $select = "SELECT *,
                    SUBSTR(register_nomor_pendaftaran,1,2) AS dua,
                    SUBSTR(register_nomor_pendaftaran,1,3) AS tiga
                FROM tb_registrasi as r where substr(r.register_nomor_pendaftaran,1,3)  ='$tingkatan' and data_status='1' ";

    }else{

        $select = "SELECT *,
                    SUBSTR(register_nomor_pendaftaran,1,2) AS dua,
                    SUBSTR(register_nomor_pendaftaran,1,3) AS tiga
                    FROM tb_registrasi as r where data_status='1' ";

    }
?>
<table id="tabel-data" class="table table-responsive table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>No. Pendaftaran</th>
						<th>Nama Lengkap</th>
						<th>Tempat Lahir</th>
						<th>Tanggal lahir</th>
						<th>Jenis Kelamin</th>
						<th>Agama & Kepercayaan</th>
						<th>Alamat Rumah</th>
						<th>Nomor Hp</th>
						<th>Asal sekolah</th>
						<th>Registrasi</th>
					</tr>
				</thead>

				<tbody>
					<?php
// buat koneksi dengan MySQL, gunakan database: universitas
					$no=1;
// jalankan query
					$result = mysqli_query($konek, $select);
// tampilkan query
					while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
						{?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $row['register_nomor_pendaftaran'];?></td>
								<td><?php echo $row['nama'];?></td>
								<td><?php echo $row['tempat_lahir'];?></td>
								<td><?php echo $row['tanggal_lahir'];?></td>
								<td><?php echo $row['jenis_kelamin'];?></td>
								<td><?php echo $row['agama'];?></td>

								<td><?php echo $row['almt_jl'];?></td>

								<td>
									Nomor HP / WA ayah : <?php echo $row['no_hpwa_ayah'];?> <br>
									Nomor HP / WA ibu : <?php echo $row['no_hpwa_ibu'];?>
									</td>
								<td>
									<?php 
										if ($row['nama_smp2']!=="") {
										echo $row['nama_smp2'];
										}else{
											echo $row['nama_smp'];
											}
										?>
									</td>
								<td style="text-align: center;"><?php
            if($row['v_regis']!=1){ ?>
                <form action="../../process/v_regis.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="hidden" id="valid" name="valid" value="1"><button class="btn btn-outline-danger btn-sm" type="submit" "pendaftar"><i style="font-size: 8pt">Selesai</i></button></form>
            <?php }else {
                ?> <button class="btn btn-success btn-sm" disabled type="submit" value="pendaftar"><i style="font-size: 8pt">OK!</i></button>
            <?php }
            ?></td>
							</tr>
						<?php }
						?>
					</tbody>
				</table>

<script>
		$(document).ready(function(){
			$('#tabel-data').DataTable();
        });
</script>