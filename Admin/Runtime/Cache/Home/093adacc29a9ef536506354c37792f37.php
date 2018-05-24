<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>专辑数据添加</p>
<form action="/final_work/admin.php?s=/Home/CURD/add" method="post">
    <input type="hidden" name="tableName" value="search_zuanji">
    日期：<input type="date" name="date">
    歌手姓名：<input type="text" name="man_name">
    专辑：<input type="text" name="zuanji">
    <input type="submit" value="提交">
</form>
</body>
</html>