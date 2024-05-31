<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
date_default_timezone_set("Etc/GMT-8");
if(!isset($_COOKIE["visittime"])){
	setcookie("visittime",date("y-m-d H:i:s"));
	echo "欢迎您访问网站！您是初次光临本网站哦"."<br>";
	}else{
		setcookie("visittime",date("y-m-d H:i:s",time()+3600));
		
		echo "您上次访问网站的时间为：".$_COOKIE["visittime"];
		echo "<br>";
		}
		echo "您本本次访问网站的时间为：".date("y-m-d H:i:s");
		
?>

</body>
</html>