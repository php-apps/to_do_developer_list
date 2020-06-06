<?php
require_once("config.php");
//$userId = $_SESSION['userId']; //That's your admin ID
$database = new Database();
$db = $database->connect();
$user = new User($db);
// $user->showMeLoggedNavigation();

$task = new Task($db);
$allUsers = $user->getAllUsers();

$user->showMeAdminPage($user,$task,$allUsers);
// form goes here
// fetch data from the global $_POST variable, assign them to variables, check for data validity, send them to method

// $title = $_POST['title'];
// $description = $_POST['description'];





/********************************* test for addTask ******************* */
// $title = "a";
// $description = "a";
// $task->addTask($_SESSION['userId'],$title,$description);






/********************************* test for updateTask ****************** */
//$idTask = 5;
//$task->updateTask($idTask,$_SESSION['userId'],$title,$description);








/********************************* test for deleteTask ************* */

//$idTask = 5;
//$task->deleteTask($idTask);




/********************************* users list ************* */


//print_r($allUsers);



?>
