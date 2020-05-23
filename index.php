<?php
require_once("private/config.php");

//Instances
$database = new Database();
$db = $database->connect();
$user = new User($db);
$task = new Task($db);
$allTask = $task->getAllTasks();

var_dump($allTask);

if($user->logged()){
	$user_id = $_SESSION['user_id'];
	$role = $user->getRole($user_id);
	if($role == 'admin'){
		header('Location: private/admin.php');
	}elseif ($role == 'user') {
		header('Location: private/developer.php');
	}
}else{
	$user->showMeLoginForm();
}
?>
