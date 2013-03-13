<?php
  class productModel{
   function __construct() {
       $mysql_db_hostname = "localhost";
       $mysql_db_user = "root";
       $mysql_db_password = "root";
       $mysql_db_database = "mvc";

       $con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
       mysql_select_db($mysql_db_database, $con) or die("Could not select database");

   }

   function showProductListing(){
            $query="select * from mvc";
            $res=mysql_query($query);
            $checkData=mysql_num_rows($res);
            $arrProduct=array();
            if($checkData > 0){
                while($row=mysql_fetch_assoc($res)){
                      $arrProduct[]=$row;
                }
                return $arrProduct;
            }
   }
   
   function productDetails($arrArgument){
            $id=$arrArgument['id'];
            $query="select * from mvc where id='$id'";
            $res=mysql_query($query);
            $checkData=mysql_num_rows($res);
            $arrProduct=array();
            if($checkData > 0){
                $row=mysql_fetch_assoc($res);
                $arrProduct[]=$row;
                return $arrProduct;
            }
   }
}
?>
