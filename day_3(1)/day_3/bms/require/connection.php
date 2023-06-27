<?php 

	mysqli_report(MYSQLI_REPORT_OFF);

	define("hostname","localhost");
	define("username","root");
	define("password","");
	define("dbname","blog_management_system");

	$connection = mysqli_connect(hostname,username,password,dbname);

	if(mysqli_connect_errno())
	{
		echo "Database connection problem due to ".mysqli_connect_error();
		die();
	}
	

?>