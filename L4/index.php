<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="billing.php" method="POST">
	<label>Previous Meter Reading: </label>
	<input type="number" name="prevMeter"> <br/>
	<label>Current Meter Reading: </label>
	<input type="number" name="currMeter"> <br/>
	<label>Customer Type: </label>
	<select name="customerType">
		<option value="1">Residential</option>
		<option value="2">Commercial</option>
		<option value="3">Industrial</option>
		<option value="4">Government</option>
	</select>
	<input type="submit" name="submit" value="Calculate Bill">
</form>
</body>
</html>