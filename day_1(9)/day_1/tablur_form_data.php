<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabular Data</title>
</head>
<body>
	<center>
		<h1>Tabular Data</h1>
		<hr />
		<?php 
			require_once("require/connection.php");
			$query = "
		SELECT e.`employee_id`, CONCAT(e.`first_name`,' ',e.`last_name`) AS 'fullName', e.`gender`, e.`salary`,d.`dept_name` AS 'Department' 
		FROM `employees` e INNER JOIN `departments` d ON e.`dept_id` = d.`dept_id`";

		$result = mysqli_query($connection,$query);
		echo "<h3>Total Rows: ".$result->num_rows."</h3>";
		?>
		<table border="2" width="100%">
				<tr>
					<th style="background-color: skyblue;">Employee ID</th>
					<th style="background-color: skyblue;">Full Name</th>
					<th style="background-color: skyblue;">Gender</th>
					<th style="background-color: skyblue;">Salary</th>
					<th style="background-color: skyblue;">Department</th>
				</tr>
				<?php 
					if(mysqli_num_rows($result) > 0)
					{	
						while($data = mysqli_fetch_assoc($result))
						{
						?>
							<tr>
								<td align="center"><?php echo $data['employee_id'] ?></td>
								<td align="center"><?php echo $data['fullName'] ?></td>
								<td align="center"><?php echo $data['gender'] ?></td>
								<td align="center"><?php echo $data['salary'] ?></td>
								<td align="center"><?php echo $data['Department'] ?></td>
							</tr>
						<?php
						}
					}
					else
					{
						?>
							<tr>
								<td colspan="5" align="center">Records not found!</td>
							</tr>
						<?php
					}
				?>

		</table>


		<?php


		mysqli_free_result($result);

		// $data = mysqli_fetch_assoc($result);
		// var_dump($data);
		mysqli_close($connection);
		?>
	</center>

</body>
</html>