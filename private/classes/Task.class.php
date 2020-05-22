<?php

class Task {

	//Database parameters
	private $conn;
	private $table = 'task';

	//Class constructor
	public function __construct($db){
		$this->conn = $db;
	}
   
    public function getAllTasks()
    {
        $sql = "SELECT * FROM {$this->table}";
		$query = mysqli_query($this->conn,$sql);
		if($query){
			return mysqli_fetch_all($query,MYSQLI_ASSOC);
		}else{
			header('Location:../');
		}
    }

    public function getUserTasks($id)
    {
    	$sql = "SELECT task.id_task, task.id_user, task.title, task.description, task.creation_date,user.f_name FROM {$this->table} INNER JOIN user ON task.id_user=user.id_user WHERE user.id_user='{$id}'";
		$query = mysqli_query($this->conn,$sql);
		if($query){
			return mysqli_fetch_all($query,MYSQLI_ASSOC);
		}else{
			header('Location:../');
		}
    }

    public function addTask($id)
    {
    	$user_id = $_SESSION['user_id'];
    	$title = $_POST['title'];
		$description = $_POST['description'];
		$creation_date = date('Y-m-d');

    	$sql = "INSERT INTO {$this->table} VALUES (NULL,'$user_id','$title','$description','$creation_date')";
		$query = mysqli_query($this->conn,$sql);
		if ($query) {
			// header('Location:');
		}else{
			header('Location:../');
		}
    }

    public function editTask($id)
    {
    	$task_id = $_POST['task_id'];
    	$user_id = $_SESSION['user_id'];
    	$title = $_POST['title'];
		$description = $_POST['description'];
		$creation_date = date('Y-m-d');

    	$sql = "UPDATE {$this->table} SET task.id_user={$user_id}, task.title={$title}, task.description={$description}, task.creation_date={$creation_date} WHERE task.id_task={$task_id}";
		$query = mysqli_query($this->conn,$sql);
		if ($query) {
			// header('Location:');
		}else{
			header('Location:../');
		}
    }

    public function deleteTask($id)
    {
    	$sql = "DELETE FROM {$this->table} WHERE id_task={$id}";
    	$query = mysqli_query($this->conn,$sql);
		if ($query) {
			// header('Location:');
		}else{
			header('Location:../');
		}
    }

}