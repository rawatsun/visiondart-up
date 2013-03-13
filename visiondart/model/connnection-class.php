<?php 
	class DbConnection 
	{
		private $_hostName , $_dbname, $_userName , $_password ,$con ,$query ;


		function connectToDatabse($_hostName , $_dbname ,  $_userName , $_password)
		{
			$this->_hostName = $_hostName;
			$this->_userName = $_userName;
			$this->_password = $_password;

			$this->_dbname   = $_dbname;
			$this->con = new PDO("mysql:host=$this->_hostName;dbname=$this->_dbname","$this->_userName",
								 "$this->_password") or
			die("can;t connect");
			



		}



	function insertIntoTable($_tableName,$arrayofcolumninsert) 
		{
			$str="";
			$str2="";
			$keys="";
			$values="";
			if (empty($arrayofcolumninsert)){
			$str = "" ;
			$str2 = "" ;
			}
			else {
			foreach ($arrayofcolumninsert as $key => $value) {
			$str .=  $key . ",";
			$str2 .=  $value . ",";
			}
			$str = substr($str, 0,-1);
			$str2 = substr($str2, 0,-1);
			//echo 'insert  into  $this->_tableName($str) values($str2)';
			$this->query=$this->con -> prepare("insert  into  $this->_tableName($str) values($str2)");
			$this->query->execute();

			}
		}

function regSelect( $_tableName , $arrayofcolumn="",$arrayofcolumnwhere ="",$arrayofcolumnorderby="" ,$arrayofcolumngroupby="" )
		{

			$and="and";
			$str="";
			$orderby="";
			$i=0;
			 $arrayofcolumn1= $arrayofcolumn;
			$groupby="";

			if (empty($arrayofcolumn)){
				$arrayofcolumn = "*" ;

			}
			else {
			$arrayofcolumn = implode(",", $arrayofcolumn);
			$i=count($arrayofcolumn);
			}
			if (empty($arrayofcolumnorderby)){
			$orderby = "" ;
			}
			else {

			$orderby = " order by ".implode(",", $arrayofcolumnorderby);
			$index  = count($arrayofcolumnorderby);
			$orderby = substr($orderby, 0,-4) ." ". $arrayofcolumnorderby[$index-1] ;
			
			}
			if (empty($arrayofcolumngroupby)){
			$groupby = "" ;
			}
			else {

			$groupby = " group by ".implode(",", $arrayofcolumngroupby);
			}
			if (empty($arrayofcolumnwhere)){
				$str = "" ;
			}
			else {
			foreach ($arrayofcolumnwhere as $key => $value) {
			$str .=  $key . "=" .  $value . " and ";
			}
			$str = " where " . $str ;
			$str = substr($str, 0,-4);
			}
			$this->_tableName= $_tableName;
			$this->query=$this->con -> prepare("select $arrayofcolumn from $this->_tableName $str $groupby $orderby ");
			$this->query->execute();
			//echo "select $arrayofcolumn from $this->_tableName $str $groupby $orderby ";
			if ($row=$this->query->fetch()) {

				return  "user already exists";

			}
			else
			{
			return "f";
							
			}
				
		//	var_dump($this->query->fetch());
		}


		function selectFromTable ( $_tableName , $arrayofcolumn="",$arrayofcolumnwhere ="",$arrayofcolumnorderby="" ,$arrayofcolumngroupby="" )
		{

			$and="and";
			$str="";
			$orderby="";
			$i=0;
			 $arrayofcolumn1= $arrayofcolumn;
			$groupby="";

			if (empty($arrayofcolumn)){
				$arrayofcolumn = "*" ;

			}
			else {
			$arrayofcolumn = implode(",", $arrayofcolumn);
			$i=count($arrayofcolumn);
			}
			if (empty($arrayofcolumnorderby)){
			$orderby = "" ;
			}
			else {

			$orderby = " order by ".implode(",", $arrayofcolumnorderby);
			$index  = count($arrayofcolumnorderby);
			$orderby = substr($orderby, 0,-4) ." ". $arrayofcolumnorderby[$index-1] ;
			
			}
			if (empty($arrayofcolumngroupby)){
			$groupby = "" ;
			}
			else {

			$groupby = " group by ".implode(",", $arrayofcolumngroupby);
			}
			if (empty($arrayofcolumnwhere)){
				$str = "" ;
			}
			else {
			foreach ($arrayofcolumnwhere as $key => $value) {
			$str .=  $key . "=" .  $value . " and ";
			}
			$str = " where " . $str ;
			$str = substr($str, 0,-4);
			}
			$this->_tableName= $_tableName;
			$this->query=$this->con -> prepare("select $arrayofcolumn from $this->_tableName $str $groupby $orderby ");
			$this->query->execute();
			//echo "select $arrayofcolumn from $this->_tableName $str $groupby $orderby ";
			if ($row=$this->query->fetch()) {
				return $row['user_name']; 
			}
			else
			{
				return  'You are not logged in';

			}
				
		//	var_dump($this->query->fetch());
		}

		

				function closeConnection(){


					$this->con=null;
				}


	}

 ?>