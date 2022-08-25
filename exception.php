<?php
    $dividedBY=0;
    $number=22;
    try{
        if($dividedBY===0){
            throw new Exception("Can't Divide by 0");
        }
        $n=$number/$dividedBY;
        echo $n;
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
?>