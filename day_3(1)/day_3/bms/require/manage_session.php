<?php 

	session_start();
	if(isset($_SESSION['user']))
	{
		
		if($_SESSION['user']['role_id'] == 1)
		{
			header("location:admin/index.php");	
		}
		else if($_SESSION['user']['role_id'] == 2)
		{
			header("location:author/index.php");	
		}
		else if($_SESSION['user']['role_id'] == 3)
		{
			header("location:user/index.php");	
		}


	}

	

?>