<style>
.table th{
	font-size: 8pt;

}
.table td{
	font-size: 8pt;
}
</style>
<link rel="stylesheet" type="text/css" href="../../assets/DataTables/jquery.dataTables.min.css">
<!-- data tables -->
<script src="../../assets/DataTables/jquery-3.1.0.js"></script>
<script src="../../assets/DataTables/jquery.dataTables.min.js"></script>
<div class="col-md-12">
	<div class="panel panel-primary">

		<div class="panel-heading">
			Pendaftar
		</div>
		<div class="panel-body">
			<form action="../../process/ekspor1.php" method="post" name="export_excel">
				<div class="control-group">
					<div class="controls" style="padding: 10px 5px 5px 10px">
						<button type="submit" id="export" name="export" class="btn btn-success" data-loading-text="Loading..."><span class="glyphicon glyphicon-download"></span> Download Data KPA</button>
						<a href="index.php?page=Pendaftaran_siswa" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Daftar Baru</button></a>
					</div>
					<div class="controls" style="padding: 10px 5px 5px 10px">
						
					</div>
				</div><br>
			</form>
			<table id="tabel-data" class="table table-responsive table-bordered">
				<thead>
					<tr>
						<th>No</th>
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
					include "../../config/koneksi.php";
					$no=1;
// jalankan query
					$result = mysqli_query($konek, "SELECT * FROM tb_registrasi");
// tampilkan query
					while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
						{?>
							<tr>
								<td><?php echo $no++;?></td>
								
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
			</div>
		</div>
	</div>



	<script>
		$(document).ready(function(){
			$('#tabel-data').DataTable();
		});
	</script>
