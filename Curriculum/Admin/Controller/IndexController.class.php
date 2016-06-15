<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function getclass() {
        $time=I('time');
        if($time==false){
            $time=date('Y-m-d');
        }
        $class=M('setclass');
        $where="'".$time."' between `start_time` and `end_time` ";
        $res=$class->where($where)->select();
        if($res){
            $this->ajaxReturn($res,'JSON');
        }else{
            $this->ajaxReturn(0,'JSON');
        }
    }
}