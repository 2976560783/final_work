<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>歌曲数据插入</p>
<form action="/final_work/admin.php?s=/Home/CURD/add" method="post">
    <input type="hidden" name="tableName" value="search_song">
    歌曲名：<input type="text" name="song">
    专辑：<input type="text" name="zuanji">
    风格：<input type="text" name="style">
    语言：<input type=text" name="language">
    歌手编号：<input type="text" name="man_id">
    播放频率：<input type="text" name="sequence">
    <input type="submit" value="提交">
</form>

</body>
</html>