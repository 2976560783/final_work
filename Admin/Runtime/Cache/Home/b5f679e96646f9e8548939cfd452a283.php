<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>歌曲信息</title>
</head>
<body>
<p>歌曲信息</p>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>id:<?php echo ($vo["id"]); ?><br>
    歌曲名称:<?php echo ($vo["song"]); ?><br>
    专辑:<?php echo ($vo["zuanji"]); ?><br>
    风格：<?php echo ($vo["style"]); ?><br>
    语言：<?php echo ($vo["language"]); ?><br>
    歌手ID：<?php echo ($vo["man_id"]); ?><br>
    点击频率：<?php echo ($vo["sequence"]); ?><br>
    <hr><?php endforeach; endif; else: echo "" ;endif; ?>

<form action="/final_work/admin.php?s=/Home/Index/operate" method="post">
    请选择一个操作：
    <input type="radio" name="song_operate" value="create">创建数据
    <input type="radio" name="song_operate" value="update">更新数据
    <input type="radio" name="song_operate" value="delete">删除数据
    <input type="submit" name="sub" value="确认执行本操作">
</form>

</body>
</html>