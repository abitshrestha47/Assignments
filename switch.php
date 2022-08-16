<?php
    $num=0;
    switch($num){
        case $num>=90 && $num<=100:
            echo ("Grade A.");
            break;
        case $num>=80 && $num<=89:
            echo ("Grade B+.");
            break;
        case $num>=70 && $num<=79:
            echo ("Grade B.");
            break;
        case $num>=60 && $num<=69:
            echo ("Grade C.");
            break;
        case $num>=50 && $num<=59:
            echo ("Grade D.");
            break;
        case $num>=0 && $num<=49:
            echo ("Unsufficient.");
            break;
        default:
            echo ("Enter the valid input.");

    }
?>
