<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
        
    }
    public function getclass() {
        $time=I('time');
        if($time==null)
            $time=date('Y-m-d');
        else
            $time=$time=str_replace('/','-',$time);;
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