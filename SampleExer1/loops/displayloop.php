<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
if(isset($_POST['submit'])){
	for($i=0;$i<5;$i++){
		echo $_POST['inp'.$i];
	}
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<?php 
	for($i=0; $i<5; $i++){
	?>
	<input type="text" name="inp<?php echo $i;?>">
	
	<?php	
	}
	?>
	<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>