<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
   /**
   $string='php';
   $num =10;
   echo $string,$num;
   echo '<br>';
   print $string.'<br>';
   $an=array('a','b','c');
   print_r($an);
   echo '<br>';
   var_dump($string);
   echo '<br>';
   $file = fopen("casual.txt","w");
   var_dump($file);
   echo '<br>';
   echo"变量（\$tring1）直接赋值为null:";
   $string1=null;
   $string3="str";
   if(is_null($string1))
       echo "string1=null";
   echo "<p>变量（\$string2）未被赋值：";
   if(is_null($string2))
       echo "string2=null";
   echo "<p>被unset函数处理过的变量（\$string3）：";
   unset($string3);
   if(is_null($string3))
       echo "String3 = null";
   echo '<br>';
   echo '<br>';
   var_dump(is_bool('1'));
   echo '<br>';
   var_dump(is_string('1'));
   echo '<br>';
   var_dump(is_float(1.0));
   echo '<br>';
   var_dump(is_int(1));
   echo '<br>';
   var_dump(is_numeric(1));
   echo '<br>';
   $a1 = 'php20';
   echo (int)$a1;
   echo '<br>';

   
   var_dump((bool)-5.9);
   var_dump((float)false);
   var_dump((string)12);
   
   $str1 = 'h';
   $int1 = 666;
   echo $str1.$int1;
   var_dump($str1)
   
  
   $x=10;
   function test(){
	 global $x;
   $x =50;
   echo "在函数内输出的内容是：$x.</br>";
   }
   test();
   echo "在函数内输出的内容是：$x.</br>";
   
   
   var_dump(define("PI","3.1415926",1));
   echo pi;
   
   
   $a=10;
   $b=20;
   $c=30;
   echo ($a>$b)?"$a":"$b";
   */
   $n = rand();
   if($n%2==0){
	   echo "\$n = $n";
	   echo "<br>$n是偶数";
	   
	   }
   
   
   
?>
</body>
</html>