<?php session_start(); 
if (!(isset($_SESSION['username']))) {
	header("Location: ../index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>index - Dashboard</title>
    <script src="jquery-lib/jquery-1.8.3.js" type="text/javascript"></script>
    <script src="js/JScript.js" type="text/javascript"></script>
    <link href="./css/reset.css" rel="stylesheet" />
</head>

<body>
<div class="header">
	  <img alt="" src="../images/logo1.png" height="50" width="65" style="margin-top:-5px"/>

<p style="color:white;font-size:0.8em;float:right;margin:13px">welcome,<?php echo $_SESSION['username']; ?>
<a href="./logout.php?logout=0" style="color:white">Logout</a>

</p>
</div>
