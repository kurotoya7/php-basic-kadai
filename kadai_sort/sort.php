<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
function sort_2way($arry, $order) {
    if ($order) {
        echo '昇順にソートします。<br>';
        sort($arry);
    } else {
        echo '降順にソートします。<br>';
        rsort($arry);
    }
    foreach ($arry as $num) {
        echo "{$num}<br>";
    }
}

$nums = [15, 4, 18, 23, 10];

sort_2way($nums,true );  // 昇順でソート
sort_2way($nums, false); // 降順でソート
?>
    </p>
</body>

</html>