<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $time=date('Y-m-d');
        $class=M('setclass');
        $where['status']=0;
        $res=$class->where($where)->select();
        if($res){
            $this->assign('time',$time);
            $this->assign('list',$res);
        }
        $this->display();
    }
    public function getclass() {
        $time=I('time');
        if($time==null)
            $time=date('Y-m-d');
        else
            $time=$time=str_replace('/','-',$time);
        $class=M('setclass');
        $where="'".$time."' between `start_time` AND `end_time` AND `status`=1 ";
        $res=$class->where($where)->select();
        if($res){
            $this->ajaxReturn($res,'JSON');
        }else{
            $this->ajaxReturn(0,'JSON');
        }
    }
    public function addinfo() {
        $where['id']=I('id');
        $data['status']=1;
        $data['class_time']=I('time');
        $data['x']=I('x');
        $data['y']=I('y');
        $class=M('setclass');
        $res=$class->where($where)->data($data)->save();
        if(!res==false){
            $this->ajaxReturn('更新成功','JSON');
        }else{
            $this->ajaxReturn('更新失败','JSON');
        }
    }
}