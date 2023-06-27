<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Author Penal</title>
	<style type="text/css">
		.heading{
			padding: 10px;
			margin: 10px;
			background-color: skyblue;
		}
	</style>
</head>
<body>
	<?php 
		require_once("manage_session.php");
	?>
	<center>
		<div class="heading">
			<h3>Blog Management System</h3>
			<hr />
			<h3>Welcome Author Dashborad: <?php echo $_SESSION['user']['full_name']?$_SESSION['user']['full_name']:""; ?></h3>
			<a href="../logout.php" >Logout Here</a>
			<span style="clear: both;"></span>
		</div>
	</center>

</body>
</html>