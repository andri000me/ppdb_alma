
<?php 
include '../../config/koneksi.php';
session_start();
if(!isset($_SESSION['no_un'])){
	header('location:../../index.php');
}
$no_un = $_GET['no_un']; ?>
<?php 
$no_un = $_GET['no_un'];
$data = mysqli_query($konek, "SELECT * FROM tb_siswadaftar WHERE no_un='$no_un' ");
if(!$data){
	die('SQL Error:' . mysqli_error($konek));
}
$row = mysqli_fetch_array($data);

$data2 = mysqli_query($konek, "SELECT * FROM tb_registrasi WHERE no_un='$no_un' ");
if(!$data2){
	die('SQL Error:' . mysqli_error($konek));
}
$row2 = mysqli_fetch_array($data2);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel Siswa</title>
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../../dist/css/starter-template.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	<style>
	body {font-family: Arial;}

	/* Style the tab */
	.tab {
		overflow: hidden;
		border: 1px solid #ccc;
		background-color: #63F5F3;
	}

	/* Style the buttons inside the tab */
	.tab button {
		background-color: inherit;
		float: left;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 14px 16px;
		transition: 0.3s;
		font-size: 12pt;
	}

	/* Change background color of buttons on hover */
	.tab button:hover {
		background-color: #ddd;
	}

	/* Create an active/current tablink class */
	.tab button.active {
		background-color: #FAC260;
	}

	/* Style the tab content */
	.tabcontent {
		display: none;
		padding: 6px 12px;
		border-top: none;
		animation: fadeEffect 2s;
	}
	/* Go from zero to full opacity */
	@keyframes fadeEffect {
		from {opacity: 0;}
		to {opacity: 1;}
	}
