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
    $result = ($score >= 60) ? "及格" : "不及格"; //將$score的結果指給$level
    echo "成績結果【" . $result . "】"  //輸出$level得到的結果
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
    }
    ?>

    <hr>
    <h2>流程結構練習</h2>

    <p>判斷成績及格學生</p>
    <ul>
        <li>給定一個成績數字，判斷是否及格(60)分</li>
    </ul>
    <br>

    <?php
    $score = "100";
    echo "該學生成績為" . $score . "分,";
    if ($score > 100 || $score < 0) {
        echo "成績異常，分數需於0～100之間。";
    } elseif ($score >= 60) {
        echo "成績【及格】";
    } else {
        echo "成績【不及格】";
    }
    ?>

    <p>分配成績等級</p>
    給定一個成績數字，根據成績所在的區間，給定等級
    <ul>
        <li>0 ~ 59 => E</li>
        <li>60 ~ 69 => D</li>
        <li>70 ~ 79 => C</li>
        <li>80 ~ 89 => B</li>
        <li>90 ~ 100 => A</li>
    </ul>
    <br>

    <?php
    $level = $score;
    if ($score >= 90 && $score <= 100) {
        $level  = "A";
    } elseif ($score >= 80 && $score <= 89) {
        $level = "B";
    } elseif ($score >= 70 && $score <= 79) {
        $level = "C";
    } elseif ($score >= 60 && $score <= 69) {
        $level = "D";
    } elseif ($score >= 0 && $score <= 59) {
        $level = "E";
    } else {
        echo "成績異常，分數需於0～100之間，請確認後再重新輸入。";
        exit;
    }
    echo "區間等級為【" . $level . "】";
    ?>

    <p>依據學生成績等級給予評價</p>
    <ul>
        <li>根據學生不同的成績等級在網頁上印出不同的文字評價</li>
    </ul>
    <br>

    <?php
    switch ($level) {
        case 'A':
            echo "成績優異";
            break;
        case 'B':
            echo "成績良好";
            break;
        case 'C':
            echo "成績尚可";
            break;
        case 'D';
            echo "成績欠佳";
            break;

        case "E";
            echo "請加油學習";

        default:
            "成績不在評定區間";
            break;
    }
    ?>












</ul>


</body>

</html>