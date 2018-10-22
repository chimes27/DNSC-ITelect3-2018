<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
if(isset($_POST['submit'])){
	echo "submitted";
}

?>
<body>
<form action="output.php" method="POST">
	<fieldset>
		<legend>Personal Information</legend>
		<input type="text" name="fname" placeholder="First Name">
		<input type="text" name="lname" placeholder="Last Name">
		<input type="date" name="bdate" placeholder="Birthdate">
		<input type="radio" name="gender" value="Male" checked>Male <br/>
		<input type="radio" name="gender" value="Female">Female<br/>
	</fieldset>
	<fieldset>
		<legend>Course Information</legend>
			<select name="cmbCourse">
				<option value="bsit">bsit</option>
				<option value="bsed">bsed</option>
				<option value="bsmb">bsmb</option>
			</select>
		
	</fieldset>
	<input type="submit" name="submit">
</form>
</body>
</html>