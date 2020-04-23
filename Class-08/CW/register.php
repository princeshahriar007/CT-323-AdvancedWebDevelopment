<?php
include 'Connection.php';
$db = new Connection();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>

    <?php
      if(isset($_POST['submit'])){
        $usr = $_POST['username'];
        $pass = md5($_POST['password']);
        $query = "INSERT INTO users (username, password) VALUES ('$usr', '$pass');";
        $db->insert($query, null);
        echo "Registered";
      }
    ?>

    <form action="" method="POST">
      <input type="text" name="username"><br>
      <input type="password" name="password"><br>
      <input type="submit" name="submit" value="Register">
    </form>
  </body>
</html>
