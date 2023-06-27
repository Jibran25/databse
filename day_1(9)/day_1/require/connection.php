<?php 

	mysqli_report(MYSQLI_REPORT_OFF);

	define("hostname","localhost");
	define("username","root");
	define("password","");
	define("dbname","php_jun_sep_2k22");

	$connection = mysqli_connect(hostname,username,password,dbname);

	if(mysqli_connect_errno())
	{
			echo "Error No:".mysqli_connect_errno();
			echo "<br />";
			echo "Error Msg:".mysqli_connect_error();
			echo "<br />";
			die("Database connection problem!");
	}
	

?>