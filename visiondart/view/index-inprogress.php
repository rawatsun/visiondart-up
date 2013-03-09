<html>
<head>
	<title></title>
</head>

<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	body{

		text-align: center;
	}
	div{
		margin: 10px auto;

		height: 25%;
		margin: 10px;
		padding :10px;

		border: 1px solid red;
			}
			#p1{
				display: inline;
			}

			span{


				color : gray;
				font-family: verdana;
				font-size: 1.2em;
				padding: 2px;
				margin: 10px;

			}
			input[type="submit"],input[type="text"],input[type="checkbox"]{
				padding: 2px;
				border: 1px solid green;
			}
	
</style>
<script type="text/javascript">
var i=0;
function check(){
	
	if(i==0){

	document.getElementById('colname').style.display="none"; 
	document.getElementById('p1').style.display="none"; 
i=1;
	}
	else{

	document.getElementById('colname').style.display="inline"; 
	document.getElementById('p1').style.display="inline"; 
i=0;
	}
}
</script>
<body>

<div class="select">
<span>Don't select column wise </span><input type='checkbox' name='Active' value='' onclick="check()" ><br><br><br><br>
	
<form action="call.php">

	<span>select </span><input type="text" id ="colname" name="colname"> 
	<span>from </span><input type="text" id= "table" name="table"> <p id="p1"><span> where =</span> <input type="text" id ="wcolname" name= ="wcolname"> 
</p>
<input type="submit"> 

</form>
</div>

<div class="insert"></div>

<div class="update"></div>

<div class="delete"></div>



</body>
</html>