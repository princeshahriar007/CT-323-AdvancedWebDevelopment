<!DOCTYPE html>
<html>
<head>
	<title>Form Task - 1</title>
</head>
<body>
    <?php
    $usr = "Prince";
    $pass = "135790";
    if (isset($_GET['Check'])) {
        if (!empty($_GET['user'])  && !empty($_GET['pass'])) {
            if (strlen($_GET['user']) >= 6 && strlen($_GET['pass']) >= 6) {
                if ($_GET['user'] == $usr && $_GET['pass'] == $pass) {
                    echo "login Success!";
                }else{
                    echo "Username and password do not match!!!";
                }
            }else{
                echo "Password and Username must be at least 6 digits";
            }
        }else{
            echo "One or more fields are missing";
        }
    }
    ?>
	<form method="GET" action="">
		<input type="text" name="user"><br>
		<input type="password" name="pass"><br>
		<input type="submit" name="Check" value="Login">
	</form>
</body>
</html>
