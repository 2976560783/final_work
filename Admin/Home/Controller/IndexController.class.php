<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');

        $this->display('Login:login');
    }
/*
    public function operatemmm(){
        //判断操作表是哪个
        if(I('post.man_operate')){
            $data=M('search_man');
        }elseif(I('post.user_operate')){
            $data=M('user');
        }elseif(I('post.song_operate')){
            $data=M('search_song');
        }elseif(I('post.zuanji_operate')){
            $data=M('zuanji');
        }else{
            die('数据库增删改查操作有误');
        }

        //判断选择的操作
        echo I('post.man_operate');

        //$this->display('select');
    }
*/
/*
    public function operate(){
        if(I('post.table')=="user"){
            $user=M('user');
            $user_data = $user->select();
            $this->assign('user_data',$user_data);
        }elseif(I('post.table')=="search_man"){
            $search_man=M('search_man');
            $search_man_data = $search_man->select();
            $this->assign('search_man_data',$search_man_data);
        }elseif(I('post.table')=="search_song"){
            $search_song=M('search_song');
            $search_song_data = $search_song->select();
            $this->assign('search_song_data',$search_song_data);
        }elseif(I('post.table')=="search_zuanji"){
            $search_zuanji=M('search_zuanji');
            $search_zuanji_data = $search_zuanji->select();
            $this->assign('search_zuanji_data',$search_zuanji_data);
        }else{
            die('选择表有误');
        }
        $this->display();
    }
*/
//以下是上一段代码的改进
    public function show(){
        $str=I('post.table');
        echo $str;
        $data=M($str);
        $data_select=$data->select();
        $this->assign('data',$data_select);
        $this->display('CURD:'.$str);
    }

    public function test(){
        echo 'IndexController.class.php';
    }
}
