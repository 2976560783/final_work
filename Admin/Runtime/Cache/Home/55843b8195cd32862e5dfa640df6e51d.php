<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台主页</title>
</head>
<body>
<p>后台主页</p>
<form action="/final_work/admin.php?s=/Home/Index/show" method="post">
    选择操作的表
    <input type="radio" name="table" value="user">用户
    <input type="radio" name="table" value="search_man">歌手
    <input type="radio" name="table" value="search_song">歌曲
    <input type="radio" name="table" value="search_zuanji">专辑
    操作数据：<input type="submit" name="sub" value="确认执行本操作">
</form>
</body>
</html>