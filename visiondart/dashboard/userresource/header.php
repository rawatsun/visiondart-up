<?php 
if (!isset($_SESSION['username'])) {
	header("Location: ../index.php");
}

?>
<div class="header">
	  <img alt="" src="../images/logo1.png" height="50" width="65" style="margin-top:-5px"/>

<p style="color:white;font-size:0.8em;float:right;margin:13px">welcome,<?php echo $_SESSION['username']; ?>
<a href="./logout.php?logout=0" style="color:white">Logout</a>

</p>
</div>
