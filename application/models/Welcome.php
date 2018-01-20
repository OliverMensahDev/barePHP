<?php
  class Welcome {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    }
    //Same Procedure to query db
    //But uses the pre-defined methods in our Database classes
    public function getPosts(){
      $this->db->query("Write your queries here");
      $results = $this->db->resultset();
      return $results;
    }