<?php
class Database {
protected $username = 'root';
protected $password = '';
protected $con = null;

public function __construct() {
     try {
     $this -> con = new PDO("mysql:host=localhost;dbname=oop.local",$this -> username, $this -> password);
          // set the PDO error mode to exception
     $this ->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
}


     
}



?>