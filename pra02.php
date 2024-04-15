<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習02</title>
</head>

<h2><a href="index.html">index</a></h2><br>

<body>
    <h1>九九乘法表-簡單</h1>
    <?php

    for($i=1;$i<=9;$i++){
        echo "1 X ".$i . "=" . ($i*1) ;
        echo  " , ";
    }

    echo "<br>";

    for($i=1;$i<=9;$i++){
        echo "2 X ".$i . "=" . ($i*2) ;
        echo  " , ";
    }

    echo "<br>";

    for($i=1;$i<=9;$i++){
        echo "3 X ".$i . "=" . ($i*3) ;
        echo  " , ";
    }

    echo "<br>";

    for($i=1;$i<=9;$i++){
        echo "4 X ".$i . "=" . ($i*4) ;
        echo  " , ";
    }

    echo "<br>";

    for($i=1;$i<=9;$i++){
        echo "5 X ".$i . "=" . ($i*5) ;
        echo  " , ";
    }

    echo "<br>";

    for($i=1;$i<=9;$i++){
        echo "6 X ".$i . "=" . ($i*6) ;
        echo  " , ";
    }

    echo "<br>";

    for($i=1;$i<=9;$i++){
        echo "7 X ".$i . "=" . ($i*7) ;
        echo  " , ";
    }

    echo "<br>";

    for($i=1;$i<=9;$i++){
        echo "8 X ".$i . "=" . ($i*8) ;
        echo  " , ";
    }

    echo "<br>";

    for($i=1;$i<=9;$i++){
        echo "9 X ".$i . "=" . ($i*9) ;
        echo  " , ";
    }
    ?>
    
    <hr>
    
    <h1>九九乘法表-簡單(簡短)</h1>
    
    <?php 
    
    for($j=1;$j<=9;$j++){

        for($i=1;$i<=9;$i++){

            echo $j . " X " . $i . " = " . ($j*$i) ;
            echo  " , ";
            
        }
        
        echo "<br>";
    }

    ?>

</body>
</html>