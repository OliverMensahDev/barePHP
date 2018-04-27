<?php 
  // Load Config
  require_once 'config/config.php';
  // Autoload Core Classes
  spl_autoload_register(function($className){
      require_once("core/". $className. '.php');  
  });

  //Load Helpers like redirect, etc from the helper folder with 
  // require_once 'helpers/session_helper.php'
  //Create your own helpers too and load them here
