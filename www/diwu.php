<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
function &fun($temp_str=0){
	return $temp_str;
	}
	$str=&fun("函数引用");
	echo $str."br";
	?>
    <br />
    <hr />
<?php
date_default_timezone_set("Asia/shanghai");
echo date("现在的时间是："."Y 年 m 月 d 日 H:i:s")
?>
    <br />
    <hr />
<?php
$x = "hello";
$y=000;
var_dump(empty($x));echo"br";
var_dump(empty($y));echo"br";
echo "hr";
var_dump(isset($x));echo"br";
var_dump(isset($y));echo"br";
echo "hr";

unset($x);
var_dump(isset($x));echo"br";
echo "hr";
?>
    <br />
    <hr />



<form action="#" method="post">
请输入数字：<input type="text" name="text1"/>
<input type="submit" name="sub" value="提交"/>
</form>
<?php
$num=$_POST['text1'];
if(isset($_POST['sub']))
   echo "你输入的数字是：{$num}";
?>
 <br />
 <hr />





<form method="post">
    <label for="number">请输入一个数字:</label>
    <input type="text" name="number" id="number">
    <input type="submit" value="提交">
</form>


<?php
if(isset($_POST['number'])){
    $input = $_POST['number'];
    
    if(is_numeric($input)){
        $absoluteValue = abs($input);
        echo "这个数的绝对值是： $absoluteValue";
    } else {
        echo "请输入一个数字";
    }
}
?>
<br />
<hr />



<form method="post">
<h2>网页计算器</h2>
<br />
    <label for="number1">数值1:</label>
    <input type="text" name="number1" id="number1" value="<?php echo isset($_POST['number1']) ? $_POST['number1'] : ''; ?>"><br>
    <br />
    <label for="number2">数值2:</label>
    <input type="text" name="number2" id="number2" value="<?php echo isset($_POST['number2']) ? $_POST['number2'] : ''; ?>"><br>
    <br />
    <input type="submit" name="add" value="+">
    <input type="submit" name="subtract" value="-">
    <input type="submit" name="multiply" value="*">
    <input type="submit" name="divide" value="/">
    <br />
</form>
<?php
if(isset($_POST['number1']) && isset($_POST['number2'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    
    if(isset($_POST['add'])){
        $result = $number1 + $number2;
        $operation = '+';
    } elseif(isset($_POST['subtract'])){
        $result = $number1 - $number2;
        $operation = '-';
    } elseif(isset($_POST['multiply'])){
        $result = $number1 * $number2;
        $operation = '*';
    } elseif(isset($_POST['divide'])){
        $result = $number1 / $number2;
        $operation = '/';
    }
    echo "<br>";
    echo "运算结果  =     "."$result";
}
?>
<br />
<hr />
<?php
echo strlen("This is a Character string:\radb123");
echo '<br>';
echo strlen('汉字');
echo '<br>';
$str = "Hello World!";
echo $str."<br>";
echo trim($str,"Hed!")."<br>";
echo rtrim($str,"ld!")."<br>";
echo ltrim($str,"He")."<br>";
?>




</body>
</html>