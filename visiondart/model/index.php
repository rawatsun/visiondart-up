<?php session_start();
	include_once('../model/connnection-class.php');
 ?>

<?php
$dbconnection = new DbConnection();
$dbconnection -> connectToDatabse("localhost","visiondart","root","");

if (isset($_REQUEST['codetorun'])){


if ( $_REQUEST['codetorun'] == "0" ){

if (isset($_REQUEST['user_name']) && isset($_REQUEST['password']))
{

$user_name		 = $_REQUEST['user_name'];
$password  		 = md5($_REQUEST['password']);
$user_name	     = "'".$user_name."'";
$password	     = "'".$password."'";
}
$arrayofcolumn = array('user_name','password');

$arrayofcolumnwhere = array('user_name' =>$user_name,'password'=>$password);
$result = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);
if ($result == 'You are not logged in'){
	echo $result;
} else {
	echo $_SESSION['username']  = $result;
	
}

}else if ( $_REQUEST['codetorun'] == "registerme" ){

/*
if (isset($_REQUEST['reg_user_name']) && isset($_REQUEST['reg_password']) &&
isset($_REQUEST['reg_first_name']) && isset($_REQUEST['reg_last_name']) && 
isset($_REQUEST['reg_email']) && isset($_REQUEST['reg_dob'])&&
isset($_REQUEST['reg_age'])) {



*/

		$reg_user_name = "'" .$_REQUEST['reg_user_name']. "'";
		$reg_password = "'".$_REQUEST['reg_password']. "'";
		$reg_first_name = "'".$_REQUEST['reg_first_name']. "'";
		$reg_last_name = "'".$_REQUEST['reg_last_name']. "'";
		$reg_email= "'" .$_REQUEST['reg_email']."'";
		$reg_address= "'" .$_REQUEST['reg_address']."'";
		$reg_phone= "'".$_REQUEST['reg_phone']. "'";
		$reg_dob= "'".$_REQUEST['reg_dob']. "'";
		$reg_age= "'" .$_REQUEST['reg_age']."'";

		$reg_gender = "'" .$_REQUEST['reg_gender']."'";	
		$reg_country = "'" .$_REQUEST['reg_country']."'";	

		
		$arrayofregcolumn = array('user_id');
		$arrayofregcolumnwhere = array('user_name'=>$reg_user_name);

		$arrayofcolumninsert = array('user_name' =>$reg_user_name, 'password' => $reg_password
			, 'first_name' => $reg_first_name, 'last_name' => $reg_last_name, 'gender' => $reg_gender
			, 'date_of_birth' => $reg_dob, 'phone' => $reg_phone
			, 'address' => $reg_address, 'country' => $reg_country,'gender' => $reg_gender,
			 'date_of_deletion' => '""', 'email_id' => $reg_email, 'page_link' => '""');

		$result = $dbconnection->regSelect("users",$arrayofregcolumn,$arrayofregcolumnwhere);
		if($result == 'user already exists'){
			echo 'user already exists';
		}
		else if ($result == "f"){
			$dbconnection -> insertIntoTable("users",$arrayofcolumninsert);
			echo 'successfully registered';
		}

}else{
echo "not working  s s  s " ." ". $_REQUEST['codetorun'];

}

}

$dbconnection ->closeConnection();
 ?>