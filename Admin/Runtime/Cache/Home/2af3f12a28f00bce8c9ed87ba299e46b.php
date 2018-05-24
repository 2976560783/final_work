<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>歌手数据删除</p>
<form action="/final_work/admin.php?s=/Home/CURD/search_manDelete" method="post">
    id:<input type="text" name="id">
    <!--
    姓名：<input type="text" name="name" >
    性别：<input type="text" name="sex">
    地区：<input type="text" name="area">
    公司：<input type="text" name="company">
    -->
    <input type="submit" value="提交">
</form>

</body>
</html>