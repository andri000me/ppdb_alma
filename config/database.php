
<?php
// Connect to MySQL
$perintah=sprintf("CREATE DATABASE IF NOT EXISTS%s",'ppdb_smanjor');
$host = "localhost";
$user = "root";
$userpass = "";
$db = "ppdb_smanjor";

$koneksi = mysqli_connect($host, $user, $userpass, $db) or die ();

// Name of the file
$filename = 'ppdb_smanjor.sql';
$mysql_database = 'ppdb_smanjor';


// Select database
mysqli_select_db($koneksi,$mysql_database) or die('Error selecting MySQL database: ' . mysqli_error());

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
	if (substr($line, 0, 2) == '--' || $line == '')
		continue;

// Add this line to the current segment
	$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
	if (substr(trim($line), -1, 1) == ';')
	{
    // Perform the query
    mysqli_query($koneksi,$templine);// or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
header('location:../index.php');
 //echo "Tables imported successfully";
?>