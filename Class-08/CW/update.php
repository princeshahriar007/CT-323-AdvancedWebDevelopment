<?php
  include 'Connection.php';
  $db = new Connection();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Note</title>
  </head>
  <body>
    <?php
      if(isset($_GET['id'])){
        $getNote = $db->getNote($_GET['id']);
        }
      if(isset($_POST['submit'])){
        $db->updateNote($_POST['title'], $_POST['details'], $_POST['day'], $_GET['id']);
        header("location:index.php");
      }
      foreach ($getNote as $data) {
    ?>
    <form style="border: 2px solid blue; padding: 20px;" method="POST" action="">
      <input type="text" name="title" placeholder="Title" value="<?php echo $data['title']; ?>"><br>
      <input type="text" name="day" placeholder="Date" value="<?php echo $data['day']; ?>"><br>
      <textarea name="details" placeholder="Details"><?php echo $data['details']; ?></textarea>
      <input type="submit" name="submit" value="Update">
    </form>
  <?php } ?>
  </body>
</html>
