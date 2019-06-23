
<?php
// buat koneksi dengan MySQL, gunakan database: universitas
include "../../config/koneksi.php";
// jalankan query
$result = mysqli_query($konek, "SELECT * FROM tb_sekolah WHERE id=1");
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{?>
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Identitas Sekolah dan Informasi PPDB
				</div>
				<div class="panel-body">
					<form action="../../process/simpan-data-sekolah.php" method="post">
						<table width="100%" cellspacing="0">
							<tr>
								<th style="width: 150px;">
									<label for="nama_sekolah">Nama Sekolah</label>
								</th>
								<td>
									<div class="form-group">
										<input style="font-size: 10pt;" type="text" class="form-control" name="nama_sekolah" placeholder="Masukkan Nama Sekolah" value="<?php echo $row['nama_sekolah'];?>" >
									</div>
								</td>
							</tr>
							<tr>
								<th>
									<label for="tempat_sekolah">Alamat</label>
								</th>
								<td>
									<div class="form-group">
										<input style="font-size: 10pt;" type="text" class="form-control" name="tempat_sekolah" placeholder="Alamat Sekolah" value="<?php echo $row['tempat_sekolah'];?>">
									</div>
								</td>
							</tr>

							<tr>
								<th>
									<label for="tanggal_ppdb">Buka pendaftaran</label>
								</th>
								<td>
									<div class="form-group">
										<input style="font-size: 10pt;" type="text" class="form-control" name="tanggal_ppdb" placeholder="Tanggal dibuka pendaftaran" value="<?php echo $row['tanggal_ppdb'];?>">
									</div>
								</td>
							</tr>
							<tr>
								<th>
									<label for="tutup_ppdb">Tutup pendaftaran</label>
								</th>
								<td>
									<div class="form-group">
										<input style="font-size: 10pt;" type="text" class="form-control" name="tutup_ppdb" placeholder="Tanggal dibuka pendaftaran" value="<?php echo $row['tutup_ppdb'];?>">
									</div>
								</td>
							</tr>
							<!--<tr>-->
							<!--	<th>-->
							<!--		<label for="tanggal_pengumuman">Pengumuman Hasil</label>-->
							<!--	</th>-->
							<!--	<td>-->
							<!--		<div class="form-group">-->
							<!--			<input style="font-size: 10pt;" type="text" class="form-control" name="tanggal_pengumuman" placeholder="Tanggal dibuka pengumuman hasil seleksi" value="<?php echo $row['tanggal_pengumuman'];?>">-->
							<!--		</div>-->
							<!--	</td>-->
							<!--</tr>-->
							<tr>
								<th>
									<label for="kuota">Kuota</label>
								</th>
								<td>
									<div class="form-group">
										<input style="font-size: 10pt;" type="text" class="form-control" name="kuota" placeholder="Jumlah Peserta Didik yang akan diterima" value="<?php echo $row['kuota'];?>">
									</div>
								</td>
							</tr>

						</table>
						
						<div style="text-align: center"><button class="btn btn-success" type="submit" value="daftar">SIMPAN</button>
						</div>

					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6" >
			<div class="panel panel-primary">
				<div class="panel-heading">
					Informasi PPDB
				</div>
				<div class="panel-body">
					<form action="" method="POST">
						<table >
							<tr>
								<th style="width: 150px;">
									<label for="p_daftar">Petunjuk Pendaftaran</label>
								</th>
								<td>
									<div class="form-group">
										<textarea style="font-size: 10pt;" rows="7" cols="70" type="text" class="form-control" name="tutup_ppdb" placeholder="Petunjuk Pendaftaran" value="<?php echo $row['tutup_ppdb'];?> "></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<th>
									<label for="p_ulang">Petunjuk Daftar Ulang</label>
								</th>
								<td>
									<div class="form-group">
										<textarea style="font-size: 10pt;" rows="8" type="text" class="form-control" name="tutup_ppdb" placeholder="Petunjuk Daftar Ulang" value="<?php echo $row['tutup_ppdb'];?> "></textarea>
									</div>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-primary" >
				<div class="panel-heading">
					Logo
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<div class="panel panel-warning">
							<div class="panel-heading">
								Logo Sekolah
							</div>
							<div class="panel-body">
								<form action="../../process/up-foto-panitia.php" method="POST" enctype="multipart/form-data">
									<img class="img-thumbnail" src="../../images/logo/<?php echo $row['logo_sekolah']; ?>" width="150"/><br><br>
									<input type="file" name="images">
									<br>
									<input type="submit" name="upload7" class="btn btn-success" value="Simpan">
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-warning">
							<div class="panel-heading">
								Logo Dinas
							</div>
							<div class="panel-body">

								<form action="../../up-foto-panitia.php" method="POST" enctype="multipart/form-data">
									<img class="img-thumbnail" src="../../images/logo/<?php echo $row['logo_dinas']; ?>" width="100"/><br><br>

									<input type="file" name="images">

									<br>
									<input type="submit" name="upload8" class="btn btn-success" value="Simpan">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<?php }
	?>	
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Daftar SMP Wilayah <?php echo $inf['nama_sekolah']; ?>
			</div>
			<div class="panel-body">

				<a class="btn btn-success " data-toggle="modal" data-target="#Modal-tambah" role="button"><span class="glyphicon glyphicon-plus"> </span> Tambah Data </a>
				<br><br>
				<table id="tabel-data" class="table table-bordered table-striped" width="100%" cellspacing="0" >
					<thead>
						<tr>
							<th style="width: 20px">
								No
							</th>
							<th>
								Nama SMP
							</th>
							<th>
								Aksi
							</th>
						</tr>
					</thead>
					<?php
					$no=1;
// jalankan query
					$result = mysqli_query($konek, "SELECT * FROM tb_smp");
// tampilkan query
					while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
						{?>
							<tbody>
								<tr>
									<td>
										<?php echo $no++;?>
									</td>
									<td>
										<?php echo $row['nama_smp']." ";?>
									</td>
									<td>
										<a href="../../process/hapus-smp.php?id=<?php echo $row['id']; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Hapus</button></a>
										<!--<a href="../../process/ubah-smp.php?id=<?php echo $row['id']; ?>"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"></span> Ubah</button></a>-->
									</td>
								</tr>
							<?php }
							?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- Modal -->
			<div id="Modal-tambah" class="modal fade" role="dialog">
				<div class="modal-dialog modal-md">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Tambah Data SMP Ring 1</h4>
						</div>
						<div class="modal-body">
							<form action="../../process/proses-input-smp.php" method="POST">
								<table width="90%">
									<tr>
										<td style="">
											<label for="input_smp">Nama SMP</label>
										</td>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="input_smp" placeholder="Nama SMP yang berada di sekitar sekolah">
											</div>
										</td>
									</tr>
									<tr><th colspan="2" style="text-align: center">==>> <button class="btn btn-danger btn-sm" type="submit" value="tambah">Tambah</button> <<==</th></tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<div id="Modal-tambah" class="modal fade" role="dialog">
				<div class="modal-dialog modal-md">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Tambah Data SMP Ring 1</h4>
						</div>
						<div class="modal-body">
							<form action="../../process/proses-input-smp.php" method="POST">
								<table width="90%">
									<tr>
										<td style="">
											<label for="input_smp">Nama SMP</label>
										</td>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="input_smp" placeholder="Nama SMP yang berada di sekitar sekolah">
											</div>
										</td>
									</tr>
									<tr><th colspan="2" style="text-align: center">==>> <button class="btn btn-danger btn-sm" type="submit" value="tambah">Tambah</button> <<==</th></tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

