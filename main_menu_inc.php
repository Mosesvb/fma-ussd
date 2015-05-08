<?php
require_once 'configureCyclos.php';
$userService = new Cyclos\UserService();

try {
	$query = new stdclass();
	$query->username = $_GET['username'] ;
	$t = $userService->locate($query);
	// var_dump($t);
	return $t;
} catch (Cyclos\ServiceException $e) {
	if ($e->errorCode == "ENTITY_NOT_FOUND") {
		echo("username does not exist");
	}else{
		echo("Error with code $e->errorCode while performing the usersearch \n");
	}
}
?>