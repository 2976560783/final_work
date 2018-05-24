<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>请输入正确的用户名和密码</p>
<form action="/final_work/admin.php?s=/Home/Login/login" method="post">
    用户名<input type="text" name="name">
    密码<input type="password" name="password">
    <input type="submit" value="提交">
</form>
</body>
</html>