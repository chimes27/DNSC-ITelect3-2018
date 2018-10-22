<?php 
require_once 'caesar.php';

class Home extends Cipher{

}

$msg = "this is a password";

$obj = new Home();
$obj->explodeStr($msg);
$obj->encrypt();
echo $obj->msg;
$obj->explodeStr($obj->msg);
$obj->decrypt();
echo $obj->msg;

?>