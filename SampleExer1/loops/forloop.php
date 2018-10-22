<?php 
if(isset($_POST['submit'])){
	$row = $_POST['row'];
	$col = $_POST['column'];
	echo "<table>";
	echo "<tr><td></td>";
	for($a=0;$a<$col;$a++){
		echo "<td>$a</td>";
	}
	echo "</tr>";
	for($x=0;$x<$row;$x++){
		echo "<tr>";
		echo "<td>$x</td>";
		for($y=0;$y<$col;$y++){
			$prod = $x * $y;
			echo "<td>$prod</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

}

?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<input type="number" name="row" placeholder="number of rows">
	<input type="number" name="column" placeholder="number of columns">
	<input type="submit" name="submit" value="submit">
</form>