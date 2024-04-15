<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習02</title>
   
    <style>
    table{
        
        border-collapse: collapse;
    }
    td{
        border:1px solid black;
        padding: 3px 6px;
        font-size:18px;
    }

    #grid table{
        border-collapse: collapse;
    }
    #grid td{
        border:1px solid gray;
        padding:3px 6px;
        font-size: 18Px;
    }
    #grid tr:nth-child(1) td,
    #grid td:nth-child(1){
        background:black;
        color:#CCC;
    }
    

    </style>

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
    
    <h1>九九乘法表-簡單(巢狀)</h1>
    
    <?php 
    
    for($j=1;$j<=9;$j++){

        for($i=1;$i<=9;$i++){

            echo $j . " X " . $i . " = " . ($j*$i) ;
            echo "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
        }
        
        echo "<br>";
    }

?>

<hr>

<h2>九九乘法表-表格</h2>

    <?php
    
    echo "<table>";

    for($j=1;$j<=9;$j++){
       
        echo "<tr>";
          
        for($i=1;$i<=9;$i++){

            echo "<td>" . $j . " X " . $i . " = " . ($j*$i) ."</td>";
        }
        
        echo "</tr>";
    }
       
    echo "<table>";

    ?>
<hr>

<h2>九九乘法表-棋盤式表格</h2>

    <?php
    
    echo "<table id=grid>";
   
    for($j=0 ; $j<=9 ; $j++){

        echo "<tr>";

            for($i=0;$i<=9;$i++){
                echo "<td> ";
                if($j==0 && $i==0){
                    echo " ";
                }else if($j==0){
                    echo $i;
                }else if($i==0){
                    echo $j;
                }else{
                    echo ($j * $i);
                }
            }
        echo "</tr>";
        
    }

    echo "</table>";

    ?>

<hr>

<h2>九九乘法表-階梯</h2>

    <?php
    
    echo "<table id=grid>";
   
    for($j=0 ; $j<=9 ; $j++){

        echo "<tr>";

            for($i=0;$i<=9;$i++){
                echo "<td> ";
                if(($j==0 && $i==0) || ($j!=0 && $i>$j)){
                    echo " ";
                }else if($j==0){
                    echo $i;
                }else if($i==0){
                    echo $j;
                }else{
                    echo ($j * $i);
                }
            }
        echo "</tr>";
        
    }

    echo "</table>";

    ?>

<hr>
<h2>尋找字元(使用while)</h2>
<ul>
    <li>給定一個字串句子</li>
    <li>給定一個單字或字母</li>
    <li>尋找相符的內容</li>
    <li>印出尋找到的單字或字母所在句子中的位置</li>
    </ul>
   
    <p>中央氣象署表示，天氣高溫炎熱，今天中午前後台南市地區、高雄市地區、屏東縣地區為黃色燈號，有出現攝氏36度以上高溫機會。</p>
<?php
    $str="中央氣象署表示，天氣高溫炎熱，今天中午前後台南市地區、高雄市地區、屏東縣地區為黃色燈號，有出現攝氏36度以上高溫機會。";

    $target="台南市";

    

    $position=0;
    while($target != mb_substr($str,$position,mb_strlen($target))){

        $position=$position+1;

    }
    
    echo $target."的位置在". $position;
    echo "<br>";
    echo mb_strpos($str,$target)
    // mb_strpos ,可以找到字串在第幾個位置

?>
<hr>
<h2>以 * 符號為基礎在網頁上排列出下列圖形:</h2>


    <ul>
        <li>直角三角型</li>
        <li>倒直角三角型</li>
        <li>正三角型</li>
        <li>菱型</li>
        <li>矩形</li>
        <li>內含對角線的矩形</li>
    </ul>
    <br>

    <h2>直角三角型</h2>
    <?php
        
        for ($i=0;$i<=4;$i++){
             
            echo "*";

        }
    ?>

    






</body>
</html>