<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php // 声明一个键值对的数组
 $arr = array( "a" => "word", "c" => "excel", "b" => "ppt" ); 
      // 1.循环遍历数组的键和值 
 foreach($arr as $key => $value){
	  echo $key . " => " . $value . "<br>"; 
	 }  
	 echo "<br>";
	 echo "<hr>";
	 echo "<br>";
	//2.保持原有的键值对关系，按值升序
	sort($arr);/*sort 升序 ，rsort 降序*/
	echo "<br>数组按值升序：<br>";
	foreach($arr as $a){
	echo $a."&nbsp;&nbsp;&nbsp;&nbsp;";
	}
	echo "<br>";
	echo "<hr>";
	//3.保持原有的键值对关系，按值降序
	rsort($arr);/*sort 升序 ，rsort 降序*/
	echo "<br>数组按值降序：<br>";
	foreach($arr as $a){
	echo $a."&nbsp;&nbsp;&nbsp;&nbsp;";
	}
	echo "<br>";
	echo "<hr>";
	echo "<br>";
	//4.按键升序
	 // 按键名升序排序数组 
	 ksort($arr); 
	 // 使用foreach循环遍历排序后的数组 
	 foreach($arr as $key => $value){
	  echo  $key . " => " . $value . "<br>"; } 
	  echo "<br>";
	  echo "<hr>";
	  echo "<br>";
	 //5.统计数组元素个数
	 // 统计数组元素个数 
	 $count = count($arr);
	  echo "有: " . $count."个"; 
	
 ?>
 <br />
 <hr />
 <?php
 //编写程序，先声明一个数组，然后输出数组中最大元素和最小元素的索引值。去掉最大数和最小数，求剩下所有数字的平均值
 
 // 声明一个数组 
 $arr = array(5,8,2,3,7,6,9,1,8,4,3,0); 
 // 输出数组中最大元素和最大元素的索引值 
 $max_value = max($arr);
 $max_index = array_search($max_value, $arr);
 echo "最大值索引值是： " . $max_index . "<br>"; 
 // 输出数组中最小元素和最小元素的索引值 
 $min_value = min($arr);
  $min_index = array_search($min_value, $arr);
  echo  "最小值索引值是： " . $min_index . "<br>"; 
 // 去掉最大数和最小数
  unset($arr[$max_index]);
   unset($arr[$min_index]); 
  // 求剩下所有数字的平均值
   $average = array_sum($arr) / count($arr);
    echo "平均值是: " . $average;
 ?>
</body>
</html>