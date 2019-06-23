<?php
include '../../../config/koneksi.php';
$id = $_POST['rowid'];
$data = mysqli_query($konek, "SELECT * FROM tb_sekolah");
if(!$data){
	die('SQL Error:' . mysqli_error($konek));
}
?>
<script language="javascript">
	function getkey(e)
	{
		if (window.event)
			return window.event.keyCode;
		else if (e)
			return e.which;
		else
			return null;
	}
	function goodchars(e, goods, field)
	{
		var key, keychar;
		key = getkey(e);
		if (key == null) return true;

		keychar = String.fromCharCode(key);
		keychar = keychar.toLowerCase();
		goods = goods.toLowerCase();

// check goodkeys
if (goods.indexOf(keychar) != -1)
	return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
	return true;

if (key == 13) {
	var i;
	for (i = 0; i < field.form.elements.length; i++)
		if (field == field.form.elements[i])
			break;
		i = (i + 1) % field.form.elements.length;
		field.form.elements[i].focus();
		return false;
	};
// else return false
return false;
}
</script>

<style>
.container{
	font-size: 10pt;
}
.form-control{
	font-size: 10pt;
}
@media only screen and (max-width: 800px) {
	th{
		width: 30%;
	}
}

</style>
</head>
<body>

	<?php 
	$dataku = mysqli_query($konek, "SELECT*FROM tb_registrasi WHERE id=$id");
	$baris = mysqli_fetch_array($dataku, MYSQLI_ASSOC);
	?>

	<div class="container" style="padding: 20px 20px 20px 20px; width: 850px">
		
		<form action="../../process/proses-ubah-pendaftar.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id ; ?>">
			<div class="panel panel-success">
				<div class="panel-heading">
					=== Data Diri === 
				</div>
				<div class="panel-body">
					<table width="100%">						
					<tr><th style="width: 250px;">
							<label for="nama">Nama Lengkap Pendaftar&nbsp;*</label>
						</th>
						<td>
							<div class="form-group">
								<input type="text" class="form-control" name="nama" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Lengkap (sesuai Ijazah atau Akta Kelahiran)" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['nama'] ?>">
							</div>
						</td>
					</tr>
					<tr>
						<th>
							<label for="jenis_kelamin">Jenis Kelamin *</label >
						</th>
						<td>
							<div class="form-group">
								<select class="form-control" name="jenis_kelamin" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									<option><?php echo $baris['jenis_kelamin'] ?></option>
									<option>LAKI-LAKI</option>
									<option>PEREMPUAN</option>
								</div>
							</td>
						</tr>
						
						<tr>
								<th>
									<label for="nisn">Nomor Induk Siswa Nasional (NISN)&nbsp;*</label>
								</th>
								<td>
									<div class="form-group">
										<input type="text" class="form-control" style="background: #EFFEF2" name="nisn" onkeyup="this.value = this.value.toUpperCase()" placeholder="Contoh Penulisan 0.001691673 (kalau angka yang pertama nol, maka diberi tanda titik atau min setelah angka pertama) " value="<?php echo $baris['nisn'] ?>">
									</div>
								</td>
						</tr>
						
						<tr>
								<th>
									<label for="nkk">Nomor Kartu Keluarga (No. KK)&nbsp;*</label>
								</th>
								<td>
									<div class="form-group">
										<input type="text" style="background: #EFFEF2" class="form-control" name="nkk" onkeyup="this.value = this.value.toUpperCase()" placeholder="Contoh Penulisan No KK 6306021809070115 (16 digit)"value="<?php echo $baris['nkk'] ?>">
									</div>
								</td>
							</tr>	
						
						<tr>
								<th>
									<label for="nik">Nomor Induk Kependudukan (NIK)&nbsp;*</label>
								</th>
								<td>
									<div class="form-group">
										<input type="text" style="background: #EFFEF2" class="form-control" name="nik" onkeyup="this.value = this.value.toUpperCase()" placeholder="Contoh Penulisan NIK 2012787364456455 (16 digit)" value="<?php echo $baris['nik'] ?>">
									</div>
								</td>
							</tr>						
						
						<tr>
							<th>
								<label for="tempat_lahir">Tempat Lahir *</label>
							</th>
							<td>
								<div class="form-group">
									<input type="text" class="form-control" name="tempat_lahir" onkeyup="this.value = this.value.toUpperCase()" placeholder="Tempat Lahir (Sesuai Ijazah)" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['tempat_lahir'] ?>">
								</div>
							</td>
						</tr>
						
						<tr>
							<th>
								<label for="tanggal_lahir">Tanggal Lahir *</label>
							</th>
							<td>
								<div class="form-group">
									<input type="text" class="form-control" name="tanggal_lahir" onkeyup="this.value = this.value.toUpperCase()" placeholder="tanggal - bulan - tahun" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['tanggal_lahir'] ?>">
								</div>
							</td>
						</tr>
					</tr>
					
					<tr><th>
							<label for="no_akta">Nomor Registrasi Akta Lahir&nbsp;*</label>
						</th>
						<td>
							<div class="form-group">
								<input type="text" style="background: #EFFEF2" class="form-control" name="no_akta" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nomor Registarsi di Akta Kelahiran" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['no_akta'] ?>">
							</div>
						</td>
					</tr>					
										
					<tr>
						<th>
							<label for="agama">Agama & Kepercayaan *</label>
						</th>
						<td>
							<div class="form-group">
								<select class="form-control" name="agama" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									<option><?php echo $baris['agama'] ?></option>
									<option>ISLAM</option>
									<option>KRISTEN/PROTESTAN</option>
									<option>KATHOLIK</option>
									<option>HINDU</option>
									<option>BUDHA</option>
									<option>KONGHUCHU</option>
									<option>KEPERCAYAAN KEPADA TUHAN YME</option>
									<option>LAINNYA</option>
							</div>
						</td>
					</tr>
							
					<tr>
							<th>
								<label for="kewarganegaraan">Kewarganeraan *</label>
							</th>
							<td>
								<div class="form-group">
									<input type="text" class="form-control" name="kewarganegaraan" onkeyup="this.value = this.value.toUpperCase()" placeholder="Sesuai KTP/Akta" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['kewarganegaraan'] ?>">
								</div>
							</td>
						</tr>
						
					<tr>
						<th>
							<label for="kbk">Berkebutuhan Khusus *</label>
						</th>
						<td>
							<div class="form-group">
								<select class="form-control" name="kbk" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											<option><?php echo $baris['kbk'] ?></option>
											<option>Tidak</option>
											<option>Netra (A)</option>
											<option>Rungu (B)</option>
											<option>Grahita Ringan (C)</option>
											<option>Grahita Sedang (C1)</option>
											<option>Daksa Ringan (D)</option>
											<option>Daksa Sedang (D1)</option>
											<option>Laras (E)</option>
											<option>Wicara (F)</option>
											<option>Tuna Ganda (G)</option>
											<option>Hiperaktif (H)</option>
											<option>Cerdas Istimewa (I)</option>
											<option>Bakat Istimewa (J)</option>
											<option>Kesulitan Belajar (K)</option>
											<option>Narkoba (N)</option>
											<option>Indigo (O)</option>
											<option>Dwon Sindrome (P)</option>
											<option>Autis (Q)</option>
											<option>Tipes</option>
											<option>Maagh</option>
											<option>Asma</option>
							</div>
						</td>
					</tr>

					<tr>
						<th>
							<label for="domis">Domisili Sekarang *</label >
						</th>
						<td>
							<div class="form-group">
								<select class="form-control" name="domis" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
									<option><?php echo $baris['domis'] ?></option>
									<option>HMP</option>
									<option>NDK</option>
								</div>
							</td>
						</tr>					
							
								</table>		
							</div>
						</div>
			
						<div class="panel panel-info">
							<div class="panel-heading">
								=== Data Alamat ===
							</div>
							<div class="panel-body">
								<table width="100%">
								    <tr>
										<th style="width: 250px;">
											<label for="almt_jl">Alamat Jalan *</label>
										</th>
										<td>
											<div class="form-group">
											<input type="text" class="form-control" name="almt_jl" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Jalan Tempat Tinggal/Rumah" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['almt_jl'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="rt">RT/RW
											*</label>
										</th>
										<td>
											<div class="form-group">
											<input type="text" class="form-control" name="rt" onkeyup="this.value = this.value.toUpperCase()" placeholder="RT/RW Rumah dengan angka romawi (Contoh : I/IV)" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['rt'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_dsn">Nama Dusun *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_dsn" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Dusun Tempat Tinggal" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['nm_dsn'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_ds">Nama Desa/Kelurahan *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_ds" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Desa/Kelurahan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['nm_ds'] ?>">
											</div>											
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_kec">Nama Kecamatan *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_kec" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Kecamatan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['nm_kec'] ?>">
											</div>											
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_kt">Nama Kota/Kabupaten *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_kt" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Kota/Kabupaten" value="<?php echo $baris['nm_kt'] ?>">
											</div>											
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_prov">Nama Provinsi *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_prov" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Provinsi" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"value="<?php echo $baris['nm_prov'] ?>">
											</div>											
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="kode_pos">Kode Pos *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="kode_pos" onkeyup="this.value = this.value.toUpperCase()" placeholder="Kode Pos" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"value="<?php echo $baris['kode_pos'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="tmpt_tinggal">Tempat Tinggal *</label>
										</th>
											<td>
												<div class="form-group">
												<select class="form-control" name="tmpt_tinggal" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
												<option><?php echo $baris['tmpt_tinggal'] ?></option>
												<option>Bersama Orang Tua</option>
												<option>Bersama Wali</option>
												<option>Kos/Kontrakkan</option>
												<option>Asrama/Mondok</option>
												<option>Panti Asuhan</option>
												<option>Lainnya</option>
												</div>
											</td>
									</tr>																	
									
									<tr>
										<th>
											<label for="moda_transport">Moda Transportasi *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="moda_transport" onkeyup="this.value = this.value.toUpperCase()" placeholder="Moda Transportasi Yang Dipakai" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['moda_transport'] ?>">
											</div>											
										</td>
									</tr>
									
								</table>
							</div>
						</div>
						
						<div class="panel panel-info">
							<div class="panel-heading">
								=== Data Bantuan Pemerintah ===
							</div>
							<div class="panel-body">
								<table width="100%">
									<tr>
										<th style="width: 250px;">
											<label for="no_kks">Nomor KKS(Kartu Keluarga Sejahtera)*</label>
										</th>
										<td>										
											<div class="form-group">
													<input type="text" class="form-control" style="background: #EFFEF2" name="no_kks" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nomor KKS (jika memiliki) berupa 6 digit kode" value="<?php echo $baris['no_kks'] ?>">
											</div>											
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="anak_ke">Anak Ke -</label>
										</th>
										<td>
											<div class="form-group">
											<input type="number" class="form-control" name="anak_ke" placeholder="Anak Ke -" value="<?php echo $baris['anak_ke'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="penerima_kps">Penerima KPS/PKH *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="penerima_kps" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											<option><?php echo $baris['penerima_kps'] ?></option>
											<option>TIDAK</option>
											<option>YA</option>
											</div>												
										</td>
									</tr>
									<tr>
										<th>
											<label for="no_kps">Nomor KPS/PKH (jika menerima) *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" style="background: #EFFEF2" name="no_kps" placeholder="Kosongkan Jika Tidak Menerima KPS (Kartu Perlindungan Sosial), PKH (Program Keluarga Harapan)" value="<?php echo $baris['no_kps'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="lyk_pip">Usulan dari Sekolahan (Layak PIP) *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="lyk_pip" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											<option><?php echo $baris['lyk_pip'] ?></option>
											<option>TIDAK</option>
											<option>YA</option>
											</div>											
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="penerima_kip">Penerima KIP (Kartu Indonesia Pintar) *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="penerima_kip" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											<option><?php echo $baris['penerima_kip'] ?></option>
											<option>TIDAK</option>
											<option>YA</option>
											</div>
										</td>
									</tr>									
									
									<tr>
										<th>
											<label for="no_kip">Nomor KIP *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" style="background: #EFFEF2" name="no_kip" placeholder="Nomor Kartu Indonesia Pintar (apabila sebelumnya telah menerima KIP)" value="<?php echo $baris['no_kip'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_kip">Nama yang tertera di KIP *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_kip" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Penerima" value="<?php echo $baris['nm_kip'] ?>">
											</div>
											
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="terima_kip">Terima Fisik Kartu (KIP) *</label>
										</th>
										<td>
										<div class="form-group">
											<select class="form-control" name="terima_kip" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											<option><?php echo $baris['terima_kip'] ?></option>
											<option>TIDAK</option>
											<option>YA</option>
										</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="alasan_pip">Alasan Layak PIP *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="alasan_pip">
											<option><?php echo $baris['alasan_pip'] ?></option>
											<option>Pemegang PKH/KPS/KIP</option>
											<option>Penerima BSM</option>
											<option>Yatim Piatu/Panti Asuhan/Panti Sosial</option>
											<option>Dampak Bencana Alam</option>
											<option>Pernah Drop Out</option>
											<option>Siswa Miskin/Rentan Miskin</option>
											<option>Daerah Konflik</option>
											<option>Keluarga Terpidana</option>
											<option>Kelainan Fisik</option>
										</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_bank">Nama Bank *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_bank" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Bank" value="<?php echo $baris['nm_bank'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="rek_bank">Nomor Rekening Bank *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" style="background: #EFFEF2" class="form-control" name="rek_bank" size="3" onKeyPress="return goodchars(event,'0123456789.',this)" placeholder="Nomor Rekening Bank pencairan dana KIP (Apabila sebelumnya telah menerima KIP)" value="<?php echo $baris['rek_bank'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_rek">Rekening Atas Nama *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_rek" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama tertera di buku tabungan bank pencairan dana KIP (Apabila sebelumnya telah menerima KIP)" value="<?php echo $baris['nm_rek'] ?>">
											</div>
										</td>
									</tr>
									
								</table>
							</div>
						</div>
						
						<div class="panel panel-info">
							<div class="panel-heading">
								=== Data Ayah ===
							</div>
							<div class="panel-body">
								<table width="100%">
									<tr>
										<th style="width: 250px;">
											<label for="nm_ayh">Nama Ayah *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_ayh" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Ayah" value="<?php echo $baris['nm_ayh'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="glr_ayh">Gelar Ayah *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="glr_ayh" oplaceholder="Gelar yang dimiliki ayah (Contoh : S.Pd" value="<?php echo $baris['glr_ayh'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nik_ayh">NIK Ayah *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" style="background: #EFFEF2" class="form-control" name="nik_ayh" onKeyPress="return goodchars(event,'0123456789.',this)" placeholder="Nomor Induk Kependudukan Ayah" value="<?php echo $baris['nik_ayh'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="lhr_ayh">Tahun Lahir Ayah *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="lhr_ayh" onKeyPress="return goodchars(event,'0123456789.',this)" placeholder="Tahun Kelahiran Ayah" value="<?php echo $baris['lhr_ayh'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="pnddk_ayh">Pendidikan Terakhir Ayah *</label>
										</th>
										<td>
										<div class="form-group">
											<select class="form-control" name="pnddk_ayh">
											<option><?php echo $baris['pnddk_ayh'] ?></option>
											<option>Tidak Sekolah</option>
											<option>Putus SD</option>
											<option>SD Sederajat</option>
											<option>SMP Sederajat</option>
											<option>SMA Sederajat</option>
											<option>D1</option>
											<option>D2</option>
											<option>D3</option>
											<option>D4/S1</option>
											<option>S2</option>
											<option>S3</option>
										</div>	
										</td>
															
									</tr>
									
									<tr>
										<th>
											<label for="pkrj_ayh">Pekerjaan Ayah *</label>
										</th>
										<td>
										<div class="form-group">
											<select class="form-control" name="pkrj_ayh">
											<option><?php echo $baris['pkrj_ayh'] ?></option>
											<option>Tidak Bekerja</option>
											<option>Nelayan</option>
											<option>Petani</option>
											<option>Peternak</option>
											<option>PNS/TNI/POLRI</option>
											<option>Karyawan Swasta</option>
											<option>Pedagang Kecil</option>
											<option>Pedagang Besar</option>
											<option>Wiraswasta</option>
											<option>Wirausaha</option>
											<option>Buruh</option>
											<option>Pensiunan</option>
											<option>Lain-lain</option>
										</div>	
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="spk_ayh">Spesifikasi Pekerjaan Ayah *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="spk_ayh" onkeyup="this.value = this.value.toUpperCase()" placeholder="Pekerjaan sesuai dengan keadaanya sekarang" value="<?php echo $baris['spk_ayh'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="pghsl_ayh">Penghasilan Ayah Perbulan *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="pghsl_ayh">
											<option><?php echo $baris['pghsl_ayh'] ?></option>
											<option>Kurang dari 500.000</option>
											<option>500.000 - 999.999</option>
											<option>1.000.000 - 1.999.9999</option>
											<option>2.000.000 - 4.999.9999</option>
											<option>5.000.000 - 20.000.000</option>
											<option>Lebih dari 20.000.000</option>
											</div>	
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="bk_ayh">Berkebutuhan Khusus *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="bk_ayh">
											<option><?php echo $baris['bk_ayh'] ?></option>
											<option>Tidak</option>
											<option>Netra (A)</option>
											<option>Rungu (B)</option>
											<option>Grahita Ringan (C)</option>
											<option>Grahita Sedang (C1)</option>
											<option>Daksa Ringan (D)</option>
											<option>Daksa Sedang (D1)</option>
											<option>Laras (E)</option>
											<option>Wicara (F)</option>
											<option>Tuna Ganda (G)</option>
											<option>Hiperaktif (H)</option>
											<option>Cerdas Istimewa (I)</option>
											<option>Bakat Istimewa (J)</option>
											<option>Kesulitan Belajar (K)</option>
											<option>Narkoba (N)</option>
											<option>Indigo (O)</option>
											<option>Dwon Sindrome (P)</option>
											<option>Autis (Q)</option>
											</div>	
										</td>
									</tr>
									
								</table>
							</div>
						</div>
						
						<div class="panel panel-info">
							<div class="panel-heading">
								=== Data Ibu ===
							</div>
							<div class="panel-body">
								<table width="100%">
									<tr>
										<th style="width: 250px;">
											<label for="nm_ibu">Nama Ibu *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_ibu" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Ibu" value="<?php echo $baris['nm_ibu'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nik_ibu">NIK Ibu*</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" style="background: #EFFEF2" class="form-control" name="nik_ibu" onKeyPress="return goodchars(event,'0123456789.',this)" placeholder="Nomor Kependudukan Ibu" value="<?php echo $baris['nik_ibu'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="lhr_ibu">Tahun Lahir Ibu *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="lhr_ibu" onKeyPress="return goodchars(event,'0123456789.',this)" placeholder="Tahun Kelahiran Ibu" value="<?php echo $baris['lhr_ibu'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="pnddk_ibu">Pendidikan Terakhir Ibu *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="pnddk_ibu" >
											<option><?php echo $baris['pnddk_ibu'] ?></option>
											<option>Tidak Sekolah</option>
											<option>Putus SD</option>
											<option>SD Sederajat</option>
											<option>SMP Sederajat</option>
											<option>SMA Sederajat</option>
											<option>D1</option>
											<option>D2</option>
											<option>D3</option>
											<option>D4/S1</option>
											<option>S2</option>
											<option>S3</option>
										</div>	
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="pkrj_ibu">Pekerjaan Ibu *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="pkrj_ibu">
											<option><?php echo $baris['pkrj_ibu'] ?></option>
											<option>Tidak Bekerja</option>
											<option>Nelayan</option>
											<option>Petani</option>
											<option>Peternak</option>
											<option>PNS/TNI/POLRI</option>
											<option>Karyawan Swasta</option>
											<option>Pedagang Kecil</option>
											<option>Pedagang Besar</option>
											<option>Wiraswasta</option>
											<option>Wirausaha</option>
											<option>Buruh</option>
											<option>Pensiunan</option>
											<option>Lain-lain</option>
										</div>	
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="spk_ibu">Spesifikasi Pekerjaan Ibu *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="spk_ibu" onkeyup="this.value = this.value.toUpperCase()" placeholder="Pekerjaan sesuai dengan keadaanya sekarang" value="<?php echo $baris['spk_ibu'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="pghsl_ibu">Penghasilan Ibu Perbulan *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="pghsl_ibu">
											<option><?php echo $baris['pghsl_ibu'] ?></option>
											<option>Kurang dari 500.000</option>
											<option>500.000 - 999.999</option>
											<option>1.000.000 - 1.999.9999</option>
											<option>2.000.000 - 4.999.9999</option>
											<option>5.000.000 - 20.000.000</option>
											<option>Lebih dari 20.000.000</option>
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="bk_ibu">Berkebutuhan Khusus *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="bk_ibu">
											<option><?php echo $baris['bk_ibu'] ?></option>
											<option>Tidak</option>
											<option>Netra (A)</option>
											<option>Rungu (B)</option>
											<option>Grahita Ringan (C)</option>
											<option>Grahita Sedang (C1)</option>
											<option>Daksa Ringan (D)</option>
											<option>Daksa Sedang (D1)</option>
											<option>Laras (E)</option>
											<option>Wicara (F)</option>
											<option>Tuna Ganda (G)</option>
											<option>Hiperaktif (H)</option>
											<option>Cerdas Istimewa (I)</option>
											<option>Bakat Istimewa (J)</option>
											<option>Kesulitan Belajar (K)</option>
											<option>Narkoba (N)</option>
											<option>Indigo (O)</option>
											<option>Dwon Sindrome (P)</option>
											<option>Autis (Q)</option>
											</div>
										</td>
									</tr>
									
								</table>
							</div>
						</div>
						
						<div class="panel panel-info">
							<div class="panel-heading">
								=== Data Wali ===
							</div>
							<div class="panel-body">
								<table width="100%">
									<tr>
										<th style="width: 250px;">
											<label for="nm_wali">Nama Wali *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Wali" value="<?php echo $baris['nm_wali'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th style="width: 250px;">
											<label for="stts_wali">Status Hubungan *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="stts_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="Kakek/Nenek/Kakak/Paman/Bibi" value="<?php echo $baris['stts_wali'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nik_wali">NIK Wali *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" style="background: #EFFEF2" class="form-control" name="nik_wali" onKeyPress="return goodchars(event,'0123456789.',this)" placeholder="Nomor Induk Kependudukan Wali" value="<?php echo $baris['nik_wali'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="lhr_wali">Tahun Lahir Wali *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="lhr_wali" onKeyPress="return goodchars(event,'0123456789.',this)" placeholder="Tahun Kelahiran Wali" value="<?php echo $baris['lhr_wali'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="pnddk_wali">Pendidikan *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="pnddk_wali">
											<option><?php echo $baris['pnddk_wali'] ?></option>
											<option>Tidak Sekolah</option>
											<option>Putus SD</option>
											<option>SD Sederajat</option>
											<option>SMP Sederajat</option>
											<option>SMA Sederajat</option>
											<option>D1</option>
											<option>D2</option>
											<option>D3</option>
											<option>D4/S1</option>
											<option>S2</option>
											<option>S3</option>
										</div>	
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="spk_wali">Spesifikasi Pekerjaan Wali *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="spk_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="Pekerjaan sesuai dengan keadaan sekarang" value="<?php echo $baris['spk_wali'] ?>">
											</div>
										</td>
									</tr>								
									
									<tr>
										<th>
											<label for="pghsl_wali">Penghasilan Wali Perbulan *</label>
										</th>
										<td>
											<div class="form-group">
											<select class="form-control" name="pghsl_wali">
											<option><?php echo $baris['pghsl_wali'] ?></option>
											<option>Kurang dari 500.000</option>
											<option>500.000 - 999.999</option>
											<option>1.000.000 - 1.999.9999</option>
											<option>2.000.000 - 4.999.9999</option>
											<option>5.000.000 - 20.000.000</option>
											<option>Lebih dari 20.000.000</option>
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="alt_wali">Alamat Jalan Wali *</label>
										</th>
										<td>
											<div class="form-group">
											<input type="text" class="form-control" name="alt_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Jalan Tempat Tinggal/Rumah" value="<?php echo $baris['alt_wali'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="rt_wali">RT/RW Wali *</label>
										</th>
										<td>
											<div class="form-group">
											<input type="text" class="form-control" name="rt_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="RT/RW Rumah dengan angka romawi (Contoh : I/IV)" value="<?php echo $baris['rt_wali'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_dsn_wali">Nama Dusun Wali *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_dsn_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Dusun Tempat Tinggal" value="<?php echo $baris['nm_dsn_wali'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_ds_wali">Nama Desa/Kelurahan Wali *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_ds_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Desa/Kelurahan" value="<?php echo $baris['nm_ds_wali'] ?>">
											</div>											
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_kec_wali">Nama Kecamatan Wali *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_kec_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Kecamatan" value="<?php echo $baris['nm_kec_wali'] ?>">
											</div>											
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_kt_wali">Nama Kota/Kabupaten Wali *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_kt_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Kecamatan" value="<?php echo $baris['nm_kt_wali'] ?>">
											</div>											
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="nm_prov_wali">Nama Provinsi Wali *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="nm_prov_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Provinsi" value="<?php echo $baris['nm_prov_wali'] ?>">
											</div>											
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="kode_pos_wali">Kode Pos Wali *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="kode_pos_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="Kode Pos" value="<?php echo $baris['kode_pos_wali'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="tlp_wali">No Telp Wali *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="tlp_wali" onkeyup="this.value = this.value.toUpperCase()" placeholder="No Telp yang aktif" value="<?php echo $baris['tlp_wali'] ?>">
											</div>
										</td>
									</tr>
									
								</table>
							</div>
						</div>
						
						<div class="panel panel-info">
							<div class="panel-heading">
								=== Kontak ===
							</div>
							<div class="panel-body">
								<table width="100%">
									<tr>
								<th style="width: 250px;">
									<label for="no_rumah">Nomor Telepon Rumah *</label>
								</th>
								<td>
									<div class="form-group">
										<input type="text" class="form-control" name="no_rumah" placeholder="Nomor Telepon Rumah (jika ada)" value="<?php echo $baris['no_rumah'] ?>">
									</div>
								</td>
							</tr>
							
							<tr>
								<th>
									<label for="no_hp">Nomor HP *</label>
								</th>
								<td>
									<div class="form-group">
										<input type="text" class="form-control" name="no_hp" placeholder="Nomor HP yang bisa dihubungi" value="<?php echo $baris['no_hp'] ?>">
									</div>
								</td>
							</tr>
							
							<tr>
								<th>
									<label for="no_wa">Nomor WA Ortu *</label>
								</th>
								<td>
									<div class="form-group">
										<input type="text" class="form-control" style="background: #E6E6FA" name="no_wa" placeholder="Nomor HP yang bisa di Whatsapp" value="<?php echo $baris['no_wa'] ?>">
									</div>
								</td>
							</tr>
							
							<tr>
								<th>
									<label for="email">Email *</label>
								</th>
								<td>
									<div class="form-group">
										<input type="text" class="form-control" name="email" placeholder="Alamat Email Pendaftar" value="<?php echo $baris['email'] ?>">
									</div>
								</td>
							</tr>								
									
								</table>
							</div>
						</div>
						
						<div class="panel panel-info">
							<div class="panel-heading">
								=== Data Periodik ===
							</div>
							<div class="panel-body">
								<table width="100%">
									<tr>
										<th style="width: 250px;">
											<label for="tggi_bdn">Tinggi Badan (cm) *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="tggi_bdn" onkeyup="this.value = this.value.toUpperCase()" placeholder="Tinggi Badan" value="<?php echo $baris['tggi_bdn'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="brt_bdn">Berat Badan (kg) *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="brt_bdn" onkeyup="this.value = this.value.toUpperCase()" placeholder="Berat Badan" value="<?php echo $baris['brt_bdn'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="brt_bdn">Hobby *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="hobi" onkeyup="this.value = this.value.toUpperCase()" placeholder="Hobby Pendaftar" value="<?php echo $baris['hobi'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="jarak_sekolahan">Jarak Tempat Tinggal Ke Sekolah</label>
										</th>
										<td>
										<div class="form-group">
											<select class="form-control" name="jarak_sekolahan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											<option><?php echo $baris['jarak_sekolahan'] ?></option>
											<option>Kurang dari 1 Kilometer</option>
											<option>Lebih dari 1 Kilometer</option>
										</div>
										</td>
									</tr>								
									
									<tr>
										<th>
											<label for="tempuh_sekolahan">Waktu Tempuh ke Sekolah *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="tempuh_sekolahan" onkeyup="this.value = this.value.toUpperCase()" placeholder="Ditulis jam dan menitnya (contoh : 00.15)" value="<?php echo $baris['tempuh_sekolahan'] ?>">
											</div>
										</td>
									</tr>
									
									<tr>
										<th>
											<label for="jml_sdr">Jumlah Saudara Kandung *</label>
										</th>
										<td>
											<div class="form-group">
												<input type="text" class="form-control" name="jml_sdr" onKeyPress="return goodchars(event,'0123456789.',this)" placeholder="Jumlah saudara kandung yang dimiliki" value="<?php echo $baris['jml_sdr'] ?>">
											</div>
										</td>
									</tr>						
																		
								</table>
							</div>
						</div>
						
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h4>=== Data Prestasi ===</h4>
							</div>
							<div class="panel-body">
								<table width="100%">
									<tr>
										<th style="width: 250px;">
											<label class="" for="jenis_prestasi">Jenis Prestasi</label>
										</th>
										<td>
											<div class="form-group">
												<select class="form-control" name="jenis_prestasi" style="background: #EFFEF2">
													<option><?php echo $baris['jenis_prestasi'] ?></option>
													<option>Sains</option>
													<option>Seni</option>
													<option>Olahraga</option>
													<option>lainnya</option>
												</div>
											</td>
										</tr>
										<tr>
											<th>
												<label for="tingkat_prestasi">Tingkat</label>
											</th>
											<td>
												<div class="form-group">
													<select class="form-control" name="tingkat_prestasi" style="background: #EFFEF2">
														<option><?php echo $baris['tingkat_prestasi'] ?></option>
														<option>Kabupaten/Kota</option>
														<option>Provinsi</option>
														<option>Nasional</option>
														<option>Internasional</option>
													</div>
												</td>
											</tr>
											
											<tr>
													<th>
														<label for="nama_prestasi">Nama Prestasi</label>
													</th>
													<td>
														<div class="form-group">
															<input type="text" class="form-control" style="background: #EFFEF2" name="nama_prestasi" onkeyup="this.value = this.value.toUpperCase()" placeholder="Nama Prestasi (Misalnya: Lomba debat bahasa inggris, OSN Tingkat SMP, dll" value="<?php echo $baris['nama_prestasi'] ?>">
														</div>
													</td>
												</tr>
												
											<tr>
													<th>
														<label for="tahun_prestasi">Tahun</label>
													</th>
													<td>
														<div class="form-group">
															<input type="text" class="form-control" style="background: #EFFEF2" name="tahun_prestasi" placeholder="Tahun Prestasi Diraih" value="<?php echo $baris['tahun_prestasi'] ?>">
														</div>
													</td>
												</tr>	
											
											<tr>
													<th>
														<label for="penyelenggara_prestasi">Penyelenggara</label>
													</th>
													<td>
														<div class="form-group">
															<input type="text" class="form-control" style="background: #EFFEF2" name="penyelenggara_prestasi"onkeyup="this.value = this.value.toUpperCase()" placeholder="Penyelenggara Kegiatan Lomba/Pertandingan" value="<?php echo $baris['penyelenggara_prestasi'] ?>">
														</div>
													</td>
												</tr>
												
											</table>
										</div>
									</div>
									
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h4>=== Data Beasiswa ===</h4>
							</div>
							<div class="panel-body">
								<table width="100%">
									<tr>
										<th style="width: 250px;">
											<label class="" for="jns_beasiswa">Jenis Beasiswa</label>
										</th>
										<td>
											<div class="form-group">
												<select class="form-control" name="jns_beasiswa" style="background: #EFFEF2">
													<option><?php echo $baris['jns_beasiswa'] ?></option>
													<option>Anak/Siswa Berprestasi</option>
													<option>Anak/Siswa Miskin</option>
													<option>Pendidikan</option>
													<option>Unggulan</option>
													<option>lainnya</option>
												</div>
											</td>
										</tr>
										<tr>
											<th>
												<label for="ket_beasiswa">Keterangan</label>
											</th>
											<td>
														<div class="form-group">
															<input type="text" class="form-control" style="background: #EFFEF2" name="ket_beasiswa" onKeyPress="this.value = this.value.toUpperCase()" placeholder="Nama Beasiswa (Contoh: Beasiswa murid berprestasi)" value="<?php echo $baris['ket_beasiswa'] ?>">
														</div>
													</td>
											</tr>
											
											<tr>
													<th>
														<label for="awl_beasiswa">Diterima Mulai Tahun</label>
													</th>
													<td>
														<div class="form-group">
															<input type="text" class="form-control" style="background: #EFFEF2" name="awl_beasiswa" placeholder="Tahun Awal Menerima Beasiswa" value="<?php echo $baris['awl_beasiswa'] ?>">
														</div>
													</td>
												</tr>
												
											<tr>
													<th>
														<label for="akhr_beasiswa">Diterima Sampai Tahun</label>
													</th>
													<td>
														<div class="form-group">
															<input type="text" class="form-control" style="background: #EFFEF2" name="akhr_beasiswa" placeholder="Tahun Terakhir Menerima Beasiswa" value="<?php echo $baris['akhr_beasiswa'] ?>">
														</div>
													</td>
												</tr>																
												</table>
										</div>
									</div>

									<div class="panel panel-warning">
										<div class="panel-heading">
											=== Registrasi Peserta Dididk ===
										</div>
										<div class="panel-body">
											<table width="100%">
												<tr>
													<th style="width: 250px;">
														<label for="jrsn_smk">Kompetensi Keahlian / Jurusan *</label>
													</th>
												<td>
												<div class="form-group">
												<select class="form-control" name="jrsn_smk" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $baris['jrsn_smk'] ?>">
												<option><?php echo $baris['jrsn_smk'] ?></option>
												<option>Teknik Komputer dan jaringan</option>
												<option>Multimedia</option>
												</div>											
												</td>
												</tr>
												
												<tr>
													<th>
														<label for="jns_pendaftaran">Jenis Pendaftaran *</label>
													</th>
												<td>
												<div class="form-group">
												<select class="form-control" name="jns_pendaftaran" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
												<option><?php echo $baris['jns_pendaftaran'] ?></option>
												<option>Siswa Baru</option>
												<option>Pindahan</option>
												<option>Kembali Bersekolah</option>
												</div>											
												</td>
												</tr>
												
												<tr>
													<th>
														<label for="nis">Nomor Induk Siswa *</label>
													</th>
													<td>
														<div class="form-group">
														<input type="text" class="form-control" name="nis" onKeyPress="this.value = this.value.toUpperCase()" placeholder="Di isi oleh petugas administrasi sekolah" value="<?php echo $baris['nis'] ?>">
														</div>
													</td>
												</tr>
												
												<tr>
													<th>
														<label for="msk_skl">Tanggal Masuk Sekolah Siswa </label>
													</th>
													<td>
														<div class="form-group">
														<input type="text" class="form-control" name="msk_skl" onKeyPress="this.value = this.value.toUpperCase()" placeholder="Di isi tgl aktif masuk (contoh : 09/07/2018)" value="<?php echo $baris['msk_skl'] ?>">
														</div>
													</td>
												</tr>
												
												<tr>
													<th>
														<label for="tgl_lulus">Tanggal Lulus SMP/MTS *</label>
													</th>
														<td>
															<div class="form-group">
															<input type="text" class="form-control" name="tgl_lulus" onkeyup="this.value = this.value.toUpperCase()" placeholder="Tanggal Kelulusan SMP/MTS" value="<?php echo $baris['tgl_lulus'] ?>">
															</div>
														</td>
												</tr>
												
												<tr>
													<th>
														<label for="d_kelas">Diterima Di Kelas *</label>
													</th>
														<td>
															<div class="form-group">
															<select class="form-control" name="d_kelas">
															<option><?php echo $baris['d_kelas'] ?></option>
															<option>10</option>
															<option>11</option>
															<option>12</option>
															</div>
														</td>
												</tr>
												
												<tr>
								<th > <label for="nama_smp">Asal Sekolah *</label></th>
								<td>
									<?php
// buat koneksi dengan MySQL, gunakan database: universitas
									include "../../../config/koneksi.php";
									$no=1;
// jalankan query
									$result = mysqli_query($konek, "SELECT * FROM tb_smp");
									?>
									<div class="form-group">
										<select class="form-control" name="nama_smp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											<option disabled>Pilih salah satu. Jika nama sekolah tidak ada dalam pilihan, klik Sekolah Lain.</option>
											<?php 
// tampilkan query
											while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
												{?><option><?php echo $baris['nama_smp'] ?></option>
											<option><?php echo $row['nama_smp']." ";?></option>
										<?php }
										?>
									</select></div>
								</td>
							</tr>
							<tr>
								<th></th>
								<td>
									<div class="form-group">
										<input type="text" class="form-control" style="background: #FDD7D7" name="nama_smp2" onkeyup="this.value = this.value.toUpperCase()" placeholder="Hanya diisi jika nama SMP/MTS tidak ada dalam daftar di atas" value="<?php echo $baris['nama_smp2'] ?>">
									</div>
								</td>
							</tr>
													<tr>
														<th>
														<label for="no_un">Nomor Ujian Nasional SMP&nbsp;*</label>
														</th>
														<td>
															<div class="form-group">
																<input type="text" class="form-control" style="background: #EFFEF2" name="no_un" onkeyup="this.value = this.value.toUpperCase()" placeholder="Contoh Penulisan 2-15-15-11-028-037-4" value="<?php echo $baris['no_un'] ?>">
															</div>
														</td>
													</tr>														
													
													<tr>
													<th>
														<label for="no_ijazah">Nomor Seri Ijazah *</label>
													</th>
													<td>
														<div class="form-group">
														<input type="text" class="form-control" name="no_ijazah" onKeyPress="this.value = this.value.toUpperCase()" placeholder="Di isi oleh petugas administrasi sekolah" value="<?php echo $baris['no_ijazah'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
													<th>
														<label for="no_skhun">Nomor Seri SKHUN *</label>
													</th>
													<td>
														<div class="form-group">
														<input type="text" class="form-control" name="no_skhun" onKeyPress="this.value = this.value.toUpperCase()" placeholder="Di isi oleh petugas administrasi sekolah" value="<?php echo $baris['no_skhun'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="almt_smp">Alamat Sekolah Asal</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" style="background: #EFFEF2" name="almt_smp" onkeyup="this.value = this.value.toUpperCase()" placeholder="Alamat SMP/MTS" value="<?php echo $baris['almt_smp'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="kota_smp">Kota/Kabupaten SMP/MTS</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" style="background: #EFFEF2" name="kota_smp" onkeyup="this.value = this.value.toUpperCase()" placeholder="Kota/Kabupaten SMP/MTS Berada" value="<?php echo $baris['kota_smp'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="prov_smp">Provinsi SMP/MTS *</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" style="background: #EFFEF2" name="prov_smp" onkeyup="this.value = this.value.toUpperCase()" placeholder="Provinsi SMP/MTS Berada" value="<?php echo $baris['prov_smp'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="v_smp">No UNAS/NISN SMP</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" name="v_smp" onkeyup="this.value = this.value.toUpperCase()" placeholder="" value="<?php echo $baris['v_smp'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="valid">FC Ijazah Legalisir</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" name="valid" onkeyup="this.value = this.value.toUpperCase()" placeholder="" value="<?php echo $baris['valid'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="v_skhun">FC SKHUN Legalisir</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" name="v_skhun" onkeyup="this.value = this.value.toUpperCase()" placeholder="" value="<?php echo $baris['v_skhun'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="v_raport">FC KTP Ortu</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" name="v_raport" onkeyup="this.value = this.value.toUpperCase()" placeholder="" value="<?php echo $baris['v_raport'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="v_kk">FC KK</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" name="v_kk" onkeyup="this.value = this.value.toUpperCase()" placeholder="" value="<?php echo $baris['v_kk'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="v_akta">FC Akta</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" name="v_akta" onkeyup="this.value = this.value.toUpperCase()" placeholder="" value="<?php echo $baris['v_akta'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="v_foto">Foto</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" name="v_foto" onkeyup="this.value = this.value.toUpperCase()" placeholder="" value="<?php echo $baris['v_foto'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="v_regis">Registasi</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" name="v_regis" onkeyup="this.value = this.value.toUpperCase()" placeholder="" value="<?php echo $baris['v_regis'] ?>">
														</div>
													</td>
													</tr>
													
													<tr>
														<th>
															<label for="v_semua">Validasi Semua</label>
														</th>
														<td>
														<div class="form-group">
															<input type="text" class="form-control" name="v_semua" onkeyup="this.value = this.value.toUpperCase()" placeholder="" value="<?php echo $baris['v_semua'] ?>">
														</div>
													</td>
													</tr>

												</table>
											</div>
										</div>		

									<br>
									<button class="btn btn-danger btn-lg" type="submit" value="daftar">Ubah Data</button>
								</form>

							</div><!-- /.container -->
