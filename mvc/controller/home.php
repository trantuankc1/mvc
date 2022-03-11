<?php
require_once('mvc/core/controller.php');
class home extends controller {
     
     public function home () {
          $this -> view('public/home');
     }
    
}