<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php


//第一题
function powerFour($num) {
    if (is_int($num)) {
        return $num *$num *$num *$num ;
    } else {
        return "请输入一个整数";
    }
}
echo powerFour(16); 
?>
<br />
<?php
//第二题
function printDigitsReverse($num) {
    $numStr = strval($num);
    for ($i = strlen($numStr) - 1; $i >= 0; $i--) {
        echo $numStr[$i] . " ";
    }
}
printDigitsReverse(12345); 
?>
<br />
<?php
//第三题
function isNarcissisticNumber($num) {
    $temp = $num;
    $sum = 0;
    $digitsCount = strlen($num);
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += bcpow($digit, $digitsCount);
        $temp = floor($temp / 10);
    }
    return $sum == $num;
}
$number = 153;
if (isNarcissisticNumber($number)) {
    echo "{$number} 是水仙花数。";
} else {
    echo "{$number} 不是水仙花数。";
}

?>
</body>
</html>