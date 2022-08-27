<?php
    /*  
             6
            56
           456
          3456
         23456
        123456
    */
    /*
    ->for loop outer i
    and for loop inner j
    ->for i=1 to 6
    ->for j=1 to 6
    ->if checking when j<=$n-1
    ->if condition met print space 
    ->else print the value
     */
    for($i=1;$i<=6;$i++){//i=1;
        for($j=1;$j<=6;$j++){//j=1;j=2;j=3;
            if($j<=(6-$i)){//1<=6-1;whitespace;2<=6-1whitespace;3<=5;whitespace;4<=5;whitespace;5<=5;whitespace;6<=5;
                echo ("&nbsp;&nbsp");
       
            }
            else{
                echo $j;
            }
        }
        echo "<br>";
    }
?>