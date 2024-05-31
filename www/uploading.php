<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>


<?php // 允许上传的图片格式 
$allowedFormats = array('jpg', 'gif', 'png'); 
// 获取上传文件的文件格式
 $uploadedFile = $_FILES['file']['tmp_name']; 
 $format = pathinfo($uploadedFile, PATHINFO_EXTENSION);
  // 检查上传文件格式是否在允许范围内 
  if (in_array($format, $allowedFormats)) { 
  // 上传文件的操作
   move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES   ['file']['name']); echo '文件上传成功！'; 
   } else {
	    echo '只能上传jpg、gif、png格式的文件！'; }
 ?>

</body>
</html>