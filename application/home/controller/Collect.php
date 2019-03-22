<?php
namespace app\home\controller;
use think\Db;
use think\Session;
use think\Controller;
use think\Model;


class Collect extends Controller
{   
      
     public function collect(){
     	$uid=session('id');
     	$tid=Db::name('collection')->where('uid',$uid)->column('tid');
     	$list=Db::name('comics')->where('id','in',$tid)->select();
     	$this->assign('list',$list);
        return $this->fetch();
    }

   
    public function comic_detail(){
       
        $id= input('id');

        if($id)
        {
            return json(['code'=>1,'msg'=>'加载中']);
        }else{
            
            return json(['code'=>0,'msg'=>'非法参数']);
        }
        
    }


    
}