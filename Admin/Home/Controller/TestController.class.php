<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller{
    public function insert(){
        $user=D('user');
        if($user->craete()){
            $user->add();
        }
    }
    public function operate(){
        $this->display('add');
    }

    public function test(){
        echo 'hhhh';
    }
}
?>