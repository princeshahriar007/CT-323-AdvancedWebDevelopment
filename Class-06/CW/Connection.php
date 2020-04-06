<?php
class Connection{
  // $conn is the object which ginna be used everywhere
  public $conn;
  
  public function __construct(){

    $this->conn = new PDO("mysql:host=localhost;dbname=ctg-323", "root", "");

  }
}




?>
