<?php 
require_once 'crud.php';
session_start();
if(isset($_SESSION['user'])){
	$email = $_SESSION['user'];
	$crud = new CRUD();
	$row = $crud->displayUser($email);
	echo "First Name: ".$row['fname'];
	echo "Last Name: " . $row['lname'];
	echo "Email: " . $row['email'];
	echo "<a href='http://localhost/itElect3/lessons/l8_uploadfile/logout.php'>Log Out</a>";
	if($row['profilePic'] == ''){
		//form for uploading
	?>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<label>Select image to upload</label>
			<input type="file" name="profilePic">
			<input type="submit" name="submit" value="Upload Image">
		</form>
	<?php
	}else{
		echo "<img src='". $row['profilePic'] ."' width='100px' height='100px'>";
	}
}else{
	echo "Sorry. Forbidden access";
}



?>