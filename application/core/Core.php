<?php
/**
 * @author Oliver Mensah <https://omensah.github.io/resume>
 * @link https://github.com/OMENSAH/barePHP
 * App Core Class
 * Creates URL and Load core controller
 * URL FORMAT - /controller/method/params
 */
class Core {
    protected $currentController = 'Welcome';
    protected $currentMethod  = 'index';
    protected $params = [];

    /**
     * @return void
     */
    public function __construct(){
        $url = $this->getUrl();
        if(file_exists("../application/controllers/".ucwords($url[0]). ".php")){
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
       }
       else{
           if(ucwords($url[0] )){
                require_once '../application/404/404.php';
                exit();
           }
       }
       require_once '../application/controllers/'.$this->currentController . '.php';
       $this->currentController = new $this->currentController;
       if(isset($url[1])){
           if(method_exists($this->currentController, $url[1])){
               $this->currentMethod = $url[1];
           }else{
               require_once '../application/404/404.php';
               exit();
           }
           unset($url[1]);
       }
       $this->params = $url? array_values($url): [];
       $data = call_user_func_array([$this->currentController,$this->currentMethod], $this->params);
       print($data);
    }
    /**
     * @return mixed $url
     */
    public function getUrl(){
        if(isset($_GET['url'])){
          $url = rtrim($_GET['url'], '/');
          $url = filter_var($url, FILTER_SANITIZE_URL);
          $url  = explode("/", $url);
          return $url;
        }
    }
}