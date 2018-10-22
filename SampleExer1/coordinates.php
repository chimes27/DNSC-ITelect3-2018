<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$x = $_POST['x'];
$y = $_POST['y'];
if($x==0 && $y==0){
	echo "origin";
}elseif($x>0 && $y>0){
	echo "Quadrant I";
}else{
	echo "Invalid Input";
}

?>

</body>
</html>