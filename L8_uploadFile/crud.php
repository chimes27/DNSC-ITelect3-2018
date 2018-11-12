<?php 
class CRUD{
	public $conn, $row;

	function __construct(){
		$this->conn = new mysqli("localhost","root","","l8_fileupload");
	}

	function createUser($fname, $lname, $email, $password){
		$sql = "INSERT INTO user(fname, lname, email, password) VALUES('$fname', '$lname', '$email', '$password')";
		if($this->conn->query($sql) == True){
			echo "Record Inserted";
		}else{
			echo "Error in saving data" . $this->conn->error;
		}
	}

	function auth($email, $pass){
		$sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			if(session_status()==PHP_SESSION_ACTIVE){
				session_unset();
				session_destroy();
			}
			session_start(); //start using the $_session variable
			$_SESSION['user'] = $row['email'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['fname'];
			
		}else{
			echo "Wrong email or password";
		}
	}

	function displayUser($email){
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0 ){
			$this->row = $result->fetch_assoc();
			return $this->row;
		}
		
	}

	function uploadImage($target_file, $tmpFile){
		if(move_uploaded_file($tmpFile, $target_file)){
			session_start();
			$id = $_SESSION['id'];
			$sql = "UPDATE user set profilePic='$target_file' WHERE id='$id'";
			if($this->conn->query($sql)==True){
				echo "Profile Pic saved";
			}else{
				echo "Error in uploading file" . $this->conn->error;
			}
		}else{
			echo "error in uploading file". $this->conn->error;
		}
	}

}//close class CRUD



?>