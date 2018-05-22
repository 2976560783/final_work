<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>search_song</title>
</head>
<body>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>歌曲编号：<?php echo ($vo["id"]); ?><br>
    专辑名：<?php echo ($vo["zuanji"]); ?><br>
    歌曲风格：<?php echo ($vo["style"]); ?><br>
    语种：<?php echo ($vo["language"]); ?><br>
    歌手编号：<?php echo ($vo["man_id"]); ?><br>
    点播频率：<?php echo ($vo["sequence"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>

</body>
</html>