<?php
namespace Home\Controller;
use Think\Controller;
class CURDController extends Controller{
    public function index(){

    }
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
        echo 'CURDController.class.php';
    }
}
?>