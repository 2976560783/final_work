<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查询</title>
</head>
<body>


<p>用户数据</p>
<?php if(is_array($user_data)): $i = 0; $__LIST__ = $user_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>id:<?php echo ($data["id"]); ?><br>
    姓名：<?php echo ($data["name"]); ?><br>
    密码:<?php echo ($data["password"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
<!--
<form action="/final_work/admin.php?s=/Home/Index/operate" method="post">
    请选择一个操作：
    <input type="radio" name="operate" value="create">创建数据
    <input type="radio" name="operate" value="update">更新数据
    <input type="radio" name="operate" value="delete">删除数据
    <input type="submit" name="sub" value="确认执行本操作">
</form>
-->
<HR style="FILTER: alpha(opacity=100,finishopacity=0,style=2)" width="80%" color=#987cb9 SIZE=10>
<p>歌手信息</p>

<?php if(is_array($search_man_data)): $i = 0; $__LIST__ = $search_man_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>id:<?php echo ($data["id"]); ?><br>
    姓名：<?php echo ($data["name"]); ?><br>
    性别：<?php echo ($data["sex"]); ?><br>
    地区：<?php echo ($data["area"]); ?><br>
    公司：<?php echo ($data["company"]); ?><br>
    <hr><?php endforeach; endif; else: echo "" ;endif; ?>

<HR style="FILTER: alpha(opacity=100,finishopacity=0,style=2)" width="80%" color=#987cb9 SIZE=10>
<p>专辑信息</p>
<?php if(is_array($search_zuanji_data)): $i = 0; $__LIST__ = $search_zuanji_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 3 );++$i;?>id:<?php echo ($data["id"]); ?><br>
    歌手姓名:<?php echo ($data["man_name"]); ?><br>
    专辑:<?php echo ($data["zuanji"]); ?><br>
    <hr><?php endforeach; endif; else: echo "" ;endif; ?>

<HR style="FILTER: alpha(opacity=100,finishopacity=0,style=2)" width="80%" color=#987cb9 SIZE=10>
<p>歌曲信息</p>
<?php if(is_array($search_song_data)): $i = 0; $__LIST__ = $search_song_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>id:<?php echo ($data["id"]); ?><br>
    歌曲名称:<?php echo ($data["song"]); ?><br>
    专辑:<?php echo ($data["zuanji"]); ?><br>
    风格：<?php echo ($data["style"]); ?><br>
    语言：<?php echo ($data["language"]); ?><br>
    歌手ID：<?php echo ($data["man_id"]); ?><br>
    点击频率：<?php echo ($data["sequence"]); ?><br>
    <hr><?php endforeach; endif; else: echo "" ;endif; ?>

</body>
</html>