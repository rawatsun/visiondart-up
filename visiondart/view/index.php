<?php session_start();

	include_once('../model/connnection-class.php');
 ?>

<?php 
if (isset($_REQUEST['user_name']) && isset($_REQUEST['password']))
{

$user_name		 = $_REQUEST['user_name'];
$password  		 = md5($_REQUEST['password']);
$user_name	     = "'".$user_name."'";
$password	     = "'".$password."'";
}


if (isset($_REQUEST['reg_user_name']) && isset($_REQUEST['reg_password']) &&
isset($_REQUEST['reg_first_name']) && isset($_REQUEST['reg_last_name']) && 
isset($_REQUEST['reg_email']) && isset($_REQUEST['reg_address']) &&
isset($_REQUEST['reg_phone']) && isset($_REQUEST['reg_dob'])&&
isset($_REQUEST['reg_age']) && isset($_REQUEST['reg_country']) && isset($_REQUEST['reg_gender'])) {

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
}


?>

<?php
/*  object of the the class DbConnection is created */
$dbconnection = new DbConnection();



/* call to the function  to connect to the host using authentication*/
$dbconnection -> connectToDatabse("localhost","visiondart","root","");
//$dbconnection -> connectToDatabse("hostname","databasename","username","password");



/*2. cloumn name to select*/
//$arrayofcolumn = array('id','name');
$arrayofcolumn = array('user_name','password');


/*2. cloumn name to select */
//$arrayofcolumnwhere = array('id' =>'"1"' , 'name' => '"suraj"' , 'laname' => '"rawat"');


$arrayofcolumnwhere = array('user_name' =>$user_name,'password'=>$password);


/*3. cloumn name to be selected according to where clause*/
//$arrayofcolumnorderby = array('id', 'name' ,'asc');
//$arrayofcolumnorderby = array('col1', 'col2' ,'ordery clause');


/*5. cloumn name to be selected  by group by clause */
//$arrayofcolumngroupby = array('id');
//$arrayofcolumngroupby = array('column');


/*call to the function  to select the data from the table . function takes 5 arguments , PS - they are not mandatory 
1. tablename
2. cloumn name to select 
3. cloumn name to be selected according to where clause 
4. cloumn name to be selected  by orderby clause 
5. cloumn name to be selected  by group by clause  
*/
//$dbconnection -> selectFromTable("variables",$arrayofcolumn,$arrayofcolumnwhere,$arrayofcolumnorderby,$arrayofcolumngroupby);
$result = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);
if ($result == 'You are not logged in'){
	echo 'You are not logged in';
} else {
	 $_SESSION['username']  = $result;
	 echo ' ';
}
/*2. cloumn name with the values to insert */














$arrayofcolumninsert = array('user_id' =>$reg_user_name, 'password' => $reg_password
	, 'first_name' => $reg_first_name, 'last_name' => $reg_last_name, 'gender' => $reg_gender
	, 'date_of_birth' => $reg_dob, 'phone' => $reg_phone
	, 'address' => $reg_address, 'country' => $reg_country, 'date_of_registration' => '"null"',
	 'date_of_deletion' => '""', 'email_id' => $reg_email, 'page_link' => '""');
//$arrayofcolumninsert = array('key' =>'"values"');


/*
call to the function  to insert the data into the table . function takes 2 arguments , PS - they are  mandatory 
1. tablename
2. cloumn name with the values to insert
*/
//$dbconnection -> insertIntoTable("variables",$arrayofcolumninsert);
$dbconnection -> insertIntoTable("users",$arrayofcolumninsert);




/*2. cloumn name with the values to to delete */
//$arrayofcolumndelete = array('id' =>'"400"' , 'name' => '"suraj"' , 'laname' => '"rawat"');
//$arrayofcolumndelete = array('key' =>'"value"');


/*
call to the function  to delete data from  into the table . function takes 2 arguments , PS - they are  mandatory 
1. tablename
2. cloumn name with the values to to delete 
*/
//$dbconnection -> deleteFromTable("variables",$arrayofcolumndelete);
//$dbconnection -> deleteFromTable("tablename",$arrayofcolumndelete);



/*2. cloumn name with the values to to update*/
//$arrayofcolumntoupdate= array('id' =>'"4001"');
//$arrayofcolumntoupdate= array('key' =>'"value"');




/*3. cloumn name with the values to to update where */
//$arrayofcolumntoupdatewhere= array('id' =>'"28"');
//$arrayofcolumntoupdatewhere= array('key' =>'"values"');



/*
call to the function  to update data from   the table . function takes 3 arguments , PS - they are  mandatory 
1. tablename
2. cloumn name with the values to to update

3. cloumn name with the values to to update where  
*/


//$dbconnection -> updateToTable("variables",$arrayofcolumntoupdate,$arrayofcolumntoupdatewhere);

//$dbconnection -> updateToTable("tablename",$arrayofcolumntoupdate,$arrayofcolumntoupdatewhere);



$dbconnection ->closeConnection();
 ?>