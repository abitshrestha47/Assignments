<?php
    //sum of n(given by own) natural numbers
    $sum=0;
    $n=0;
    $upto=100;
    function natural($n){
    	global $upto;
        if($n<$upto){
            global $sum;
            $n++;
            $sum+=$n;
            natural($n);
        }
    }
    natural($n);
    echo ($sum." ");
?>