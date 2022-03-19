<?php
require_once('mvc/core/controller.php');
class home extends controller {

     public function __construct() {

     }  
     public function home () {
       $category = $this -> model('HomeModel') -> GetCategory();
      $this -> view('home',['category' => $category]);
  
     }

   


    
}