<?php
/**
 * @author Oliver Mensah <https://omensah.github.io/resume>
 * @link https://github.com/OMENSAH/barePHP
 * Base Controller
 * Loads the models and Views 
 */
class BaseController {
    /**
     * @param mixed $View  A name of the file to be loaded as view 
     * @param mixed $data  Data structure to be passed to the view
     * @return void
     */
    public function loadView($view, $data=[]){
        if(file_exists('../application/views/'. $view .'.php')){
            require_once('../application/views/'. $view .'.php');
        }else{
            require_once('../application/404/404.php');
        }
    }
    /**
     * @param mixed $model A name of file to be loaded as model
     * @return $model
     */
    public function loadModel($model){
        require_once('../application/models/'. $model . '.php');
        return new $model();
      }
  }