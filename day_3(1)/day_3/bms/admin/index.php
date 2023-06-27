<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Penal</title>
	<style type="text/css">
		.heading{
			padding: 10px;
			margin: 10px;
			background-color: skyblue;
		}
		table th {
			background-color: skyblue;
			color: black;
		}
	</style>
</head>
<body>
	<?php 
		require_once("manage_session.php");
		require_once("manage_posts.php");
		$posts = get_all_posts();

	?>
	<center>
		<div class="heading">
			<h3>Blog Management System</h3>
			<hr />
			<h3>Welcome Admin Dashborad: <?php echo $_SESSION['user']['full_name']?$_SESSION['user']['full_name']:""; ?></h3>
			<a href="../logout.php" >Logout Here</a>
			<span style="clear: both;"></span>
		</div>
		<hr />
		<?php 
			if(isset($_REQUEST['msg']))
			{
				?>
				<p style="color:<?php echo $_REQUEST['class']; ?>;padding: 10px; font-size: 20px;background-color: skyblue;width: 50%"><?php echo $_REQUEST['msg']; ?></p>
				<?php
			}


		if(isset($_REQUEST['post_id']))
		{
			get_edit_post_form($_REQUEST['post_id']);
		}	
		else
		{
			get_add_post_form();
		}

		?>
		

		<hr />
		<table border="2" width="100%">
			<tr>
				<th>Post ID</th>
				<th>Post Added By</th>
				<th>Post Title</th>
				<th>Post Description</th>
				<th>Actions</th>
			</tr>
			<?php 
				if($posts->num_rows > 0)
				{
					while ($row = mysqli_fetch_assoc($posts)) {
					?>
						<tr>
							<td><?php echo $row['post_id'] ?></td>
							<td width="15%">
								<span>
								<?php
									$data_about_author =  get_author_name_and_role_type_by_user_id($row['post_by_user_id']);
									echo $data_about_author[0];
							 	
								?>
								</span>
								<span style="background-color: gray;border-radius: 2px;">
									<?php  echo $data_about_author[1]; ?>
								</span>
								
							</td>
							<td width="20%"><?php echo $row['post_title'] ?></td>
							<td><?php echo $row['post_description'] ?></td>
							<td>
								<a href="index.php?post_id=<?php echo $row['post_id']; ?>">Edit</a>
								<br />
								<a href="javascript:void(0)" onclick="delete_post(<?php echo $row['post_id']; ?>)">Delete</a>
							</td>

						</tr>
					<?php
					}
				}
				else
				{
					?>
						<tr>
							<td align="center" colspan="5">
								No Posts Avaiables...
							</td>
						</tr>
					<?php 
				}

			?>

		</table>

	</center>
<script type="text/javascript">
	function delete_post(id)
	{
		//alert(id);

		flag = confirm("Do you want delete this post");
		if(flag)
		{
			window.location.href = "post_process.php?action=delete_post&post_id="+id;
		}
		else
		{
			//window.location.href = "index.php";
		}

	}
</script>
</body>
</html>