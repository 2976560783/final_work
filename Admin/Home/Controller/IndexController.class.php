<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');

        $this->display();
    }

    public function operate(){
        $this->display('select');
    }

    public function show(){
        $user=M('user');
        $search_man=M('search_man');
        $search_song=M('search_song');
        $search_zuanji=M('search_zuanji');

        $user_data = $user->select();
        $search_man_data = $search_man->select();
        $search_song_data = $search_song->select();
        $search_zuanji_data = $search_zuanji->select();


        $this->assign('user_data',$user_data);
        $this->assign('search_man_data',$search_man_data);
        $this->assign('search_song_data',$search_song_data);
        $this->assign('search_zuanji_data',$search_zuanji_data);

        $this->display();


    }
}