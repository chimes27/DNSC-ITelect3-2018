<?php 
if(isset($_POST['submit'])){
	$row = $_POST['row'];
	$col = $_POST['column'];

	$x=0;
	echo "<table>";
	echo "<tr>";
	$count = 0;
	while($count<$col){
		echo "<td>$count</td>";
		$count++;
	}
	echo "</tr>";
	
	while($x<$row){
		echo "<tr>";
		$y=$x;
		$count = 0;
		echo "<td>$x</td>";
		while($count<$col){
			$prod = $x * $y;
			echo "<td>" . $prod . "</td>";
			$y++;
			$count++;
		}
		echo "</tr>";
		$x++;
	}
	echo "</table>";
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<input type="number" name="row" placeholder="number of rows">
	<input type="number" name="column" placeholder="number of columns">
	<input type="submit" name="submit" value="submit">
</form>