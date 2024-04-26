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
    先設定一個成績等級的變數
    在變數內設定判斷60分
    <p>if else思維</p>
    先定義成績變數60

 


    

</ul>


    </body>

</html>