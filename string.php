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
    $s = 'aaddw1123';
    $s = str_replace('a', '*', $s);
    echo $s . "<br>";
    $s = str_replace('d', '*', $s);
    echo $s . "<br>";
    $s = str_replace('w', '*', $s);
    echo $s . "<br>";
    $s = str_replace('1', '*', $s);
    echo $s . "<br>";
    $s = str_replace('2', '*', $s);
    echo $s . "<br>";
    $s = str_replace('3', '*', $s);
    echo $s . "<br>";
    ?>
    <hr>
    <?php
    echo "方法二<br>";
    echo "使用陣列直接將字串取代成*</br>";
    $s = str_replace(['a', 'd', 'w', '1', '2', '3'], '*', $s);
    echo $s;
    echo "<br>"
    ?>

    <hr>
    <?php
    echo "方法三<br>";
    echo "使用字串長度將字串取代成*</br>";
    $s = 'aaddw1123';
    $s = str_repeat('*', mb_strlen($s));
    echo $s;
    echo "<br>"
    ?>
    <hr>
    <h2>字串分割</h2>
    <ul>
        <li>將”this,is,a,book”依”,”切割後成為陣列</li>
    </ul>

    <?php

    $s = 'this,is,a,book';
    $result = explode(",", $s);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    ?>
    <hr>
    <h2>字串組合</h2>
    <ul>
        <li>將上例陣列重新組合成“this is a book”</li>
    </ul>

    <?php
    $result = join(' ', $result);
    echo $result;
    ?>
    <hr>
    <h2>子字串取用</h2>
    <ul>
        <li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</li>
    </ul>

    <?php
    $s = 'The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…';
    $new = mb_substr($s, 0, 10);
    echo $new . '...';
    echo '<hr>';

    $s = '根據中央氣象署資料顯示，台灣東部海域今（25）日凌晨2時11分發生規模5.6地震，不到1分鐘又發生另一起規模5.5地震，全台有感，不少民眾從熟睡中被震醒，民眾回報這晚台北特別晃。對此，氣象署地震測報中心主任吳健富給出答案，表示為「南澳海盆」地震的特性，住在台北盆地或是較高的大樓，會因為場址效應跟大樓效應振動會有放大效果。';
    $new = mb_substr($s, 0, 10);
    echo $new . '...';
    ?>
    <hr>
    <h2>尋找字串與HTML、css整合應用</h2>
    <ul>
        <li>給定一個句子，將指定的關鍵字放大</li>
        <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
        <li>請將上句中的 “程式設計” 放大字型或變色.</li>
    </ul>

    <?php
    echo "方式一(沒彈性)</br>";
    $s = '學會PHP網頁程式設計，薪水會加倍，工作會好找';
    $s = str_replace('程式設計', "<span style='color: red; font-size:32px'>程式設計</span>", $s);

    echo $s;
    ?>
    <hr>
    <?php

    echo "方式二(靈活運用)</br>";

    $key = '網頁';
    $color = 'blue';
    $size = '24px';
    $s = '學會PHP網頁程式設計，薪水會加倍，工作會好找';
    $s = str_replace($key, "<span style='color: $color; font-size: $size'>$key</span>", $s);

    echo $s;
    ?>

</body>

</html>