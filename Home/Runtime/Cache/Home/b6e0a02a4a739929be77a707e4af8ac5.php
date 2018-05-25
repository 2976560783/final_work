<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>收藏的数据如下</p>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>用户名：<?php echo ($vo["user"]); ?><br>
    歌曲：<?php echo ($vo["song"]); ?><br>
    歌手：<?php echo ($vo["man"]); ?><br>
    专辑：<?php echo ($vo["zuanji"]); ?>
    <hr><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>