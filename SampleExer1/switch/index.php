<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="billing.php" method="POST">
		<input type="number" name="previous" placeholder="Previous Billing">
		<input type="number" name="current" placeholder="Current Meter Reading">
		<select name="CustomerType">
			<option value="1">Residential</option>
			<option value="2">Commercial</option>
			<option value="3">Industrial</option>
			<option value="4">Government</option>
		</select>
		<input type="submit" name="Submit" value="Compute Bill">
	</form>
</body>
</html>