<?php
session_start();
include 'Connection.php';
$db = new Connection();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Password Reset</title>
  </head>
  <body>
    <?php
      if(isset($_POST['submit'])){
        $token = $_POST['token'];
        $chk_t = "SELECT * FROM reset WHERE token='$token';";
        $res = $db->fetch($chk_t, null);
        if (count($res) == 1 && $_POST['password'] == $_POST['password_confirmed']) {
          $del_q = "DELETE FROM reset WHERE token='$token';";
          $db->insert($del_q, null);
          foreach ($res as $data) {
            $p = md5($_POST['password']);
            $user_id = $data['user_id'];
            $update_q = "UPDATE users SET password='$p' WHERE id='$user_id';";
            $db->insert($update_q, null);
          }
          echo "Password Updated";
        }else{
          echo "Token does not match / Password does not match";
        }
      }
    ?>
    <form action="" method="POST">
      <input type="text" name="token"><br>
      <input type="password" name="password"><br>
      <input type="password" name="password_confirmed"><br>
      <input type="submit" name="submit" value="Change Password">
    </form>
  </body>
</html>
