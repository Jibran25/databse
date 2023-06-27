<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Penal >> Post Detail</title>
	<style type="text/css">
		.heading{
			padding: 10px;
			margin: 10px;
			background-color: skyblue;
		}
		.post_dis{
			background-color:lightgray;
			margin: 10px;
			padding: 5px;
			border-radius: 10px;
			height: auto;
			width: 75%;

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
			<h3>Welcome User Dashborad: <?php echo $_SESSION['user']['full_name']?$_SESSION['user']['full_name']:""; ?></h3>
			<a href="../logout.php" >Logout Here</a>
			<span style="clear: both;"></span>
		</div>
		<hr />
		<?php 
			if($posts->num_rows > 0)
			{
				while($post = mysqli_fetch_assoc($posts))
				{
					if($_REQUEST['post_id'] == $post['post_id'])
					{

					
					?>

					<div class="post_dis">
						<h3>Post ID: <?php echo $post['post_id']; ?></h3>
						<hr />
						<h2>Post Title: <?php echo $post['post_title']; ?></h2>

						<p align="left">
							<b>Post Description:</b>
							<?php echo $post['post_description']; ?>

						</p>
						<p>
							<b>Author Name: </b>
							<span>
								<?php
									$data_about_author =  get_author_name_and_role_type_by_user_id($post['post_by_user_id']);
									echo $data_about_author[0];
							 	
								?>
								</span>
								<span style="background-color: gray;border-radius: 2px;">
									<?php  echo $data_about_author[1]; ?>
								</span> 
						</p>
						<p>
							<a href="index.php">Show All Posts</a>
						</p>
					</div>

					<?php
					}
				}

			}
			else
			{
				?>
					<h2>No Posts Avaiable</h2>
				<?php 
			}
			

		?>
		
	</center>

</body>
</html>
