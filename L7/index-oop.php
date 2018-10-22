<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	<input type="text" name="fname"><br/>
	<input type="text" name="lname"><br/>
	<select name="gender">
		<option value="male">Male</option>
		<option value="female">Female</option>
	</select>
	<input type="email" name="email"><br/>
	<input type="password" name="password"><br/>
	<input type="submit" name="submit" value="Save Record">
</form>

<div>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	<input type="text" name="searchTxt" placeholder="Input text to search">
	<input type="submit" name="searchBtn" value="Click here to search">	
	</form>
</div>




<?php 
require_once 'crud.php';
$obj = new CRUD();
if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];	
	$obj->InsertRecord($fname, $lname, $email, $password, $gender);
	$obj->displayRecords();
}elseif(isset($_POST['searchBtn'])){
	$searchTxt = $_POST['searchTxt'];
	$obj->searchRecord($searchTxt);
}else{
	$obj->displayRecords();
}




?>

</body>
</html>