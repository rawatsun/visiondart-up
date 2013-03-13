<?php
include_once($_SERVER['DOCUMENT_ROOT'].'vd-up1/trunk/visiondart/library/common.inc.php');

if(isset($_GET['controller']) && !empty($_GET['controller'])){
      $controller =$_GET['controller'];
}else{
      $controller ='loadindexfile';  //default controller
}

if(isset($_GET['function']) && !empty($_GET['function'])){
      $function =$_GET['function'];
}else{
      $function ='mainViewOfPage';    //default function
}

$controller=strtolower($controller);

$fn = SITE_ROOT.'controller/'.$controller . '.php';

if(file_exists($fn)){
      require_once($fn);
      $controllerClass=$controller.'Controller';
      if(!method_exists($controllerClass,$function)){
          header("Location: 404/error.html");
      }

      $obj=new $controllerClass;
      $obj-> $function();

}else{
      die($controller .' controller not found');
}
?>
