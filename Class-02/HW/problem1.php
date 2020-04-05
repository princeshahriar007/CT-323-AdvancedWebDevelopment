<?php
    $num1 = 70;
    $num2 = 40;
    $num3 = 20;
    if($num1 > $num2){
        if($num1 > $num3){
            echo 'Num1 is the biggest!!!';
        }else{
            echo 'Num3 is the biggest!!!';
        }
    }else{
        if($num2 > $num3){
            echo 'Num2 is the biggest!!!';
        }else{
            echo 'Num3 is the biggest!!!';
        }
    }
?>