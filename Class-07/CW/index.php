<?php
  include 'Connection.php';
  $db = new Connection();
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
        $db->addNote($_POST['title'],$_POST['details'],$_POST['day']);
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

    <hr>

    <?php $result = $db->getAllNotes(); ?>
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
        <td>
          <a href="update.php?id=<?php echo $data['id']; ?>">Edit</a> |
          <a onclick="return confirm('Are you sure?');" href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
        </td>
      </tr>
    <?php } ?>
    </table>
  </body>
</html>
