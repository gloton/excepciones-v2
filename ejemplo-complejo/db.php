<?php
 	class DB {
  		public function __construct($host, $dbName, $user = "jorgew7_excep", $password = "prueba123") 
  		{
			$this->dbName =$dbName;
			$this->link = mysql_connect($host,$user,$password);
			mysql_select_db($this->dbName,$this->link);
 		}
 		public function insert($tableName, $data) 
 		{
 			$values = "";
 			foreach ($data as $v) {
 			 	if (!empty($values)) {
 					$values .= ", '$v'";
 				} else {
 					$values .= "'$v'";
 				}
 			}
 			$sql = "INSERT INTO $tableName VALUES ($values)";
 			return mysql_query($sql, $this->link);
 		}
 	}
?>