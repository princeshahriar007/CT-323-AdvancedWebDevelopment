<?php

	// Nested loop 
/*	for ($j=1; $j <= 10; $j++) { 
		$n = 2*$j;
		echo '2 * '.$j.' = '.$n.'<br>';
	}
	echo "<br><br>";
	for ($i=1; $i <= 1; $i++) {
		for ($j=1; $j <= 10; $j++) { 
			$n = 2*$j;
			echo '2 * '.$j.' = '.$n.'<br>';
		}
	}

	// Recursive Function - Watch Video
	function greet($count){
		
		if ($count == 2) {
			return $count;
		}else{
			echo "Welcome<br>";
			echo greet($count+1).'<br>'; //Confusion - Watch video	
		}
		
	}
*/
	function sum($fnum, $s){
		if ($fnum == 8) {
			return $s.'<br>';
		}else{
			$s = $s + $fnum;
			echo sum($fnum+1, $s);
		}
		
	}
	sum(1,0);
/*
	greet(0);
	
	function footToInch($foot){
		$inch = 12*$foot;
		return $inch;
	}

	echo footToInch(5);
*/
?>