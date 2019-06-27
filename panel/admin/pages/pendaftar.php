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
	<div class="panel panel-primary">

		<div class="panel-heading">
			Pendaftar
			<?php
				$date = date('Y-m-d');
			?>
		</div>
		<div class="panel-body">
			<form action="javascript:void(0)" method="post" name="export_excel">
				<div class="control-group">
					<div class="controls" style="padding: 10px 5px 5px 10px">
					<div class="col-lg-2" title="Tanggal awal">
						<input type="date" class="form-control" id="awal" max="<?php echo $date;?>">
					</div>
					<div class="col-lg-2" title="Tanggal akhir">
						<input type="date" class="form-control" id="akhir" max="<?php echo $date;?>">
					</div>
					<div class="col-lg-2" title="tingkatan">
						<select class="form-control" id="tingkatan">
								<option>Semua</option>
							<?php
								foreach (tingkatan(0) as $key => $value) {
									echo "<option>$value</option>";
								}
							?>
						</select>
					</div>
					<button type="submit" id="export" name="export" class="btn btn-success" data-loading-text="Loading..."><span class="glyphicon glyphicon-download"></span> Download Data KPA</button>
						<!--<a href="index.php?page=Pendaftaran_siswa" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Daftar Baru</button></a>-->
					</div>
					<div class="controls" style="padding: 10px 5px 5px 10px">
						
					</div>
				</div><br>
			</form>
			<div id="data-tab"></div>
			</div>
		</div>
	</div>



	<script>
		$(document).ready(function(){
			$.ajax({
				type: "POST",
				url: "../../helper/admin_pendaftaran.php",
				data: {tingkatan : ''},
				success: function (data) {
					$("#data-tab").html(data);
				}
			});

			$("#tingkatan").click(function(){

				var tingkatan = $("#tingkatan").val();
				$.ajax({
				type: "POST",
				url: "../../helper/admin_pendaftaran.php",
				data: {tingkatan : tingkatan},
				success: function (data) {
					$("#data-tab").html(data);
				}
			});

			});

			$("#export").click(function (e) { 
				
				var awal = $("#awal").val();
				var akhir = $("#akhir").val();
				var tingkatan = $("#tingkatan").val();

				if(awal == ''){
					
					$("#awal").focus();
					
				}else if(akhir == ''){

					$("#akhir").focus();

				}else if(awal > akhir){

					alert('Tanggal awal harus lebih besar dari pada tanggal Akhir ');

				}else if(akhir >= awal || awal >= akhir){
					
					$.ajax({
						type: "GET",
						url: "../../process/ekspor1.php",
						data: {awal : awal, akhir : akhir, tingkatan : tingkatan},
						success: function (data) {
							console.log(data);
							window.location.href = '../../process/ekspor1.php?awal='+awal+'&akhir='+akhir+'&tingkatan='+tingkatan;

						}
					});
					
				}else{

					alert('Error');

				}

			});

		});
	</script>
