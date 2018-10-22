<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<?php for($i=0; $i<10; $i++){ ?>
	<input type="number" name="<?php echo "var" . $i ?>">
	<?php } ?>
	<input type="submit" name="submit" value="Sort me">
</form>
<?php
	if(isset($_POST['submit'])){
		$arr = array();
		for($i=0;$i<10;$i++){
			$arr[$i] = $_POST['var'.$i];
		}
		for($i=0;$i<10;$i++){
			for($j=0;$j<10;$j++){
				if($arr[$i] < $arr[$j]){
					$dum = $arr[$i];
					$arr[$i] = $arr[$j];
					$arr[$j] = $dum;
				}
			}
		}
		for($i=0;$i<10;$i++){
			echo $arr[$i];
		}
		
	}


 ?>
</body>
</html>