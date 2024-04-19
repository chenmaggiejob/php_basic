<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習-畫星星</title>

    <style>
        *{
            font-family:'courier new',courier,monospace;
        }
    </style>
</head>
<body>
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
        
        for ($i=0;$i<5;$i++){

            for($j=0;$j<=$i;$j++)
             
            echo "*";
            echo "<br>";
        }
    ?>
<br>
<h2>倒直角三角型</h2>
    <?php
        
        for ($i=5;$i>0;$i--){

              for($j=0;$j<$i;$j++){
                
                echo "*";

              }
             
          
            echo "<br>";
        }
    ?>

<br>

<h2>正三角形</h2>    

<?php
$stars=5;
for($i=0;$i<$stars;$i++){

    for($k=0;$k<$stars-1-$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$i*2+1;$j++){
        echo "*";
    }
    echo "<br>";
}

?>

<hr>
<h2>菱形(2個迴圈)</h2>

<?php
$stars=5;
for($i=0;$i<$stars;$i++){

    for($k=0;$k<$stars-1-$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$i*2+1;$j++){
        echo "*";
    }
    echo "<br>";
}
    
    for($i=$stars-1;$i>0;$i--){
        for($k=0;$k<$stars-$i;$k++){
            echo "&nbsp";
        }

        for($j=0;$j<$i*2-1;$j++){
            echo "*";
        }
        echo "<br>";
    }
?>

<hr>
<h2>菱形(簡化迴圈)</h2>

<?php

$stars=7;

$odd=($stars%2==0)?$stars+1:$stars;
$mid=(($odd+1)/2)-1;

for($i=0;$i<$stars;$i++){

    if($i<=$mid){
        $tmp=$i;
    }else{
        $tmp--;/*tmp=tmp-1*/
    }

    for($k=0;$k<$mid-$tmp;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$tmp*2+1;$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<hr>
<h2>矩形</h2>

 <!--   i是控制外圈,在處理總共有排星星
        j是在控制內圈，在處理一排要畫幾個星星-->

<?php

    for ($i=0;$i<7;$i++) {

        for($j=0;$j<7;$j++){
            if($i==0 || $i==6){
                echo "*";
            }else if($j==0 || $j==6){
                echo "*";
            }else{
                echo "&nbsp";
            }
        }
            
        echo "<br>";
    }

?>

<hr>
<h2>矩形內畫出對角線</h2>
<?php

    for ($i=0;$i<7;$i++) {

        for($j=0;$j<7;$j++){
            if($i==0 || $i==6){
                echo "*";
            }else if($j==0 || $j==6 || $j==$i || $j==(6-$i)){
                echo "*";
            }else{
                echo "&nbsp";
            }
        }
            
        echo "<br>";
    
    }   
?>


</body>
</html>