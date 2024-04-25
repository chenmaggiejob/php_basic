<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2><a href="index.html">index</a></h2><br>

<h2>給定兩個日期，計算中間間隔天數</h2>
<?php

    //ans:30天
    //不能直接用$strat-$end,因為這是字串型態，要先將其改成時間戳(strtotime)才能計算
   
    $start= "2024-1-10";
    $end= "2024-2-9";

    $start = strtotime($start);
    $end = strtotime ($end);

    echo $start . '&nbsp(2024-1-10的秒數)';
    echo "<br>";
    echo $end. '&nbsp(2024-2-9的秒數)';; 

    $diff=$end-$start;
    echo '<br>';
    echo '間隔的秒數：'.$diff. '<br>';
    echo '間隔天數：'.$diff/(60*60*24);
?>
<hr>

<h2>計算距離自己下一次生日還有幾天</h2>
<?php

?>
<hr>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>
<?php

?>
<hr>

<h2>待補</h2>
<?php

?>
<hr>




    
</body>
</html>