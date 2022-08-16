<?php
    $num=10;
    $sum=0;
    for($i=1;$i<=$num;$i++){
        if($i%2==0){
            $sum+=$i;
        }
    }
    echo ("The Sum of even numbers till $num: ".$sum);
?>