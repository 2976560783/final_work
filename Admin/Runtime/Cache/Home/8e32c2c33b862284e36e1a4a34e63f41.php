<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户数据</title>
</head>
<body>
<p>用户数据</p>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>id:<?php echo ($vo["id"]); ?><br>
    姓名：<?php echo ($vo["name"]); ?><br>
    密码:<?php echo ($vo["password"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>

<form action="/final_work/admin.php?s=/Home/Index/test" method="post">
    请选择一个操作：
    <input type="radio" name="choose" value="create">创建数据
    <input type="radio" name="choose" value="update">更新数据
    <input type="radio" name="choose" value="delete">删除数据
    <input type="submit" name="sub" value="确认执行本操作">
</form>

</body>
</html>