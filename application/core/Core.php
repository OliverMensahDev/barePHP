<?php 
/*
 * App Core Class
 * Creates URL and Load core controller
 * URL FORMAT - /controller/method/params
 */
class Core {
    protected $currentController = 'Welcome';
    protected $currentMethod  = 'index';
    protected $params = [];
    public function __construct(){
        $url = $this->getUrl();
       //look for controllers 
       if(file_exists("../application/controllers/".ucwords($url[0]). ".php")){
        //set as controller 
        $this->currentController = ucwords($url[0]);
        //unset 0 index
        unset($url[0]);
       }
       //require controller 
       require_once '../application/controllers/'.$this->currentController . '.php';
       $this->currentController = new $this->currentController;
       //get controller method 
       if(isset($url[1])){
           //check for the method 
           if(method_exists($this->currentController, $url[1])){
               $this->currentMethod = $url[1];
           }
           unset($url[1]);
       }
       //Get params 
       $this->params = $url? array_values($url): [];
       //call a callback with array of params
       call_user_func_array([$this->currentController,$this->currentMethod], $this->params);
    }
    
    public function getUrl(){
        //is url set
        if(isset($_GET['url'])){
          //strip the ending slash if there one
          $url = rtrim($_GET['url'], '/');
          //sanitize as url 
          $url = filter_var($url, FILTER_SANITIZE_URL);
          //break url into array
          $url  = explode("/", $url);
          return $url;
        }
    }
}