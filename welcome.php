<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��̬��ҳʾ��</title>
</head>

<body>
<?
echo $_REQUEST[name];
?>
����ӭѧϰPHP 5�������� <br>
<?
$d=date("Y-m-d H:i:s");
echo "��ǰʱ��:".$d;
?>
<br>
<br>
<br>
<br>
<br>
<form name="form1" method="get" action="">
  <input name="name" type="text" id="name">
  <input type="submit" name="Submit" value="�ύ">
</form>
<p>&nbsp; </p>
</body>
</html>
