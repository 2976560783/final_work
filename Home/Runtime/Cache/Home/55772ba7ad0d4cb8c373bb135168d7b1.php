<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>search_zuanji</title>
</head>
<body>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>专辑编号：<?php echo ($vo["id"]); ?><br>
    发行日期：<?php echo ($vo["date"]); ?><br>
    歌手名：<?php echo ($vo["man_name"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>