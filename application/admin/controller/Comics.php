<?php

namespace app\admin\controller;
use app\admin\model\ComicsModel;
use app\admin\model\ComicsTagModel;
use think\Db;

class Comics extends Base
{

    /**
     * [index 文章列表]
     * @author [jonny] [980218641@qq.com]
     */
    public function index(){

       /* $key = input('key');
        $map = [];
        if($key&&$key!==""){
            $map['id'] = ['like',"%" . $key . "%"];
        }*/
        $Nowpage = input('get.page') ? input('get.page'):1;
         
        $limits = 10;// 获取总条数
        $start = $limits * ($Nowpage - 1);
        $count = Db::name('comics')->count();//计算总页面
        $allpage = ceil($count / $limits);
        $comics = new ComicsModel();
       // $lists = $comics->getComicsByWhere($start, $limits);
        $lists = Db::name('comics')->page($start, $limits)->order('id desc')->select();
        /*foreach($lists as $k=>$v){
            $lists[$k]['update_time']=date('Y-m-d H:i:s',$v['update_time']);
        }*/
        $this->assign('Nowpage', $Nowpage); //当前页
        $this->assign('allpage', $allpage); //总页数
        $this->assign('count', $count);
      //  $this->assign('val', $key);
        if(input('get.page')){
            //$comics->getlastsql();
            return json($lists);
        }
        return $this->fetch();
    }


    /**
     * [add_comics 添加文章]
     * @return [type] [description]
     * @author [jonny] [980218641@qq.com]
     */
    public function add_comics()
    {
        if(request()->isAjax()){

            $param = input('post.');
            $comics = new ComicsModel();
            $flag = $comics->insertComics($param);
            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
        }

      //  $nav=Db::name('nav')->where('status',1)->select();//文章导航

        $tag = new ComicsTagModel();//文章分类模型
        $this->assign('tag',$tag->getAllTag());
       // $this->assign('nav',$nav);
        return $this->fetch();
    }


    /**
     * [edit_comics 编辑文章]
     * @return [type] [description]
     * @author [jonny] [980218641@qq.com]
     */
    public function edit_comics()
    {
        $comics = new ComicsModel();
        if(request()->isAjax()){

            $param = input('post.');         
            $flag = $comics->updateComics($param);
            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
        }

        $id = input('param.id');
        $tag = new ComicsTagModel();
       // $nav=Db::name('nav')->where('status',1)->select();//文章导航
        $this->assign('tag',$tag->getAllTag());
       // $this->assign('nav',$nav);
        $this->assign('comics',$comics->getOneComics($id));
        return $this->fetch();
    }



    /**
     * [del_comics 删除文章]
     * @return [type] [description]
     * @author [jonny] [980218641@qq.com]
     */
    public function del_comics()
    {
        $id = input('param.id');
        $tag = new ComicsModel();
        $flag = $tag->delComics($id);
        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
    }



    /**
     * [comics_state 文章状态]
     * @return [type] [description]
     * @author [jonny] [980218641@qq.com]
     */
    public function comics_state()
    {
        $id=input('param.id');
        $status = Db::name('comics')->where(array('id'=>$id))->value('is_status');//判断当前状态情况
        if($status==1)
        {
            $flag = Db::name('comics')->where(array('id'=>$id))->setField(['is_status'=>0]);
            return json(['code' => 1, 'data' => $flag['data'], 'msg' => '已禁止']);
        }
        else
        {
            $flag = Db::name('comics')->where(array('id'=>$id))->setField(['is_status'=>1]);
            return json(['code' => 0, 'data' => $flag['data'], 'msg' => '已开启']);
        }
    
    }



    //*********************************************分类管理*********************************************//

    /**
     * [index_Tag 分类列表]
     * @return [type] [description]
     * @author [jonny] [980218641@qq.com]
     */
    public function index_tag(){

        $tag = new ComicsTagModel();
        $list = $tag->getAllTag();
        $this->assign('list',$list);
        return $this->fetch();
    }


    /**
     * [add_Tag 添加分类]
     * @return [type] [description]
     * @author [jonny] [980218641@qq.com]
     */
    public function add_tag()
    {
        if(request()->isAjax()){

            $param = input('post.');
            $tag = new ComicsTagModel();
            $flag = $tag->insertTag($param);
            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
        }

        return $this->fetch();
    }


    /**
     * [edit_Tag 编辑分类]
     * @return [type] [description]
     * @author [jonny] [980218641@qq.com]
     */
    public function edit_tag()
    {
        $tag = new ComicsTagModel();

        if(request()->isAjax()){

            $param = input('post.');
            $flag = $tag->editTag($param);
            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
        }

        $id = input('param.id');
        $this->assign('tag',$tag->getOneTag($id));
        return $this->fetch();
    }


    /**
     * [del_Tag 删除分类]
     * @return [type] [description]
     * @author [jonny] [980218641@qq.com]
     */
    public function del_tag()
    {
        $id = input('param.id');
        $tag = new ComicsTagModel();
        $flag = $tag->delTag($id);
        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
    }



    /**
     * [Tag_state 分类状态]
     * @return [type] [description]
     * @author [jonny] [980218641@qq.com]
     */
    public function tag_state()
    {
        $id=input('param.id');
        $status = Db::name('comics_tag')->where(array('id'=>$id))->value('status');//判断当前状态情况
        if($status==1)
        {
            $flag = Db::name('comics_tag')->where(array('id'=>$id))->setField(['status'=>0]);
            return json(['code' => 1, 'data' => $flag['data'], 'msg' => '已禁止']);
        }
        else
        {
            $flag = Db::name('comics_tag')->where(array('id'=>$id))->setField(['status'=>1]);
            return json(['code' => 0, 'data' => $flag['data'], 'msg' => '已开启']);
        }
    
    }
    /**
     * 获取文章一级分类
     * @return
     */
    public function get_tag(){
       // $nav_id=input('post.nav_id');
        $id=input('post.id');
        $tag_list=Db::name('comics_tag')->where(array('id'=>$id))->field('id,title')->select();
        return json($tag_list);

    }

    /**
     * 获取文章二级分类
     */
    public function get_tag_child(){

        $tid=input('post.tid');
        $tag_list=Db::name('comics_tag')->where('tid',$tid)->field('id,tag')->select();
        return json($tag_list);
    }
}