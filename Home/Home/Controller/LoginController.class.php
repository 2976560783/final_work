<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login(){
        $user=M('user');
        //$str=I('post.jump');
        $password=I('post.password');
        $name = I('post.name');
        $condition['name']=$name;
        $condition['password']=$password;

        $result=$user->where($condition)->find();
        if($result){
            //$this->success('登录成功','Login:index');
            session('name',$name);
            $this->redirect('Login:index');
        }else{
            $this->error('登录失败，即将返回');
        }


    }

    public function registTemp(){
        $this->display('regist');
    }

    public function regist(){
        $user=M('user');
        echo '准备注册';
        if($user->create()){
            $user->add();
            $this->redirect('Index/index','','1','注册成功，即将返回登录界面');
        }else{
            $this->error('注册失败,即将返回注册页面');
        }
    }
}