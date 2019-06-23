<div class="col-md-10">
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

