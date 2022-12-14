<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期函式</title>
</head>

<body>
    <h1>基礎函式</h1>
    <ul>
        <li>
            <h1>date</h1>
        </li>

        <?php
        $time=90000;
        echo date("y-m-d", $time) . "<br>"; //小寫 
        echo date("Y-M-D", 90000) . "<br>"; //大寫
        echo date("Y/m/d", 90000) . "<br>";
        echo date("西元Y年m月d日", 90000) . "<br>";
        echo "本月的第".date("j", 90000) ."天" ."<br>"; 
        echo date("l", 90000) . "<br>";
        echo date("N", 90000) . "<br>";
        echo date("j", 90000) . "<br>";
        echo date("y-m-d"). "<br>";
        echo date("L") . "<br>"; //判斷閏年
        echo date("0",90000)."<br>";
        date_default_timezone_set("Asia/Taipei");
        echo date("y-m-d h:i:s l");
        ?>

        <li><h1>strtotime</h1></li>
        <?php
        $now= strtotime('now');
        $coming=$now+(60*60*24)*10;
        echo $now."秒"."<br>";
        echo "今天：".date("y-m-d H:I:s l",$now)."<br>";
        echo "十天後:".date("y-m-d h:i:s l",$coming);

        echo "<hr>";

        $tomorrow=strtotime("+1 days");
        echo strtotime('now')."<br>";
        echo $tomorrow ."<br>";
        echo date("y-m-d h:i:s",$tomorrow)."<br>";
        
        echo "<hr>";

        $t=date("y-m-d",$tomorrow);
        echo $t."<br>";
        echo strtotime($t)."秒";

        ?>
        <li><h1>練習</h1></li>
        <ol>
            <li><a href="./d20221017_1.php">計算日期間隔</a></li>
            <li><a href="./d20221017_2.php">計算自己的生日</a></li>
            <li><a href="./d20221017_3.php"></a>日期格式呈現</li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </ol>
        <li></li>
        <li></li>
    </ul>
</body>

</html>