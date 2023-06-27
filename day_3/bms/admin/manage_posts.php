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

	function get_post_detail_by_post_id($post_id)
	{
		global $connection;
		$query = "SELECT * FROM `posts` WHERE post_id = ".$post_id;
		$result = mysqli_query($connection,$query);
		return mysqli_fetch_assoc($result);
	}


	function get_add_post_form(){
		?>
		<fieldset style="width:60%">
			<legend>Add Add Form</legend>
			<form action="post_process.php" method="POST" >
				<table width="100%">
					<tr>
						<th>Post Title:</th>
						<td><input type="text" name="post_title" required style="width:80%" placeholder="Enter a post title"></td>
					</tr>
					<tr>
						<th>Post Description:</th>
						<td>
							<textarea name="post_description" placeholder="Enter a post description" rows="10" cols="50" required></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="add_post" value="Add Post" style="width:40%; background-color: green;">
						</td>
					</tr>

				</table>
			</form>

		</fieldset>


		<?php
	}


	function get_edit_post_form($post_id)
	{
		$post_data = get_post_detail_by_post_id($post_id);

		?>
		<fieldset style="width:60%">
			<legend>Edit Post Form</legend>
			<form action="post_process.php" method="POST" >
				<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
				<table width="100%">
					<tr>
						<th>Post Title:</th>
						<td><input type="text" name="post_title" required style="width:80%" placeholder="Enter a post title" value="<?php echo $post_data['post_title']; ?>"></td>
					</tr>
					<tr>
						<th>Post Description:</th>
						<td>
							<textarea name="post_description" placeholder="Enter a post description" rows="10" cols="50" required><?php echo $post_data['post_description']; ?></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="update_post" value="Update Post" style="width:40%; background-color: green;">
						</td>
					</tr>

				</table>
			</form>

		</fieldset>


		<?php
	}








?>