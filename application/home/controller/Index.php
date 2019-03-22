<?php
namespace app\home\controller;
use think\Db;
use think\Session;
use think\Controller;
use think\Model;


class index extends Controller
{   
     
    /* public function _initialize()
    {
        if(session('id')){
            $this->redirect(url('index/center'));
        }

    } */
     public function index(){
         if(session('id')){
            $this->redirect(url('/home/index/center'));
        }else{
            $tag = Db::name('tag')->select();
        $this->assign('tag',$tag);
            return $this->fetch();
        }
    }
     public function center(){
        $id=session('id');
        $username=Db::name('user')->where('id',$id)->find();
        $this->assign('name',$username);
        $tag = Db::name('tag')->select();
        $this->assign('tag',$tag);
        $popular = Db::view('user','nickname')->view('comics','uid,id,title,image_path,browse_count','user.id=comics.uid')->order('collect_count desc')->limit(8)->select();
        $recent = Db::view('user','nickname')->view('comics','uid,id,title,image_path,browse_count','user.id=comics.uid')->order('update_time desc')->limit(4)->select();
        $this->assign('list',$popular);
        $this->assign('relist',$recent);
        return $this->fetch();
    }
   /* public function Login(){
      return 'login';
    }*/

    /*public function login_run(){
        
            $email=input("param.email");
            $password=md5(input("param.password"));
            
            $map_name['email']=array('eq',$email);
            
            
            $user_list_name=Db::name('user')->where($map_name)->find();
            if (empty($user_list_name)){
            	 
                return $this->error('用户名不存在，请重新输入');
            }else{
                $map_name['password']=array('eq',$password);
                $user_list_pwd=Db::name('user')->where($map_name)->find();
                if (empty($user_list_pwd)){
                    return $this->error('密码不正确，请重新输入');
                }else {
                    Session::set('id',$user_list_pwd['id']);
                    Session::set('webusername',$user_list_pwd['username']);
                    return $this->success('信息正确,登录成功',url('index/center'),1);
                }
            }
   }*/
   public function login_run(){
        
            $email=input("post.email");
            $password=md5(input("post.password"));
            
            $map_name['email']=array('eq',$email);
            
            
            $user_list_name=Db::name('user')->where($map_name)->find();
            if (empty($user_list_name)){
                 
                return json(['code'=>0, 'data'=>'', 'msg'=>'用户名不存在，请重新输入']);
            }else{
                $map_name['password']=array('eq',$password);
                $user_list_pwd=Db::name('user')->where($map_name)->find();
                if (empty($user_list_pwd)){
                    return json(['code'=>0, 'data'=>'','msg'=>'密码，请重新输入']);
                }else {
                    Session::set('id',$user_list_pwd['id']);
                    Session::set('webusername',$user_list_pwd['username']);
                    return json(['code'=>1, 'data'=>'index/center','msg'=>'登录成功']);
                }
            }
    }
   public function signup(){
        $email=input("param.email");
        $password=md5(input("param.password"));
        $telephone=input("param.phone");
        $user_email=Db::name('user')->where('email',$email)->find();
        if($user_email){
            return $this->error('邮箱已存在，请重新注册');
        }
       // $map_name['email']=array('eq',$email);
        $data = ['password'=> $password,'email' => $email, 'phone' => $telephone];
        $is_succeed=Db::name('user')->insert($data);
        if($is_succeed)
        {
            Session::set('id',$user_email['id']);
            return $this->success('注册成功',url('index/center'),1);
        }

   }
   public function loginOut()
    {
        session(null);
        $this->redirect(url('index/index'));
    }
    public function single(){
        $book = input('book');
        #$bookinfo['imgurl'] = '/public/statisc/images/'.$book.'.jpg';
        $bookinfo = Db::name('comics')->where('id',$book)->find();
        $uid = $bookinfo['uid'];
        $other = Db::name('comics')->where('uid',$uid)->select();
        $autherinfo = Db::name('user')->where('id',$uid)->find();
        $chapter = Db::name('comics_image')->where('tid',$book)->field('zid')->group('zid')->select();
        $this->assign('list',$chapter);
        $this->assign('auther',$autherinfo);
        $this->assign('book',$bookinfo);
        $this->assign('other',$other);
        return $this->fetch();
    }
    public function about(){
    	return $this->fetch();
    }
    public function read(){
        $book = input('book');
        //$book = input('book');
        $chapter = input('chapter');
        $page = input('page');
        if($chapter)
        {
            return json(['code'=>1,'msg'=>'加载中']);
        }else{
            
            return json(['code'=>0,'msg'=>'非法参数']);
        }
    }
     public function readpage(){
        $book = input('book');
        //$book = input('book');
        $chapter = input('chapter');
        $page = input('page');
        if($page)
        {
            return json(['code'=>1,'msg'=>'加载中']);
        }else{
            echo $chapter;
            echo $page;
            return json(['code'=>0,'msg'=>'非法参数']);
        }
    }
     public function shows(){
         $id = session('id');

        $comicsId = input('book');

       // $zid = input('zid');
        
          //  $zid = input('zid',1);
        $this->assign('book',$comicsId);
        $user = Db::name('user')->where('id',$id)->find();
        $this->assign('user',$user);
        $uid = Db::name('comics')->where('id',$comicsId)->find();
        $auther = Db::name('user')->where('id',$uid['uid'])->find();
        $this->assign('auther',$auther);
        $usercollect = Db::name('collection')->where('uid',$id)->count();
        $this->assign('collect_count',$usercollect);
        $userconcern = Db::name('concern')->where('uid',$id)->count();
        $this->assign('concern_count',$userconcern);

        $maplook['uid']=$id;
        $maplook['tid']=$comicsId;
        
        $is_exist = Db::name('user_look')->where($maplook)->find();
        if(empty($is_exist))
        {
         $data = ['uid'=>$id,'tid'=>$comicsId];
        Db::name('user_look')->insert($data);
       
       }
        $browse = Db::name('user_look')->where('tid',$comicsId)->count();
        Db::name('comics')->where('id',$comicsId)->update(['browse_count' => $browse]);
        $bookinfo = Db::name('comics')->where('id',$comicsId)->find();
        $this->assign('bookinfo',$bookinfo);

        if($comicsId){
            $chapter = input('chapter');
            $until = Db::name('user_look')->where($maplook)->find();
            if($chapter > $until['until_look'])
              Db::name('user_look')->where($maplook)->update(['until_look' => $chapter]);
            $page = input('page',1);
            $chapterInfo = Db::name('comics_chapter')->where('comics',$comicsId)->order('id asc')->select();
            $this->assign('chapterInfo',$chapterInfo);
            $map['tid'] = $comicsId;
            $map['zid'] = $chapter;
            $map['yid'] = $page;

            $imginfo = Db::name('ComicsImage')->where($map)->find();
            $this->assign('img',$imginfo);
            
            unset($map['yid']);
             $max = Db::name('ComicsImage')->where($map)->max('yid');
            $this->assign('max',$max);
           // $max = Db::name('ComicsImage')->where($map)->max('yid');
            $pages['next'] = ($imginfo['yid'] + 1)>(int)$max?'chapter='.($chapter+1):'chapter='.$chapter.'&page='.($page + 1);
            $pages['last'] = $imginfo['yid']==1?'chapter='.($chapter-1):'chapter='.$chapter.'&page='.($page - 1);
            if($chapter == 1&&$page==1){
                $pages['last'] = 'chapter=1';
            }
             $this->assign('page',$pages);
            $this->assign('ye',$page);
            $mapinfo['tid'] = $comicsId;
            $mapinfo['zid'] = $chapter;
            $list = Db::name('ComicsImage')->where($mapinfo)->order('id asc')->select();
            $this->assign('list',$list);
            $zid_max = Db::name('comics_chapter')->where('comics',$comicsId)->max('no');
            $yid=1;
            $chapters['next'] = ($imginfo['zid'] + 1)>(int)$zid_max?'chapter='.$chapter:'chapter='.($chapter+1).'&page='.$yid;
            $chapters['last'] = $imginfo['zid']==1?'chapter='.$chapter:'chapter='.($chapter-1).'&page='.$yid;
             $this->assign('chapters',$chapters);

            return $this->fetch();
        }else{
            return $this->error('非法请求');
        }
    }
    public function add_collect(){
    	 $id = input('post.id'); 
         $uid = session('id');

          $imginfo['tid'] = $id;
          $imginfo['uid'] = $uid;
          $info=Db::name('collection')->where($imginfo)->find();
        if(empty($info)){
            $count = Db::name('comics')->where('id',$id)->find();
            $count['collect_count']++;
            $imginfo['create_time'] = date('Y-m-d H:i:s',time());
            Db::name('collection')->insert($imginfo);
            Db::name('comics')->where('id',$id)->update(['collect_count'=>$count['collect_count']]);
            return json(['code'=>1,'msg'=>'收藏成功']);
        }
        else{
            return json(['code'=>0,'msg'=>'已收藏']);
        }
       
    }
    public function add_con(){
         $tuid = input('post.tuid'); 
         $uid = session('id');

          $coninfo['uid'] = $uid;
          $coninfo['tuid'] = $tuid;
          $info=Db::name('concern')->where($coninfo)->find();
        if(empty($info)){
            $coninfo['concern_time'] = date('Y-m-d H:i:s',time());
            
            if($tuid == $uid)
                return json(['code'=>0,'msg'=>'自己不能关注自己哦']);
            else 
            {     Db::name('concern')->insert($coninfo);      
                 return json(['code'=>1,'msg'=>'关注成功']);
             }
        }
        else{
            return json(['code'=>0,'msg'=>'已关注']);
        }
       
    }
     public function sports(){
    	return $this->fetch();
    }
      public function copyright(){
    	return $this->fetch();
    }
    public function upload(){
        return $this->fetch();
    }

