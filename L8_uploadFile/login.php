<?php
require_once 'crud.php';

$email = $_POST['email'];
$password = $_POST['password'];
$crud = new CRUD();
$crud->auth($email,$password);

header('Location: profile.php');

?>