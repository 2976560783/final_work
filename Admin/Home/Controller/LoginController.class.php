<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login(){
        $user=M('user');
        $password=I('post.password');
        $name=I('post.name');
        $condition['name']=$name;
        $condition['password']=$password;
        $result=$user->where($condition)->find();
        if($result){
            $this->success('登录成功','Index:index');
        }else{
            $this->error('用户名或者密码错误');
        }
        /*
         * 提示：
         * 用户名：龚正阳
         * 密码：16272215
         */
    }
}
