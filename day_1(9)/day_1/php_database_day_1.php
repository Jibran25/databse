<?php 
	
	/*$connection = mysqli_connect("localhost","root","","php_jun_sep_2k22");

	echo "<pre>";
		var_dump($connection);
	echo "</pre>";*/

	/*mysqli_report(MYSQLI_REPORT_OFF);
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname   = "php_jun_sep_2k224";

	$connection = mysqli_connect($hostname,$username,$password,$dbname);

	echo "Error No:".mysqli_connect_errno();
	echo "<br />";
	echo "Error Msg:".mysqli_connect_error();*/

	/*mysqli_report(MYSQLI_REPORT_OFF);
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname   = "php_jun_sep_2k22";

	$connection = mysqli_connect($hostname,$username,$password,$dbname);

	if(mysqli_connect_errno())
	{
			echo "Error No:".mysqli_connect_errno();
			echo "<br />";
			echo "Error Msg:".mysqli_connect_error();
			echo "<br />";
			die("Database connection problem!");
	}*/

	require_once("require/connection.php");

	/*echo "<pre>";
		var_dump($connection);
	echo "</pre>";*/

	//$f = $_POST['name'];
	// $first_name = "Zahid";
	// $middle_name  = "Khan";
	// $last_name  = "Baloch";
	// $gender = "Male";
	// $salary = 2000; 
	// $status = "InActive";
	// $dept_id  = 1;
	// $manager_id = 3;

	// $insert_query = "INSERT INTO `employees`(first_name,middle_name,last_name,gender,salary,`status`,dept_id,manager_id) VALUES('".$first_name."','".$middle_name."','".$last_name."','".$gender."',".$salary.",'".$status."',".$dept_id.",".$manager_id.")";

	// $result = mysqli_query($connection,$insert_query);

	// echo "<pre>";
	// var_dump($result);
	// echo "</pre>";

	// echo "Error No ".mysqli_errno($connection);
	// echo "<br />";
	// echo "Error Msg ".mysqli_error($connection);

	/*
	$first_name = "Pirah";
	$middle_name  = "Yasmeen";
	$last_name  = "Khan";
	$gender = "Female";
	$salary = 2000; 
	$status = "Active";
	$dept_id  = 1;
	$manager_id = 2;

	$insert_query = "INSERT INTO employees(first_name,middle_name,last_name,gender,salary,status,dept_id,manager_id) VALUES('".$first_name."','".$middle_name."','".$last_name."','".$gender."',".$salary.",'".$status."',".$dept_id.",".$manager_id.")";

	$result = mysqli_query($connection,$insert_query);

	if($result)
	{
		echo "Data Inserted <br />";
	}
	else
	{
		echo "Error No: ".mysqli_errno($connection)."<br />";
		echo "Error Msg: ".mysqli_error($connection)."<br />";
		echo "Data not insert due to some reason";
	}*/

	/*$first_name = "Nadia";
	$middle_name  = NUll;
	$last_name  = "Khan";
	$gender = "Female";
	$salary = 2000; 
	$status = "Active";
	$dept_id  = 1;
	$manager_id = 2;

	$insert_query = "INSERT INTO employees(first_name,middle_name,last_name,gender,salary,status,dept_id,manager_id) VALUES('".$first_name."','".$middle_name."','".$last_name."','".$gender."',".$salary.",'".$status."',".$dept_id.",".$manager_id.")";

	$result = mysqli_query($connection,$insert_query);

	if($result)
	{
		echo "Data Inserted <br />";
		echo "Last Inserted ID: ".mysqli_insert_id($connection);
	}
	else
	{
		echo "Error No: ".mysqli_errno($connection)."<br />";
		echo "Error Msg: ".mysqli_error($connection)."<br />";
		echo "Data not insert due to some reason";
	}*/

	/*$first_name = "Janzaib";
	//$middle_name  = NUll;
	$last_name  = "Khan";
	$gender = "Male";
	$salary = 2000; 
	$status = "Active";
	$dept_id  = 1;
	$manager_id = 2;

	$insert_query = "INSERT INTOO employees(first_name,last_name,gender,salary,status,dept_id,manager_id) VALUES('".$first_name."','".$last_name."','".$gender."',".$salary.",'".$status."',".$dept_id.",".$manager_id.")";

	$result = mysqli_query($connection,$insert_query) or die("Error: ".mysqli_error($connection));

	if($result)
	{
		echo "Data Inserted <br />";
		echo "Last Inserted ID: ".mysqli_insert_id($connection);
	}
	else
	{
		echo "Error No: ".mysqli_errno($connection)."<br />";
		echo "Error Msg: ".mysqli_error($connection)."<br />";
		echo "Data not insert due to some reason";
	}*/

	/*$first_name = "Nida";
	$middle_name  = "Ali";
	$last_name  = "Khan";
	$salary = 22000; 
	$status = "InActive";
	$dept_id  = 2;
	$manager_id = 1;
	$employee_id = 16;

	$update_query = "Update employees set first_name='".$first_name."', middle_name='".$middle_name."',last_name='".$last_name."',salary=".$salary.", status='".$status."', dept_id=".$dept_id.",manager_id=".$manager_id." where employee_id = ".$employee_id;

	$result = mysqli_query($connection,$update_query);

	if($result)
	{
		echo "Data Updated <br />";
	}
	else
	{
		echo "Error No: ".mysqli_errno($connection)."<br />";
		echo "Error Msg: ".mysqli_error($connection)."<br />";
		echo "Data not update due to some reason";
	}*/


	/*$salary = 60000; 
	$employee_id = 2;

	$update_query = "Update employees set salary=".$salary." where employee_id = ".$employee_id." and status = 'InActive' ";

	$result = mysqli_query($connection,$update_query);
	var_dump($result);
	if($result)
	{
		echo "Data Updated <br />";
	}
	else
	{
		echo "Error No: ".mysqli_errno($connection)."<br />";
		echo "Error Msg: ".mysqli_error($connection)."<br />";
		echo "Data not update due to some reason";
	}*/


	// $employee_id = 13;
	// $delete_query = "Delete from employees WHERE employee_id = ".$employee_id;
	// //$result = mysqli_query($connection,"Delete from employees WHERE employee_id = ".$employee_id);
	// $result = mysqli_query($connection,$delete_query);
	// var_dump($result);

	// $first_name = "Zahid";
	// $status = "InActive";

	// $delete_query = "Delete from employees WHERE first_name = '".$first_name."' and status = '".$status."' ";
	// $result = mysqli_query($connection,$delete_query);
	// var_dump($result);


	/*Select Queries*/

	/*$query = "Select * From employees";
	$result = mysqli_query($connection,$query);

	echo "<pre>";
		print_r($result);
	echo "</pre>";*/

	//$query = "Select * From employees";
	//$result = mysqli_query($connection,$query);

	//echo "Total Records ".$result->num_rows;
	//echo "Total Records ".mysqli_num_rows($result);

	$query = "Select * From employees";
	$result = mysqli_query($connection,$query);

	//var_dump(mysqli_num_rows($result));

	if(mysqli_num_rows($result) > 0)
	{
		//echo "Total Records ".mysqli_num_rows($result);
		//echo "<br />";

		//$data = mysqli_fetch_array($result);
		// echo "<pre>";
		// 	print_r($data);
		// echo "</pre>";

		/*echo $data[0];
		echo $data['employee_id'];*/

		// echo $data[3];
		// echo $data['first_name'];

		/*$data = mysqli_fetch_array($result);
		echo "<pre>";
			print_r($data);
		echo "</pre>";

		$data = mysqli_fetch_array($result,MYSQLI_NUM);
		echo "<pre>";
			print_r($data);
		echo "</pre>";

		$data = mysqli_fetch_array($result,MYSQLI_ASSOC);
		echo "<pre>";
			print_r($data);
		echo "</pre>";

		$data = mysqli_fetch_array($result,MYSQLI_NUM);
		echo "<pre>";
			print_r($data);
		echo "</pre>";

		$data = mysqli_fetch_array($result,MYSQLI_ASSOC);
		echo "<pre>";
			print_r($data);
		echo "</pre>";

		$data = mysqli_fetch_array($result,MYSQLI_ASSOC);
		echo "<pre>";
			var_dump($data);
		echo "</pre>";*/

		/*while(null)
		{	
			echo "working";
		}*/

		while($data = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			// echo "<pre>";
			// 	print_r($data);
			// echo "</pre>";
			//echo "FName: ".$data['first_name'];
			//echo "<br />";
		}


	}
	else
	{
		echo "Records Not Found!...";
		echo "<br />";
	}



	$query = "Select * From employees";
	$result = mysqli_query($connection,$query);
	
	if(mysqli_num_rows($result) > 0)
	{
		//echo "Total Records ".mysqli_num_rows($result);
		//echo "<br />";

		/*while($data = mysqli_fetch_array($result))
		{
			echo "<pre>";
				print_r($data);
			echo "</pre>";
		}*/

		/*while($data = mysqli_fetch_row($result))
		{
			echo "<pre>";
				print_r($data);
			echo "</pre>";

			echo "<pre>";
				print_r($data[5]);
			echo "</pre>";
		}*/

		// while($data = mysqli_fetch_assoc($result))
		// {
		// 	// echo "<pre>";
		// 	// 	print_r($data);
		// 	// echo "</pre>";
		// 	// echo "<pre>";
		// 	// 	print_r($data['first_name']);
		// 	// echo "</pre>";

		// }


		// while($data = mysqli_fetch_object($result))
		// {
		// 	echo "<pre>";
		// 		// print_r($data->status);
		// 	//print_r($data->salary);
		// 	print_r($data);
		// 	echo "</pre>";
		// }



	}
	else
	{
		echo "Records Not Found!...";
		echo "<br />";
	}



	// $query = "Select * From employees";
	// $query = "Select * From employees where employee_id = 2";
	// $query = "Select * From employees where status = 'Active' ";

	// $query = "Select first_name From employees";
	// $query = "Select employee_id AS 'Emp_ID' From employees";
	//$query = "SELECT employee_id, CONCAT(first_name,' ',last_name ) AS 'FullName', salary AS 'Salary', gender  FROM `employees`";

	// $query = "Select * From employees order by employee_id DESC";
	//$query = "Select * From employees order by first_name ASC";
	
	// $query = "Select * From employees order by first_name ASC limit 2";

	// $query = "Select * From employees where first_name like '____' ";
	// $query = "Select * From employees where first_name like '%d' ";
	// $query = "Select * From employees where first_name like '%i%' ";

	// $query = "Select * From employees where last_name REGEXP 'khan$' ";

	$query = "Select * From employees where last_name REGEXP '^khan$' ";

	$result = mysqli_query($connection,$query);
	
	if(mysqli_num_rows($result) > 0)
	{
		echo "Total Records ".mysqli_num_rows($result);
		echo "<br />";

		while($data = mysqli_fetch_assoc($result))
		{
			echo "<pre>";
				print_r($data);
			echo "</pre>";
		}
	}
	else
	{
		echo "Records Not Found!...";
		echo "<br />";
	}









	mysqli_free_result($result);
	mysqli_close($connection);	


?>