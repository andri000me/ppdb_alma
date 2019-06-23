<?php 
session_start();
if(isset($_SESSION['username'])){
	header ('location:index.php');
}
require_once '../../config/koneksi.php';

?>

<?php 
$data = mysqli_query($konek, "SELECT * FROM tb_sekolah");
if(!$data){
  die('SQL Error:' . mysqli_error($koneksi));
}
$row = mysqli_fetch_array($data);?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="bootstrap/favicon.ico">

  <title>Login Admin PPDB <?php echo $row['nama_sekolah'];?></title>

  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../dist/css/signin.css" rel="stylesheet">


  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <body class="text-center">
    <form action="../../process/proses-login-admin.php" method="post" class="form-signin">
      <br><img class="mb-4" src="../../images/logo/<?php echo $row['logo_sekolah'];?>" alt="" width="172" height="172">
      <h3>Admin <?php echo $row['nama_sekolah'];?></h3>
      <br>
      <label for="username" class="sr-only">Username</label>
      <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password">
      <br>
      <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Log in</button>
    </form>


    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="../../dist/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>

    </html>
