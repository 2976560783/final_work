<?php
namespace Home\Controller;
use Think\Controller;
class CURDController extends Controller{
    public function index(){

    }
    //所有表的操作的选择跳转页面
    public function operate(){
        $str=I('post.choose');
        $this->display($str);
    }

    //user表的操作
    public function userAdd(){
        $user=D('user');
        $user->create();
        $user->add();
        $this->redirect('Index/index','','2','操作成功，即将返回主页');
    }
    public function userUpdate(){
        $user =D('user');
        if($user->create()){
            $user->save();
            $this->redirect('Index/index','','2','操作成功，即将返回主页');
        }

    }
    public function userDelete(){
        $user=M('user');
        $id=I('post.id');
        $name=I('post.name');
        $password=I('post.password');
        if($id){
            $user->where("id=".$id)->delete();
        }elseif($name){
            $user->where("name="."$name")->delete();
        }elseif($password){
            $user->where('password'."$password")->delete();
        }else{
            $this->redirect('Index/index','','3','由于没有输入数据，即将返回主页');
        }
        $this->redirect('Index/index','','2','操作成功，即将返回主页');
    }


    //search_man 表的操作
    public function search_manOperate(){
        $str=I('post.choose');
        $this->display($str);
    }
    public function search_manAdd(){
        $user=D('user');
        $user->create();
        $user->add();
        $this->redirect('Index/index','','2','操作成功，即将返回主页');
    }
    public function search_manUpdate(){
        $user =D('user');
        if($user->create()){
            $user->save();
            $this->redirect('Index/index','','2','操作成功，即将返回主页');
        }

    }
    public function search_manDelete(){
        $user=M('user');
        $id=I('post.id');
        $name=I('post.name');
        $password=I('post.password');
        if($id){
            $user->where("id=".$id)->delete();
        }elseif($name){
            $user->where("name="."$name")->delete();
        }elseif($password){
            $user->where('password'."$password")->delete();
        }else{
            $this->redirect('Index/index','','3','由于没有输入数据，即将返回主页');
        }
        $this->redirect('Index/index','','2','操作成功，即将返回主页');
    }



    //
    public function test(){
        echo 'CURDController.class.php';
    }
}
?>