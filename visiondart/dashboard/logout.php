<?php session_start();

if (isset($_REQUEST['logout'])){
	session_destroy();
	session_unset();
	header("Location: ././isndex.php");
	exit();
}
 ?>