<h1>利用date()函式的格式化參數，完成以下的日期格式呈現
</h1>
2021/10/05<br>
10月5日 Tuesday<br>
2021-10-5 12:9:5<br>
2021-10-5 12:09:05<br>
今天是西元2021年10月5日 上班日(或假日)<br>
<hr>
<?php
$date="2022/10/17 12:9:5";
$sec=strtotime($date);

echo "<h1>日期格式呈現</h1>";
echo "原始日期：$date<br>";

echo date("m月d日l",$sec)."<br>";
echo date("Y-m-d ",$sec).(int)date("h",$sec).":".(int)date("i",$sec).":".(int)date("s",$sec)."<br>";
echo date("Y-m-d h:i:s",$sec)."<br>";
echo "今天是西元".date("Y年m月d日 ",$sec);

echo (date('N',$sec)>5)?"假日":"工作日";

if(date('N',$sec)<6){
    echo "上班日";
}else{ 
    echo "假日";
}

?>

<p>
    <a href="./index.php">回上一頁</a>
</p>