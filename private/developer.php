<?php
require_once("config.php");
//$userId = $_SESSION['userId']; //That's your admin ID
$database = new Database();
$db = $database->connect();
$user = new User($db);
$user->showMeLoggedNavigation();

$task = new Task($db);

if (isset($_SESSION['userId'])) {
	$userTask = $task->getUserTasks($_SESSION['userId']);
}

var_dump($userTask);