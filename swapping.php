<!DOCTYPE html>
<html>
    <head>
        <title>Swap</title>
    </head>
    <body>
        <?php
            $a=20;
            $b=30;
            echo "The values before the swap:<br>"."a=".$a.", b=".$b;
            echo "<br>";
            $temp=$a;
            $a=$b;
            $b=$temp;
            echo "The values after the swap:<br>"."a=".$a.", b=".$b;
        ?>
    </body>
</html>