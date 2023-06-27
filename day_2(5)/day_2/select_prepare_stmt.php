<?php 

	require_once("connection.php");


	/*$query = "Select first_name, last_name from employees where employee_id = ?";
	$stmt = mysqli_prepare($connection,$query);

	
	mysqli_stmt_bind_param($stmt,'i',$e_id);
	mysqli_stmt_bind_result($stmt,$first_name,$last_name);

	

	$e_id = 2;
	mysqli_stmt_execute($stmt);
	mysqli_stmt_fetch($stmt);

	echo "first name = ".$first_name;
	echo "<br />";
	echo "last name = ".$last_name;
	echo "<br />";

	$e_id = 1;
	mysqli_stmt_execute($stmt);
	mysqli_stmt_fetch($stmt);

	echo "first name = ".$first_name;
	echo "<br />";
	echo "last name = ".$last_name;
	echo "<br />";*/


	/*$query = "SELECT first_name, last_name, gender, `status` FROM `employees`";
	$stmt = mysqli_prepare($connection,$query);

	mysqli_stmt_bind_result($stmt,$first_name,$last_name,$gender,$status);

	mysqli_stmt_execute($stmt);

	while(mysqli_stmt_fetch($stmt))
	{
		echo "first name = ".$first_name;
		echo "<br />";
		echo "last name = ".$last_name;
		echo "<br />";
		echo "gender = ".$gender;
		echo "<br />";
		echo "status = ".$status;
		echo "<hr />";

	}*/

	$query = "SELECT * FROM `employees`";
	$stmt = mysqli_prepare($connection,$query);

	$data = mysqli_stmt_bind_result($stmt,$employee_id,$first_name,$middle_name,$last_name,$gender,$salary,$status,$dept_id,$manager_id);



	mysqli_stmt_execute($stmt);

	mysqli_stmt_store_result($stmt);
	$rows = mysqli_stmt_num_rows($stmt);
	echo "Total Records: ".$rows;
	echo "<br />";

	/*$flag = mysqli_stmt_fetch($stmt);
	var_dump($flag);
	echo "Emp Id : ".$employee_id;
	echo "<br />";

	$flag = mysqli_stmt_fetch($stmt);
	var_dump($flag);
	echo "Emp Id : ".$employee_id;
	echo "<br />";

	$flag = mysqli_stmt_fetch($stmt);
	var_dump($flag);
	echo "Emp Id : ".$employee_id;
	echo "<br />";

	$flag = mysqli_stmt_fetch($stmt);
	var_dump($flag);
	echo "Emp Id : ".$employee_id;
	echo "<br />";

	$flag = mysqli_stmt_fetch($stmt);
	var_dump($flag);
	echo "Emp Id : ".$employee_id;
	echo "<br />";

	$flag = mysqli_stmt_fetch($stmt);
	var_dump($flag);
	echo "Emp Id : ".$employee_id;
	echo "<br />";

	$flag = mysqli_stmt_fetch($stmt);
	var_dump($flag);
	echo "Emp Id : ".$employee_id;
	echo "<br />";*/


	while(mysqli_stmt_fetch($stmt))
	{
		//echo $data;
		echo "Emp Id : ".$employee_id;
		echo "<br />";
		echo "first name = ".$first_name;
		echo "<br />";
		echo "last name = ".$last_name;
		echo "<br />";
		echo "gender = ".$gender;
		echo "<br />";
		echo "status = ".$status;
		echo "<hr />";

	}



?>