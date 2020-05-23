<?php
require_once("config.php");
//$user_id = $_SESSION['user_id']; //That's your admin ID
$database = new Database();
$db = $database->connect();
$user = new User($db);
$user->showMeLoggedNavigation();

$task = new Task($db);

// form goes here
// fetch data from the global $_POST variable, assign them to variables, check for data validity, send them to method

// $title = $_POST['title'];
// $description = $_POST['description'];
// $date = $_POST['creation_date'];





/********************************* test for addTask ******************* */
//$title = "test";
//$description = "test";
//$date = "1992-10-17";
//$task->addTask($_SESSION['user_id'],$title,$description,$date);






/********************************* test for updateTask ****************** */
//$id_task = 5;
//$task->updateTask($id_task,$_SESSION['user_id'],$title,$description);








/********************************* test for deleteTask ************* */

//$id_task = 5;
//$task->deleteTask($id_task);