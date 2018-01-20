<?php
  class Welcome extends BaseController{
    public function __construct(){
      
    }
    //Home Page
    public function index(){
        //set data
        $data = [
            'title' => "Welcome To barePHP",
             'description'=> 'Building Web App With Full Controller'
        ];
        $this->loadView('welcome/index', $data);
    }
  }
