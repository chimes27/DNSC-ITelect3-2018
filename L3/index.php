<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
if(isset($_POST['submit'])){
	$x = $_POST['x'];
	$y = $_POST['y'];
	if($x==0 && $y==0){
		echo "origin";
	}elseif($x>0 && $y==0){
		echo "x-axis";
	}else{
		echo "not a number";
	}
}

?>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
	<input type="number" name="x">
	<input type="number" name="y">
	<input type="submit" name="submit">
</form>
</body>
</html>