
<?php 
include '../../../config/koneksi.php';
$datas = mysqli_query($konek, "SELECT * FROM tb_sekolah");
if(!$datas){
	die('SQL Error:' . mysqli_error($konek));
}
$rows = mysqli_fetch_array($datas);?>
<?php
include '../../../config/koneksi.php';
$no_un = $_GET['no_un'];
$data = mysqli_query($konek, "SELECT * FROM tb_registrasi WHERE no_un='$no_un' ");
if(!$data){
	die('SQL Error:' . mysqli_error($konek));
}
$row = mysqli_fetch_array($data);?>

<!DOCTYPE html>
<html>
<head>
	<title>PPDB SMK AL-MAHRUSIYAH LIRBOYO KEDIRI</title>
	<link rel="icon" href="bootstrap/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../../dist/css/bootstrap.min.css">
</head>
<script type="text/javascript">
	/*--This JavaScript method for Print command--*/
	function PrintDoc() {
		var toPrint = document.getElementById('kartu');
		var popupWin = window.open('');
		popupWin.document.open();
		popupWin.document.write('<html><title>KARTU <?php echo $row ['nama'] ;?></title></head><body onload="window.print()">')
		popupWin.document.write(toPrint.outerHTML);
		popupWin.document.write('</html>');
		popupWin.document.close();
	}
</script>

<body><br><br>
	
	
	
	


	<div class="container" style="width:650px ; ">
		<a href="../index.php?page=ubah-data-pendaftar"><button class="btn btn-success"><span class="glyphicon glyphicon-home"></span> Halaman Admin</button></a>&nbsp;
		<button class="btn btn-success" onclick="PrintDoc()"><span class="glyphicon glyphicon-print"></span> Cetak Kartu</button>
		<br><br><br>
	</div>
</div>

<div class="container" style="width:650px ; border: 1px solid;" id="kartu">
	<div class="container" style="width:620px ; padding: 1px 15px 1px 15px; border-bottom: 1px solid; background: url(../../../images/background/3.jpg); ">
		<table style="height: 120px" id="kartu">
			<tr><th style="width: 80px" align="left"><img src="../../../images/logo/<?php echo $rows['logo_dinas'];?>" width="70px"></th>
				<th style="text-align: center; width: 450px">
					<h4>Bukti Pendaftaran</h4>
					<h4><?php echo $rows['nama_sekolah'];?></h4>
					<h5>Tahun Pelajaran 2018/2019</h5>
				</th>
				<th style="text-align: right; width: 80px"><img src="../../../images/logo/<?php echo $rows['logo_sekolah'];?>" width="70px"></th>
			</tr>
		</table>
	</div>
	<div class="container" id="kartu" style="width:610px;  padding: 15px 15px 15px 15px; background: url(../../../images/background/3.jpg);">
		<table>
			<tr align="left">
				<th width="150px" style="font-size: 10pt">No. Pendaftaran</th>
				<th style="font-size: 10pt">:</th>
				<th style="font-size: 10pt"> <?php echo $row['id']." ";  ?></th>
			</tr>
			<tr align="left">
				<th style="font-size: 10pt">Nama</th>
				<th style="font-size: 10pt">:</th>
				<th style="font-size: 10pt"> <?php echo $row['nama']." ";  ?></th>
			</tr>
			<tr align="left">
				<th style="font-size: 10pt">TTL</th>
				<th style="font-size: 10pt">:</th>
				<th style="font-size: 10pt"> <?php echo $row['tempat_lahir']." ";  ?>, <?php echo $row['tanggal_lahir']." ";  ?></th>
			</tr>
			<tr align="left">
				<th style="font-size: 10pt">Jenis Kelamin</th>
				<th style="font-size: 10pt">:</th>
				<th style="font-size: 10pt"> <?php echo $row['jenis_kelamin']." ";  ?></th>
			</tr>
			<tr align="left">
				<th style="font-size: 10pt">Alamat</th>
				<th style="font-size: 10pt">:</th>
				<th style="font-size: 10pt"> <?php echo $row['almt_jl']." ";  ?> </th>
			</tr>

			<tr align="left">
				<th style="font-size: 10pt">Sekolah Asal</th>
				<th style="font-size: 10pt">:</th>
				<th style="font-size: 10pt"> <?php 
				if ($row['nama_smp2']!=="") {
					echo $row['nama_smp2']." ";
				}else{
					echo $row['nama_smp']." ";
				}
				?></th>
			</tr>
			<tr align="left">
				<th style="font-size: 10pt">Nomor HP</th>
				<th style="font-size: 10pt">:</th>
				<th style="font-size: 10pt"> <?php echo $row['no_hp']." ";  ?></th>
			</tr>
			<tr align="left">
				<th style="font-size: 10pt">Kompetensi Keahlian</th>
				<th style="font-size: 10pt">:</th>
				<th style="font-size: 10pt"> <?php echo $row['jrsn_smk']." ";  ?></th>
			</tr>
		</table>

		<br>
		<p>Saya tunduk dan patuh terhadap segala ketentuan dan peraturan PPDB <?php echo $rows['nama_sekolah'];?></p>
		<table ><br>
			<tr>
				<th width="50px"></th>
				<th style="text-align: center">Mengetahui <br>Orang Tua/Wali</th>
				<th width="150px"></th>
				<th style="text-align: center">Tanda Tangan</th>
			</tr>
			<tr>
				<th width="50px"></th>
				<th style="text-align: center; padding-top: 50px">______________________</th>
				<th></th>
				<th style="text-align: center ; padding-top: 50px">( <?php echo $row['nama']." ";  ?>)</th>
			</tr>
		</table>
		<table ><br>
			<tr>
				<th width="190px"></th>
				<th style="text-align: center">Mengetahui <br>Panitia PPDB</th>
			</tr>
			<tr>
				<th width="190px"></th>
				<th style="text-align: center; padding-top: 50px">______________________</th>
			</tr>
		</table>
	</div>
	<div class="card-footer" style="width:620px ; padding: 1px 15px 1px 15px; border-top: 1px solid" align="left">
		<br>- Kartu ini sebagai bukti bahwa Anda merupakan calon peserta didik <?php echo $rows['nama_sekolah'];?>.
		<br>- Kartu ini harus dicetak dan diserahkan kepanitia ppdb <?php echo $rows['nama_sekolah'];?>.
		<br>- Jika mengalami kesulitan untuk mencetak silahkan hubungi panitia
		<br>- Kartu ini sebagai <span style="font-weight: bold;">tanda bukti bahwa telah melakukan tahap pendaftaran</span>

		<br><br>
	</div>


</div><br><br>

</div></body>

</div>
</body>
</html>