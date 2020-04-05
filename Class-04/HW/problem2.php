<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
	<?php 

		if (isset($_POST['submit'])) {
			if($_FILES['image']['size'] == 0 || empty($_POST['user']) || empty($_POST['user'])) {
				echo "One or more field/fields is/are missing";
			}else{
				if ((($_FILES['image']['type']=="image/png") || ($_FILES['image']['type']=="image/jpeg")) && ($_FILES['image']['size'] <= 5242880)) {
					$tmp = $_FILES['image']['tmp_name'];
					#$img_name = $_FILES['image']['name'];
					$img_name = uniqid().'.jpg';
					#var_dump($_FILES);
					move_uploaded_file($tmp, $img_name);
					echo "<h1>".$_POST['user']."</h1><br>";
					echo "<h1>".$_POST['email']."</h1><br>";
					echo '<img src=".$img_name.".'>';
				}else{
					echo "not supported";
				}	
			}
			
			
		}

	?>

	<form method="POST" action="" enctype="multipart/form-data">
		<input type="text" name="user"><br>
		<input type="email" name="email"><br>
		<input type="file" name="image" accept="image/*">
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>
