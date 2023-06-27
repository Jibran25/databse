<?php 
mysqli_report(MYSQLI_REPORT_OFF);

define("localhost","localhost");
define("username","root");
define("password","");
define("database","php_jun_sep_2k22");

$connection = mysqli_connect(localhost,username,password,database);

if(mysqli_connect_errno())
{
	echo "Database connection problem!....";
	echo "<br />";
	echo "Error NO: ".mysqli_connect_errno()."<br />";
	echo "Error Msg: ".mysqli_connect_error()."<br />";
	die();
}








 ?>