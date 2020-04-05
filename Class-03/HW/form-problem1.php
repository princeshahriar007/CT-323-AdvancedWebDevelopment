<!DOCTYPE html>
<html>
<head>
	<title>Form Task - 1</title>
</head>
<body>
    <?php 
    if(isset($_GET['Add'])){
        if ($_GET['first'] != NULL && $_GET['second'] != NULL && $_GET['third'] != NULL) {
            echo $_GET['first']+$_GET['second']+$_GET['third'];
        }else{
            echo 'One or more fields are empty';
        }
    }
    ?>
	<form method="GET" action="">
		<input type="number" name="first"><br>
		<input type="number" name="second"><br>
        <input type="number" name="third"><br>
		<input type="submit" name="Add" value="Add">
	</form>
</body>
</html>