<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>流程結構練習</title>
</head>
<body>
    <h2>判斷成績及學生</h2>
    <h3>給一個成績數字，判斷是否及格(60分)</h3>
    
    <?php
    $score=90;
    echo"成績為".$score."分";
    echo"<br>";
    
    $result=' ';
    if($score){
        $result="及格";
    }else{
        $resule="不及格";
    }
    echo"<hr>";
    echo "判斷為".$result; 
    ?>
    
    <!-- shit+ctrl+P ->叫出快捷鍵 -->
    <h2>分配成績等級</h2>

    <h3>給定一個成績數字，根據成績所在的區間，給定等級</h3>
    <ul>
        <li>0 ~ 59 => E</li>
        <li>60 ~ 69 => D</li>
        <li>70 ~ 79 => C</li>
        <li>80 ~ 89 => B</li>
        <li>90 ~ 100 => A</li>
    </ul>
  
  
  <?php
    
    // $score=100;
    if($score>=90 && $score <= 100){
    
        $level='A';
        
    }else if($score>=80 && $score <= 89 ){

        $level='B';
    
    }else if($score>=70 && $score <= 79){

        $level='C';

    }else if($score>=60 && $score <= 69){

        $level='D';

    }else if($score>=0 && $score <=59){
        
        $level='E';
    }else{
        $level="成績必須在0~100之間，請重新輸入";
    }

    echo '你的成績是：'.$level;
    echo "<br>";
    echo '你的等級是：'.$level;
    
    ?>

    <h2>依據學生成績等級給予評價</h2>

    <h3>根據學生不同的成績等級在網頁上印出不同的文字評價</h3>
    <?php

    $words='';
    switch($level){
        case 'A':
        $words='特優';
        $color='green';
        break;
        
        case 'B':
        $words='優';
        $color='#2196f3';
        break;

        case 'C':
        $words='甲';
        $color='#4caf50';
        break;

        case 'D':
        $words='乙';
        $color='#ff9800'; 
        break;

        case 'E':
        $words='丙';
        $color='#ff5722';
        break;

    }
    echo "<br>";
    // if($level == 'A' || $level == 'B' || $level == 'D'){
        
    //     echo "<span style='fonet-size:32px;color:green'>";
    
    // }else{

    //     echo "<span style='fonet-size:32px;color:red'>";
    // }
    echo "<span style='font-size:32px;color:$color'>";
    echo $words;
    echo "</span>";   
    ?>
    
    <h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
    <style>
    .desc{
        width: 500px;
        padding: auto;
        background: lightblue;
        color:gray;
        border: 3px solid green;
        box-shadow: 2px 2px 5px lightgreen;
    }
    </style>
    <div class="desc">地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</div>
    <ul>
        <li>公元年分除以4不可整除，為平年。</li>
        <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
        <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
    </ul>
    
    <?php
    $year=2000;
    echo "年份為".$year;
    echo "<br>";

    if($year%4 == 0){
        if($year%100 == 0){
            
            if($year%400 == 0){

                echo $year."是閏年";
            
            }else{

                echo $year."是平年";
            }

        }else{
            
            echo $year."是閏年";
        }

    }else{
        echo $year."是平年";
    }
    ?>
<hr>
<h2>閏年判斷簡化寫法</h2>
<?php

$year=2000;
    echo "年份為".$year;
    echo "<br>";

    if($year%4 == 0){

        if($year%100 == 0 && $year%400 != 0){

            echo $year."是平年";
        
        }else {
            echo $year."是閏年";
        }

    }else{
        
        echo $year."是平年";
    }
?>

<hr>
<h2>閏年判斷最短寫法</h2>
<?php

$year=2400;
    echo "年份為".$year;
    echo "<br>";

    if($year%4 == 0 && $year !=0 || $year%400 == 0){

         echo $year."是閏年";

    }else{
        
        echo $year."是平年";
    }
?>

<hr>

<h2>簡單迴圈練習</h2>

    <ul>
        <li>1,3,5,7,9......n</li>
        <li>10,20,30,40,50,60.....n</li>
        <li>3,5,7,11,13,17......97</li>
    </ul>

<?php
    
    $n=100;
    for($i=1;$i<$n;$i=$i+2){

        echo $i;
        echo ",";
    }

    echo "<hr>";

    $n=25;
    for($i=1;$i<$n;$i++){

        echo $i*10;
        echo ",";
    }
    echo "<hr>";

    $count=0;
    for($i=3;$i<100;$i++){
        $check=true;
        for($j=2;$j<$i;$j++){
            if($i%$j==0){
              $check=false;  
            }
            $count++;
        }
        if($check==true){
            echo $i.",";
        }
        $count++;
    }
        echo "迴圈次數:".$count;
        echo "<hr>";
?>
</body>
</html>