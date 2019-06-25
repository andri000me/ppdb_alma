<?php 
include 'config/koneksi.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<meta name="description" content="">

	<meta name="author" content="">

	<link rel="icon" href="images/favicon.ico">

	<title>Dashboard</title>

	<!-- Bootstrap core CSS -->

	<link href="dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="dist/css/starter-template.css" rel="stylesheet">
	<!-- data tables -->
	<script src="assets/DataTables/jquery-3.1.0.js"></script>

	<script src="assets/js/ie-emulation-modes-warning.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/DataTables/jquery.dataTables.min.css">
<!-- data tables -->
<script src="assets/DataTables/jquery-3.1.0.js"></script>
<script src="assets/DataTables/jquery.dataTables.min.js"></script>

</head>

<body >

    <?php 
        include 'include/nav4.php';
        include 'include/helper.php';
        // $result = mysqli_query($konek, $data);
        $year = date('Y');
        
    ?>
	<!-- <marquee><h2>Selamat Datang di PPDB <?php echo $inf['nama_sekolah']; ?> </h2></marquee><br><hr> -->

	<div class="container">

        <div class="col-md-12" style="padding-top : 20px;">
            <div class="panel panel-primary">
                
                <div class="panel-heading">
                    <p>Data Pendaftaran Tahun <?php echo $year.' / '.($year + 1) ?></p>
                </div>

                <div class="panel-body">
                    <div class="col-lg-3">
                        <label>Pilih Tingkatan</label>
                        <select name="tingkatan" class="form-control" id="select_tingkatan">
                                <option>Semua</option>
                            <?php
                                foreach (tingkatan() as $key => $value) {
                                    echo "<option>$value</option>";
                                }
                            ?>
                        </select>
                        <br>
                    </div>
                    <div id="datatable"></div>
                </div>

            </div>
        </div>

	</div><!-- /.container -->

	<hr>

	<?php include 'include/footer.php' ;?> <br>



    <!-- Bootstrap core JavaScript

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
			<script src="dist/js/bootstrap.min.js"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
			<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    </body>

    </html>

    <script>
        $(document).ready(function(){	

            $.ajax({
                type: "POST",
                url: "helper/dashboard_get.php",
                data: {tingkatan : ''},
                
                success: function (data) {
                    console.log(data);
                    $("#datatable").html(data);
                }
            });

            $('#select_tingkatan').change(function (e) { 
                
                var tingkatan = $("#select_tingkatan").val();
                $.ajax({
                    type: "POST",
                    url: "helper/dashboard_get.php",
                    data: {tingkatan : tingkatan},
                    
                    success: function (data) {
                        $("#datatable").html(data);
                    }
                });
                
            });

        });
    </script>
