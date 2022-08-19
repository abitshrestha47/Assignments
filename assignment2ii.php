<!DOCTYPE html>
<html>
    <head>
        <title>Assignment II</title>
    </head>
    <body>
    <?php
        function evaluate($name,$attendance,$hygiene,$rating) {
            if($attendance<80 && $hygiene<50) {
                echo ($name." , You are fired from Rojan Kirana Pasal!");
                br();
            }
            elseif($hygiene<50 && $rating<2) {
                echo ($name." ,You are fired from Rojan Kirana Pasal!");
                br();
            }
            else {
                echo ($name ." , Not Fired for now.");
                br();
            }
        }
        echo("Condition 1");
        br();
        //true
        evaluate("Kusal Karki",70,40,4);
        //false
        evaluate("Amrit Gurung",70,50,3);
        br();

        echo("Condition 2");
        br();
        //true
        evaluate("Saugat Silwal",80,40,1);
        //false
        evaluate("Sandeep Pandey",80,40,3);
        
        function br(){
        	echo ("<br>");
         }
    ?>
    </body>
</html>