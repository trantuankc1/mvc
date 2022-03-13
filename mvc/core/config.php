<?php
class Database {
     protected $host = 'localhost';
     protected $user = 'root';
     protected $password = '';
     protected $database = 'oop.local';

     protected $con = null;
     public function __construct(){
          $this -> Connect();
     }

     public function Connect() {
          $this -> con = new mysqli($this -> host, $this -> user, $this -> password, $this -> database);
          if(!$this -> con){
               return false;
          }
     }
     public function excute_query($query) {
       return mysqli_query($this -> con, $query);
     }
   

     
}

?>