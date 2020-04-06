<?php
include 'Connection.php';
$db = new Connection();
$conn = $db->conn;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add a Note</title>
  </head>
  <body>
    <h2>Add a note</h2>
    <?php
    if(isset($_POST['submit'])){
      if(!empty($_POST['title']) && !empty($_POST['day']) && !empty($_POST['details'])){
        $statement = $conn->prepare("INSERT INTO tasks (title,details,day,status) VALUES
        (:title,:details,:day,:status);");
        $statement->execute(
          array(
              ':title' => $_POST['title'],
              ':details' => $_POST['details'],
              ':day' => $_POST['day'],
              ':status' => 1
          )
        );
        echo "Note Added";
      }else{
        echo "All Fields must be filled up";
      }
    }
    ?>
    <form style="border: 2px solid blue; padding: 20px;" method="POST" action="">
      <input type="text" name="title" placeholder="Title"><br>
      <input type="text" name="day" placeholder="Date"><br>
      <textarea name="details" placeholder="Details"></textarea>
      <input type="submit" name="submit" value="Add">
    </form>
  </body>
</html>
