<?php
	include_once 'db.php';
	
	class User 
	{
		public static function checkUser ($name, $password) 
		{
			if (!empty($name) || !empty($password) ) {
				return false;
			} else {
				return true;
			}
		}
		
		//addUser devuelve verdadero o falso, y este es usado 
		//en } else if (addUser($_POST["name"],$_POST["password"])){
		public static function addUser ($name, $password) {
			//parametros servidor y base de datos
			$db = new DB("localhost", "jorgew7_excep");
			return $db->insert('users', array($name,$password));
		}
		
	}
?>