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

	<title>Halaman Utama</title>

	<!-- Bootstrap core CSS -->

	<link href="dist/css/bootstrap.min.css" rel="stylesheet">



	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

	<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">



	<!-- Custom styles for this template -->

	<link href="dist/css/starter-template.css" rel="stylesheet">



	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->

	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<script src="assets/js/ie-emulation-modes-warning.js"></script>



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->

</head>

<body >

	<?php include 'include/nav1.php' ?>

	

	<!-- <marquee><h2>Selamat Datang di PPDB <?php echo $inf['nama_sekolah']; ?> </h2></marquee><br><hr> -->

	<div class="container">

		<table class="table table-responsive">

			<tr>

				<h3>Petunjuk Umum :</h3>

			</tr>

			<tr>

				<td>

					1.

				</td>

				<td>

					Sebelum melakukan pendaftaran, silahkan baca <a href="pages/petunjuk-daftar.php"> <button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;petunjuk pendaftaran</button></a>.

				</td>

			</tr>

			<tr>

				<td>

					2.

				</td>

				<td>

					Pastikan data yang akan dimasukkan sudah disiapkan.

				</td>

			</tr>

			<tr>

				<td>

					3.

				</td>

				<td>

					Setelah melakukan pendaftaran, calon peserta didik diwajibkan untuk mengumpulkan berkas pendaftaran. Apabila sampai batas tanggal penerimaan siswa baru belum mengumpulkan berkas, maka dinyatakan mengundurkan diri.

				</td>

			</tr>

			<tr>

				<td>

					4.

				</td>

				<td>

					Registrasi tgl <strong>28 Juni - 07 Juli 2018</strong> dilakukan setelah dinyatakan datanya lengkap oleh panitia penerimaan siswa baru <?php echo $inf['nama_sekolah']; ?>.

				</td>

			</tr>

			<tr>

				<td>

					5.

				</td>

				<td>

					Silahkan hubungi panitia pendaftaran apabila memerlukan bantuan pengisian data ataupun informasi lainnya.

				</td>				

			</tr>

		</table>

		<center><img src=alurppdb.jpg></center>

	</div><!-- /.container -->

	<hr>

	<?php include 'include/footer.php' ;?> <br>



	<!-- Modal -->

	<div id="Modal-login" class="modal fade" role="dialog">

		<div class="modal-dialog modal-sm">



			<!-- Modal content-->

			<div class="modal-content">

				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<h4 class="modal-title">Login Peserta Didik Baru</h4>

				</div>

				<div class="modal-body">

					<form class="form-signin" method="POST" action="process/proses-login.php">

						<label for="inputUsername" class="sr-only">Username</label>

						<input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>

						<br><label for="inputPassword" class="sr-only">Password</label>

						<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

						<br>



						<button class="btn btn-lg btn-primary btn-block" type="submit"  name="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</button>

					</form>

				</div>

				<div class="modal-footer">

					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

				</div>

			</div>



		</div>

	</div>

	

    <!-- Bootstrap core JavaScript

    	================================================== -->

    	<!-- Placed at the end of the document so the pages load faster -->

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>

    	<script src="dist/js/bootstrap.min.js"></script>

    	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    	<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

		<!--script> 

    window.intergramId = "218568450";

    window.intergramCustomizations = {

        titleClosed: 'Silahkan Chat',

        titleOpen: 'Obrolan',

        introMessage: 'Assalamualaikum.... ada yang bisa dibantu??',

        autoResponse: 'A message that is sent immediately after the user sends its first message',

        autoNoResponse: 'A message that is sent one minute after the user sends its first message ' +

                        'and no response was received',

        mainColor: "#E91E63", // Can be any css supported color 'red', 'rgb(255,87,34)', etc

        alwaysUseFloatingButton: false // Use the mobile floating button also on large screens

    };

</script>

<script id="intergram" type="text/javascript" src="https://www.intergram.xyz/js/widget.js"></script-->

		

		imamjunaidiabror:

<script type="text/javascript">

    (function () {

        var options = {

            whatsapp: "+6285655639665", // WhatsApp number

            telegram: "imamjunaidiabror", // Telegram bot username

            company_logo_url: "//static.whatshelp.io/img/flag.png", // URL of company logo (png, jpg, gif)

            greeting_message: "Selamat datang ada yang bisa dibantu?", // Text of greeting message

            call_to_action: "Hubungi kami", // Call to action

            button_color: "#E74339", // Color of button

            position: "right", // Position may be 'right' or 'left'

            order: "whatsapp,telegram" // Order of buttons

        };

        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;

        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';

        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };

        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);

    })();

  </script>

    </body>

    </html>

