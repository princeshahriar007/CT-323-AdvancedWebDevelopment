<!DOCTYPE html>
<html>
<head>
	<title>Prince</title>
</head>
<body>
	<h2>This is upload</h2>
	<h2>This is upload 2</h2>


<?php 

	if (isset($_POST['submit'])) {
		if (($_FILES['image']['type']=="image/png") && ($_FILES['image']['size'] <= 20000)) {
			echo "Working";
		}else{
			echo "not supported";
		}
		$tmp = $_FILES['image']['tmp_name'];
		#$img_name = $_FILES['image']['name'];
		$img_name = uniqid().'.jpg';
		#var_dump($_FILES);
		move_uploaded_file($tmp, "photos/".$img_name);
	}
	#Image Upload & Validation

?>

	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="image" accept="image/*">
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>
