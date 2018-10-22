<?php 
$arr = array();
for($i=0;$i<5;$i++){
	for($j=0;$j<5;$j++){
		$arr[$i][$j] = rand(0,10);
		$arr2[$i][$j] = rand(0,10);
	}
}
for($i=0;$i<5;$i++){
	for($j=0;$j<5;$j++){
		$prod[$i][$j] = $arr[$i][$j] * $arr2[$i][$j];
	}
}

echo "ARRAY 1";
echo "<table>";
for($i=0;$i<5;$i++){
	echo "<tr>";
	for($j=0;$j<5;$j++){
		echo "<td>" . $arr[$i][$j] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";

echo "ARRAY 2";
echo "<table>";
for($i=0;$i<5;$i++){
	echo "<tr>";
	for($j=0;$j<5;$j++){
		echo "<td>" . $arr2[$i][$j] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";


echo "RESULT";
echo "<table>";
for($i=0;$i<5;$i++){
	echo "<tr>";
	for($j=0;$j<5;$j++){
		echo "<td>" . $prod[$i][$j] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";


?>