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

	<title>Cover Template for Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="dist/css/cover.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="assets/js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>

  #myProgress {
  	width: 100%;
  	background-color: #373636;
  }

  #myBar {
  	width: 0%;
  	height: 30px;
  	background-color: #4CAF50;
  }
</style>
</head>

<body style="background: #373636">

	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="cover-container">
				<div class="inner cover">
					<h1 class="cover-heading">Selamat Datang di aplikasi PPDB</h1>
					<p class="lead">Silahkan klik Install Database untuk membuat database otomatis</p>
					<p class="lead">
						<div id="myProgress">
							<div id="myBar" class="progress progress-bar-striped">
								
							</div>
						</div><br>
						<button class="btn btn-default" onclick="move()"><a href="config/buat-database.php" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-cog"></span>&nbsp;Install Database</a></button>
					</p><br><br><br>
					<p>Hanya untuk localhost, user root, dan dan tanpa password. Untuk keperluan lain silahkan ubah manual file koneksi.php di folder config</p>
				</div>
				<script>
					function move() {
						var elem = document.getElementById("myBar");   
						var width = 0;
						var id = setInterval(frame, 250);
						function frame() {
							if (width >= 97) {
								clearInterval(id);
							} else {
								width++; 
								elem.style.width = width + '%'; 
								elem.innerHTML = width * 1  + '%';
							}
						}
					}
				</script>
				<div class="mastfoot">
					<footer class="container">

						<p>&copy; 2017-2018 SMAN 1 Jorong. </a></p>
					</footer>
				</div>


			</div>

		</div>


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
	</script>
    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    	<script src="dist/js/bootstrap.min.js"></script>
    	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    	<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
    </html>
