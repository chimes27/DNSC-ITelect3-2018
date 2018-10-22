<?php
require_once 'crud.php';
class Edit extends CRUD{

	function displayItem($id){
		$sql = "SELECT * FROM personInfo WHERE id='$id'";
		$data = $this->con->query($sql);
		if($data->num_rows > 0){
			$row = $data->fetch_assoc();
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
		<input type="text" name="fname" value="<?php echo $row['fname']?>"><br/>
		<input type="text" name="lname" value="<?php echo $row['lname']?>"><br/>
		<select name="gender" value="<?php echo $row['gender']?>">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
		<input type="email" name="email" value="<?php echo $row['email']?>"><br/>
		<input type="hidden" name="id" value="<?php echo $row['id'];?>">
		<input type="submit" name="submit" value="Save Record">
	</form>		

		<?php	
		}
	} ///end of function displayItem

	function editItem($id, $fname, $lname, $gender, $email){
		$sql = "UPDATE personInfo SET fname='$fname', lname='$lname', gender='$gender',email = '$email' WHERE id='$id'";
		if($this->con->query($sql)){
			echo "record updated";
			$this->displayRecords();
		}
	}

} //end edit class
$obj = new Edit();

if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$id = $_POST['id'];
	$obj->editItem($id, $fname, $lname, $gender, $email);
}else{
	$id= $_GET['id'];
	$obj->displayItem($id);	
}




?>

