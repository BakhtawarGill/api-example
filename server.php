<?php

require "helper_methods.php";
require "classes.php";

header("Content-Type:application/json");  
$requestMethod = $_SERVER['REQUEST_METHOD'];

$userObj = new User();

/**
 * 
 * GET: /server.php?query=fetchusers 
 * 
 */


if($requestMethod == 'PUT') {

} 
elseif($requestMethod == 'GET') {

	if(isset($_GET['query']) && $_GET['query'] == "fetchusers"){

		$result = $userObj->retrieveAllUsers();
		response($result);

	}

} 
elseif($requestMethod == 'POST') {
	
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$result = $userObj->create($name);
		response($result);
	}

} 
elseif($requestMethod == 'Delete') {
	
}


?>