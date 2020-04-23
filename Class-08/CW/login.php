<?php
session_start();
include 'Connection.php';
$db = new Connection();

if(isset($_SESSION['user_id'])){
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>

    <?php
      if(isset($_POST['submit'])){
        $usr = $_POST['username'];
        $pass = md5($_POST['password']);
        $query = "SELECT * FROM users WHERE username='$usr' AND password='$pass'";
        $result = $db->fetch($query, null);
        if (count($result) == 1) {
          foreach ($result as $data) {
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['user_name'] = $data['username'];
          }
          header("location:index.php");
        }else{
          echo "Credentials does not match";
        }
      }
    ?>

    <form action="" method="POST">
      <input type="text" name="username"><br>
      <input type="password" name="password"><br>
      <input type="submit" name="submit" value="Login">
    </form>
    <a href="forget.php">Forget Password</a>
  </body>
</html>
