<!DOCTYPE html>
<html>
<head>
	<title>Prince</title>
</head>
<body>

<?php 

	if (isset($_POST['submit'])) {
		$pass = $_POST['password'];
		if (strlen($pass) < 6) {
			echo "Password Should be minimum 6 digit";
		}else{
			echo "Logged In";
		}
	}

?>

	<form>
		<input type="text" class="username"><br>
		<input type="password" class="password"><br>
		<input type="submit" class="submit">
	</form>
</body>
</html>