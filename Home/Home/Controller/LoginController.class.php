<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login(){
        $user=M('user');
        $str=I('post.jump');
        $password=I('post.password');
        $name=I('post.name');
        $condition['name']=$name;
        $condition['password']=$password;

        $result=$user->where($condition)->find();
        if($result){
            //$this->success('登录成功','Login:index');
            $this->redirect('Login:index');
        }else{
            $this->error('登录失败，即将返回');
        }

    }

    public function regist(){
        $user=M('user');
        if($user->create()){
            $user->add();
            $this->success('注册成功','login');
        }else{
            $this->error('注册失败,即将返回注册页面');
        }
    }
}