</style>
</head>
<body style="font-size: 9pt">
	<div class="container">

		<marquee><p>Selamat Datang <?php echo $row2['nama']; ?></p></marquee>

		<div class="tab">
			<button class="tablinks" onclick="openCity(event, 'dasbor')" id="defaultOpen"><span class="glyphicon glyphicon-home"> </span> Halaman Utama</button>
			<button class="tablinks" onclick="openCity(event, 'data-diri')"><img src="../../images/icon/user.png"> Data Pribadi</button>
			<button class="tablinks" onclick="openCity(event, 'data-ortu')"><img src="../../images/icon/parents.png"> Data Orang Tua</button>
			<button class="tablinks" onclick="openCity(event, 'data-smp')"><img src="../../images/icon/smp.png"> Data Periodik dan SMP</button>
			<div>
				<a href="../../process/Logout.php"><button><span class="glyphicon glyphicon-log-out"></span> LogOut</button></a>
			</div>
		</div>

		<div id="dasbor" class="tabcontent">
			<div class="col-sm-6" style="padding-top: 10px;">
				<div class="panel panel-info">
					<div class="panel-heading">
						Informasi Kontak
					</div>
					<div class="panel-body">
						<table class="table table-responsive">

							<tr align="left">
								<td width="150px">No Ujian nasional SMP</td>
								<td width="10px">:</td>
								<td><?php echo $row2['no_un'];  ?></td>
							</tr>
							<tr align="left">
								<td >Nama</td>
								<td >:</td>
								<td > <?php echo $row2['nama'];  ?></td>
							</tr>
							<tr align="left">
								<td widtd="250px" >TTL</td>
								<td >:</td>
								<td > <?php echo $row2['tempat_lahir'];  ?>, <?php echo $row2['tanggal_lahir'];  ?></td>
							</tr>
							<tr align="left">
								<td widtd="200px" >Jenis Kelamin</td>
								<td >:</td>
								<td > <?php echo $row2['jenis_kelamin'];  ?></td>
							</tr>
							<tr align="left">
								<td widtd="200px" >Alamat</td>
								<td  widtd="20px">:</td>
								<td > <?php echo $row2['alamat_rumah'];  ?> </td>
							</tr>

							<tr align="left">
								<td widtd="200px" >Sekolah Asal</td>
								<td >:</td>
								<td > <?php 
								if ($row2['nama_smp2']!=="") {
									echo $row2['nama_smp2'];
								}else{
									echo $row2['nama_smp'];
								}
								?></td>
							</tr>
							<tr align="left">
								<td widtd="200px" >Nomor HP</td>
								<td >:</td>
								<td > <?php echo $row2['no_hp'];  ?></td>
							</tr>
						</table>
					</table>
				</div>
			</div>
		</div>
		<div class="col-sm-6" style="padding-top: 10px;">
			<div class="panel panel-info">
				<div class="panel-heading">
					Informasi Umum
				</div>
				<div class="panel-body">
					<table class="table table-responsive">
						<tr>
							<td widtd="10px">
								1.
							</td>
							<td>
								Data yang anda masukkan di formulir ini akan dimasukkan ke DAPODIK sekolah, silahkan isi data dengan benanr
							</td>
						</tr>
						<tr>
							<td>
								2.
							</td>
							<td>
								Sebelum melakukan pengisian data, siapkan terlebih dahulu berkas pendukung berupa
								<br>- Kartu Tanda Penduduk / KTP ( jika ada )
								<br>- Kartu Keluarga
								<br>- Kartu Indonesia Pintar / KIP ( bagi penerima )
								<br>- Kartu Keluarga Sejahtara / KKS (bagi yang memiliki)
								<br>- Akta Kelahiran
								<br>- Kartu Penjaminan Sosial / KPS /KPH (bagi yang memiliki)
								<br>- Nomor Rekening (bagi penerima jaminan sosial)

							</td>
						</tr>
					</table>
				</div>
			</div>

		</div>
	</div>

	<div id="data-diri" class="tabcontent">
		<form action="simpan-daftar.php" method="post">
			<input type="hidden" name="no_un" value="<?php echo $row2['no_un'];  ?>">
			<div class="panel panel-success">
				<div class="panel-heading">
					Data Pribadi
				</div>
				<div class="panel-body">
					<table width="100%" cellspacing="0">
						<tr><th style="width: 240px;">
							<label for="no_un">Nomor Ujian Nasional SMP</label>
						</th>
						<th>
							<div class="form-group">
								<input type="text" class="form-control" disabled name="nom_un" value="<?php echo $row['no_un']." ";?>"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
							</div>
						</th>
					</tr>
					<tr>
						<th>
							<label for="nama">Nama Lengkap</label>
						</th>
						<th>
							<div class="form-group">
								<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']." ";?>" placeholder="Nama Lengkap" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
							</div>
						</th>
					</tr>
					<tr>
						<th>
							<label for="jenis_kelamin">Jenis Kelamin</label >
						</th>
						<th>
							<div class="form-group">
								<select class="form-control" name="jenis_kelamin" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									<option><?php echo $row['jenis_kelamin']." ";?></option>
									<option>Laki-laki</option>
									<option>Perempuan</option>
								</div>
							</th>
						</tr>
						<tr>
							<th>
								<label for="nisn">Nomor Induk Siswa Nasional</label>
							</th>
							<th>
								<div class="form-group">
									<input type="text" class="form-control" name="nisn" value="<?php echo $row['nisn']." ";?>" placeholder="NISN" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</th>
						</tr>
						<tr>
							<th>
								<label for="nik">Nomor Induk Kependudukan (NIK)</label>
							</th>
							<th>
								<div class="form-group">
									<input type="text" class="form-control" name="nik" value="<?php echo $row['nik']." ";?>" placeholder="NIK (lihat di kartu keluarga)" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</th>
						</tr>
						<tr>
							<th>
								<label for="tempat_lahir">Tempat Lahir</label>
							</th>
							<th>
								<div class="form-group">
									<input type="text" class="form-control" value="<?php echo $row['tempat_lahir']." ";?>" name="tempat_lahir" placeholder="Tempat Lahir (Sesuai Ijasah)" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</th>
						</tr>
						<tr>
							<th>
								<label for="tanggal_lahir">Tanggal Lahir</label>
							</th>
							<th>
								<div class="form-group">
									<input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']." ";?>" placeholder="tanggal - bulan - tahun" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div>
							</th>
						</tr>
					</tr>
					<tr>
						<th>
							<label for="reg_akta">Nomor Registrasi Akta Lahir</label>
						</th>
						<th>
							<div class="form-group">
								<input type="text" class="form-control" name="reg_akta" value="<?php echo $row['reg_akta']." ";?>" placeholder="Nomor Registrasi di Akta Kelahiran" >
							</div>
						</th>
					</tr>
					<tr>
						<th>
							<label for="anak_ke">Anak Ke -</label>
						</th>
						<th>
							<div class="form-group">
								<input type="text" class="form-control" name="anak_ke" value="<?php echo $row['anak_ke']." ";?>" placeholder="Anak ke ...." required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
							</div>
						</th>
					</tr>
					<tr>
						<th>
							<label for="agama">Agama</label>
						</th>
						<th>
							<div class="form-group">
								<select class="form-control" name="agama" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									<option><?php echo $row['agama']." ";?></option>
									<option>Islam</option>
									<option>Kristen/Protestan</option>
									<option>Katholik</option>
									<option>Hindu</option>
									<option>Budha</option>
									<option>Konghucu</option>
									<option>Kepercayaan Kepada Tuhan YME</option>
									<option>Lainnya</option>
								</div>
							</th>
						</tr>
						<tr>
							<th>
								<label for="kewarganegaraan">Kewarganegaraan</label>
							</th>
							<th>
								<div class="form-group">
									<select class="form-control" name="kewarganegaraan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
										<option ><?php echo $row['kewarganegaraan']." ";?></option>
										<option>WNI (Warga Negara Indonesia)</option>
										<option>WNA (Warga Negara Asing)</option>
									</div>
								</th>
							</tr>
							<tr>
								<th>
									<label for="abk">Berkebutuhan Khusus</label>
								</th>
								<th>
									<div class="form-group">
										<select class="form-control" name="abk"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											<option><?php echo $row['abk']." ";?></option>
											<option>Tidak Ada</option>
											<option>Tuna Netra</option>
											<option>Tuna Rungu</option>
											<option>Tuna Grahita Ringan</option>
											<option>Tuna Grahita Sedang</option>
											<option>Tuna Daksa Ringan</option>
											<option>Tuna Daksa Sedang</option>
											<option>Tuna Laras</option>
											<option>Tuna Wicara</option>
											<option>Tuna Ganda</option>
											<option>Hiperaktif</option>
											<option>Cerdas Istimewa</option>
											<option>Bakat Istimewa</option>
											<option>Kesulitan Belajar</option>
											<option>Narkoba</option>
											<option>Indigo</option>
											<option>Down Sindrome</option>
											<option>Autis</option>
										</div>
									</th>
								</tr>
								<tr>
									<th>
										<label for="no_tlp">Nomor Telepon Rumah</label>
									</th>
									<th>
										<div class="form-group">
											<input type="text" class="form-control" value="<?php echo $row['no_tlp']." ";?>" name="no_tlp" placeholder="Nomor Tlp Rumah (jika ada)">
										</div>
									</th>
								</tr>
								<tr>
									<th>
										<label for="no_hp">Nomor HP</label>
									</th>
									<th>
										<div class="form-group">
											<input type="text" class="form-control" name="no_hp" value="<?php echo $row['no_hp']." ";?>"  placeholder="Nomor HP yang bisa dihubungi">
										</div>
									</th>
								</tr>
								<tr>
									<th>
										<label for="email">Email</label>
									</th>
									<th>
										<div class="form-group">
											<input type="text" class="form-control" value="<?php echo $row['email']." ";?>" name="email" placeholder="Alamat Email">
										</div>
									</th>
								</tr>
							</table>
						</div>
					</div>
					<div class="panel panel-success">
						<div class="panel-heading">
							Data Alamat
						</div>
						<div class="panel-body">
							<table width="100%" cellspacing="0">
								<tr>
									<th style="width: 240px;>
									<label for="alamat">Alamat Jalan</label>
								</th>
								<th>
									<div class="form-group">
										<input type="text" class="form-control" value="<?php echo $row['alamat']." ";?>" name="alamat" placeholder="Nama Jalan Tempat Tinggal/Rumah" >
									</div>
								</th>
							</tr>
							<tr>
								<th>
									<label for="rt">RT</label>
								</th>
								<th>
									<div class="form-group">
										<input type="text" class="form-control" value="<?php echo $row['rt']." ";?>" name="rt" placeholder="RT Rumah">
									</div>
								</th>
							</tr>
							<tr>
								<th>
									<label for="rw">RW</label>
								</th>
								<th>
									<div class="form-group">
										<input type="text" class="form-control" value="<?php echo $row['rw']." ";?>" name="rw" placeholder="RW Rumah">
									</div>
								</th>
							</tr>
							<tr>
								<th>
									<label for="nama_dusun">Nama Dusun</label>
								</th>
								<th>
									<div class="form-group">
										<input type="text" class="form-control" name="nama_dusun" value="<?php echo $row['nama_dusun']." ";?>" placeholder="Nama Dusun Tempat Tinggal" >
									</div>
								</th>
							</tr>
							<tr>
								<th>
									<label for="nama_desa">Nama Desa/Kelurahan</label>
								</th>
								<th>
									<div class="form-group">
										<input type="text" class="form-control" name="nama_desa" value="<?php echo $row['nama_desa']." ";?>" placeholder="Nama Desa/Kelurahan " required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
								</th>
							</tr>
							<tr>
								<th>
									<label for="kecamatan">Nama Kecamatan</label>
								</th>
								<th>
									<div class="form-group">
										<input type="text" class="form-control" name="kecamatan" value="<?php echo $row['kecamatan']." ";?>" placeholder="Nama Kecamatan " required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									</div>
								</th>
							</tr>
							<tr>
								<th>
									<label for="kode_pos">Kode Pos</label>
								</th>
								<th>
									<div class="form-group">
										<input type="text" class="form-control" value="<?php echo $row['kode_pos']." ";?>" name="kode_pos" placeholder="Kode Pos" >
									</div>
								</th>
							</tr>
							<tr>
								<th>
									<label for="tempat_tinggal">Tempat Tinggal</label>
								</th>
								<th>
									<div class="form-group">
										<select class="form-control" name="tempat_tinggal" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											<option ><?php echo $row['tempat_tinggal']." ";?></option>
											<option>Bersama Orang Tua</option>
											<option>Bersama Wali</option>
											<option>Kos / Kontrakkan</option>
											<option>Asrama</option>
											<option>Panti Asuhan</option>
											<option>Lainnya</option>
										</div>
									</th>
								</tr>
								<tr>
									<th>
										<label for="transportasi">Moda Transportasi</label>
									</th>
									<th>
										<div class="form-group">
											<select class="form-control" name="transportasi" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
												<option ><?php echo $row['transportasi']." ";?></option>
												<option>Jalan Kaki</option>
												<option>Kendaraan Pribadi</option>
												<option>Kendaraan Umum</option>
												<option>Jemputan Sekolah</option>
												<option>Kereta Api</option>
												<option>Ojek</option>
												<option>Andong/Bendi/Sado/Delman/Beca</option>
												<option>Perahu/Rakit/Getek</option>
												<option>Lainnya</option>
											</div>
										</th>
									</tr>
								</table>
							</div></div>
							<div class="panel panel-success">
								<div class="panel-heading">
									Data Bantuan Pemerintah
								</div>
								<div class="panel-body">
									<table width="100%" cellspacing="0">
										<tr>
											<th style="width: 240px;>
											<label for="no_kks">Nomor KKS (Kartu Keluarga Sejahtera)</label>
										</th>
										<th>
											<div class="form-group">
												<input type="text" class="form-control" value="<?php echo $row['no_kks']." ";?>" name="no_kks" placeholder="Nomor KKS (jika memiliki). berupa 6 gigit kode" >
											</div>
										</th>
									</tr>

									<tr>
										<th>
											<label for="kps">Penerima KPS/KPH</label>
										</th>
										<th>
											<div class="form-group">
												<select class="form-control" name="kps" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
													<option><?php echo $row['kps']." ";?></option>
													<option>Ya</option>
													<option>Tidak</option>
												</div>
											</th>
										</tr>
										<tr>
											<th>
												<label for="no_kps">Nomor KPS/PKH (jika menerima)</label>
											</th>
											<th>
												<div class="form-group">
													<input type="text" class="form-control" value="<?php echo $row['no_kps']." ";?>" name="no_kps" placeholder="Kosongkan jika tidak menerima KPS (Kartu Perlindungan Sosial) PKH (Prograk Keluarga Harapan)" >
												</div>
											</th>
										</tr>
										<tr>
											<th>
												<label for="layak_pip">Usulan dari Sekolah (Layak PIP)</label>
											</th>
											<th>
												<div class="form-group">
													<select class="form-control" name="layak_pip" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
														<option ><?php echo $row['layak_pip']." ";?></option>
														<option>Ya</option>
														<option>Tidak</option>
													</div>
												</th>
											</tr>
											<tr>
												<th>
													<label for="terima_kip">Penerima KIP (Kartu Indonesia Pintar)</label>
												</th>
												<th>
													<div class="form-group">
														<select class="form-control" name="terima_kip" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
															<option ><?php echo $row['terima_kip']." ";?></option>
															<option>Ya</option>
															<option>Tidak</option>
														</div>
													</th>
												</tr>
												<tr>
													<th>
														<label for="no_kip">Nomor KIP</label>
													</th>
													<th>
														<div class="form-group">
															<input type="text" class="form-control" value="<?php echo $row['no_kip']." ";?>" name="no_kip" placeholder="Nomor Kartu Indonesia Pintar (Apabila Sebelumnya telah menerima KIP)">
														</div>
													</th>
												</tr>
												<tr>
													<th>
														<label for="nama_kip">Nama yang tertera di KIP</label>
													</th>
													<th>
														<div class="form-group">
															<input type="text" class="form-control" name="nama_kip" value="<?php echo $row['nama_kip']." ";?>" placeholder="Nama yang tertulis di KIP (Apabila Sebelumnya telah menerima KIP)">
														</div>
													</th>
												</tr>
												<tr>
													<th>
														<label for="terima_kartu_kip">Terima Fisik Kartu (KIP)</label>
													</th>
													<th>
														<div class="form-group">
															<select class="form-control" name="terima_kartu_kip" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																<option ><?php echo $row['terima_kartu_kip']." ";?></option>
																<option>Bukan Penerima program KIP</option>
																<option>Ya</option>
																<option>Tidak</option>
															</div>
														</th>
													</tr>
													<tr>
														<th>
															<label for="alasan_pip">Alasan Layak PIP</label>
														</th>
														<th>
															<div class="form-group">
																<select class="form-control" name="alasan_pip" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																	<option> <?php echo $row['alasan_pip']." ";?></option>
																	<option>Merasa tidak layak menerima PIP</option>
																	<option>Pemegang PKH/KPS/KIP</option>
																	<option>Penerima BSM 2014</option>
																	<option>Yatim Piatu/Panti Asuhan/Panti Sosial</option>
																	<option>Dampak Bencana Alam</option>
																	<option>Pernah Drop OUT</option>
																	<option>Siswa Miskin/Rentan Miskin</option>
																	<option>Daerah Konflik</option>
																	<option>Keluarga Terpidana</option>
																	<option>Kelainan Fisik</option>
																</div>
															</th>
														</tr>
														<tr>
															<th>
																<label for="bank">Nama Bank</label>
															</th>
															<th>
																<div class="form-group">
																	<input type="text" class="form-control" value="<?php echo $row['bank']." ";?>" name="bank" placeholder="Nama bank pencairan dana KIP (Apabila Sebelumnya telah menerima KIP)">
																</div>
															</th>
														</tr>
														<tr>
															<th>
																<label for="no_rek_bank">Nomor Rekening Bank</label>
															</th>
															<th>
																<div class="form-group">
																	<input type="text" class="form-control" name="no_rek_bank" value="<?php echo $row['no_rek_bank']." ";?>" placeholder="Nomor Rekening bank pencairan dana KIP (Apabila Sebelumnya telah menerima KIP)">
																</div>
															</th>
														</tr>
														<tr>
															<th>
																<label for="nama_rek">Rekening Atas Nama</label>
															</th>
															<th>
																<div class="form-group">
																	<input type="text" class="form-control" name="nama_rek" value="<?php echo $row['nama_rek']." ";?>" placeholder="Nama tertera di buku tabungan bank pencairan dana KIP (Apabila Sebelumnya telah menerima KIP)">
																</div>
															</th>
														</tr>




													</table>

												</div>
											</div>

											<button class="btn btn-danger btn-md" type="submit" value="daftar">Simpan</button>

										</form>

									</div>


									<div id="data-ortu" class="tabcontent">
										<form action="simpan-data-ortu.php" method="post">
											<input type="hidden" name="no_un" value="<?php echo $row2['no_un'];  ?>">
											<div class="panel panel-success">
												<div class="panel-heading">
													Data Ayah kandung
												</div>
												<div class="panel-body">
													<table width="100%" cellspacing="0">
														<tr>
															<th style="width: 240px;">
																<label for="nama_ayah">Nama Ayah Kandung</label>
															</th>
															<th>
																<div class="form-group">
																	<input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah" value="<?php echo $row['nama_ayah']." ";?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																</div>
															</th>
														</tr>
														<tr>
															<th>
																<label for="status_ayah">Status Ayah Kandung</label>
															</th>
															<th>
																<div class="form-group">
																	<select class="form-control" name="status_ayah" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																		<option><?php echo $row['status_ayah']." ";?></option>
																		<option>Hidup</option>
																		<option>Meninggal Dunia</option>
																		<option>Cerai</option>
																	</div>
																</th>
															</tr>
															<tr>
																<th>
																	<label for="nik_ayah">NIK Ayah Kandung</label>
																</th>
																<th>
																	<div class="form-group">
																		<input type="text" class="form-control" value="<?php echo $row['nik_ayah']." ";?>" name="nik_ayah" placeholder="Nomor Induk Kependudukan Ayah">
																	</div>
																</th>
															</tr>
															<tr>
																<th>
																	<label for="tahun_lahir_ayah">Tahun lahir Ayah</label>
																</th>
																<th>
																	<div class="form-group">
																		<input type="text" class="form-control" value="<?php echo $row['tahun_lahir_ayah']." ";?>"  name="tahun_lahir_ayah" placeholder="Tahun Kelahiran Ayah">
																	</div>
																</th>
															</tr>
															<tr>
																<th>
																	<label for="pendidikan_ayah">Pendidikan terakhir Ayah</label>
																</th>
																<th>
																	<div class="form-group">
																		<select class="form-control" name="pendidikan_ayah" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																			<option><?php echo $row['pendidikan_ayah']." ";?></option>
																			<option>Tidak Sekolah</option>
																			<option>Putus Sekolah Dasar</option>
																			<option>SD Sederajat</option>
																			<option>SMP Sederajat</option>
																			<option>SMA Sederajat</option>
																			<option>Diploma 1 (D1)</option>
																			<option>Diploma 2 (D2)</option>
																			<option>Diploma 3 (D3)</option>
																			<option>Diploma 4 (D4) / Sarjana (S1)</option>
																			<option>Magister (S2)</option>
																			<option>Doktor (S3)</option>
																		</div>
																	</th>
																</tr>
																<tr>
																	<th>
																		<label for="pekerjaan_ayah">Pekerjaan Ayah</label>
																	</th>
																	<th>
																		<div class="form-group">
																			<select class="form-control" name="pekerjaan_ayah" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																				<option><?php echo $row['pekerjaan_ayah']." ";?></option>
																				<option>Tidak Bekerja</option>
																				<option>Nelayan</option>
																				<option>Petani</option>
																				<option>Perternak</option>
																				<option>PNS/TNI/Polri</option>
																				<option>Karyawan Perusahaan</option>
																				<option>Pedagang Kecil</option>
																				<option>Pedagang Besar</option>
																				<option>Buruh</option>
																				<option>Pensiunan</option>
																				<option>Lainnya</option>

																			</div>
																		</th>
																	</tr>
																	<tr>
																		<th>
																			<label for="penghasilan_ayah">Penghasilan Ayah Perbulan</label>
																		</th>
																		<th>
																			<div class="form-group">
																				<select class="form-control" name="penghasilan_ayah" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																					<option><?php echo $row['penghasilan_ayah']." ";?></option>
																					<option>Tidak Berpenghasilan</option>
																					<option>Kurang dari RP. 500.000</option>
																					<option>Rp. 500.000 s/d Rp. 999.999</option>
																					<option>Rp. 1.000.000 s/d Rp. 1.999.999</option>
																					<option>Rp. 2.000.000 s/d Rp.4.999.999</option>
																					<option>Rp. 5.000.000 s/d Rp. 20 Juta</option>
																					<option>Lebih dari 20 Juta</option>
																				</div>
																			</th>
																		</tr>
																		<tr>
																			<th>
																				<label for="bk_ayah">Berkebutuhan Khusus</label>
																			</th>
																			<th>
																				<div class="form-group">
																					<select class="form-control" name="bk_ayah" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																						<option><?php echo $row['bk_ayah']." ";?></option>
																						<option>Tidak Ada</option>
																						<option>Tuna Netra</option>
																						<option>Tuna Rungu</option>
																						<option>Tuna Grahita Ringan</option>
																						<option>Tuna Grahita Sedang</option>
																						<option>Tuna Daksa Ringan</option>
																						<option>Tuna Daksa Sedang</option>
																						<option>Tuna Laras</option>
																						<option>Tuna Wicara</option>
																						<option>Tuna Ganda</option>
																						<option>Hiperaktif</option>
																						<option>Cerdas Istimewa</option>
																						<option>Bakat Istimewa</option>
																						<option>Kesulitan Belajar</option>
																						<option>Narkoba</option>
																						<option>Indigo</option>
																						<option>Down Sindrome</option>
																						<option>Autis</option>
																					</div>
																				</th>
																			</tr>

																		</table>
																	</div>
																</div>
																<div class="panel panel-success">
																	<div class="panel-heading">
																		Data Ibu kandung
																	</div>
																	<div class="panel-body">
																		<table width="100%" cellspacing="0">
																			<tr>
																				<th style="width: 240px;">
																					<label for="nama_ibu">Nama Ibu Kandung</label>
																				</th>
																				<th>
																					<div class="form-group">
																						<input type="text" class="form-control" name="nama_ibu" value="<?php echo $row['nama_ibu']." ";?>" placeholder="Nama Ibu" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																					</div>
																				</th>
																			</tr>
																			<tr>
																				<th>
																					<label for="status_ibu">Status Ibu Kandung</label>
																				</th>
																				<th>
																					<div class="form-group">
																						<select class="form-control" name="status_ibu" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																							<option ><?php echo $row['status_ibu']." ";?></option>
																							<option>Hidup</option>
																							<option>Meninggal Dunia</option>
																							<option>Cerai</option>
																						</div>
																					</th>
																				</tr>
																				<tr>
																					<th>
																						<label for="nik_ibu">NIK Ibu Kandung</label>
																					</th>
																					<th>
																						<div class="form-group">
																							<input type="text" class="form-control" value="<?php echo $row['nik_ibu']." ";?>" name="nik_ibu" placeholder="Nomor Induk Kependudukan Ibu">
																						</div>
																					</th>
																				</tr>
																				<tr>
																					<th>
																						<label for="tahun_lahir_ibu">Tahun lahir Ibu Kandung</label>
																					</th>
																					<th>
																						<div class="form-group">
																							<input type="text" class="form-control" value="<?php echo $row['tahun_lahir_ibu']." ";?>" name="tahun_lahir_ibu" placeholder="Tahun Kelahiran Ibu">
																						</div>
																					</th>
																				</tr>
																				<tr>
																					<th>
																						<label for="pendidikan_ibu">Pendidikan terakhir Ibu</label>
																					</th>
																					<th>
																						<div class="form-group">
																							<select class="form-control" name="pendidikan_ibu" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																								<option><?php echo $row['pendidikan_ibu']." ";?></option>
																								<option>Tidak Sekolah</option>
																								<option>Putus Sekolah Dasar</option>
																								<option>SD Sederajat</option>
																								<option>SMP Sederajat</option>
																								<option>SMA Sederajat</option>
																								<option>Diploma 1 (D1)</option>
																								<option>Diploma 2 (D2)</option>
																								<option>Diploma 3 (D3)</option>
																								<option>Diploma 4 (D4) / Sarjana (S1)</option>
																								<option>Magister (S2)</option>
																								<option>Doktor (S3)</option>
																							</div>
																						</th>
																					</tr>
																					<tr>
																						<th>
																							<label for="pekerjaan_ibu">Pekerjaan Ibu</label>
																						</th>
																						<th>
																							<div class="form-group">
																								<select class="form-control" name="pekerjaan_ibu" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																									<option ><?php echo $row['pekerjaan_ibu']." ";?></option>
																									<option>Tidak Bekerja</option>
																									<option>Nelayan</option>
																									<option>Petani</option>
																									<option>Perternak</option>
																									<option>PNS/TNI/Polri</option>
																									<option>Karyawan Perusahaan</option>
																									<option>Pedagang Kecil</option>
																									<option>Pedagang Besar</option>
																									<option>Buruh</option>
																									<option>Pensiunan</option>
																									<option>Lainnya</option>

																								</div>
																							</th>
																						</tr>
																						<tr>
																							<th>
																								<label for="penghasilan_ibu">Penghasilan Ibu Perbulan</label>
																							</th>
																							<th>
																								<div class="form-group">
																									<select class="form-control" name="penghasilan_ibu" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																										<option ><?php echo $row['penghasilan_ibu']." ";?></option>
																										<option>Tidak Berpenghasilan</option>
																										<option>Kurang dari RP. 500.000</option>
																										<option>Rp. 500.000 s/d Rp. 999.999</option>
																										<option>Rp. 1.000.000 s/d Rp. 1.999.999</option>
																										<option>Rp. 2.000.000 s/d Rp.4.999.999</option>
																										<option>Rp. 5.000.000 s/d Rp. 20 Juta</option>
																										<option>Lebih dari 20 Juta</option>
																									</div>
																								</th>
																							</tr>
																							<tr>
																								<th>
																									<label for="bk_ibu">Berkebutuhan Khusus</label>
																								</th>
																								<th>
																									<div class="form-group">
																										<select class="form-control" name="bk_ibu" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																											<option ><?php echo $row['bk_ibu']." ";?></option>
																											<option>Tidak Ada</option>
																											<option>Tuna Netra</option>
																											<option>Tuna Rungu</option>
																											<option>Tuna Grahita Ringan</option>
																											<option>Tuna Grahita Sedang</option>
																											<option>Tuna Daksa Ringan</option>
																											<option>Tuna Daksa Sedang</option>
																											<option>Tuna Laras</option>
																											<option>Tuna Wicara</option>
																											<option>Tuna Ganda</option>
																											<option>Hiperaktif</option>
																											<option>Cerdas Istimewa</option>
																											<option>Bakat Istimewa</option>
																											<option>Kesulitan Belajar</option>
																											<option>Narkoba</option>
																											<option>Indigo</option>
																											<option>Down Sindrome</option>
																											<option>Autis</option>
																										</div>
																									</th>
																								</tr>
																							</table>
																						</div>
																					</div>
																					<div class="panel panel-success">
																						<div class="panel-heading">
																							Data Wali
																						</div>
																						<div class="panel-body">
																							<table width="100%" cellspacing="0">
																								<tr>
																									<th style="width: 240px;">
																										<label for="nama_wali">Nama Wali</label>
																									</th>
																									<th>
																										<div class="form-group">
																											<input type="text" class="form-control" value="<?php echo $row['nama_wali']." ";?>" name="nama_wali" placeholder="Nama Wali">
																										</div>
																									</th>
																								</tr>

																								<tr>
																									<th>
																										<label for="nik_wali">NIK Wali</label>
																									</th>
																									<th>
																										<div class="form-group">
																											<input type="text" value="<?php echo $row['nik_wali']." ";?>" class="form-control" name="nik_wali" placeholder="Nomor Induk Kependudukan Wali">
																										</div>
																									</th>
																								</tr>
																								<tr>
																									<th>
																										<label for="tahun_lahir_wali">Tahun lahir Wali</label>
																									</th>
																									<th>
																										<div class="form-group">
																											<input type="text" value="<?php echo $row['tahun_lahir_wali']." ";?>" class="form-control" name="tahun_lahir_wali" placeholder="Tahun Kelahiran Wali">
																										</div>
																									</th>
																								</tr>
																								<tr>
																									<th>
																										<label for="pendidikan_wali">Pendidikan</label>
																									</th>
																									<th>
																										<div class="form-group">
																											<select class="form-control" name="pendidikan_wali" >
																												<option><?php echo $row['pendidikan_wali']." ";?></option>
																												<option>Tidak Sekolah</option>
																												<option>Putus Sekolah Dasar</option>
																												<option>SD Sederajat</option>
																												<option>SMP Sederajat</option>
																												<option>SMA Sederajat</option>
																												<option>Diploma 1 (D1)</option>
																												<option>Diploma 2 (D2)</option>
																												<option>Diploma 3 (D3)</option>
																												<option>Diploma 4 (D4) / Sarjana (S1)</option>
																												<option>Magister (S2)</option>
																												<option>Doktor (S3)</option>
																											</div>
																										</th>
																									</tr>
																									<tr>
																										<th>
																											<label for="pekerjaan_wali">Pekerjaan Wali</label>
																										</th>
																										<th>
																											<div class="form-group">
																												<select class="form-control" name="pekerjaan_wali" >
																													<option><?php echo $row['pekerjaan_wali']." ";?></option>
																													<option>Tidak Bekerja</option>
																													<option>Nelayan</option>
																													<option>Petani</option>
																													<option>Perternak</option>
																													<option>PNS/TNI/Polri</option>
																													<option>Karyawan Perusahaan</option>
																													<option>Pedagang Kecil</option>
																													<option>Pedagang Besar</option>
																													<option>Buruh</option>
																													<option>Pensiunan</option>
																													<option>Lainnya</option>

																												</div>
																											</th>
																										</tr>
																										<tr>
																											<th>
																												<label for="penghasilan_wali">Penghasilan Wali Perbulan</label>
																											</th>
																											<th>
																												<div class="form-group">
																													<select class="form-control" name="penghasilan_wali" >
																														<option><?php echo $row['penghasilan_wali']." ";?></option>
																														<option>Tidak Berpenghasilan</option>
																														<option>Kurang dari RP. 500.000</option>
																														<option>Rp. 500.000 s/d Rp. 999.999</option>
																														<option>Rp. 1.000.000 s/d Rp. 1.999.999</option>
																														<option>Rp. 2.000.000 s/d Rp.4.999.999</option>
																														<option>Rp. 5.000.000 s/d Rp. 20 Juta</option>
																														<option>Lebih dari 20 Juta</option>
																													</div>
																												</th>
																											</tr>
																											<tr>
																												<th>
																													<label for="bk_wali">Berkebutuhan Khusus</label>
																												</th>
																												<th>
																													<div class="form-group">
																														<select class="form-control" name="bk_wali" >
																															<option><?php echo $row['bk_wali']." ";?></option>
																															<option>Tidak Ada</option>
																															<option>Tuna Netra</option>
																															<option>Tuna Rungu</option>
																															<option>Tuna Grahita Ringan</option>
																															<option>Tuna Grahita Sedang</option>
																															<option>Tuna Daksa Ringan</option>
																															<option>Tuna Daksa Sedang</option>
																															<option>Tuna Laras</option>
																															<option>Tuna Wicara</option>
																															<option>Tuna Ganda</option>
																															<option>Hiperaktif</option>
																															<option>Cerdas Istimewa</option>
																															<option>Bakat Istimewa</option>
																															<option>Kesulitan Belajar</option>
																															<option>Narkoba</option>
																															<option>Indigo</option>
																															<option>Down Sindrome</option>
																															<option>Autis</option>
																														</div>
																													</th>
																												</tr>
																											</tr>
																										</table>
																									</div>
																								</div>

																								<button class="btn btn-danger btn-md" type="submit" value="daftar">SIMPAN</button>

																							</form>

																						</div>
																						<div id="data-smp" class="tabcontent">
																							<form action="simpan-data-smp.php" method="post">
																								<input type="hidden" name="no_un" value="<?php echo $row2['no_un'];  ?>">
																								<div class="panel panel-success">
																									<div class="panel-heading">
																										Data Periodik
																									</div>
																									<div class="panel-body">
																										<table width="100%" cellspacing="0">
																											<tr>
																												<th style="width: 240px;">
																													<label for="tinggi_badan">Tinggi Badan (cm)</label>
																												</th>
																												<th>
																													<div class="form-group">
																														<input type="text" class="form-control-sm" value="<?php echo $row['tinggi_badan']." ";?>" name="tinggi_badan" placeholder="Tinggi Badan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">&nbsp; <a>cm</a>
																													</div>
																												</th>
																											</tr>
																											<tr>
																												<th>
																													<label for="berat_badan">Berat Badan (Kg)</label>
																												</th>
																												<th>
																													<div class="form-group">
																														<input type="text" class="form-control-sm" value="<?php echo $row['berat_badan']." ";?>" name="berat_badan" placeholder="Berat Badan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">&nbsp; <a>Kg</a>
																													</div>
																												</th>
																											</tr>
																											<tr>
																												<th>
																													<label for="jarak_sekolah">Jarak Tempat Tinggal ke Sekolah</label>
																												</th>
																												<th>
																													<div class="form-group">
																														<select class="form-control" name="jarak_sekolah" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																															<option><?php echo $row['jarak_sekolah']." ";?></option>
																															<option>Kurang dari 1 kilometer</option>
																															<option>Lebih dari 1 kilometer</option>
																														</div>
																													</th>
																												</tr>
																												<tr>
																													<th>
																														<label for="jarak_km"></label>
																													</th>
																													<th>
																														<div class="form-group">
																															<input type="text" class="form-control-sm" value="<?php echo $row['jarak_km']." ";?>" name="jarak_km" placeholder="Tuliskan jarak" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">&nbsp; <a>Km</a>
																														</div>
																													</th></tr>

																													<tr>
																														<th>
																															<label for="tempuh_jam">Waktu tempuh ke sekolah</label>
																														</th>
																														<th>
																															<div class="form-group">
																																<input type="text" class="form-control-sm" value="<?php echo $row['tempuh_jam']." ";?>" name="tempuh_jam" placeholder="Waktu" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">&nbsp; <a>Jam</a>
																															</div>
																														</th></tr>
																														<tr>
																															<th>
																																<label for="tempuh_menit"></label>
																															</th>
																															<th>
																																<div class="form-group">
																																	<input type="text" value="<?php echo $row['tempuh_menit']." ";?>" class="form-control-sm" name="tempuh_menit" placeholder="Waktu" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">&nbsp; <a>Menit</a>
																																</div>
																															</th></tr>
																															<tr>
																																<th>
																																	<label for="saudara_kandung">Jumlah Saudara Kandung</label>
																																</th>
																																<th>
																																	<div class="form-group">
																																		<input type="text" value="<?php echo $row['saudara_kandung']." ";?>" class="form-control-sm" name="saudara_kandung" placeholder="saudara" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">&nbsp; <a>Orang</a>
																																	</div>
																																</th></tr>

																															</table>
																														</div>
																													</div>
																													<div class="panel panel-success">
																														<div class="panel-heading">
																															Data Prestasi
																														</div>
																														<div class="panel-body">
																															<table width="100%" cellspacing="0">
																																<tr>
																																	<th style="width: 240px;">
																																		<label for="jenis_prestasi1">Jenis Prestasi</label>
																																	</th>
																																	<th>
																																		<div class="form-group">
																																			<select class="form-control" name="jenis_prestasi1" >
																																				<option><?php echo $row['jenis_prestasi1']." ";?></option>
																																				<option>Sains</option>
																																				<option>Seni</option>
																																				<option>Olahraga</option>
																																				<option>lainnya</option>
																																			</div>
																																		</th>
																																	</tr>
																																	<tr>
																																		<th>
																																			<label for="tingkat_prestasi1">Tingkat</label>
																																		</th>
																																		<th>
																																			<div class="form-group">
																																				<select class="form-control" name="tingkat_prestasi1">
																																					<option><?php echo $row['tingkat_prestasi1']." ";?></option>
																																					<option>Sekolah</option>
																																					<option>Kecamatan</option>
																																					<option>Kabupaten</option>
																																					<option>Provinsi</option>
																																					<option>Nasional</option>
																																					<option>Internasional</option>
																																				</div>
																																			</th>
																																		</tr>
																																		<tr>
																																			<th>
																																				<label for="nama_prestasi1">Nama Prestasi</label>
																																			</th>
																																			<th>
																																				<div class="form-group">
																																					<input type="text" class="form-control" value="<?php echo $row['nama_prestasi1']." ";?>" name="nama_prestasi1" placeholder="Nama Prestasi">
																																				</div>
																																			</th>
																																		</tr>
																																		<tr>
																																			<th>
																																				<label for="tahun_prestasi1">Tahun</label>
																																			</th>
																																			<th>
																																				<div class="form-group">
																																					<input type="text" value="<?php echo $row['tahun_prestasi1']." ";?>" class="form-control" name="tahun_prestasi1" placeholder="Tahun Prestasi Diraih">
																																				</div>
																																			</th>
																																		</tr>
																																		<tr>
																																			<th>
																																				<label for="penyelenggara_prestasi1">Penyelenggara</label>
																																			</th>
																																			<th>
																																				<div class="form-group">
																																					<input type="text" class="form-control" value="<?php echo $row['penyelenggara_prestasi1']." ";?>" name="penyelenggara_prestasi1" placeholder="Penyelenggara Kegiatan Lomba/Pertandingan">
																																				</div>
																																			</th>
																																		</tr>
																																	</table>
																																</div>
																															</div>
																															<div class="panel panel-success">
																																<div class="panel-heading">
																																	Data Beasiswa
																																</div>
																																<div class="panel-body">
																																	<table width="100%" cellspacing="0">
																																		<tr>
																																			<th style="width: 240px;">
																																				<label for="jenis_beasiswa1">Jenis Beasiswa</label>
																																			</th>
																																			<th>
																																				<div class="form-group">
																																					<select class="form-control" name="jenis_beasiswa1" >
																																						<option ><?php echo $row['jenis_beasiswa1']." ";?></option>
																																						<option>Anak/Siswa Berprestasi</option>
																																						<option>Anak/Siswa Miskin</option>
																																						<option>Pendidikan</option>
																																						<option>Unggulan</option>
																																						<option>lainnya</option>
																																					</div>
																																				</th>
																																			</tr>
																																			<tr>
																																				<th>
																																					<label for="keterangan_beasiswa1">Keterangan</label>
																																				</th>
																																				<th>
																																					<div class="form-group">
																																						<input type="text" class="form-control" value="<?php echo $row['keterangan_beasiswa1']." ";?>" name="keterangan_beasiswa1" placeholder="Nama Beasiswa (Contoh: Beasiswa murid berprestasi)">
																																					</div>
																																				</th>
																																			</tr>
																																			<tr>
																																				<th>
																																					<label for="mulai_tahun_bea1">Diterima mulai tahun</label>
																																				</th>
																																				<th>
																																					<div class="form-group">
																																						<input type="text" value="<?php echo $row['mulai_tahun_bea1']." ";?>" class="form-control" name="mulai_tahun_bea1" placeholder="Tahun Awal menerima Beasiswa">
																																					</div>
																																				</th>
																																			</tr>
																																			<tr>
																																				<th>
																																					<label for="akhir_tahun_bea1">Diterima sampai tahun</label>
																																				</th>
																																				<th>
																																					<div class="form-group">
																																						<input type="text" value="<?php echo $row['akhir_tahun_bea1']." ";?>" class="form-control" name="akhir_tahun_bea1" placeholder="Tahun Terakhir Menerima Beasiswa">
																																					</div>
																																				</th>
																																			</tr>

																																		</tr>
																																	</table>
																																</div>


																															</div>
																															<div class="panel panel-success">
																																<div class="panel-heading">
																																	Data SMP
																																</div>
																																<div class="panel-body">
																																	<table width="100%" cellspacing="0">
																																		<tr>
																																			<th style="width: 240px;">
																																				<label for="nama_smp">Nama SMP</label>
																																			</th>
																																			<th>
																																				<div class="form-group">
																																					<input type="text" class="form-control" value="<?php echo $row['nama_smp']." ";?>" name="nama_smp" placeholder="Nama SMP (contoh : SMPN 2 Jorong" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																																				</div>
																																			</th>
																																		</tr>
																																		<tr>
																																			<th>
																																				<label for="alamat_smp">Alamat Sekolah Asal</label>
																																			</th>
																																			<th>
																																				<div class="form-group">
																																					<input type="text" class="form-control" value="<?php echo $row['alamat_smp']." ";?>" name="alamat_smp" placeholder="Alamat SMP" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																																				</div>
																																			</th>
																																		</tr>
																																		<tr>
																																			<th>
																																				<label for="kabupaten_smp">Kabupaten/Kota SMP</label>
																																			</th>
																																			<th>
																																				<div class="form-group">
																																					<input type="text" class="form-control" value="<?php echo $row['kabupaten_smp']." ";?>" name="kabupaten_smp" placeholder="Kabupaten/Kota SMP berada" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																																				</div>
																																			</th>
																																		</tr>
																																	</table>
																																</div>
																															</div>

																															<button class="btn btn-danger btn-md" type="submit" value="daftar">SIMPAN</button>

																														</form>

																													</div>

																													<script>
																														function openCity(evt, cityName) {
																															var i, tabcontent, tablinks;
																															tabcontent = document.getElementsByClassName("tabcontent");
																															for (i = 0; i < tabcontent.length; i++) {
																																tabcontent[i].style.display = "none";
																															}
																															tablinks = document.getElementsByClassName("tablinks");
																															for (i = 0; i < tablinks.length; i++) {
																																tablinks[i].className = tablinks[i].className.replace(" active", "");
																															}
																															document.getElementById(cityName).style.display = "block";
																															evt.currentTarget.className += " active";
																														}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</div>



 <!-- Bootstrap core JavaScript
 	================================================== -->
 	<!-- Placed at the end of the document so the pages load faster -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
 	<script src="../../dist/js/bootstrap.min.js"></script>
 	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
 </body>
 </html>