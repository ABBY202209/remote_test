<h1>計算日期間隔</h1>
設有兩個日期：
<il>
    <li>2022-09-10</li>
    <li>2022-10-21</li>
</il>
<br>
註：從開始日的凌晨零時零分零秒
<hr>

<?php
$a='2022-09-10';
$b='2022-09-12';

//起算時點沒設定的話，是從 0:0:0 開始
$aa=strtotime($a."0:0:0"); 
$bb=strtotime($b."23:59:59")+1; //+1秒

$ans1=($bb-$aa)/86400;
$ans2=($bb-$aa)/86400-1;
$ans3=($bb-$aa)/86400-2;



?>

<div>
    <ol>
        <li>包含起始日：
            <?=$ans1;?>天
        </li>
        <li>不含起始日：
            <?=$ans2;?>天 
        </li>
        <li>不含起始日和結束日：
            <?=$ans3;?>天
        </li>
    </ol>

</div>


<p>
    <a href="./index.php">回上一頁</a>
</p>
