<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
//第一题
$str="用今日的勤劳工作，换明日的双倍回报";
echo "原字符串为：$str<br>";
echo "替换字符串后：".str_replace('双','百',$str);
?>

<br />
<hr />

<?php
//第二题
$str="web标准网页设计与ASP";
$color = 'red'; // 设置文本颜色为红色
echo "原字符串为：$str<br>";
echo "替换字符串后：".str_replace('网页设计',"<span style='color: $color;'>网页设计</span>",$str);
?>

<br />
<hr />

<?php
//第三题
$str="黑色黄色枪支弹药走私物品增值发票";
$str1= array('黄','黑',"走私","发票","枪支");
echo "原字符串为：$str<br>";
foreach($str1 as $value){
  $str =str_replace($value, '', $str);
	}
echo "替换字符串后：".$str;
?>



</body>
</html>