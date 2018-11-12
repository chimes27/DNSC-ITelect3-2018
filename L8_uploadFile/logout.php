<?php 
session_start();
session_unset();
session_destroy();

//header('Location: loginForm.php');
header('Refresh: 0; url=loginForm.php');
exit();

?>