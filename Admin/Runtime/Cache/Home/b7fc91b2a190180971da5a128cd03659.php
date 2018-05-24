<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user数据删除</title>
</head>
<body>
<p>user数据删除</p>
<p>请在以下输入框中随意填写，只要有一项符合，则删除该条数据库记录</p>
<form method="post" action="/final_work/admin.php?s=/Home/CURD/userDelete">
    输入id:<input type="text" name="id">
    输入姓名：<input type="text" name="name">
    输入密码：<input type="password" name="password">
    <input type="submit" value="提交">
</form>
</body>
</html>