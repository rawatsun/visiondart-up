<?php
  class loadindexfileController{
   function __construct() {

   }
   function mainViewOfPage(){
      loadView('main.php');    
   }

   function loadDasboard(){
      loadDasboardtemplate('user-dashboard.php');
         }

      function listing1(){
      loadView('reg.php',$arrValue);

   }

	function saveData(){
echo '<pre>';
print_r($_REQUEST);
		die("i am in save data");

   }
}
?>
