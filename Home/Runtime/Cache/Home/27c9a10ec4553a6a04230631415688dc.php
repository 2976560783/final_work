<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>按歌曲查询</title>
</head>
<body>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>歌曲编号：<?php echo ($vo["id"]); ?><br>
    专辑名：<?php echo ($vo["zuanji"]); ?><br>
    歌曲风格：<?php echo ($vo["style"]); ?><br>
    语种：<?php echo ($vo["language"]); ?><br>
    歌手编号：<?php echo ($vo["man_id"]); ?><br>
    点播频率：<?php echo ($vo["sequence"]); ?><br>
    歌手姓名：<?php echo ($vo["singer"]); ?>
    <hr>
    <form action="/final_work/index.php?s=/Home/Index/collect" method="post">
        <input type="hidden" name="table" value="search_song">
        <input type="text" name="man" value="">
        <input type="text" name="user" value="<?php echo session('name'); ?> ">
        <input type="text" name="song" value="<?php echo ($vo["song"]); ?>">
        <input  type="text" name="zuanji" value="">
        <input type="submit" value="点击收藏">
    </form><?php endforeach; endif; else: echo "" ;endif; ?>

</body>
</html>