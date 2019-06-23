<?php include '../config/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../dist/css/starter-template.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<?php include '../include/nav2.php' ?><br><br><br>
	<div class="container">
		<div class="panel panel-success">
			<div class="panel-heading">Jadwal PPDB <?php echo $inf['nama_sekolah']; ?></div>
			<div class="panel-body" align="left">
				<table class="table table-responsive table-bordered">
					<thead>
						<tr>
							<th width="10px">
								No
							</th>
							<th>
								Hari
							</th>
							<th>
								Tanggal
							</th>
							<th>
								Kegiatan
							</th>
							<th>
								Tempat
							</th>							
						</tr>
					</thead>
					<?php 
					$noj = 1;
					while ($jad = mysqli_fetch_array($jadwal, MYSQLI_ASSOC)) {
						?>

						<tbody>
							<tr>
								<td>
									<?php echo $noj++; ?>
								</td>
								<td>
									<?php echo $jad ['hari']; ?>
								</td>
								<td>
									<?php echo $jad ['tanggal']; ?>
								</td>
								<td>
									<?php echo $jad ['kegiatan']; ?>
								</td>
								<td>
									<?php echo $jad ['tempat']; ?>
								</td>								
							</tr>
							</tbody><?php 	} ?>
						</table>

					</div>
				</div>

			</div><br><hr>
			<?php include '../include/footer.php' ;?> <br>
 <!-- Bootstrap core JavaScript
 	================================================== -->
 	<!-- Placed at the end of the document so the pages load faster -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>
 	<script src="../dist/js/bootstrap.min.js"></script>
 	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 	<script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
 </body>
 </html>



