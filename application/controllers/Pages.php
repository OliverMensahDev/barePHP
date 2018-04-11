<?php
/**
 * @author Oliver Mensah <https://omensah.github.io/resume>
 * @link https://github.com/OMENSAH/barePHP
 * Controller Class
 */
  class Pages extends BaseController{
    public function __construct(){
      
    }
    /**
     * Home Page //  sitename/index or sitename
     * @return void
     */
    public function index(){
        $data = [
            'title' => "Welcome To barePHP",
             'description'=> 'Building Web App With Full Controller'
        ];
        $this->loadView('welcome/index', $data);
    }
    /**
     * About Page //  sitename/about or 
     * @return void
     */
    public function about(){
      echo "me";
    }
  }
