<?php
class Database {
     protected $host = 'localhost';
     protected $user = 'root';
     protected $password = '';
     protected $database = 'oop.local';

     protected $con = null;
     protected $result = null;
     public function __construct(){
          $this -> Connect();
        
     }

     public function Connect() {
          $this -> con = new mysqli($this -> host, $this -> user, $this -> password, $this -> database);
          if(!$this -> con){
               echo 'kết nối thất bại';
               exit();
          }else{
               mysqli_set_charset($this -> con, 'utf8');
          }
     }
     public function excute_query($query) {
          $this -> result = $this ->con -> query($query);
          return $this -> result;
     }
   
     public function get() {
          if($this -> result){
               $data = mysqli_fetch_array($this -> result);
          }else{
               $data = 0;
          }
          return $data;
     }

     public function get_all() {
          if(!$this -> result) {
               return false;
          }else {
               while($row = $this -> get()) {
                    $data[] = $row;
               }
          }
          return $data;
     }

     public function insertdata($name,$passowrd) {
          $sql = "INSERT INTO customer(name,password)VALUES('$name','$passowrd')"; 
          return  $this -> excute_query($sql);
     }

     public function updatedata($id,$name,$passowrd) {
          $sql = "UPDATE customer SET name = '$name', password = '$passowrd' WHERE id = '$id'";
          return $this -> excute_query($sql);
     }

     public function deletedata($id) {
          $sql = "DELETE FROM customer WHERE id = '$id'";
          return $this -> excute_query($sql);
     }
}

?>