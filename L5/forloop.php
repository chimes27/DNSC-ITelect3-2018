<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="display.php" method="POST">
	<?php for($x=0;$x<5;$x++){ ?>
	<input type="text" name="<?php echo 'in'.$x; ?>">
	<?php } ?>
	<input type="submit" name="submit" value="Click me">
</form>

</body>
</html>