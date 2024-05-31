<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<style>
td{
	background-color:#0FF;
	}
</style>
<body>

<form action="index.php" method="post" name="forml" enctype="multipart/form-data">
  <table>
  <tr align="center"><h3>个人信息</h3></tr>
  </tr>
  <tr><td width="103" align="right">姓名：</td>
      <td align="left"><input name="user" type="text" id="user" size="20" maxlength="100" /> </td>
  </tr>
  <tr>
    <tr><td width="103" align="right">邮编：</td>
      <td align="left"><input name="user" type="text" id="user" size="20" maxlength="100" /> </td>
  </tr>
  <tr>
    <tr><td width="103" align="right">手机号码：</td>
      <td align="left"><input name="user" type="text" id="user" size="20" maxlength="100" /> </td>
  </tr>
  <tr>
  <td align="right">性别：</td>
  <td colspan="2" align="left"><input name="sex" type="radio" value="男" checked />男
  <input type="radio" name="sex" value="女" />女</td></tr>
  <tr>
  <td align="right">爱好：</td>
  <td colspan="2" align="left">
  <input name="fond[]" type="checkbox" id="fond[]" value="游泳" />
  游泳
   <input name="fond[]" type="checkbox" id="fond[]" value="读书" />
  读书
   <input name="fond[]" type="checkbox" id="fond[]" value="跑步" />
  跑步</td></tr>
  <tr><td align="right">住址：</td>
  <td colspan="2" align="left"><select name="select">
  <option value="北京" selected>北京</option>
  <option value="南昌" selected>南昌</option>
  <option value="上海" selected>上海</option>
  <option value="南京" selected>南京</option>
  </select></td></tr>
  
  <tr>
  <td align="right">照片：</td>
  <td colspan="2" align="left"><input name="photo" type="file" size="20"
  maxlength="1400" id="phtot" /></td></tr>
  <tr>
  <td></td>
  <td colspan="2" align="left"><textarea name="intro" cols="28" rows="3"
  id="intro"></textarea></td></tr>
  <tr align="center">
  <td colspan="3" > <input type="submit" name="submit" value="提交" />
  &nbsp;&nbsp;
  <input type="reset" name="submit2" value="重置" /></td></tr>

 
  </table>
</form>
<?php
if($_POSRT[submit]!=""){
	echo"请输入您的信息：<br>";
	echo"姓名：".$_POST[user]."$nbsp;&nbsp;";
	}
?>
</body>
</html>