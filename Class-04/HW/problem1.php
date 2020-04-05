<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
	<?php 

		if (isset($_POST['submit'])) {
			if($_FILES['image']['size'] == 0) {
				echo "Image is missing";
			}else{
				if ((($_FILES['image']['type']=="image/png") || ($_FILES['image']['type']=="image/jpeg")) && ($_FILES['image']['size'] <= 5242880)) {
					echo "Upload Success!";
					$tmp = $_FILES['image']['tmp_name'];
					#$img_name = $_FILES['image']['name'];
					$img_name = uniqid().'.jpg';
					#var_dump($_FILES);
					move_uploaded_file($tmp, "photos/".$img_name);
				}else{
					echo "not supported";
				}	
			}
			
			
		}

	?>

	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="image" accept="image/*">
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>
