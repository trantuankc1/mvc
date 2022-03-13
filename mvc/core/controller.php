<?php
class controller {
  // xử lí hàm gọi model
  public function model($model) {
    if(file_exists('./mvc/model/'.$model.'.php')){
      require_once('./mvc/model/'.$model.'.php');
      return new $model;
    }else {
      return null;
    }
  }

  // Process View 
  public function view ($name, $data = array()) {
    if(file_exists('./mvc/view/'.$name.'.php')){
      require_once('./mvc/view/'.$name.'.php');
    }else {
      echo '404 View';
    }
  }



}
