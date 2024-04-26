<h2><a href="index.html">index</a></h2><br>

<h2>FOR</h2>
<?php
// $i=$i+1;
for ($i = 0; $i < 10; $i++) {
    echo $i * 10;
    echo "<br>";
}

echo "<hr>";
echo $i;
echo "<hr>";

for ($i = 0; $i < 10; $i = $i + 2) {
    echo $i * 10;
    echo $i;
    echo "<br>";
}

echo "<hr>";
echo $i;
echo "<hr>";

for ($i = 0; $i > -100; $i = $i * 2 - 1) {
    echo $i * 10;
    echo "<br>";
}

echo "<br>";
echo $i;
echo "<hr>";

?>

<h2> WHILE</h2>
<?php
$score = 10;
echo '原始成績=' . $score;

while ($score < 60) {
    $score = $score + 10;
}

echo "<br>";
echo '調整結果=' . $score;
echo "<hr>"
?>

<h2>巢狀結構</h2>
<?php

for ($i = 0; $i < 10; $i++) {
    echo $i * 10;

    if ($i > 5) {
        echo "執行一半了...";
    }
    echo "<br>";
}

echo "<hr>";

?>

<?php

$show = false;
for ($i = 0; $i < 10; $i++) {
    echo $i * 10;

    if ($i > 5 && $show == false) {
        echo "<br>";
        echo "執行一半了...";
        $show = true;
    }
    echo "<br>";
}

?>