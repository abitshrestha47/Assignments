<!DOCTYPE html>
<html>
<body>

<?php
	/*	1
    	12
    	123
    	1234
    	12345
    	123456*/
    for($i=1;$i<=6;$i++){
    	for($j=1;$j<=$i;$j++){
        	echo $j;
        }
        echo "<br>";
    }
    echo "<br> <br>";
    /*
    	6
        65
        654
        6543
        65432
        654321
        
    */
    for($i=6;$i>=1;$i--){
    	for($j=6;$j>=$i;$j--){
        	echo $j;
        }
        echo "<br>";
    }
    /*
    	123456
        12345
        1234
        123
        12
        1
    */
    echo "<br> <br>";
    for($i=6;$i>=1;$i--){
    	for($j=1;$j<=$i;$j++){
        echo $j;
        }
        echo "<br>";
    }
    
    echo "<br><br>";
    
    /*      6
           56
          456
         3456
        23456
       123456*/
       for($i=6;$i>=1;$i--){
       	for($j=1;$j<=6;$j++){
        	if($j<=($i-1)){
            	echo "&nbsp&nbsp";
            }
            else{
            	echo $j;
            }
        }
        echo "<br>";
       }
       
       
       echo "<br><br>";
       /*
       		654321
             54321
              4321
               321
                31
                 1
       */
       for($i=6;$i>=1;$i--){
       		for($j=6;$j>=1;$j--){
            	if($i>=$j){
                	echo $j;
               	}
                else{
                	echo "&nbsp&nbsp";
                }
            }
            echo "<br>";
       }
?>

</body>
</html>