<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$str = "l love bejing!";
print_r(explode(" ",$str));
?>
<br />
<hr />
<?php

function a($str) {
    $nums = explode('.', $str);
    
    if(count($nums) != 4) {
        return false;
    }   
    foreach($nums as $num) {
        if(!is_numeric($num) || $num < 0 || $num > 255) {
            return false;
        }
    }    
    return true;
}

$ip = "32.51.256.255";

if(a($ip)) {
    $nums = explode('.', $ip);
    echo "前两位数字是: " . $nums[0] . "." . $nums[1];
} else {
    echo "无效的IP地址";
}
?>
<br />
<hr />
<?php
$str = array('l','love','bejing!');
echo implode(" ",$str);
?>
</body>
</html>