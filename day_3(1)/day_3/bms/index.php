<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hist>>bms>>login</title>
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
	<center>
		<h1>HIST>> BMS >> Login Page</h1>
		<hr />
		<?php 
			require_once("require/manage_session.php");
			if(isset($_REQUEST['msg']))
			{
				?>
				<p style="color:<?php echo $_REQUEST['class']; ?>;padding: 10px; font-size: 20px;background-color: skyblue;width: 50%"><?php echo $_REQUEST['msg']; ?></p>
				<?php
			}

		?>
		<fieldset style="width:70%">
			<legend>Login Here..</legend>

			<form method="POST" action="login_process.php">
				<table width="80%">
					<tr>
						<th>Email</th>
						<td><input type="email" name="user_email" required class="input_cls"></td>
					</tr>
					<tr>
						<th>Password</th>
						<td><input type="password" name="user_password" required class="input_cls"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="login_btn" value="Login">
						</td>
					</tr>			
				</table>
			</form>
		</fieldset>
		<p>
			Don't have an account
			<a href="register.php">Register</a>
		</p>
	</center>

</body>
</html>