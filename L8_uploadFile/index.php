<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Create an Account</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label>First Name</label>
		<input type="text" name="fname">
		<label>Last Name</label>
		<input type="text" name="lname">
		<label>Email</label>
		<input type="email" name="email">
		<label>Password</label>
		<input type="password" name="password">
		<input type="submit" name="submit" value="Sign Up">
	</form>
	<div>
		<p>Already a member? <a href="loginForm.php">Login</a> here.</p>
	</div>
</body>
<?php
if(isset($_POST['submit'])){
	require_once 'crud.php';
	$crud = new CRUD();

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$crud->createUser($fname, $lname, $email, $password);
}




 ?>
</html>