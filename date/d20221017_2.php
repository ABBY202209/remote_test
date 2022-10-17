<h1>計算自己的生日</h1>

<?php
$myday = '2022-10-16';
$mysec = strtotime($myday);
// $now = strtotime('now' . "0:0:0");
// echo "距離我的生日還有" . $myday = ($mysec - $now) / 86400 . "天";

$now = strtotime('now');
$myday = $now - $mysec;
$days = abs(floor($myday / 86400));
$hours = abs(floor(($myday % 86400) / 3600));
$min = abs(floor(($myday % 3600) / 60));
$sec = abs($myday % 60);



?>


<?php
if ($myday > 0) {
?>

    <h3>距離我的生日還有<?= $days ?>天<?= $hours ?>時<?= $min ?> 分<?= $sec ?>秒</h3>

<?php

} else {

?>
    <h3>我的生日已經過了<?= $days ?>天<?= $hours ?>時<?= $min ?> 分<?= $sec ?>秒</h3>

<?php
}
?>

<p>
    <a href="./index.php">回上一頁</a>
</p>