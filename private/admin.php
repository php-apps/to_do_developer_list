<?php
require_once("config.php");
// $user_id = $_SESSION['user_id']; //That's your admin ID
$database = new Database();
$db = $database->connect();
$user = new User($db);
$user->showMeLoggedNavigation();
