<?php
for($x=0;$x<5;$x++){
	echo $_POST['in'.$x] . " ";
}
foreach($_POST as $value){
	echo $value;
}

?>