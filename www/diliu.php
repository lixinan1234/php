<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$str= "This is a very beautiful box.";
echo "原字符串：$str<br>";
echo "截取字符串：".substr($str,8)."<br>";
echo "截取字符串：".substr($str,8,6)."<br>";
echo "截取字符串：".substr($str,-4)."<br>";
echo "截取字符串：".substr($str,-19,-4)."<br>";
?>
<hr>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  身份证号：<input type="text" name="idCard">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idCard = $_POST['idCard'];
  if (isValidIdCard($idCard)) {
    echo "输入的身份证号 $idCard 有效";
  } else {
    echo "输入的身份证号无效";
  }
}
function isValidIdCard($idCard) {
  // 判断身份证号是否符合要求，前18或17位数字，末尾是X
  if (preg_match('/^\d{17}[0-9Xx]$/', $idCard)) {
    return true;
  } else {
    return false;
  }
}
?>
<hr>
<br>






<?php

function isValidEmail($email) {
    if (strstr($email, '@')) {
        $atPosition = strpos($email, '@');
        $dotPosition = strpos($email, '.', $atPosition);
        
        if ($dotPosition !== false) {
            return true;
        }
    }
    return false;
}

$mali = "2482932323@qq.com";

if (isValidEmail($mali)) {
    echo "$mali <B>是</B>一个有效的 E-mail 地址";
} else {
    echo "$mali <B>不是</B>一个有效的 E-mail 地址";
}
?>


