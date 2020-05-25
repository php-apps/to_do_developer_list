<?php
require_once("config.php");
//$userId = $_SESSION['userId']; //That's your admin ID
$database = new Database();
$db = $database->connect();
$user = new User($db);
$user->showMeLoggedNavigation();

$task = new Task($db);

// form goes here
// fetch data from the global $_POST variable, assign them to variables, check for data validity, send them to method

// $title = $_POST['title'];
// $description = $_POST['description'];
// $date = $_POST['creationDate'];





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


$allUsers = $user->getAllUsers();
//print_r($allUsers);

echo "<div><h3>Registered users<h3>";

?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>

<?php

echo "<table>
       <tr>
        <th>UserId</th>
        <th>RoleType</th> 
        <th>FirstName</th>
        <th>LastName</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
       </tr>";
    for ( $i = 0; $i<count( $allUsers ); $i++ ) {
        $userId = $allUsers[$i]["id_user"];
        $roleType = $allUsers[$i]["role_type"];
        $fName  = $allUsers[$i]["f_name"];
        $lName  = $allUsers[$i]["l_name"];
        $username= $allUsers[$i]["username"];
        $email   = $allUsers[$i]["email"];
        $password= $allUsers[$i]["password"];
        echo "
        <tr style='padding:10px'>
        <td>$userId</td>
        <td>$roleType</td>
        <td>$fName</td>
        <td>$lName</td>
        <td>$username</td>
        <td>$email</td>
        <td>$password</td>
        </tr>
        ";
    }
    echo "</table></div>";

?>