<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function signout() {
        session('email',null);
        session('uid',null);
        $this->success('注销成功',__APP__.'/Home/Login');
    }
}