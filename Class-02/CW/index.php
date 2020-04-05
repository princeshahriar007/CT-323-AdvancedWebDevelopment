<?php 
	
	// $a = 1; 			# Assigning value - =
	// if ($a == 1) {		# Checking the value - ==
	// 	echo "Found!";
	// }else{
	// 	echo "Not Found!";
	// }

	// $b = '1';
	// if ($b === 1) {		# Checking the value & type - ===
	// 	echo "Found!";
	// }else{
	// 	echo "Not Found!";
	// }
	// $name = "Prince";
	// if ($name = "Prince") {
	// 	echo "Name is correct";
	// }else{
	// 	echo "Name is not correct";
	// }

	// $age = 22;
	// if ($name == "Prince" && $age == 23) {
	// 	echo "Information matched!";
	// }elseif($name == "Prince" || $age == 23) {
	// 	echo "Partially matched";
	// }else{
	// 	echo "Information didn't match";
	// }
	
	$num1 = 40;
	$num2 = 40;
	$num3 = 30;
	// if ($num1 > $num2) {
	// 	echo "Num1 is greater";
	// }elseif($num1 == $num2){
	// 	echo "Both are equal";
	// }else{
	// 	echo "Num2 is greater";
	// }

	// if ($num1 > $num2) {
	// 	if ($num1 > $num3) {
	// 		echo "Num1 is greater";
	// 	}elseif($num3 == $num2){
	// 		echo "All are equal";
	// 	}else{
	// 		echo "Num3 is greater";
	// 	}

	// }elseif($num1 == $num2){
	// 	if ($num3 > $num1) {
	// 		echo "Num3 is greater";
	// 	}elseif($num3 == $num2){
	// 		echo "All are equal";
	// 	}else{
	// 		echo "Num1 is greater";
	// 	}

	// }else{
	// 	if ($num3 > $num2) {
	// 		echo "Num3 is greater";
	// 	}elseif($num3 == $num2){
	// 		echo "All are equal";
	// 	}else{
	// 		echo "Num2 is greater";
	// 	}

	// }
	// if ($num1 > $num2 && $num1 > $num3) {
	// 	echo "Num1 is greater";
	// }elseif($num2 > $num1 && $num2 > $num3){
	// 	echo "Num2 is greater";
	// }else{
	// 	echo "Num3 is greater";
	// }


	// $num = 26;
	// $mod = $num % 2;
	// if ($mod == 0) {
	// 	echo $mod;
	// 	echo "Num is even";
	// }else{
	// 	echo $mod;
	// 	echo "Num is odd";
	// }


	// $day = "Rose day";
	// echo strlen($day)." ";

	// #Function
	// function res(){
	// 	$result = 2+3;
	// 	echo "Result is: ".$result." ";
	// }
	// res();
	// function greet(){
	// 	$std = "Prince";
	// 	echo "Welcome ".$std;
	// }

	// greet();

	// $s = hi();
	// echo $s;

	// function hi(){
	// 	$sum = 2+3;
	// 	return $sum;
	// }



	// wr_name('ghost');
	// function wr_name($name){
	// 	echo $name."<br>";
	// }

	// function summation ($n1, $n2){
	// 	$sum = $n1+$n2;
	// 	return $sum;
	// }

	// echo summation(4,5)."<br>";


	// function odd_even($number){ 
	// 	$mod = $number % 2;
	// 	if ($mod == 0) {
	// 		echo "Num is even"."<br>";
	// 	}else{
	// 		echo "Num is odd"."<br>";
	// 	}
	// }
	// odd_even(6);

	// function pr_name($fn, $ln){
	// 	$full_name = $fn." ".$ln;
	// 	return $full_name;
	// }
	// echo pr_name("Prince", "Shahriar");



	// for ($i=1; $i < 6; $i++) { 
	// 	echo $i." Hello World<br>";
	// }
	// for ($i=1; $i <= 100; $i++) { 
	// 	echo $i." Prince Shahriar<br>";
	// }

	// $i = 0;
	// while ($i < 5) {
	// 	echo "Hello ";
	// 	$i++;
	// }

	// $i = 0;
	// do {
	// 	echo "I'm working<br>";
	// 	$i++;
	// } while ($i < 10);



	$k = 2;
	switch ($k) {
		case 1:
			echo "number is one";
			break;
		case 2:
			echo "number is two";
			break;
		case 3:
			echo "number is three";
			break;

		
		default:
			echo "Nothing !!!";
			break;
	}


?>