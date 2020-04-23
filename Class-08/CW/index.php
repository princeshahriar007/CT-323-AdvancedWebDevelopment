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
    <title>Add a Note</title>
  </head>
  <body>
    <p>(<?php echo $_SESSION['user_name']; ?>) <a href="logout.php">Logout</a></p>
    <h2>Add a note</h2>
    <?php
    if(isset($_POST['submit'])){
      if(!empty($_POST['title']) && !empty($_POST['day']) && !empty($_POST['details'])){
        $img_name = uniqid()."jpg";
        $db->addNote($_POST['title'],$_POST['details'],$_POST['day'], $_SESSION['user_id'], $img_name);
        $tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($tmp, "photos/".$img_name);
        echo "Note Added";
      }else{
        echo "All Fields must be filled up";
      }
    }

    #Mark as archive
    if(isset($_GET['mark_id'])){
      $id = $_GET['mark_id'];
      $query = "UPDATE tasks SET status  = 0 WHERE id='$id';";
      $db->insert($query, null);
      header("location: index.php");
    }
    ?>
    <form style="border: 2px solid blue; padding: 20px;" method="POST" action="" enctype="multipart/form-data">
      <input type="text" name="title" placeholder="Title"><br>
      <input type="text" name="day" placeholder="Date"><br>
      <input type="file" name="image" accept="image/*"><br>
      <textarea name="details" placeholder="Details"></textarea>
      <input type="submit" name="submit" value="Add">
    </form>
    <a href="Completed.php">Completed Tasks</a>
    <hr>

    <?php $result = $db->getAllNotes($_SESSION['user_id']); ?>
    <table border="1px">
      <tr>
        <th>Title</th>
        <th>Details</th>
        <th>Date</th>
        <th>Image</th>
        <th>Status</th>
      </tr>
      <?php foreach ($result as $data) { ?>
      <tr>
        <td><?php echo $data['title']; ?></td>
        <td><?php echo $data['details']; ?></td>
        <td><?php echo $data['day']; ?></td>
        <td>
          <?php
            if ($data['image'] != null) {
          ?>
          <img width="100" height="100" src="photos/<?php echo $data['image']; ?>" alt="">
          <?php
            }else {
              echo "No image";
            }
          ?>
        </td>
        <td>
          <a href="update.php?id=<?php echo $data['id']; ?>">Edit</a> |
          <a onclick="return confirm('Are you sure?');" href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
          <?php
            echo " || ";
            if ($data['status'] == 1) {
          ?>
            <a href="?mark_id=<?php echo $data['id']; ?>">Mark as Done</a>
          <?php
            }else{
              echo "COMPLETED!!";
            }
          ?>
        </td>
      </tr>
    <?php } ?>
    </table>
  </body>
</html>
