<?php 
class Posts extends BaseController{
    public function __construct(){
       
    }
    public function index(){
        echo "index";
    }
    public function add($id){
        echo "add " . $id ;
    }
    
}
