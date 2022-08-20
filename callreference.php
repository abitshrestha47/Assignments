<?php
    $num=10;
    function ref(&$n){
        $n=20;
    }
    ref($num);
    echo $num;
?>