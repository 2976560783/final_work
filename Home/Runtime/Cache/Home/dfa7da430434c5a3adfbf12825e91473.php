<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
<p>用户登录</p>
<form action="/final_work/index.php?s=/Home/Login/login" method="post">
    <input type="hidden" name="jump" value="index">
    用户名：<input type="text" name="name"><br>
    密码：<input type="password" name="password"><br>
    <input type="submit" value="登录">
</form>
<form action="/final_work/index.php?s=/Home/Login/regist" method="post">
    <input type="hidden" name="jump" value="regist">
    <input type="submit" value="注册">
</form>
</body>
</html>