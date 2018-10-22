<?php 
$base = $_POST['base'];
$product=1;
for($x=1;$x<=$base;$x++){
	$product = $product * $x;
	if($x<$base){
		echo "$x" . " x ";
	}else{
		echo $x . "<br/>";
	}
	

}
echo "Factorial = $product";

?>