<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');


        /*
        $result=$user->find($id);
        $this->assign('name',$result);
*/
        $this->display();

    }

    public function read($search=''){

        $search_man=M('search_man');
        $search_song=M('search_song');
        $search_zuanji=M('search_zuanji');
        // 读取数据

        $search=I('post.search');
        $select_value=I('post.select_value');
        /*
        $select_value=I('select_value');
        echo $select_value;
        */
        //echo $search;
        //$search_man_sql="name=".$search;
        //$id=1;   测试发现可行
        //name='%s'   ''注意啊
        $search_man_data = $search_man->where("name='%s'",$search)->find();
        if($search_man_data) {
            $this->assign('data',$search_man_data);// 模板变量赋值
            $this->display('hello');
        }


    }
    /*
    public function insert(){
        $Form   =   D('user');
        if($Form->create()) {
            $result =   $Form->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($Form->getError());
        }
    }
*/
    /*
        public function select(){
            $user=M('user');
            $id=I('post.id',0);
            $result=$user->find($id);
            $this->assign('name',$result);
            $this->display();
        }
    */
}