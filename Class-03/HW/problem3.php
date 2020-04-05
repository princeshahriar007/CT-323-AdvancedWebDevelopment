<?php 
    function mul($num, $f){
        if ($num == 6) {
            return $f.'<br>';
        }else{
            $f = $f * $num;
            echo mul($num+1, $f);
        }
    
    }

    mul(1,1);
?>