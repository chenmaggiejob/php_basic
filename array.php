<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>

<body>
    <h2><a href="index.html">index</a></h2><br>

    <h1>陣列</h1>

    <?php

    $a = ['A', 'B', 'C'];
    $b = ['name' => '辣', 'hight' => 160, '體重' => 40.5];
    print_r($a);
    echo "<hr>";
    print_r($b);
    echo "<hr>";

    echo serialize($a);
    echo "<hr>";
    echo serialize($b);
    echo "<hr>";

    $a = ['a', 'b', 'c'];
    // $tmp=implode(",",$a);
    $tmp = join(",", $a); //現在建議使用join
    echo $tmp;
    echo "<hr>";

    $b = explode(',', $tmp);
    print_r($b);

    ?>

    <hr>
    <h2>利用程式來產生陣列</h2>
    <ul>
        <li>以迴圈的方式產生一個九九乘法表</li>
        <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
        <li>再以迴圈方式將陣列內容印出</li>
    </ul>

    <?php

    $ninenine = [];
    for ($i = 1; $i <= 9; $i++) {

        for ($j = 1; $j <= 9; $j++) {

            // echo "$i x $j =".($i*$j);
            $ninenine[] = "$i x $j =" . ($i * $j);
        }
    }

    // echo "<pre>";
    // print_r($ninenine);
    // echo "</pre>";

    $i = 1;
    foreach ($ninenine as $nine) {

        echo $nine;
        if ($i % 9 == 0) {
            echo "<br>";
        }
        $i++;
    }
    echo "<hr>";
    ?>

    <?php
    echo "key,value";
    echo "<br>";
    foreach ($ninenine as $idx => $nine) {
        echo $nine;
        if (($idx + 1) % 9 == 0) {
            echo "<br>";
        }
        // echo $idx . "=>" . $nine;
        // echo "<br>";
    }
    echo "<hr>";
    ?>

    <style>
        table {

            border-collapse: collapse;
        }

        td {

            border: 1px solid gray;
            padding: 5px 10px;
        }
    </style>

    <h3>九九乖法表表格</h3>
    <?php
    echo "<table>";
    foreach ($ninenine as $idx => $nine) {

        if ($idx % 9 == 0) {
            echo "<tr>";
        }

        echo "<td> $nine </td>";
        if (($idx + 1) % 9 == 0) {
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "陣列中有" . count($ninenine) . "個元素";
    // $watch=count($ninenine);
    // echo $watch;
    ?>
    <hr>
    <h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
    <ul>
        <li>使用亂數函式rand($a,$b)來產生號碼</li>
        <li>將產生的號碼順序存入陣列中</li>
        <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
        <li>完成選號後將陣列內容印出</li>
    </ul>

    <h3>思維</h3>
    <ol>
        <li>先用亂數函式來產生數字</li>
        <li>用迴圈來產生6個1~38的數字</li>
        <li>比較數字</li>
        <li>陣列存放數字(這個陣列是在存放比較後不重複的數字)</li>
    </ol>

    <?php
    $lotto = [];
    while (count($lotto) < 6) {
        $tmp = rand(1, 38);
        if (!in_array($tmp, $lotto)) {
            $lotto[] = $tmp;
        }
    }
    echo "中獎號碼：";
    echo join(",", $lotto);
    ?>
    <hr>
    <h2>找出五百年內的閏年</h2>

    <ul>
        <li>請依照閏年公式找出五百年內的閏年</li>
        <li>使用陣列來儲存閏年</li>
        <li>使用迴圈來印出閏年</li>
    </ul>
    <h3>閏年條件</h3>
    <ol>
        <li>公元年分除以4不可整除，為平年。</li>
        <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
        <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
    </ol>
    <?php
    $leaps = [];
    $year = 2024;
    for ($i = $year; $i < ($year + 500); $i++) {
        if ($i % 4 == 0 && $i % 100 != 0 || $i % 400 == 0) {
            $leaps[] = $i;
        }
    }

    echo "<h3>自 $year 至 " . ($year + 500) . " 止，有以下閏年：</h3>";


    foreach ($leaps as $leap) {
        echo $leap;
        echo "</br>";
    }
    echo "<hr>";
    echo "共有" . count($leaps) . "個閏年";
    ?>
    <hr>
    <h3>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h3>

    <ul>
        <li>天干：甲乙丙丁戊己庚辛壬癸</li>
        <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
        <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
    </ul>

    <?php
    $sky = [4 => '甲', 5 => '乙', 6 => '丙', 7 => '丁', 8 => '戊', 9 => '己', 0 => '庚', 1 => '辛', 2 => '壬', 3 => '癸'];
    $land = [4 => '子', 5 => '丑', 6 => '寅', 7 => '卯', 8 => '辰', 9 => '巳', 10 => '午', 11 => '未', 0 => '申', 1 => '酉', 2 => '戌', 3 => '亥'];
    $year = 1958;

    echo "西元年" . $year;
    $t1 = $sky[$year % 10];
    $t2 = $land[$year % 12];

    echo "為 $t1$t2 年";

    ?>

    <hr>
    <h3>
        請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)
    </h3>

    <ul>
        <li>
            例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]
        </li>
    </ul>


    <?php

    $a = [2, 4, 6, 1, 8];

    echo "原陣列為:[" . join(',', $a) . "]<br>";

    for ($i = 0; $i < ceil(count($a) / 2); $i++) {

        $tmp = $a[$i];
        $a[$i] = $a[count($a) - 1 - $i];
        $a[count($a) - 1 - $i] = $tmp;
    }

    echo "交換後為:[" . join(',', $a) . "]<br>";
    echo "交換後為:[" . join(',', array_reverse($a)) . "]<br>"; //這一段是內建函式在說明223~228

    ?>

</body>

</html>