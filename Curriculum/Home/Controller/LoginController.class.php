<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $user=M('User');
        $res=$user->select();
        $this->display('Index/login');
    }
    public function checklogin() {
        $email=I('email');
        $password=I('password');
        $data['username']=$email;
        $data['password']=md5($password);
        $user=D('User');
        $user->startTrans();
        if(!$user->create($data)){
            $user->rollback();
            $this->error($user->getError());
        }else{
            $res=$user->where($data)->lock(true)->find();
            if($res){
                session('email',$res['username']);
                session('uid',$res['id']);
                $user->commit();
                if($res['type']==0)
                    $this->success('登录成功',__APP__.'/Home/Index');
                else 
                    $this->success('欢迎管理员回来',__APP__.'/Admin/Index');
            }else{
                $user->rollback();
                $this->error('账号和密码不匹配');
            }
        }
    }
}