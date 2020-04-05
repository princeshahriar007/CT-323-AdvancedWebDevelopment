<?php
    $name1 = 'Prince';
    $name2 = 'Jami';
    $name3 = 'Shahriar';
    if(strlen($name1) < strlen($name2)){
        if(strlen($name1) < strlen($name3)){
            echo 'Name1 is the shortest!!!';
        }else{
            echo 'Name3 is the shortest!!!';
        }
    }else{
        if(strlen($name2) < strlen($name3)){
            echo 'Name2 is the Shortest!!!';
        }else{
            echo 'Num3 is the shortest!!!';
        }
    }
?>