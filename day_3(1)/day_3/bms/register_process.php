<?php 

	require_once("require/connection.php");

	if(isset($_POST['register_btn']))
	{
		extract($_POST);

		$register_query = "INSERT INTO `users`(role_id,full_name,user_email,user_password,gender) VALUES(?,?,?,?,?)";

		$stmt = mysqli_prepare($connection,$register_query);
		
		$role_id =  (int) $role;

		mysqli_stmt_bind_param($stmt,"issss",$role_id,$full_name,$user_email,$user_password,$gender);

		if(mysqli_stmt_execute($stmt))
		{
			header("location:register.php?msg=Your account has been registered&class=green");
		}
		else
		{
			header("location:register.php?msg=Your account has not been registered&class=red");
		}	


	}



?>