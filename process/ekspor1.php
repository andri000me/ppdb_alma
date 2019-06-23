

<?php
include '../config/koneksi.php';
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
$date = date('Y-m-d');
header("Content-Disposition: attachment; filename=PPDB-$date.xls");

?>
<h2>Data KPA Siswa-Siswi<br><?php echo $inf['nama_sekolah']; ?><br>Tahun 2018/2019</h2>

<table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Kode Pendataan</th>
      <th width="200px">Nama Lengkap</th>
	  <th>Jenis Kelamin</th>
	  <th>Tempat Lahir</th>
      <th>Tanggal lahir</th>
	  <th>Kode Domisili</th>
	  <th>Kode Lembaga</th>
	  <th>Kode Kelas Pertama Kali</th>
	  <th> </th>
	  <th>Jumlah Saudara Kandung</th>
	  <th>ID Saudara</th>
	  <th>Yg Membiayai Sekolah</th>
	  <th>Penghasilan Orang Tua/Wali</th>
	  <th>Jarak Rumah Ke Sekolah</th>
	  <th>Transportasi Ke Sekolah</th>
	  <th>Penyakit Yg Pernah Diderita</th>	  
	  <th>No. KK</th>	    
	  <th>NIK Siswa</th>

	  <!-- ubah total -->

	  <th>RT / RW</th>
	  <th>Alamat Jalan</th>
	  <th>Nama Dusun</th>
	  <th>Desa</th>
	  <th>Kecamatan</th>
	  <th>Kota/Kabupaten</th>
	  <th>Provinsi</th>
	  <th>Kode Pos</th>
	  <th>No HP / WA Ayah</th>
	  <th>No Hp / WA Ibu</th>
	  <th></th>

	  <th>Nama Ayah</th>
	  <th>Gelar Ayah</th>
	  <th>NIK Ayah</th>
	  <th>Pendidikan Ayah</th>
	  <th>Pekerjaan Ayah</th>
	  <th>Spesifikasi Ayah</th>
	  <th></th>

	  <th>Nama Ibu</th>
	  <th>NIK Ibu</th>
	  <th>Pendidikan Ibu</th>
	  <th>Pekerjaan Ibu</th>
	  <th>Spesifikasi Ibu</th>
	  <th>

	  <th>Nama Wali</th>
	  <th>Spesifikasi Wali</th>
	  <th>Status Wali</th>
	  <th>RT / RW Wali</th>
	  <th>Alternatif Wali</th>
	  <th>Dusun Wali</th>
	  <th>Desa Wali</th>
	  <th>Kecamatan Wali</th>
	  <th>Kota Wali</th>
	  <th>Provinsi Wali</th>
	  <th>Kode Pos Wali</th>
	  <th>No HP Wali</th>
	  <th>No WA Wali</th>
	  <th></th>
	  <th>NISN</th>

      
</tr>
</thead>

<tbody>
      <?php
// buat koneksi dengan MySQL, gunakan database: universitas
      include "../config/koneksi.php";
      $no=1;
// jalankan query
      $result = mysqli_query($konek, "SELECT * FROM tb_registrasi");
// tampilkan query
      while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
          {?>
               <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $row['nama'];?></td>
				  <td>
					  <?php
							if($row['jenis_kelamin'] == 'PEREMPUAN'){
								echo "P";
							}else{
								echo "L";
							}
					   ?>
				</td>
                  <td><?php echo $row['tempat_lahir'];?></td>
                  <td><?php echo $row['tanggal_lahir'];?></td>
				  <td><?php echo $row['domis'];?></td>
				  <td></td>		
				  <td><?php echo $row['d_kelas'];?></td>
				  <td></td>	  
				  <td><?php echo $row['jml_sdr'];?></td>
				  <td></td>	
				  <td></td>	
				  <td><?php echo $row['pghsl_ayh'];?></td>
				  <td><?php echo $row['jarak_sekolahan'];?></td>	
				  <td><?php echo $row['moda_transport'];?></td>
				  <td><?php echo $row['kbk'];?></td>				  
				  <td><?php echo $row['nkk'];?></td>
				  <td><?php echo $row['nik'];?></td>

				  <td><?php echo $row['rt'];?></td>	
				  <td><?php echo $row['almt_jl'];?></td>
				  <td><?php echo $row['nm_dsn'];?></td>
				  <td><?php echo $row['nm_ds'];?></td>				  
				  <td><?php echo $row['nm_kec'];?></td>
				  <td><?php echo $row['nm_kt'];?></td>
				  <td><?php echo $row['nm_prov'];?></td>
				  <td><?php echo $row['kode_pos'];?></td>
				  <td><?php echo $row['no_hpwa_ayah'];?></td>
				  <td><?php echo $row['no_hpwa_ibu'];?></td>
				  <td></td>	
				  <td><?php echo $row['nm_ayh'];?></td>
				  <td><?php echo $row['glr_ayh'];?></td>
				  <td><?php echo $row['nik_ayh'];?></td>
				  <td><?php echo $row['pnddk_ayh'];?></td>
				  <td><?php echo $row['pkrj_ayh'];?></td>
				  <td><?php echo $row['spk_ayh'];?></td>
				  <td></td>	
				  <td><?php echo $row['nm_ibu'];?></td>
				  <td><?php echo $row['nik_ibu'];?></td>
				  <td><?php echo $row['pnddk_ibu'];?></td>
				  <td><?php echo $row['pkrj_ibu'];?></td>
				  <td><?php echo $row['spk_ibu'];?></td>
				  <td></td>	
				  <td><?php echo $row['nm_wali'];?></td>
				  <td><?php echo $row['spk_wali'];?></td>
				  <td><?php echo $row['stts_wali'];?></td>
				  <td><?php echo $row['rt_wali'];?></td>
				  <td><?php echo $row['alt_wali'];?></td>
				  <td><?php echo $row['nm_dsn_wali'];?></td>
				  <td><?php echo $row['nm_ds_wali'];?></td>
				  <td><?php echo $row['nm_kec_wali'];?></td>
				  <td><?php echo $row['nm_kt_wali'];?></td>
				  <td><?php echo $row['nm_prov_wali'];?></td>
				  <td><?php echo $row['kode_pos_wali'];?></td>
				  <td><?php echo $row['tlp_wali'];?></td>
				  <td><?php echo $row['tlp_wali'];?></td>
				  <td></td>	
				  <td><?php echo $row['nisn'];?></td>                   
      </tr>
<?php }
?>
</tbody>
</table>
