<?php
namespace Home\Model;
use Think\Model;
class CURDModel extends Model{
    /*
    public function create(){
        echo 'model/create';
    }
    */
    public function show(){
        echo 'CURDModel.class.php';
    }

    public function update(){

    }
    protected $_validate    =   array(
        array('name','require','用户名必须'),
    );
    // 定义自动完成
    protected $_auto    =   array(
        array('create_time','time',1,'function'),
    );
}