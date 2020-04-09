<?php
class Connection{
  // $conn is the object which gonna be used everywhere
  public $conn;

  public function __construct(){

    $this->conn = new PDO("mysql:host=localhost;dbname=ctg-323", "root", "");

  }

  #       Get all notes
  public function getAllNotes(){
    $statement = $this->conn->prepare("SELECT * FROM tasks");
    $statement->execute();
    $data = $statement->fetchAll();

    return $data;
  }

  #       Delete a note
  public function deleteNote($id){
    $statement = $this->conn->prepare("DELETE FROM tasks WHERE id=$id;");
    $statement->execute();
  }

  #       Update a note
  public function updateNote($title, $details, $day, $id){
    $title = addslashes($title);
    $details = addslashes($details);
    $day = addslashes($day);
    $statement = $this->conn->prepare(
      "UPDATE tasks
      SET title = '$title', details = '$details', day = '$day'
      WHERE id=$id;"
    );
    $statement->execute();
  }

  #       Delete a note


  #       Get a note
  public function getNote($id){
    $statement = $this->conn->prepare("SELECT * FROM tasks WHERE id='$id';");
    $statement->execute();
    $data = $statement->fetchAll();

    return $data;
  }

  #       Insert a note
  public function addNote($title, $details, $day){
    $statement = $this->conn->prepare("INSERT INTO tasks (title,details,day,status) VALUES
    (:title,:details,:day,:status);");
    $statement->execute(
      array(
          ':title' => $title,
          ':details' => $details,
          ':day' => $day,
          ':status' => 1
      )
    );
  }
}




?>
