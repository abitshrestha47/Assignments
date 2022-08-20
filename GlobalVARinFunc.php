<?php
    $length=20;
    $breadth=30;
    $area=0;
    function rectangle($l,$b){
        global $area;
        $area=$l*$b;
    }
    rectangle($length,$breadth);
    echo $area;
?>