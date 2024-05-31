<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php

//第一题
$currentMonth = date('n');
$currentYear = date('Y'); 

$daysInMonth = 0;

switch ($currentMonth) {
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        $daysInMonth = 31;
        break;
    case 4: case 6: case 9: case 11:
        $daysInMonth = 30;
        break;
    case 2:
        if (($currentYear % 4 == 0 && $currentYear % 100 != 0) || $currentYear % 400 == 0) {
            $daysInMonth = 29;
        } else {
            $daysInMonth = 28;
        }
        break;
}

echo "当前月份是{$currentMonth}月，共有{$daysInMonth}天。";
echo "<br>";

//第二题
$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}

echo "自然数1到10之间的和为：{$sum}";
echo "<br>";

//第三题

$num = 100;

do {
    if ($num % 3 != 0) {
        echo $num . " ";
    }
    $num++;
} while ($num <= 200);
?>
</body>
</html>