<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user更新数据</title>
</head>
<body>
<form method="post" action="/final_work/admin.php?s=/Home/CURD/userUpdate">
    输入id:<input type="text" name="id">
    输入姓名：<input type="text" name="name">
    输入密码：<input type="password" name="password">
    <input type="submit" value="提交">
</form>

</body>
</html>