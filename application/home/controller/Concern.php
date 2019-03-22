<?php
namespace app\home\controller;
use think\Db;
use think\Session;
use think\Controller;
use think\Model;


class Concern extends Controller
{   
      
     public function concern(){
     	$uid=session('id');
     	$tuid=Db::name('concern')->where('uid',$uid)->column('tuid');
     	$list=Db::name('user')->where('id','in',$tuid)->select();
     	$this->assign('list',$list);
        return $this->fetch();
    }
    public function auther_info(){
     	$id = input('post.id');
        if(is_numeric($id)){
            return json(['code'=>1,'msg'=>'加载中']);
        }else{
            return json(['code'=>0,'msg'=>'非法参数']);
        }

    }
    public function user_info(){
        $id= input('id');
        $map['id']=$id;
        $user_info = Db::name('user')->where($map)->find();
        $list=Db::name('comics')->where('uid',$id)->select();
        $this->assign('userinfo',$user_info); 
        $this->assign('list',$list); 
        return $this->fetch();
    }
     public function index(){
        $uid=session('id');
        $tuid=Db::name('concern')->where('uid',$uid)->column('tuid');
        $list=Db::view('user','nickname,image')->view('comics','uid,id,title,image_path,update_time,update_until','user.id=comics.uid')->where('uid','in',$tuid)->order('update_time desc')->select();
        
       
       // $list=Db::name('user')->where('id','in',$tuid)->select();
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function update_detail(){
        $book= input('id');
        $map['id']=$book;
        
        $bookinfo=Db::name('comics')->where($map)->select();
        $this->assign('bookinfo',$bookinfo); 
        $this->assign('list',$list); 
        return $this->fetch();
    }
           
   
}