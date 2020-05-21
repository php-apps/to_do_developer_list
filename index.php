<?php
require_once("private/config.php");

//Instances
$database = new Database();
$db = $database->connect();
$user = new User($db);


if($user->logged()){
	$user->showMeLoggedNavigation();
	$user_id = $_SESSION['user_id'];
	$role = $user->getRole($user_id);
	if($role == 'admin'){
		echo "<h1>Admin Content go here</h1>"; // Only for test,delete this line and require admin.php
		//require("private/admin.php");
	}elseif ($role == 'user') {
		echo "<h1>User/developer Content go here <h1>"; // Only for test,delete this line and require developer.php
		//require("private/developer.php");
	}
}else{
	$user->showMeLoginForm();
}
?>