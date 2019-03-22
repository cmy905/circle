<?php
namespace app\home\controller;
use think\Db;
use think\Session;
use think\Controller;
use think\Model;


class Classify extends Controller
{   
      
     public function index(){
     	$cid = input('cid');
     	$tid=Db::name('comics_tag')->where('tag_id',$cid)->column('tid');
     	$list=Db::name('comics')->where('id','in',$tid)->select();
     	$taginfo = Db::name('tag')->where('id',$cid)->find();
     	$tag = Db::name('tag')->select();
     	$this->assign('tag',$tag);
     	$this->assign('taginfo',$taginfo);
     	$this->assign('list',$list);
        return $this->fetch();
    }
}