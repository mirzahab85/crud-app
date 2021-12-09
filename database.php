<?php 

$hostname = "localhost";
$database = "miki";
$passwprd = "M1r2b49o!!t1d#%r_3{@";
$dbname = "crud";

//Connection to database 
$conn = mysqli_connect($hostname, $database, $passwprd, $dbname);

//Check connection to database 
if (!$conn) {
	die("<p style='color:red'><strong>Connection failed: </strong></p>" . mysqli_connect_error());
}
	$database = '<p style="color:green"><strong>Database connecton successful. </strong></p>';