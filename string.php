<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>
<body>

<h2><a href="index.html">index</a></h2><br>

<h2>字串取代</h2>
<ul>
    <li>將”aaddw1123”改成”*********”</li>
</ul>

<?php
    echo "方法一(很笨的方式)<br>";
    $s='aaddw1123';
    $s=str_replace('a','*',$s);
    echo $s."<br>";
    $s=str_replace('d','*',$s);
    echo $s."<br>";
    $s=str_replace('w','*',$s);
    echo $s."<br>";
    $s=str_replace('1','*',$s);
    echo $s."<br>";
    $s=str_replace('2','*',$s);
    echo $s."<br>";
    $s=str_replace('3','*',$s);
    echo $s."<br>";
?>
<hr>
<?php
    echo "方法二<br>";
    echo "使用陣列直接將字串取代成*</br>";
    $s=str_replace(['a','d','w','1','2','3'],'*',$s);
    echo $s;
    echo "<br>"
?>

<hr>
<?php
    echo "方法三<br>";
    echo "使用字串長度將字串取代成*</br>";
    $s='aaddw1123';
    $s=str_repeat('*',mb_strlen($s));
    echo $s;
    echo "<br>"
?>
<hr>
    
</body>
</html>