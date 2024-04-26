<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tryit</title>
</head>

<>
    <h2><a href="index.html">index</a></h2>

    <h3>給定兩個變數，請思考如何交換兩個變數的值</h3>

    例：<br>
    $a = 10; $b = 50;<br>
    交換後<br>
    $a = 50; $b = 10;<br>
    <p>思維</p>
    <ol>
        <li>先定義a與b的變數</li>
        <li>將a的變數先暫存起來</li>
        <li>將b指定給a</li>
        <li>將暫存變數指定給b</li>
        <li>輸出變數a與變數b</li>
    </ol>
    <?php

    $a = 10;   //定義$a變數為10
    $b = 50;   //定義$b變數為50
    $temp = $a;   //將$a先指定給$temp暫存起來
    $a = $b;   //將$b的值指定給$a
    $b = $temp;   //將$temp的值給$b

    echo "結果 <br>";
    echo "$" . "a = " . $a . " ; " . "$" . "b = " . $b;
    ?>
    <hr>



    </body>

</html>