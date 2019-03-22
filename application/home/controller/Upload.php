<?php
namespace app\home\controller;
use think\Db;
use think\Session;
use think\Controller;
use think\Model;


class Upload extends Controller
{   
      
     public function usercomics(){
        $uid=input('id',session('id'));
        $list = Db::name('comics')->where('uid',$uid)->select();
        #$bookinfo['imgurl'] = '/public/statisc/images/'.$book.'.jpg';
        $autherinfo = Db::name('user')->where('id',$uid)->find();
        $this->assign('list',$list);
        $this->assign('auther',$autherinfo);
        
        return $this->fetch();
    }
    
    public function comics_detail(){
    	$book = input('id');

        $map['tid'] = $book;
        // $list = Db::name('comics_image')->where($map)->field('zid')->group('zid')->select();
        // $this->assign('list',$list);

        $max_zid = Db::name('comics_image')->where($map)->field('zid')->group('zid')->order('zid desc')->limit(1)->find();

        // $map['tid']=$book;

        $list1 = Db::name('comics_image')->where($map)->order('yid asc')->select();
        // $this->assign('list',$list);
        $this->assign('list1',$list1);
        $list_chapter = Db::name('ComicsChapter')->where('comics',$book)->where('isValid',1)->order('no asc')->select();
        $this->assign('chapter',$list_chapter);
        // var_dump($list_chapter);

        $bookinfo = Db::name('comics')->where('id',$book)->find();
        $tagid = Db::name('comics_tag')->where('tid',$book)->column('tag_id');
        $taginfo = Db::name('tag')->where('id','in',$tagid)->find();
        $this->assign('book',$bookinfo);
        $this->assign('taginfo',$taginfo);
        return $this->fetch();
    }

    public function add_pic(){
        $book = input('book');
        $chapter = input('chapter');
        if($book && $chapter){
            $this->assign('book',$book);
            $this->assign('chapter',$chapter);

            if(request()->isAjax()){
                return json(['code'=>1,'msg'=>'保存成功']);
            }

            return $this->fetch();
        }
    }

    public function page_upload(){
        $file = request()->file('file');
        // var_dump($file);
        
        $info['book'] = input('book');
        $info['chapter'] = input('chapter');

        $info = $file->getInfo();
        $book = input('id');
        $chapter = input('chapter');

        $filename =  $info['name'];

        $pageinfo = explode('.',$filename);

        $page = (int)$pageinfo[0];

        $map_page['yid'] = $page;
        $map_page['tid'] = $info['book'];
        $map_page['zid'] = $info['chapter'];
        $map_page['isValid'] = 1;

        $check = Db::name('ComicsImage')->where($map_page)->find();
        if($check){

        }else{
            $comicsinfo = Db::name('Comics')->where('id',$info['book'])->find();

            $path = ROOT_PATH.'public/uploads/comics/'.$comicsinfo['namealt'].'/'.$info['chapter'].'/';
            
            $newinfo = $file->move($path,$filename);

            $new_data['yid'] = $page;
            $new_data['tid'] = $info['book'];
            $new_data['zid'] = $info['chapter'];
            $new_data['image_path'] = '/public/uploads/comics/'.$comicsinfo['namealt'].'/'.$chapter.'/'.$info['name'];
            $new_data['create_time'] = date('Y-m-d H:i:s',time());
            $new_data['isValid'] = 1;
            Db::name('ComicsImage')->insert($new_data);
        }

    }

    public function del(){
        $id = input('post.id');
        if(is_numeric($id)){
            Db::name('comics_image')->where('id',$id)->update(['is_state'=>'1']);
            return json(['code'=>1,'msg'=>'删除成功']);
        }else{
            return json(['code'=>0,'msg'=>'非法参数']);
        }
    }

    public function new_chapter(){
        $book = input('book');
        if($book){
            $comics_info = Db::name('Comics')->where('id',$book)->find();
            $this->assign('comics',$comics_info);
            
            $map_chapter['isValid'] = 1;
            $map_chapter['comics'] = $book;
            $max = Db::name('comics_chapter')->where($map_chapter)->max('no');
            $max++;

            if(request()->isAjax()){
                $params['comics'] = $book;
                $params['chaptername'] = input('post.chaptername');
                $params['intro'] = input('post.intro','');
                $params['time'] = date('Y-m-d H:i:s',time());
                $params['no'] = $max;

                if(!$params['chaptername']){
                    return json(['code'=>0,'msg'=>'请输入章节名称']);
                }

                Db::name('ComicsChapter')->insert($params);
                Db::name('comics')->where('id',$book)->update(['update_until' => $max,'update_time'=>date('Y-m-d H:i:s',time())]);

                return json(['code'=>1,'msg'=>'章节创建成功']);
            }

        
            return $this->fetch();
        }else{
            $this->error('非法请求',url('/'));
        }
    }
     
     public function add_comics(){
        $uid=session('id');
        $params['title'] = input('post.name');
        $params['brief'] = input('post.detail');
        $params['uid'] = $uid;
        $params['create_time'] = date('Y-m-d H:i:s',time());
        $params['update_time'] = date('Y-m-d H:i:s',time());

        $taginfo['tag'] = input('post.tag');
        $is_state = Db::name('tag')->where($taginfo)->find();
        if(empty($is_state))
        {
            $taginfo['uid']=session('id');
            Db::name('tag')->insert($taginfo);
        }
        $tagId = Db::name('tag')->where('tag',$taginfo['tag'])->find();
        Db::name('comics')->insert($params);
        $tid=Db::name('comics')->where('title',$params['title'])->find();
        $comicsTag['tid']=$tid['id'];
        $comicsTag['tag_id']=$tagId['id'];
        Db::name('comics_tag')->insert($comicsTag);
        return json(['code'=>1, 'data'=>'usercomics','msg'=>'添加成功']);
        
    }
    
    public function upload_comics(){
        return $this->fetch();
    }
   
     public function manage(){
        $id=input('post.id');
        if(is_numeric($id)){
            return json(['code'=>1,'msg'=>'跳转中']);
        }else{
            return json(['code'=>0,'msg'=>'非法参数']);
        }

    }

}