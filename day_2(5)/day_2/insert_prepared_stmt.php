<?php 

	require_once("connection.php");



	//stage:1

	$query = "INSERT INTO `employees`(first_name,middle_name,last_name,gender,salary,`status`,dept_id,manager_id) VALUES (?,?,?,?,?,?,?,?)";

	$stmt = mysqli_prepare($connection,$query);
	/*echo "<pre>";
	var_dump($stmt);*/

	//stage:2

	// $first_name = "Nida14";
	// $middle_name = "Khan14";
	// $last_name = "LastName14";
	// $gender = "Female";
	// $salary = 30000;
	// $status = "Active";
	// $dept_id = 2;
	// $manager_id = 2;

	// $flag = mysqli_stmt_bind_param($stmt,"ssssisii",$first_name,$middle_name,$last_name,$gender,$salary,$status,$dept_id,$manager_id);
	// $result = mysqli_stmt_execute($stmt);
	// var_dump($result);

	/*$first_name = "Nida13";
	$middle_name = "Khan13";
	$last_name = "LastName13";
	$gender = "Female";
	$salary = 50000;
	$status = "Active";
	$dept_id = 2;
	$manager_id = 2;

	$flag = mysqli_stmt_bind_param($stmt,"ssssisii",$first_name,$middle_name,$last_name,$gender,$salary,$status,$dept_id,$manager_id);
	$result = mysqli_stmt_execute($stmt);*/


	/*$data = array(
			array('Kashif','khan','zardari','Male',60000,'Active',2,2),
			array('Imtiaz','khan','Buriro','Male',60000,'Active',2,2),
			array('Kashif','khan','Chandio','Male',60000,'Active',3,2),
			array('zahid','khan','bloch','Male',60000,'Active',3,2),
	);

	$flag = false;
	foreach ($data as $key => $value) {
			
			mysqli_stmt_bind_param($stmt,'ssssisii',$value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6],$value[7]);
			$flag  = mysqli_stmt_execute($stmt);
	}

	if($flag)
	{
		echo "Data Inserted";
	}else{
		echo "Not Insert";
	}*/




?>