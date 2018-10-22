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
<?php 
if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];

	$server= "localhost";
	$dbName = "itelect3";
	$user = "root";
	$con = new mysqli($server, $user, "", $dbName);
	if($con->connect_error){
		echo "error: " . $con->error;
	}else{
		echo "connected";
	}
	$sql = "INSERT INTO personInfo(fname, lname, gender, email, password) VALUES('$fname', '$lname','$gender','$email', '$password')";
	if($con->query($sql) == TRUE){
		echo "record inserted";
	}else{
		echo "error: ".$con->error;
	}
	$sql = "SELECT fname, lname, gender, email FROM personInfo";
	$data = $con->query($sql);
	if($data->num_rows == 0){
		echo "The table is empty";
	}else{
		echo "<table>";
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>". $row['fname'] . "</td>";
			echo "<td>". $row['lname'] . "</td>";
			echo "<td>". $row['gender'] . "</td>";
			echo "<td>". $row['email'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}

}




?>

</body>
</html>