<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<?php 
		if (isset($_POST['multi'])) {
			if ($_POST['usrname']!='Prince' && $_POST['pass']!='pr1nc3') {
				echo "login success";
			}else{
				echo "invalid username or password!!!";
			}
		}
	?>
	<form method="POST" action="">
		<input type="text" name="usrname">
		<input type="password" name="pass">
		<input type="submit" name="submit" value="Send">
	</form>
</body>
</html>
