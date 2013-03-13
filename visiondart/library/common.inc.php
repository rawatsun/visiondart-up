<?php
define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('SITE_ROOT',DOC_ROOT.'/vd-up1/trunk/visiondart/');
define('SITE_PATH','http://'.$_SERVER['HTTP_HOST'].'/vd-up1/trunk/visiondart/');
define('IMAGE_PATH',SITE_PATH.'images/');
define('CSS_PATH',SITE_PATH.'css/');
define('JS_PATH',SITE_PATH.'js/');
define('JS_LIB',SITE_PATH.'jquery-lib/');
define('FONT_LIB',SITE_PATH.'fonts/');
define('LIBRARY_ROOT',SITE_ROOT.'library/');
define('VIEW_PATH',SITE_ROOT.'view/');
define('VIEW_PATH_DASHB',SITE_ROOT.'dashboard/');
define('MODEL_PATH',SITE_ROOT.'model/');

function loadView($templateName,$arrPassValue=''){

         $view_path=VIEW_PATH.$templateName;
         if(file_exists($view_path)){
            if(isset($arrPassValue)){
                 $arrData=$arrPassValue;
            }

            include_once($view_path);
         }else{
            die($templateName. ' Template Not Found under View Folder');
         }

}

function loadDasboard($templateName,$arrPassValue=''){

         $view_path=VIEW_PATH_DASHB.$templateName;
         if(file_exists($view_path)){
            if(isset($arrPassValue)){
                 $arrData=$arrPassValue;
            }

            include_once($view_path);
         }else{

            die($templateName. ' Template Not Found under View Folder');
         }

}


function loadModel($modelName,$function,$arrArgument=''){
         $model_path=MODEL_PATH.$modelName.'.php';

         if(file_exists($model_path)){
            if(isset($arr)){
                 $arrData=$arrPassValue;
            }

            include_once($model_path);
            $modelClass=$modelName.'Model';
            if(!method_exists($modelClass,$function)){
                die($function .' function not found in Model '.$modelName);
            }

            $obj=new $modelClass;
            if(isset($arrArgument)){
                return $obj-> $function($arrArgument);
            }else{
                return $obj-> $function();
            }
         }else{
            die($modelName. ' Model Not Found under Model Folder');
         }

}
?>
