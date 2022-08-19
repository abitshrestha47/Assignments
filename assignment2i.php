<?php
    function evaluate($name,$attendance,$hygiene,$rating) {
            if($attendance<80 || $hygiene<50 || $rating<2) {
                echo ("---> ".$name." , You are fired from the Rojan Kiran Pasal!");
                br();
            }
            else {
                echo ("---> ".$name." , Not Fired for now.");
            }
    }
    echo("Condition 1 <br>");
    evaluate("Kusal Karki",20,70,3);

    echo("Condition 2 <br>");
    evaluate("Samik Shakya",80,40,4);

    echo("Condtion 3 <br>");
    evaluate("Sandeep Pandey",80,60,4);

    function br(){
        echo ("<br>");
    }
?>