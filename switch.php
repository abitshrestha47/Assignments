<?php
    $num=9990;
    switch($num){
        case $num>=90 && $num<=100:
            echo ("Grade A.");
            break;
        case $num>=80:
            echo ("Grade B+.");
            break;
        case $num>=70:
            echo ("Grade B.");
            break;
        case $num>=60:
            echo ("Grade C.");
            break;
        case $num>=50:
            echo ("Grade D.");
            break;
        case $num>=0 && $num<=40:
            echo ("Unsufficient.");
            break;
        default:
            echo ("Enter the valid input.");

    }
?>