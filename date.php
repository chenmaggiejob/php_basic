<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date</title>
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
    echo "今年是 ".date("Y");
    echo "<br>";
    echo "今天是 ".date("Y 年 m 月 d 日");
    echo "<br>";
    $birthday= "2024-9-11";
    $start = strtotime(date("Y-m-d")); //date('Y-m-d')->自動抓到今日的時間
    $tb=str_replace(mb_substr($birthday,0,4),date("Y"),$birthday); //date("Y")->自動抓今天的年份
    
        if(strtotime($tb)<strtotime("now")){
            $tb=str_replace(mb_substr($birthday,0,4),(date("Y+1")),$birthday);
        }
    $end = strtotime ($tb);
    $diff=$end-$start;
    
    echo '間隔的秒數：'.$diff. '<br>';
    echo "距離生日還有：";
    echo  floor ($diff/(60*60*24)); // floor->將小數無條件捨去
    echo " 天";

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
    date_default_timezone_set('Asia/Taipei'); //調校為台北時間
    $today=" ";
    echo date ("Y / m / d"). "<br>";
    echo date ("m 月 j 日 l "). "<br>";
    echo date ("Y - m - j  H:i:").(int)date("s")."<br>"; //不補零的秒數
    echo date ("Y - m - j  H:i:s"). "<br>"; //如果沒有調校時間的話，會顯示美西時間
    $workday=(date("N")<6)?"工作日":"假日";
    echo "今天是西元". date("Y 年 m 月 j 日 l"). " 是 $workday ";
?>
<hr>

<h2>利用迴圈來計算連續五個周一的日期</h2>
例:
<ol>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ol>

<?php
    $date='2024-04-22';
    $week=[
        1=>"星期一",
        2=>"星期二",
        3=>"星期三",
        4=>"星期四",
        5=>"星期五",
        6=>"星期六",
        7=>"星期日",
    ];

    for($i=0;$i<5;$i++) {
        $day=strtotime("+$i week",strtotime($date));//秒數
        date("N");
        echo date("Y-m-d" , $day);
        echo $week[date("N",$day)];
        echo "<br>";

    }

    
?>
<hr>




    
</body>
</html>