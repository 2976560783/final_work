<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>按歌手查询</title>
</head>
<body>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>歌手编号：<?php echo ($vo["id"]); ?><br>
    歌手名：<?php echo ($vo["name"]); ?><br>
    性别：<?php echo ($vo["sex"]); ?><br>
    歌手地区：<?php echo ($vo["area"]); ?><br>
    所属公司：<?php echo ($vo["company"]); ?>
    <hr>
    <form action="/final_work/index.php?s=/Home/Index/collect" method="post">
        <input type="text" name="man" value="<?php echo ($vo["name"]); ?>">
        <input type="text" name="user" value="<?php echo session('name'); ?> ">
        <input type="text" name="song" value="">
        <input  type="text" name="zuanji" value="">
        <input type="submit" value="点击收藏">
    </form><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>