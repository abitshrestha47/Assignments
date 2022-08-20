<?php
    function br(){
        echo ("<br>");
    }
    echo ("Call by value");
    br();
    //call by value
    $num=10;
    $sum=0;
    function ref($n,$s){
        $s+=$n;
        $n=$s;
    }
    ref($num,$sum);
    echo ("SUM:").$sum;
    br();
    echo ("NUM:").$num;
    br();

    echo ("Call by reference");br();
    //call by reference
    $num1=10;
    $sum1=0;
    function ref1(&$n1,&$s1){
        $s1+=$n1;
        $n1+=$s1;
    }
    ref1($num1,$sum1);
    echo ("num1:").$num1;
    br();
    echo ("sum1:").$sum1;
?>