<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $target='程式設計';
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";

    // $sub=mb_substr($str,mb_strpos($target,$str),mb_strpos($target,0));  //中文字用mb_
    // echo mb_substr($str,7,mb_strlen($target));
    // echo $sub;

    // print_r(explode($target,$str));

    $sub="<span style='font-size: 24px; color:red'>".$target."</span>";
    $result=str_replace($target,$sub,$str);//str_replace(尋找的字,取代成,尋找的字串);
    echo $str."<br>";
    echo "<hr>";
    echo $result."<br>";
    echo "<hr>";
    echo join($str,explode($target,$str));

    ?>

</body>
</html>