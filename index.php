<?php
require_once("private/config.php");

//Instances
$database = new Database();
$db = $database->connect();
$user = new User($db);


if($user->logged()){
	$userId = $_SESSION['userId'];
	$role = $user->getRole($userId);
	if($role == 'admin'){
		header('Location: private/admin.php');
	}elseif ($role == 'user') {
		header('Location: private/developer.php');
	}
}else{
	$user->showMeLoginForm();
}
?>
