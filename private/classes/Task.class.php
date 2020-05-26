<?php

class Task {

	//Database parameters
	private $conn;
	private $table = 'task';
	private $tableUserTask = 'user_task';

	//Class constructor
	public function __construct($db){
		$this->conn = $db;
	}

    // get tasks per user id
	public function getUserTasks($id){
		$sql = "SELECT $this->tableUserTask.id_task,task.title, task.description,$this->tableUserTask.assignment_date,$this->tableUserTask.completed  FROM {$this->tableUserTask} JOIN task ON $this->tableUserTask.id_task = task.id_task JOIN user ON $this->tableUserTask.id_user = user.id_user WHERE user.id_user='{$id}'";
		$query = mysqli_query($this->conn,$sql);
		if($query){
			return mysqli_fetch_all($query,MYSQLI_ASSOC);
		}else{
			echo "No tasks assigned";
		}
	}
	

    public function addTask($id,$title,$description){
		$userId = $id;
    	$sql = "INSERT INTO {$this->table} VALUES (NULL,'$userId','$title','$description',current_timestamp)";
		$query = mysqli_query($this->conn,$sql);
		if ($query) {
			echo "Success";
		}else{
			echo "Failure";
		}
    }

    public function updateTask($idTask,$id,$title,$description){
    	$userId = $id;

    	$sql = "UPDATE {$this->table} SET id_user='{$userId}', title='{$title}', description='{$description}', creation_date=current_timestamp WHERE id_task='{$idTask}'";
		$query = mysqli_query($this->conn,$sql);
		if ($query) {
			echo "Success";
		}else{
			echo "Failure";
		}
    }

    public function deleteTask($id){
    	$sql = "DELETE FROM {$this->table} WHERE id_task={$id}";
    	$query = mysqli_query($this->conn,$sql);
		if ($query) {
			echo "Success";
		}else{
			echo "Failure";
		}
    }

}