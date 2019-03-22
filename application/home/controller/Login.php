<?php
namespace app\home\controller;
use think\Db;
use think\Session;
use think\Controller;
use think\Model;


class Login extends Controller{

    
  public function index(){
    return $this->fetch();
  }

  public function login_run(){
        
            $username=input("param.username");
            $password=md5(input("param.password"));
            
            $map_name['username']=array('eq',$username);
            
            
            $user_list_name=Db::name('user')->where($map_name)->find();
            if (empty($user_list_name)){
                
                return $this->error('用户不存在，请重新输入');
              
            }else{
                $map_name['password']=array('eq',$password);
                $user_list_pwd=Db::name('user')->where($map_name)->find();
                if (empty($user_list_pwd)){
                    return $this->error('密码不正确，请重新输入');
                }else {
                    Session::set('id',$user_list_pwd['id']);
                    Session::set('webusername',$user_list_pwd['username']);

                    // echo "<script>alert(".session('id').")</script>";
                    return $this->success('信息正确,登录成功',url('index/index'),1);

                }
            }
   }
}