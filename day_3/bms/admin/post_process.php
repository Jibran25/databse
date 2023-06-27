<?php 
	
	session_start();
	require_once("../require/connection.php");


	if(isset($_POST['add_post']))
	{
		extract($_POST);


		$user_id = $_SESSION['user']['user_id'];

		$query = "INSERT INTO `posts`(post_by_user_id,post_title,post_description) VALUES(?,?,?)";

		$stmt = mysqli_prepare($connection,$query);

		mysqli_stmt_bind_param($stmt,"iss",$user_id,$post_title,$post_description);


		if(mysqli_stmt_execute($stmt))
		{
			header("location:index.php?msg=Post (".mysqli_insert_id($connection).") has been added&class=green");
		}
		else
		{
			header("location:index.php?msg=Post has not been added&class=red");
		}	

	}
	else if(isset($_POST['update_post']))
	{

		extract($_POST);

		$query = "UPDATE `posts` SET `posts`.`post_title` = ? , `posts`.`post_description` = ? WHERE `posts`.`post_id` = ?";

		$stmt = mysqli_prepare($connection,$query);

		mysqli_stmt_bind_param($stmt,"ssi",$post_title,$post_description,$post_id);


		if(mysqli_stmt_execute($stmt))
		{
			header("location:index.php?msg=Post (".$post_id.") has been updated&class=green");
		}
		else
		{
			header("location:index.php?msg=Post has not been updated&class=red");
		}	

	}
	elseif(isset($_REQUEST['action']) && $_REQUEST['action'] == "delete_post")
	{
		$post_id = (int) $_REQUEST['post_id'];
		$query = "Delete From posts WHERE `posts`.`post_id` = ?";

		$stmt = mysqli_prepare($connection,$query);

		mysqli_stmt_bind_param($stmt,"i",$post_id);


		if(mysqli_stmt_execute($stmt))
		{
			header("location:index.php?msg=Post Id (".$post_id.") has been deleted&class=green");
		}
		else
		{
			header("location:index.php?msg=Post has not been deleted&class=red");
		}	
	}


?>