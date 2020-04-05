<!DOCTYPE html>
<html>
<head>
	<title>Form Task - 1</title>
</head>
<body>
    <?php
    if (isset($_GET['add'])) {
        echo $_GET['num1']+$_GET['num2'];
    }elseif (isset($_GET['sub'])) {
        echo $_GET['num1']-$_GET['num2'];
    }elseif (isset($_GET['mul'])) {
        echo $_GET['num1']*$_GET['num2'];
    }elseif (isset($_GET['div'])) {
        echo $_GET['num1']/$_GET['num2'];
    }
    
    ?>
	<form method="GET" action="">
		<input type="number" name="num1"><br>
		<input type="number" name="num2"><br>
		<input type="submit" name="add" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="mul" value="*">
        <input type="submit" name="div" value="/">
	</form>
</body>
</html>
