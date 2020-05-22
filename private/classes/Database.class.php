<?php
// Database created with singleton design pattern
// Create instance connection like Database::getInstance->getConnection
class Database
{

    private static $instance;
    public $conn;

   
    private function __construct()
    {   
      $this->conn =  new mysqli(HOST,USER,PASS,DB);
            
    }
    
    public static function getInstance()
    {
      if(!self::$instance){
        self::$instance = new Database();
        
      }
   
      return self::$instance;
    }
  
    public function getConnection()
    {
      return $this->conn;
      
    }

}