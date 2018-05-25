<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>请输入歌手，或者歌曲，或者专辑名称进行搜索</p>
<form action="/final_work/index.php?s=/Home/Index/read" method="post">
    <input type="text" name="search">
    <!--
    <input type="hidden" value="select_value" name="select_value">
    -->
    <input type="submit" value="搜索">
</form>
<hr>
<br>
<form action="/final_work/index.php?s=/Home/Index/showCollect" method="post">
    <input type="submit" value="查询本用户收藏的歌曲，专辑，歌手信息">
</form>
</body>
</html>