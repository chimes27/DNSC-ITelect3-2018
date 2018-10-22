<?php 
$type = $_POST['CustomerType'];
switch ($type) {
	case 1:
		echo "Residential";
		break;
	case 2:
		echo "Commercial";
		break;
	default:
		# code...
		break;
}
?>