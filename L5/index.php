<?php 
$count=0;
echo "<table>";
while($count<5){
	$col = 0;
	echo "<tr>";
	while($col<10){
		echo "<td style='border: 1px solid black;'>$col</td>";
		$col++;
	}
	echo "</tr>";
	$count++;
}
echo "</table>";
$x=0;
echo "<ul>";
do{
	echo "<li>$x</li>";
	$x++;
}while($x<10);

?>