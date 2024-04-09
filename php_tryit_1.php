<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>變數</title>
</head>
<body>
    <?php
    
    echo "ABC"
    
    ?>

    <div>
    $a=10;<br>
    $b=50;<br>
    </div>
    <h4>交換後</h4>
   
   <?php
   
    $a=10;
    $b=50;

    $tmp=$a;
    $a=$b;
    $b=$tmp;


    echo '$a='.$a;
    echo "<br>";
    echo '$b='.$b;

    echo "<hr>";

    $score=100;
    
    $level=($score>=60)?'及格':'不及格';
    
    echo "成績為：".$score;
    echo "<br>";
    echo "是否及格：".$level;

    ?>

</body>
</html>