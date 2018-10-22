<?php 
class CRUD{
	public $con;
	function __construct(){
		$server= "localhost";
		$dbName = "itelect3";
		$user = "root";
		$this->con = new mysqli($server, $user, "", $dbName);
		if($this->con->connect_error){
			echo "error";
		}//else{
		//	echo "connected";
		//}
	}
	function InsertRecord($fname, $lname, $email, $password, $gender){
		$sql = "INSERT INTO personInfo(fname, lname, gender, email, password) VALUES('$fname', '$lname','$gender','$email', '$password')";
		if($this->con->query($sql) == TRUE){
			echo "record inserted";
		}else{
			echo "error: ".$this->con->error;
		}
	}

	function displayRecords(){
		$sql = "SELECT fname, lname, gender, email FROM personInfo";
		$data = $this->con->query($sql);
		if($data->num_rows == 0){
			echo "The table is empty";
		}else{
		
		echo "<table>";
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>". $row['fname'] . "</td>";
			echo "<td>". $row['lname'] . "</td>";
			echo "<td>". $row['gender'] . "</td>";
			echo "<td>". $row['email'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	}
}



?>