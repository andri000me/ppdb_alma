<?php
include '../../config/koneksi.php';
include '../../include/helper.php';
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PPDB</title>
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../../dist/css/starter-template.css" rel="stylesheet">
	<!-- data tables -->
	<script src="../../assets/DataTables/jquery-3.1.0.js"></script>

	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

	<script>
		window.onload = function () {

			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title: {
		text: ""
	},
	axisY: {
		title: "Jumlah Pendaftar",
		suffix: " Orang",
		includeZero: false
	},
	axisX: {
		title: "Jenjang Pendidikan"
	},
	data: [{
			type: "column",
			yValueFormatString: "#,###\" Orang\"",
			dataPoints: [
			<?php 
			$query = mysqli_query($konek, "SELECT * FROM user where level = 'ppdb'");
			while ($jenjang_pendidikan = mysqli_fetch_array($query, MYSQLI_ASSOC)) {

					$exp_jenjang = explode('_', $jenjang_pendidikan['username']);

					if(!empty($exp_jenjang[1])){

						$jenjang = strtoupper($exp_jenjang[1]);

						?>

						{ label: "<?php echo $jenjang ?>"
								, y:
							<?php 
				

							if(in_array($jenjang, dua_huruf())){

								$data = mysqli_query($konek, "SELECT * FROM tb_registrasi as r WHERE substr(r.register_nomor_pendaftaran,1,2)  ='$jenjang'");

							}elseif(in_array($jenjang, tiga_huruf())){

								$data = mysqli_query($konek, "SELECT * FROM tb_registrasi as r WHERE substr(r.register_nomor_pendaftaran,1,3)  ='$jenjang'");

							}

							
							echo mysqli_num_rows($data); ?>
						},

						<?php
					}

				?>
				
		<?php } ?>
		]
		}]
});
			chart.render();

		}
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.wadah {
		margin: 20px 20px 20px 205px;
		position: relative;
	}
	#mySidenav a {
		position: fixed;
		left: -150px;
		transition: 0.3s;
		padding: 15px;
		width: 200px;
		text-decoration: none;
		font-size: 20px;
		color: white;
		border-radius: 0 5px 5px 0;
		margin-top: 50px;
	}

	#mySidenav a:hover {
		left: 0;
	}

	#dasboard {
		top: 20px;
		background-color: #4CAF50;
		text-align: right;
	}

	#data-sekolah {
		top: 80px;
		background-color: #2196F3;
		text-align: right;
	}

	#validasi {
		top: 140px;
		background-color: #f44336;
		text-align: right;
	}

	#pendaftar {
		top: 200px;
		background-color: #555;
		text-align: right;
	}
	#ubah {
		top: 260px;
		background-color: #60F595;
		text-align: right;
	}
	#data-dapodik {
		top: 320px;
		background-color: #FFD700;
		text-align: right;
	}
	#user-ppdb {
		top: 380px;
		background-color: #366262;
		text-align: right;
	}
	#logout{
		top: 440px;
		background-color: #AD6AF2;
		text-align: right;
	}
	.col{
		width: 100%;
	}
	@media only screen and (max-width: 800px) {
		[class*="col-"] {
			width: 100%;
		}
		[class*="navbar"]{
			opacity: 0.9;
		}
		[class*="wadah"]{
			margin-left: 40px;
		}
		[id*="dasboard"]{
			z-index: 1;
		}
		[id*="data-sekolah"]{
			z-index: 1;
		}
		[id*="validasi"]{
			z-index: 1;
		}
		[id*="pendaftar"]{
			z-index: 1;
		}
		[id*="ubah"]{
			z-index: 1;
		}
		[id*="data-dapodik"]{
			z-index: 1;
		}
		[id*="user-ppdb"]{
			z-index: 1;
		}
		[id*="logout"]{
			z-index: 1;
		}
	}
</style>
</head>
<body>
	<?php include '../../include/nav3.php'; ?>
	<div id="mySidenav" class="sidenav">
		<a href="?page=dasboard" id="dasboard">Dasboard &nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-home"></span></a>
		<a href="?page=data-sekolah" id="data-sekolah">Data Sekolah &nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-cog"></span></a>
		<a href="?page=validasi" id="validasi">Validasi Data &nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-tasks"></span></a>
		<a href="?page=pendaftar" id="pendaftar">Data KPA &nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-user"></span></a>
		<a href="?page=ubah-data-pendaftar" id="ubah">Ubah Data &nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-pencil"></span></a>
		<a href="?page=data-dapodik" id="data-dapodik">Dapodik/EMIS&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-download"></span></a>
		<a href="?page=user_ppdb" id="user-ppdb">User PPDB &nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-user"></span></a>
		<a href="../../process/logout.php" id="logout">Log Out &nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-log-out"></span></a>
	</div>


	<div class="wadah">
		<?php
		if(isset($_REQUEST['page'])==""){
			include "pages/dasboard.php";
		}
		elseif($_REQUEST['page']=="dasboard"){
			include "pages/dasboard.php";
		}	
		elseif($_REQUEST['page']=="data-sekolah"){
			include "pages/data-sekolah.php";
		}
		elseif($_REQUEST['page']=="validasi"){
			include "pages/validasi-data.php";
		}
		elseif($_REQUEST['page']=="pendaftar"){
			include "pages/pendaftar.php";
		}
		elseif($_REQUEST['page']=="ubah-data-pendaftar"){
			include "pages/ubah_data_pendaftar.php";
		}
		elseif($_REQUEST['page']=="data-dapodik"){
			include "pages/data-dapodik.php";
		}
		elseif($_REQUEST['page']=="input_smp"){
			include "input-smp.php";
		}
		elseif($_REQUEST['page']=="import"){
			include "import/index.php";
		}elseif($_REQUEST['page']=="user_ppdb"){
		   include "pages/user_ppdb.php";
		}elseif($_REQUEST['page']=="backup"){
			include "backup-database.php";
		}elseif($_REQUEST['page']=='Pendaftaran_siswa'){

			include "pages/pendaftaran_siswa.php";

		}
		?>
	</div>


		<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
			<script src="../../dist/js/bootstrap.min.js"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
			<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
			
		</body>
		</html>