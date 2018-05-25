<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>歌手信息</title>
</head>
<body>


<p>歌手信息</p>

<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>id:<?php echo ($vo["id"]); ?><br>
    姓名：<?php echo ($vo["name"]); ?><br>
    性别：<?php echo ($vo["sex"]); ?><br>
    地区：<?php echo ($vo["area"]); ?><br>
    公司：<?php echo ($vo["company"]); ?><br>
    <hr><?php endforeach; endif; else: echo "" ;endif; ?>

<form action="/final_work/admin.php?s=/Home/CURD/operate" method="post">
    请选择一个操作：
    <input type="radio" name="choose" value="search_manAdd">创建数据
    <input type="radio" name="choose" value="search_manUpdate">更新数据
    <input type="radio" name="choose" value="search_manDelete">删除数据
    <br>
    <input type="submit" name="sub" value="确认执行本操作">
</form>

</body>
</html>