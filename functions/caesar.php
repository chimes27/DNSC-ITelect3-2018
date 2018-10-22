<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<input type="radio" name="option" value="1">Encrypt <br/>
	<input type="radio" name="option" value="2">Decrypt <br/>
	<textarea name="msg" rows="6" cols="60" id="msg"></textarea>
	<input type="submit" name="submit" value="Submit">
</form>
<?php 
if(isset($_POST['submit'])){
	$option = $_POST['option'];
	$msg = $_POST['msg'];
	$object = new Cipher();

	/**
	$sample = "hello,this is, a, message";
	echo "<pre>";
	var_dump(explode(",", $sample)); 
	echo "</pre>";
	**/

	if($option==1){
		$object->explodeStr($msg);
		$object->encrypt();
		echo "<script>document.getElementById('msg').value='$object->msg'</script>";
	}else{
		$object->explodeStr($msg);
		$object->decrypt();
		echo "<script>document.getElementById('msg').value='$object->msg'</script>";
	}
}

class Cipher{
	public $msg;

	function explodeStr($msg){
		$msg = $msg;
		$msg = str_split($msg);
		$this->msg = $msg;
	}

	function encrypt(){
		$arr = $this->msg;
		for($x=0;$x<count($arr);$x++){
			$dum = $arr[$x];
			$dum = ord($dum) + 3;
			$arr[$x] = chr($dum);
		}
		$strMsg = implode("",$arr);
		$this->msg = $strMsg;
	}
	function decrypt(){
		$arr = $this->msg;
		for($x=0;$x<count($arr);$x++){
			$dum = $arr[$x];
			$dum = ord($dum) - 3;
			$arr[$x] = chr($dum);
		}
		$strMsg = implode("",$arr);
		$this->msg = $strMsg;
	}
}



?>


</body>
</html>