<?php 

	session_start();
	require_once("require/connection.php");

	if(isset($_POST['login_btn']))
	{
		extract($_POST);

		$login_query = "SELECT * FROM `users` WHERE `users`.`user_email` = ? AND `users`.`user_password` = ?";
		
		$stmt = mysqli_prepare($connection,$login_query);	

		mysqli_stmt_bind_param($stmt,"ss",$user_email,$user_password);

		mysqli_stmt_execute($stmt);

		//way 1;
		// mysqli_stmt_bind_result($stmt,$user_id,$role_id,$full_name,$user_email,$user_password,$gender,$is_active );
		// mysqli_stmt_fetch($stmt);
		// echo $full_name;

		//way2
		$res = mysqli_stmt_get_result($stmt);

		if($res->num_rows > 0)
		{
			$user_data = mysqli_fetch_assoc($res);
			$_SESSION['user'] = $user_data;		

			if($user_data['role_id'] == 1)
			{
				header("location:admin/index.php");	
			}
			else if($user_data['role_id'] == 2)
			{
				header("location:author/index.php");	
			}
			else if($user_data['role_id'] == 3)
			{
				header("location:user/index.php");	
			}

		}
		else
		{
			header("location:index.php?msg=Login Failed!....&class=red");
		}
		

	}


?>