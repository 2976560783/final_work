<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>数据查询</p>
<!--
<select id="choose" onchange="show()" >
    <option value="man">歌手名称</option>
    <option value="song">歌曲</option>
    <option value="zuanji">专辑</option>
</select>
<script>
    function show(){
        var select=document.getElementById('choose');
        var index=select.selectedIndex;
        select_value=select.options[index].value;
    }
</script>
-->
<form action="/final_work/index.php?s=/Home/Index/read" method="post">
    <input type="text" name="search">
    <!--
    <input type="hidden" value="select_value" name="select_value">
    -->
    <input type="submit" value="提交">
</form>

</body>
</html>