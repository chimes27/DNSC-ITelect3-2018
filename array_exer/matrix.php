<?php
$arr = array();
$arr2=array();
$product = array();
for($i=0;$i<5;$i++){
	for($j=0;$j<5;$j++){
		$arr[$i][$j] = rand(0,10);
		$arr2[$i][$j] = rand(0,10);
	}
}

for($i=0;$i<5;$i++){
	for($j=0;$j<5;$j++){
		$product[$i][$j] = $arr[$i][$j] * $arr2[$i][$j];
	}
}



?>