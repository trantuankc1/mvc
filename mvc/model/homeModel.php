<?php
class HomeModel extends Database {

     public function __construct() {
          parent::__construct();
     }
   public function GetCategory() {
     $sql = "SELECT * FROM tbl_category ORDER BY id_category DESC";
     $query = $this -> con -> query($sql);
     $result = $query->fetchAll();
     return $result;
   }
   

}