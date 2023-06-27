<?php 

	require_once("connection.php");

	/*$query = "UPDATE `employees` SET `employees`.`salary` = ?, `employees`.`status` = ? WHERE `employees`.`employee_id` = ?";
	
	$stmt = mysqli_prepare($connection,$query);


	$salary = 890000;
	$status = "Active";
	$employee_id = 6;

	mysqli_stmt_bind_param($stmt,"isi",$salary,$status,$employee_id);
	$result = mysqli_stmt_execute($stmt);


	$salary = 190000;
	$status = "InActive";
	$employee_id = 2;

	mysqli_stmt_bind_param($stmt,"isi",$salary,$status,$employee_id);
	$result = mysqli_stmt_execute($stmt);

	if($result)
	{
		echo "Data Updated";
	}
	else
	{
		echo "Error No: ".mysqli_errno($connection)."<br />";
		echo "Error Msg: ".mysqli_error($connection)."<br />";
	}*/

	// $query = "UPDATE `employees` SET `employees`.`salary` = ?, `employees`.`status` = ? WHERE `employees`.`employee_id` = ? and dept_id=?";
	
	// $stmt = mysqli_prepare($connection,$query);

	// $salary = 290000;
	// $status = "Active";
	// $employee_id = 26;
	// $dept_id = 3;

	// mysqli_stmt_bind_param($stmt,"isii",$salary,$status,$employee_id,$dept_id);
	// $result = mysqli_stmt_execute($stmt);



?>