<html>
<head>
	<title></title>
</head>
<body>
Email<input type="text" id="t1"/>
<input type="button" onclick="test()">
<?php echo md5("123");  ?>

</body>
<script type="text/javascript">





function test() {
	
	var val = document.getElementById('t1').value;
//	var regstring = "^[a-zA-Z0-9._]+@[a-zA-Z]+\.[a-zA-Z]{1,4}";    // email id
var regstring  = "(0[1-9]|1[0-2])-(0[1-9]|1[0-9]|2[0-9]|3[0-1])-[0-9]{4}"; // date
	if (val.match(regstring)){
		//alert("matched");

	}
	else
	{
		window.location.href = "index.php";
	}
}
</script>
</html>