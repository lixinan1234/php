<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
//(1)mysql配置信息
$local="localhost";//主机名
$port = "80";//端口号
$user="root";
$password="rootroot";
$chanrset="utf8";//编码
$dbname="db_blog";//数据库名
//（2）链接mysql服务器
$con = mysqli_connect($local,$user,$password);
var_dump($con);
if(!$con){
	echo '链接服务器失败'.mysqli_connect_error();
	die();
	}

//（3）选择数据库
$selectdb = mysqli_select_db($con,$dbname);
var_dump($selectdb);
if(!$selectdb){
	echo '链接服务器失败';
	die();
	}
?>
</body>
</html>