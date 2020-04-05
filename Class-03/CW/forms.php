<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<?php 
		/*
		if (isset($_GET['send'])) {
			//echo $_GET['username'];
			print_r($_GET);
		}
		
		if (isset($_GET['submit'])) {
			if (!empty($_GET['fname']) && !empty($_GET['fname'])) {
				echo $_GET['fname'].' '.$_GET['lname'];
			}else{
				echo "invalid";
			}
		}
		*/
		if (isset($_POST['multi'])) {
			if ($_POST['num1']!=NULL && $_POST['num2']!=NULL) {
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$multiple = $num1 * $num2;
				echo $multiple;
			}else{
				echo "invalid";
			}
		}
	?>
	<!--
	<form method="" action="">  
		Method and action are mandatory 
		get method values can be seen in url
		post method values cannot be seen in url
	
		<input type="text" name="username"><br>
		<input type="submit" name="submit" value="Send">
	</form>
	<form>
		<input type="text" name="fname"><br>
		<input type="text" name="lname"><br>
		<input type="submit" name="submit" value="Send">
	</form>
	-->
	<!-- 	Type  - Object type - button, dropdown etc 
			name  - Used in php code
			value - Displayed in the browser -->
	<form method="POST" action="">
		<input type="number" name="num1"><br>
		<input type="number" name="num2"><br>
		<input type="submit" name="multi" value="Send">
	</form>
</body>
</html>