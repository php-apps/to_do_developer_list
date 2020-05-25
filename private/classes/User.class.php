<?php
session_start();
class User{
	//Database parameters
	private $conn;
	private $table = 'user';
	private $user_id;

	//Database columns
	private $username;
	private $password;

	//Class constructor
	public function __construct($db){
		$this->conn = $db;
	}
	// Session check, if exist user is logged
	public function logged(){
		if(isset($_SESSION['user_id'])) return true;
		else return false;
	}
	// HTML Markups for Login Form
	public function showMeLoginForm(){
		$html = <<<HTML
			<form action="public/login.php" method="post">
				<input type="text" name="username" autocomplete="off" placeholder="Enter username...">
				<input type='password' name='password' placeholder="Enter password...">
				<input type='submit' name='submit' value='LogIn'>
			</form>
			<hr>
HTML;
		echo $html;
	}
	// HTML Markup Navigation for logged users
	public function showMeLoggedNavigation(){
		$html = <<<HTML
			<form action='logout.php' method='post'>
				<input type='submit' name='logout' value='Logout'>
			</form>
			<hr>
HTML;
		echo $html;
	}

	// Function for LOGIN
	public function logMe($username,$password){
		$this->username = trim($username);
		$this->password = trim($password);
		$sql = "SELECT id_user FROM {$this->table} WHERE username = '{$this->username}' AND password = '{$this->password}'";
		$result = mysqli_query($this->conn,$sql);
		if(mysqli_num_rows($result)){
			$row = mysqli_fetch_assoc($result);
			$id_user = $row['id_user'];
			$_SESSION['user_id'] = $id_user;
			header('Location:../index.php');
		}else{
			header('Location:../index.php');
		}
	}
	// Funtion for retrieve role
	public function getRole($user_id){
		$this->user_id = $user_id;
		$sql = "SELECT user.id_user,role.role_type FROM {$this->table} INNER JOIN role ON user.id_role = role.id_role WHERE id_user = {$this->user_id}";
		$result = mysqli_query($this->conn,$sql);
		$row = mysqli_fetch_assoc($result);
		return $row['role_type'];
	}

    // add user
	public function addUser($id_role,$f_name,$l_name,$username,$email,$password){

        $sql = "INSERT INTO user(id_user,id_role,f_name,l_name,username,email,password)
                VALUES(null,$id_role,'$f_name','$l_name','$username','$email','$password')";
        
		$query = mysqli_query($this->conn,$sql);
		
        if ($query) {
            echo "Success";
        }else{
			echo "Failure";
		}

	}
	

	// remove user
	 public function removeUser($email){
		$sql = "DELETE FROM user WHERE email = '$email'";
		
        $query = mysqli_query($this->conn,$sql);

        if ($query) {
            echo "Success";
        }else{
			echo "Failure";
		}
	}
	
	// update user, one value at a time
	   public function updateUser($email,$update,$value){
        $sql = "UPDATE user SET $update = '$value' WHERE email = '$email'";
	 
		$query = mysqli_query($this->conn,$sql);

        if ($query) {
            echo "Success";
        }else{
			echo "Failure";
		}
               
	}

	 	public function getAllUsers(){
		$sql = "SELECT user.id_user,user.f_name,user.l_name,user.username,user.email,user.password,role.role_type FROM {$this->table} INNER JOIN role ON user.id_role = role.id_role";
		$query = mysqli_query($this->conn,$sql);

		while($row = mysqli_fetch_assoc($query)){

        $all_users[] = $row; 

         }   
		return $all_users;
		
    }
	
}

?>
