<?php 
class db {

   private $host = "localhost";
   private $username = "mirzanuh_ash";
   private $database = "mirzanuh_ash";
   private $password = ",oZM.v+*^2kp";
   protected $db;

   public function __construct(){
    try {
        
        /*
            * Create database connection
        */ 

        $this->db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->username, $this->password);

    } catch(PDOException $e){
        echo "Connection Problem: ". $e->getMessage();

    }

   }

}


 ?>