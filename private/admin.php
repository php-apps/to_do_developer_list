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




/********************************* users list ************* */


$all_users = $user->getAllUsers($db);
//print_r($all_users);

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
        <th>RoleId</th> 
        <th>FirstName</th>
        <th>LastName</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
       </tr>";
    for ( $i = 0; $i<count( $all_users ); $i++ ) {
        $user_id = $all_users[$i]["id_user"];
        $role_id = $all_users[$i]["id_role"];
        $f_name  = $all_users[$i]["f_name"];
        $l_name  = $all_users[$i]["l_name"];
        $username= $all_users[$i]["username"];
        $email   = $all_users[$i]["email"];
        $password= $all_users[$i]["password"];
        echo "
        <tr style='padding:10px'>
        <td>$user_id</td>
        <td>$role_id</td>
        <td>$f_name</td>
        <td>$l_name</td>
        <td>$username</td>
        <td>$email</td>
        <td>$password</td>
        </tr>
        ";
    }
    echo "</table></div>";

?>