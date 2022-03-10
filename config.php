<?php
class Database {
     private $host = 'localhost';
     private $user = 'root';
     private $password = '';
     private $database = 'oop.local';

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
     public function getdata($query) {
          $data = [];
          $result = $this -> excute_query($query);
          while($row =  mysqli_fetch_array($result)){
               $data[] = $row;
          }
          return $data;
     }

     
}

?>