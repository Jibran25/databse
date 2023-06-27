<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hist>>bms>>register</title>
	<style type="text/css">
		table
		{
			width: 80%;
		}
		.input_cls{
			width: 100%;
		}

		input[type='submit']
		{
			width: 40%;
			background-color: green;
		}
	</style>
</head>
<body>
	<?php 
		require_once("require/connection.php");
		$query = "SELECT * FROM `roles` WHERE `roles`.`role_id` <> 1";
		$result = mysqli_query($connection,$query);

	?>
	<center>
		<h1>HIST>> BMS >> Register Page</h1>
		<hr />
		<?php 
			if(isset($_REQUEST['msg']))
			{
				?>
				<p style="color:<?php echo $_REQUEST['class']; ?>;padding: 10px; font-size: 20px;background-color: skyblue;width: 50%"><?php echo $_REQUEST['msg']; ?></p>
				<?php
			}

		?>
		<fieldset style="width:70%">
			<legend>Register Here..</legend>

			<form method="POST" action="register_process.php">
				<table width="80%">
					<tr>
						<th>Full Name</th>
						<td><input type="text" name="full_name" required class="input_cls"></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><input type="email" name="user_email" required class="input_cls"></td>
					</tr>
					<tr>
						<th>Password</th>
						<td><input type="password" name="user_password" required class="input_cls"></td>
					</tr>
					<tr>
						<th>
							Gender
						</th>
						<td>
							<input type="radio" name="gender" value="Male"> Male || <input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					<tr>
						<th>Select Role</th>
						<td>
							<select name="role" class="input_cls">
								<?php 
									while ($data = mysqli_fetch_assoc($result)) {
										?>
											<option value="<?php echo $data['role_id']; ?>">
												<?php echo $data['role_type']; ?>
											</option>
										<?php 
									}

								?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="register_btn" value="Register">
						</td>
					</tr>			
				</table>
			</form>
		</fieldset>
		<p>
			You have already an account
			<a href="index.php">Login</a>
		</p>
	</center>

</body>
</html>