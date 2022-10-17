<h1>利用迴圈來計算連續五個周一的日期</h1>

<p>今天是<?= date("Y-m-d l") ?>
    <br>,接下來的連續五個周一為：
</p>
<?php
// $w = date("w")==;
// echo abs(0 - $w) . "<br>" . "<hr>";
// echo abs(0 - 0) . "<br>";
// echo abs(0 - 1) . "<br>";
// echo abs(0 - 2) . "<br>";
// echo abs(0 - 3) . "<br>";
// echo abs(0 - 4) . "<br>";
// echo abs(0 - 5) . "<br>";
// echo abs(0 - 6) . "<br>";

$w=date('N');
$diff=1-$w;
echo 1 - $w . "<br>" . "<hr>";
echo (1 -1). "<br>";
echo (1 -2). "<br>";
echo (1 -3). "<br>";
echo (1 -4). "<br>";
echo (1 -5). "<br>";
echo (1 -6). "<br>";
echo (1 -7). "<br>";
echo "<hr>";
echo $diff."<br>";

$firstday=strtotime("+$diff days");

for ($i = 0; $i < 5; $i++) {
    $sec = strtotime("+" . ($i + 1) . " week");
    echo date("Y-m-d l") . "<br>";
}
?>

<p>
    <a href="./index.php">回上一頁</a>
</p>