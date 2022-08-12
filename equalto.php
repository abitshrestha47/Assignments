<!DOCTYPE html>
<html>
    <head>
        <title>Equal operator</title>
        <body>
            <h1>Difference</h1>
            <?php
                $var1="20";
                $var2=20;
                //equal to operator
                var_dump($var1==$var2);//returns true
                echo "<br>";
                //identical operator
                var_dump($var1===$var2);//returns false
            ?>
        </body>
</html>