<?php session_start();

	include_once('../model/connnection-class.php');
 ?>

<?php 

$user_name		 = $_REQUEST['user_name'];
$password  		 = $_REQUEST['password'];
$user_name	     = "'".$user_name."'";
$password	     = "'".$password."'";
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

echo $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);



/*2. cloumn name with the values to insert */
//$arrayofcolumninsert = array('id' =>'"400"' , 'name' => '"suraj"' , 'laname' => '"rawat"');
//$arrayofcolumninsert = array('key' =>'"values"');


/*
call to the function  to insert the data into the table . function takes 2 arguments , PS - they are  mandatory 
1. tablename
2. cloumn name with the values to insert
*/
//$dbconnection -> insertIntoTable("variables",$arrayofcolumninsert);
//$dbconnection -> insertIntoTable("tablename",$arrayofcolumninsert);




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