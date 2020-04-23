<?php
  session_start();
  include 'Connection.php';
  $db = new Connection();

  if($_SESSION['user_id'] == null){
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Completed Tasks</title>
  </head>
  <body>
    <?php
      $user_id = $_SESSION['user_id'];
      $query = "SELECT * FROM tasks WHERE user_id='$user_id' AND status = 0";
      $result = $db->fetch($query, null);
    ?>
    <table border="1px">
      <tr>
        <th>Title</th>
        <th>Details</th>
        <th>Date</th>
        <th>Status</th>
      </tr>
      <?php foreach ($result as $data) { ?>
      <tr>
        <td><?php echo $data['title']; ?></td>
        <td><?php echo $data['details']; ?></td>
        <td><?php echo $data['day']; ?></td>
        <td>COMPLETED!!!</td>
      </tr>
    <?php } ?>
    </table>
  </body>
</html>
