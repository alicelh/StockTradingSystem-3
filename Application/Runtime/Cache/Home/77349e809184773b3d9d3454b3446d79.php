<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>注册</title>
	</head>
	<body>
		<form action='/stocktradingsystem/index.php/Home/Register/doReg' method='post' name='myForm'>
			用 户 名：<input type='text' name='username'/><br/>
			密　　码：<input type='password' name='password'/><br/>
			确认密码：<input type='password' name='repassword'/><br/>
			邮　　箱：<input type='text' name='email'/><br/>
			手机号码：<input type='text' name='phone_number'></br>
			 <button type="submit">注册</button>
			 <button type="reset">重置</button>
		</form>
	</body>
</html>