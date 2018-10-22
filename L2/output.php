<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap-4.1.3/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
<body>
<div class="container">
<h1>Personal Information</h1>
<table class="table table-bordered">
	<tr>
		<td>First Name</td>
		<td><?php echo $_POST['fname'];?></td>
	</tr>
	<tr>
		<td>Birthdate</td>
		<td><?php echo $_POST['bdate']; ?></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><?php echo $_POST['gender']; ?></td>
	</tr>
</table>
</div>
</body>
</html>