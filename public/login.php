<?php
require_once("../private/config.php");

//Instances
$database = new Database();
$db = $database->connect();
$user = new User($db);

if(isset($_POST['submit'])){ // Occurs when user click at the login button
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user->logMe($username,$password);
}