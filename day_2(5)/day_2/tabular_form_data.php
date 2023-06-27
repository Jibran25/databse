<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabular Form Data</title>
</head>
<body>
	<center>
		<h1>Tabular Form Data Using Prepared Stmt</h1>
		<hr />
		<?php 
			require_once("connection.php");

		 $query = "SELECT e.`employee_id`, CONCAT(e.`first_name`,' ',e.`last_name`) AS 'fullName', e.`gender`, e.`salary`,d.`dept_name` AS 'Department' 
		FROM `employees` e INNER JOIN `departments` d ON e.`dept_id` = d.`dept_id`";

		$stmt_object = mysqli_prepare($connection,$query);


		mysqli_stmt_bind_result($stmt_object,$employee_id,$fullName,$gender,$salary,$Department);
		mysqli_stmt_execute($stmt_object);


		mysqli_stmt_store_result($stmt_object);
		$rows = mysqli_stmt_num_rows($stmt_object);

		echo "Total Rows $rows";
		echo "<hr />";

		?>
		<table border="2" width="100%">
				<tr>
					<th align="center" style="background-color: skyblue;">Employee ID</th>
					<th align="center" style="background-color: skyblue;">Full Name</th>
					<th align="center" style="background-color: skyblue;">Gender</th>
					<th align="center" style="background-color: skyblue;">Salary</th>
					<th align="center" style="background-color: skyblue;">Department</th>
				</tr>
				<?php 
					if($rows > 0)
					{
						while(mysqli_stmt_fetch($stmt_object))
						{
							?>
								<tr>
									<td align="center"><?php echo $employee_id; ?></td>
									<td align="center"><?php echo $fullName; ?></td>
									<td align="center"><?php echo $gender; ?></td>
									<td align="center"><?php echo $salary; ?></td>
									<td align="center"><?php echo $Department; ?></td>
								</tr>

							<?php
						}
					}
					else
					{
						?>
							<tr>
								<td colspan="5" align="center">No Records Found!....</td>
							</tr>
						<?php
					}


				?>

		</table>
	</center>

</body>
</html>