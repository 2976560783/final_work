<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>请输入歌手，或者歌曲，或者专辑名称</p>
<form action="/final_work/index.php?s=/Home/Index/read" method="post">
    <input type="text" name="search">
    <!--
    <input type="hidden" value="select_value" name="select_value">
    -->
    <input type="submit" value="提交">
</form>
</body>
</html>