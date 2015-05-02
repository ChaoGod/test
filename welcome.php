<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>动态网页示例</title>
</head>

<body>
<?
echo $_REQUEST[name];
?>
，欢迎学习PHP 5开发技术 <br>
<?
$d=date("Y-m-d H:i:s");
echo "当前时间:".$d;
?>
<br>
<br>
<br>
<br>
<br>
<form name="form1" method="get" action="">
  <input name="name" type="text" id="name">
  <input type="submit" name="Submit" value="提交">
</form>
<p>&nbsp; </p>
</body>
</html>
