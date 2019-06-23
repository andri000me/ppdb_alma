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
	<div >
		
		<div class="panel-body">
			<form action="../../process/ekspor.php" method="post" name="export_excel">
				<div class="control-group">
					<div class="controls" style="padding: 10px 5px 5px 10px">
						<button type="submit" id="export" name="export" class="btn btn-success" data-loading-text="Loading..."><span class="glyphicon glyphicon-download"></span> Download Data Dapodik / EMIS</button>
					</div>
				</div><br>
			</form>
			<table id="tabel-data" class="table table-responsive table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Jenis Kelamin</th>
						<th>NISN</th>
						<th>NIK</th>
						<th>Tempat Lahir</th>
						<th>Tanggal lahir</th>
						<th>No Akta</th>
						<th>Agama</th>
						<th>Kewarganegaraan</th>
						<th>Berkebutuhan Khusus</th>
						<th>Alamat Jalan</th>
						<th>RT/RW</th>
						<th>Nama Dusun</th>
						<th>Nama Desa/Kelurahan</th>
						<th>Kecamatan</th>
						<th>Kode Pos</th>
						<th>Tempat Tinggal</th>
						<th>Moda Transportasi</th>
						<th>No KKS</th>
						<th>Anak Ke</th>
						<th>Penerima KPS/PKH</th>
						<th>No KPS/PKH</th>
						<th>Ususlan Layak PIP</th>
						<th>Penerima KIP</th>
						<th>No KIP</th>
						<th>Nama di KIP</th>
						<th>Terima Fisik KIP</th>
						<th>Alasan Layak PIP</th>
						<th>Bank</th>
						<th>No Rek Bank</th>
						<th>Rek Atas Nama</th>
						<th>Nama Ayah</th>
						<th>NIK Ayah</th>
						<th>Th Lahir Ayah</th>
						<th>Pendidikan Ayah</th>
						<th>Pekerjaan Ayah</th>
						<th>Penghasilan Ayah</th>
						<th>Berkebtuhan Khusus Ayah</th>
						<th>Nama Ibu</th>
						<th>NIK Ayah</th>
						<th>Th. Lahir Ibu</th>
						<th>Pendidikan Ibu</th>
						<th>Pekerjaan Ibu</th>
						<th>Penghasilan Ibu</th>
						<th>Berkebtuhan Khusus Ibu</th>
						<th>Nama Wali</th>
						<th>NIK Wali</th>
						<th>Th. Lahir Wali</th>
						<th>Pendidikan Wali</th>
						<th>Pekerjaan Wali</th>
						<th>Penghasilan Wali</th>
						<th>No Telp Rumah</th>
						<th>Nomor Hp</th>
						<th>Email</th>
						<th>Tinggi Badan (cm)</th>
						<th>Berat Badan (kg)</th>
						<th>Hobi</th>
						<th>Jarak Ke Sekolah</th>
						<th>Waktu Tempuh Ke Sekolah</th>
						<th>Jumlah Saudara Kandung</th>
						<th>Jenis Prestasi</th>
						<th>Tingkat Prestasi</th>
						<th>Nama Prestasi</th>
						<th>Tahun Prestasi</th>
						<th>Penyelenggara Prestasi</th>
						<th>Jenis Beasiswa</th>
						<th>Keterangan Beasiswa</th>
						<th>Mulai Th Beasiswa</th>
						<th>Sampai Th Beasiswa</th>
						<th>Kompetensi Keahlian</th>
						<th>Jenis Pendaftaran</th>
						<th>NIS</th>
						<th>Tgl Masuk Siswa</th>
						<th>Asal Sekolah</th>
						<th>No UN SMP/MTS</th>
						<th>No Seri Ijazah</th>
						<th>No Seri SKHUN</th>
						<th>Alamat Sekolah Asal</th>
						<th>Kota/Kabupaten SMP/MTS</th>
						<th>Provinsi SMP/MTS</th>
						<th>IJAZAH</th>
						<th>SKHUN</th>
						<th>KTP ORTU</th>
						<th>KK</th>
						<th>AKTA</th>
						<th>FOTO</th>
						
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
								<td><center><?php echo $no++;?></center></td>								
								<td><?php echo $row['nama'];?></td>	
								<td><?php echo $row['jenis_kelamin'];?></td>
								<td><?php echo $row['nisn'];?></td>	
								<td><?php echo $row['nik'];?></td>									
								<td><?php echo $row['tempat_lahir'];?></td>
								<td><?php echo $row['tanggal_lahir'];?></td>
								<td><?php echo $row['no_akta'];?></td>								
								<td><?php echo $row['agama'];?></td>
								<td><?php echo $row['kewarganegaraan'];?></td>
								<td><?php echo $row['kbk'];?></td>
								<td><?php echo $row['almt_jl'];?></td>
								<td><?php echo $row['rt'];?></td>
								<td><?php echo $row['nm_dsn'];?></td>
								<td><?php echo $row['nm_ds'];?></td>
								<td><?php echo $row['nm_kec'];?></td>
								<td><?php echo $row['kode_pos'];?></td>
								<td><?php echo $row['tmpt_tinggal'];?></td>
								<td><?php echo $row['moda_transport'];?></td>
								<td><?php echo $row['no_kks'];?></td>
								<td><?php echo $row['anak_ke'];?></td>
								<td><?php echo $row['penerima_kps'];?></td>
								<td><?php echo $row['no_kps'];?></td>
								<td><?php echo $row['lyk_pip'];?></td>
								<td><?php echo $row['penerima_kip'];?></td>
								<td><?php echo $row['no_kip'];?></td>
								<td><?php echo $row['nm_kip'];?></td>
								<td><?php echo $row['terima_kip'];?></td>
								<td><?php echo $row['alasan_pip'];?></td>
								<td><?php echo $row['nm_bank'];?></td>
								<td><?php echo $row['rek_bank'];?></td>
								<td><?php echo $row['nm_rek'];?></td>
								<td><?php echo $row['nm_ayh'];?></td>
								<td><?php echo $row['nik_ayh'];?></td>
								<td><?php echo $row['lhr_ayh'];?></td>
								<td><?php echo $row['pnddk_ayh'];?></td>
								<td><?php echo $row['pkrj_ayh'];?></td>
								<td><?php echo $row['pghsl_ayh'];?></td>
								<td><?php echo $row['bk_ayh'];?></td>
								<td><?php echo $row['nm_ibu'];?></td>
								<td><?php echo $row['nik_ibu'];?></td>
								<td><?php echo $row['lhr_ibu'];?></td>
								<td><?php echo $row['pnddk_ibu'];?></td>
								<td><?php echo $row['pkrj_ibu'];?></td>
								<td><?php echo $row['pghsl_ibu'];?></td>
								<td><?php echo $row['bk_ibu'];?></td>
								<td><?php echo $row['nm_wali'];?></td>
								<td><?php echo $row['nik_wali'];?></td>
								<td><?php echo $row['lhr_wali'];?></td>
								<td><?php echo $row['pnddk_wali'];?></td>
								<td><?php echo $row['spk_wali'];?></td>
								<td><?php echo $row['pghsl_wali'];?></td>
								<td><?php echo $row['no_rumah'];?></td>
								<td><?php echo $row['no_hp'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['tggi_bdn'];?></td>
								<td><?php echo $row['brt_bdn'];?></td>
								<td><?php echo $row['hobi'];?></td>
								<td><?php echo $row['jarak_sekolahan'];?></td>
								<td><?php echo $row['tempuh_sekolahan'];?></td>
								<td><?php echo $row['jml_sdr'];?></td>
								<td><?php echo $row['jenis_prestasi'];?></td>
								<td><?php echo $row['tingkat_prestasi'];?></td>
								<td><?php echo $row['nama_prestasi'];?></td>
								<td><?php echo $row['tahun_prestasi'];?></td>
								<td><?php echo $row['penyelenggara_prestasi'];?></td>
								<td><?php echo $row['jns_beasiswa'];?></td>
								<td><?php echo $row['ket_beasiswa'];?></td>
								<td><?php echo $row['awl_beasiswa'];?></td>
								<td><?php echo $row['akhr_beasiswa'];?></td>
								<td><?php echo $row['jrsn_smk'];?></td>
								<td><?php echo $row['jns_pendaftaran'];?></td>
								<td><?php echo $row['nis'];?></td>
								<td><?php echo $row['msk_skl'];?></td>
								<td>
									<?php 
										if ($row['nama_smp2']!=="") {
										echo $row['nama_smp2'];
										}else{
											echo $row['nama_smp'];
											}
										?>
									</td>
								<td><?php echo $row['no_un'];?></td>
								<td><?php echo $row['no_ijazah'];?></td>
								<td><?php echo $row['no_skhun'];?></td>
								<td><?php echo $row['almt_smp'];?></td>
								<td><?php echo $row['kota_smp'];?></td>
								<td><?php echo $row['prov_smp'];?></td>
								<td><?php echo $row['valid'];?></td>
								<td><?php echo $row['v_skhun'];?></td>
								<td><?php echo $row['v_raport'];?></td>
								<td><?php echo $row['v_kk'];?></td>
								<td><?php echo $row['v_akta'];?></td>
								<td><?php echo $row['v_foto'];?></td>
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
