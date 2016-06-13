<?php
namespace  Home\Model;
use Think\Model;
class  UserModel extends Model{
    protected $_validate=array(
        array('username','require','请输入邮箱'),
        array('username','email','邮箱格式不正确'),
        array('password','require','请输入密码'),
//         array('password','1','密码不能为空',2,'eq'), 
    );

}