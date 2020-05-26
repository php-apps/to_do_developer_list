<?php
require_once("../private/config.php");

//Instances
$database = new Database();
$db = $database->connect();
$user = new User($db);

$user->showMeRegisterForm();

if(isset($_POST['submit'])){ // Occurs when user click at the register button
	if(empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
		echo 'All fields are required...';
		return;
	}
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	if($user->usernameExist($username)){
		echo "Username exist...";
		return;
	}
	if($user->emailExist($email)){
		echo "Email exist...";
		return;
	}
	$user->addUser($firstName,$lastName,$username,$email,$password);
}