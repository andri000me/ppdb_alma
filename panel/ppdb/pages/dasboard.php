<!-- Statistik Seluruh Pendaftar -->
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Informasi Pendaftar
		</div>
		<div class="panel-body">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-10 text-center">
								<div class="huge">
									<h5>Jumlah pendaftar 
										<?php 
										include '../../config/koneksi.php';
										$data = mysqli_query($konek, "SELECT*FROM tb_siswadaftar");
										echo mysqli_num_rows($data); ?> orang
									</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<span class="pull-left">Lihat Detail</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<!-- Statistik Pendaftar laki-laki -->
		<div class="col-md-4">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-10 text-center">
							<div class="huge">
								<h5>Pendaftar laki-laki  <?php 
								include '../../config/koneksi.php';
								$data = mysqli_query($konek, "SELECT*FROM tb_siswadaftar WHERE jenis_kelamin='Laki-laki'");
								echo mysqli_num_rows($data); ?> orang
							</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<span class="pull-left">Lihat Detail</span>
				<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
</div>
<!-- Statistik Pendaftar perempuan -->
<div class="col-md-4">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-10 text-center">
					<div class="huge">
						<h5>Pendaftar perempuan 
							<?php 
							include '../../config/koneksi.php';
							$data = mysqli_query($konek, "SELECT*FROM tb_siswadaftar WHERE jenis_kelamin='Perempuan' ");
							echo mysqli_num_rows($data); ?> orang
						</h5>
					</div>
				</div>
			</div>
		</div>
		<a href="?modul=daftar_kelas">
			<div class="panel-footer">
				<span class="pull-left">Lihat Detail</span>
				<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
				<div class="clearfix"></div>
			</div>
		</a>
	</div>
</div>
<br><br>
<div class="col-md-12">
	<div class="panel panel-info">
		<div class="panel-heading">
			Diagram Jumlah Pendaftar
		</div>
		<div class="panel-body">
			<div id="chartContainer" style="height: 300px; width: 100%;"></div>
		</div>
	</div>
	
</div>
</div>
</div>
</div>
</div>
<script src="../../dist/js/canvasjs.min.js"></script>

