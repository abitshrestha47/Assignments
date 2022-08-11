<!DOCTYPE html>
<html>
    <title>Variable</title>
    <body>
        <h1>Global Variale</h1>
        <?php
            //Global variable
            $var=1;
            function globe(){
                GLOBAL $var;
                $var+=1;
                echo "$var ";
            }
            globe();
            globe();
            globe();
            echo "<br>";
            echo "<h1>Local Variale</h1>";
            //Local variable
            function loc(){
                $var=1;
                $var+=1;
                echo "$var ";
            }
            loc();
            loc();
            loc();
            echo "<br>";
            echo "<h1>Static Variale</h1>";
            //static variable
            function stattic(){
                static $var=1;
                $var+=1;
                echo "$var ";
            }
            stattic();
            stattic();
            stattic();
        ?>
    </body>
</html>