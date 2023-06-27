<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Penal</title>
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
					?>

					<div class="post_dis">
						<h3>Post Title: <?php echo $post['post_title']; ?></h3>
						<p align="left">
							<b>Post Description:</b>
							<?php echo $post['post_description']; ?>

						</p>
						<p>
							<a href="post_detail.php?post_id=<?php echo $post['post_id']; ?>">Read More</a>
						</p>
					</div>

					<?php
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
