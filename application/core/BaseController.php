<?php
/*
  *Base Controller 
  *Loads the models and Views 
*/
class BaseController {
    //load view 
    public function loadView($view, $data=[]){
        if(file_exists('../application/views/'. $view .'.php')){
            require_once('../application/views/'. $view .'.php');
        }else{
            //view does not exit 
            die($view .'.php exists in the views folder');
        }
    }
    //load model 
    public function loadModel($model){
        require_once('../application/models/'. $model . '.php');
        return new $model();
      }
  }