    public function img_info_insert_test(){
        $imginfo['tid'] = 21;
        $imginfo['create_time'] = date('Y-m-d H:i:s',time());
        
        $imginfo['zid'] = 1;
        for($i=1;$i<34;$i++){
            if($i<10){
                $tip = '00'.$i;
            }else{
                $tip = '0'.$i;
            }
            $imginfo['yid'] = $i;
            $imginfo['image_path'] = '/public/uploads/comics/dpcq/0'.$imginfo['zid'].'/'.$tip.'.jpg';
            Db::name('ComicsImage')->insert($imginfo);
            echo '第'.$imginfo['zid'].'章：第'.$i.'张已经写入<br />';
        }

        $imginfo['zid'] = 2;
        for($i=1;$i<13;$i++){
            if($i<10){
                $tip = '00'.$i;
            }else{
                $tip = '0'.$i;
            }
            $imginfo['yid'] = $i;
            $imginfo['image_path'] = '/public/uploads/comics/dpcq/0'.$imginfo['zid'].'/'.$tip.'.jpg';
            Db::name('ComicsImage')->insert($imginfo);
            echo '第'.$imginfo['zid'].'章：第'.$i.'张已经写入<br />';
        }

        $imginfo['zid'] = 3;
        for($i=1;$i<25;$i++){
            if($i<10){
                $tip = '00'.$i;
            }else{
                $tip = '0'.$i;
            }
            $imginfo['yid'] = $i;
            $imginfo['image_path'] = '/public/uploads/comics/dpcq/0'.$imginfo['zid'].'/'.$tip.'.jpg';
            Db::name('ComicsImage')->insert($imginfo);
            echo '第'.$imginfo['zid'].'章：第'.$i.'张已经写入<br />';
        }

        $imginfo['zid'] = 4;
        for($i=1;$i<25;$i++){
            if($i<10){
                $tip = '00'.$i;
            }else{
                $tip = '0'.$i;
            }
            $imginfo['yid'] = $i;
            $imginfo['image_path'] = '/public/uploads/comics/dpcq/0'.$imginfo['zid'].'/'.$tip.'.jpg';
            Db::name('ComicsImage')->insert($imginfo);
            echo '第'.$imginfo['zid'].'章：第'.$i.'张已经写入<br />';
        }

        $imginfo['zid'] = 5;
        for($i=1;$i<32;$i++){
            if($i<10){
                $tip = '00'.$i;
            }else{
                $tip = '0'.$i;
            }
            $imginfo['yid'] = $i;
            $imginfo['image_path'] = '/public/uploads/comics/dpcq/0'.$imginfo['zid'].'/'.$tip.'.jpg';
            Db::name('ComicsImage')->insert($imginfo);
            echo '第'.$imginfo['zid'].'章：第'.$i.'张已经写入<br />';
        }
    }
   
}
