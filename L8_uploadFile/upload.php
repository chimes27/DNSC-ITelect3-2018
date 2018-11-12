<?php 
require_once 'crud.php';

$target_dir = "images/"; //holds the directory to store image
$target_file = $target_dir.basename($_FILES["profilePic"]["name"]);
$uploadOK=1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
$tmpFile = $_FILES["profilePic"]["tmp_name"];
$upload = new CRUD();
$upload->uploadImage($target_file, $tmpFile);

?>