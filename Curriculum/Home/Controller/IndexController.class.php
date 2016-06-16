<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(!session('?uid')){
            $this->error('请先登录',__APP__.'/Home/Login');
        }
        $time=date('Y-m-d');
        $select=M('selectinfo');
        $where['uid']=session('uid');
        $join='INNER JOIN setclass ON setclass.id=selectinfo.classid';
        $joins='INNER JOIN user ON user.id=selectinfo.uid';
        $res=$select->join($join)->join($joins)->select();
        if($res){
            //var_dump($res);
            $this->assign('time',$time);
            $this->assign('list',$res);
        }
        $this->display();
    }
    public function signout() {
        session('email',null);
        session('uid',null);
        $this->success('注销成功',__APP__.'/Home/Login');
    }
    public function getclass(){
        $data['uid']=session('uid');
        $data['classid']=I('id');
        $select=M('selectinfo');
        $re=$select->where($data)->select();
        if(!$re){
            $res=$select->data($data)->add();
            if($res){
                $this->ajaxReturn('1','JSON');
            }else{
                $this->ajaxReturn('0','JSON');
            }
        }else{
            $this->ajaxReturn('2','JSON');
        }
        
    }
}