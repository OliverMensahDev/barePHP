<?php
/**
 * @author Oliver Mensah <https://omensah.github.io/resume>
 * @link https://github.com/OMENSAH/barePHP
 * Model Class
 */
  class Welcome {
    private $db;
    /**
     * @return void
     */
    public function __construct(){
      $this->db = new Database;
    }
    /**
     * Same Procedure to query db
     * But uses the pre-defined methods in our Database classes
     * @return void
     */
    public function getPosts(){
      $this->db->query("Write your queries here");
      $results = $this->db->resultset();
      return $results;
    }