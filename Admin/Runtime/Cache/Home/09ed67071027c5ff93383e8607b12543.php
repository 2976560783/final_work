<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="/final_work/admin.php?s=/Home/Index/test" method="post">
    请选择一个操作：
    <input type="radio" name="choose" value="create">创建数据
    <input type="radio" name="choose" value="update">更新数据
    <input type="radio" name="choose" value="delete">删除数据
    <input type="submit" name="sub" value="确认执行本操作">
</form>
</body>
</html>