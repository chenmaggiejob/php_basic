<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tryit</title>
</head>

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
<h2>判斷成績及格學生</h2>
<ul>
    <li>給定一個成績數字，判斷是否及格(60)分</li>
    <ul>
        <li>用三元運算判斷60分及格</li>
        <li>用if else 去判斷60分及格</li>
    </ul>
    <p>三元運算思維</p>
    <ol>
        <li>先定義一個成績60的變數($score)</li>
        <li>在定義一個成績結果的變數($level)，將(成績分數是否及格的公式)指定給成績結果的變數</li>
        <li>輸出成績結果是否及格的文字</li>
    </ol>
    <br>

    <?php
    $score = 60; //定義成績為60
    echo "學生成績【" . $score . "】<br>"; //先輸出$score目前的分數
    $level = ($score >= 60) ? "及格" : "不及格"; //將$score的結果指給$level
    echo "成績結果【" . $level . "】"  //輸出$level得到的結果
    ?>
    <p>if else思維</p>
    <ol>
        <li>先定義成績變數59</li>
        <li>假如成績>=60，輸出成績結果為及格</li>
        <li>否則則輸出成績結果為不及格</li>
    </ol>
    <br>
    <?php
    $score = 59; //先定義成績為59 
    echo "學生成績【" . $score . "】<br>"; //先輸出$score目前的分數
    if ($score >= 60) {              //假如成績>=60
        echo "成績結果【及格】";        //輸出成績結果為及格
    } else {                           //否則
        echo "成績結果【不及格】";      //輸出成結果為不及格
    };
    ?>

    <hr>







</ul>


</body>

</html>