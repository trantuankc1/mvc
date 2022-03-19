<?php
require_once('./mvc/controller/home.php');

class app {
     protected $controller = 'home'; // điều hướng
     protected $action = 'home';  // hàm được chạy
     protected $params = array(); // tham số

     public function __construct () {
     $url = $this -> UrlProcess();
      // process controller
      if(isset($url[0]) && file_exists('mvc/controller/'.$url[0].'.php')){
          $this -> controller = $url[0];
          unset($url[0]);
      } 
      require_once('mvc/controller/'.$this -> controller.'.php');
      $this -> controller = new $this -> controller;

     // process action
      if(isset($url[1])){
           if(method_exists($this -> controller,$url[1])){
                $this -> action = $url[1];
                unset($url[1]);
           }
      }

      // process params
      $this -> params = $url ? array_values($url) : array();
      call_user_func_array([$this -> controller, $this -> action], $this -> params);

     }
    
     public function UrlProcess() {
          if(isset($_GET['url'])){
               return explode("/", filter_var(trim($_GET['url'],'/')));
          }
     }

}