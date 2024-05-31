<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
td{
	border:solid 1px;
	}
</style>
</head>
<body>
<?php



//第一题
	echo "<table>";
for ($i = 2; $i <= 8; $i++) {

    for ($j = 2; $j <= 8; $j++) {
		 if ($i % 2 !=0 || $j % 2 !=0) {
            continue;
        }
        echo "<td>" . $i . " x " . $j . " = " . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo'<br/>';

//第二题

$radius = 1;
while (true) {
    $area = round(pi() * $radius * $radius, 2);
    if ($area > 100) {
        break;
    }
    echo "半径=". $radius.","."面积="." $area <br>";
    $radius++;
}






?>
</body>
</html>