<?php 


	require_once("../require/connection.php");

	function get_all_posts()
	{
		global $connection;
		
		$query = "SELECT * FROM `posts` ORDER BY `posts`.`post_id` DESC";
		$result = mysqli_query($connection,$query);

		return $result;

	}	

	function get_author_name_and_role_type_by_user_id($user_id)
	{
		global $connection;
		$query = "SELECT `users`.`full_name`, `roles`.`role_type` FROM `users` INNER JOIN `roles` ON `users`.`role_id` = `roles`.`role_id` 
		WHERE `users`.`user_id` = ".$user_id;
		
		$result = mysqli_query($connection,$query);
		return mysqli_fetch_row($result);

	}









?>