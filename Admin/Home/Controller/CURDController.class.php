<?php
namespace Home\Controller;
use Think\Controller;
class CURDController extends Controller{
    public function index(){

    }
    //所有表的CURD选择的跳转页面
    public function operate(){
        $str=I('post.choose');
        $this->display($str);
    }

    //所有表的添加操作
    public function add(){
        $str=I('post.tableName');
        echo '操作数据表是'.$str."<br>";
        $user=D($str);
        if($user->create()){
            echo $str.'表单元素创建成功'."<br>";
            $user->add();
        }else{
            $this->redirect('Index/admin','','3','表单元素创建失败');
        }
        $this->redirect('Index/admin','','1','操作成功，即将返回主页');
    }

    //所有表的更新操作
    public function update(){
        $str=I('post.tableName');
        echo '操作数据表是'.$str."<br>";
        $user =D($str);
        if($user->create()){
            $user->save();
            $this->redirect('Index/admin','','1','操作成功，即将返回主页');
        }else{
            echo '本表的表创建失败'."<br>";
            $this->redirect('Index/admin','','2','即将返回主页');
        }
    }
    //所有表的删除操作
    public function delete(){
        $tableName=I('post.tableName');
        echo $tableName;
        $id=I('post.id');
        $table=M($tableName);
        if($id && $table){
            $table->where("id=$id")->delete();
            $this->redirect('Index/admin','','1','操作成功，即将返回主页');
        }else{
            $this->redirect('Index/admin','','3','user 表    由于没有输入数据，即将返回主页');
        }
    }

    /*
    //user表的字段删除
    public function userDelete(){
        $user=M('user');
        $id=I('post.id');
        if($id){
            $user->where("id=".$id)->delete();
        } else{
            $this->redirect('Index/index','','3','user 表    由于没有输入数据，即将返回主页');
        }
        $this->redirect('Index/index','','1','操作成功，即将返回主页');
    }


    //search_man 表的字段删除
    public function search_manDelete(){
        $search_man=M('search_man');
        $id=I('post.id');
        if($id){
            $search_man->where("id=".$id)->delete();
        }else{
            $this->redirect('Index/index','','3','search_man 表由于没有输入数据，即将返回主页');
        }
        $this->redirect('Index/index','','1','操作成功，即将返回主页');
    }

    //search_song 字段的删除
    public function search_songDelete(){
        $search_song=M('search_song');
        $id=I('post.id');

        if($id){
            $search_song->where("id=".$id)->delete();
        }else{
            $this->redirect('Index/index','','3','search_song 表由于没有输入数据，即将返回主页');
        }
        $this->redirect('Index/index','','1','操作成功，即将返回主页');
    }

    //search_zuanji 的字段删除
    public function search_zuanjiDelete(){
        $search_zuanji=I('search_zuanji');
        $id=I('post.id');
        if($id){
            $search_zuanji->where("id=".$id)->delete();
        }else{
            $this->redirect('Index/index','','3','search_zuanji 表由于没有输入数据，即将返回主页');
        }
        $this->redirect('Index/index','','1','操作成功，即将返回主页');
    }

    */


    //
    public function test(){
        echo 'CURDController.class.php';
    }
}
?>