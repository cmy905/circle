<?php
namespace app\home\controller;
use think\Db;
use think\Session;
use think\Controller;
use think\Model;


class Personal  extends Controller
{   
     
    /* public function _initialize()
    {
        if(session('id')){
            $this->redirect(url('index/center'));
        }

    } */
     public function index(){
        $uid=session('id');

        #$bookinfo['imgurl'] = '/public/statisc/images/'.$book.'.jpg';
        $userinfo = Db::name('user')->where('id',$uid)->find();
        unset($userinfo['password']);
        $this->assign('user',$userinfo);
        $map['parentId']=100000;
        $map['levelType']=1;
        $list = Db::name('area');
        $province = $list->where($map)->select();
      //  var_dump($province);
        $this->assign('province',$province);
        
        return $this->fetch();
        
    }
     public function area_get(){
        if(request()->isPost()){
            $level = input('post.level');
            $map['levelType'] = $level;
            $map['parentId'] = input('post.id');
            $data = Db::name('area')->where($map)->select();
            if($data){
                $flag['code'] = 1;
                $flag['msg'] = '获取区域信息成功';
                $flag['data'] = $data;
            }else{
                $flag['code'] = 0;
                $flag['msg'] = '暂无区域信息';
            }
            return json($flag);
        }else{
            return $this->error('无效请求');
        }
    }

     public function usercomics(){
        $uid=input('id',session('id'));
        $list = Db::name('comics')->where('uid',$uid)->select();
        #$bookinfo['imgurl'] = '/public/statisc/images/'.$book.'.jpg';
        $autherinfo = Db::name('user')->where('id',$uid)->find();
        $this->assign('list',$list);
        $this->assign('auther',$autherinfo);
        
        return $this->fetch();
    }
    public function test(){
         return $this->fetch();
     }

}