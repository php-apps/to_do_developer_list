<?php
require_once("config.php");
//$user_id = $_SESSION['user_id']; //That's your admin ID
$database = new Database();
$db = $database->connect();
$user = new User($db);
$user->showMeLoggedNavigation();

$task = new Task($db);
$allTask = $task->getAllTasks();
if (isset($_SESSION['user_id'])) {
	$userTask = $task->getUserTasks($_SESSION['user_id']);
}

var_dump($userTask);