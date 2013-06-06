<?php 
	header("Content-type: text/html; charset=utf-8");
	include_once 'db.php';
	include_once 'user.php';
	
	if (User::checkUser($_POST['name'], $_POST['password'])) {
		echo "Error: los datos no son correctos <br />";
	} else if (User::addUser($_POST["name"],$_POST["password"])){
		echo("OK<br />");
	} else {
		echo("Error: no se puede añadi el nuevo usuario <br />");
		
	}
?>