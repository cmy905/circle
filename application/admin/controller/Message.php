<?php
/**
 * Created by PhpStorm.
 * User: jonny
 * Date: 2017/2/9
 * Time: 10:23
 */
namespace app\admin\controller;
use think\Db;
use app\admin\model\MessageModel;
class Message extends Base{
    public function index(){
        /*
         * 留言列表
         */
        $Nowpage = input('get.page') ? input('get.page'):1;

        $limits = 10;// 获取总条数
        $start = $limits * ($Nowpage - 1);
        $count = Db::name('messages')->count();//计算总页面
        $allpage = ceil($count / $limits);
        $leavl = new MessageModel();
        $lists = $leavl->getMessagelist($start, $limits);
        foreach($lists as $k=>$v){
            $lists[$k]['send_time']=date('Y-m-d H:i:s',$v['send_time']);
            // $lists[$k]['update_time']=date('Y-m-d H:i:s',$v['update_time']);
        }
        $this->assign('Nowpage', $Nowpage); //当前页
        $this->assign('allpage', $allpage); //总页数
        $this->assign('count', $count);
        // $this->assign('val', $key);
        if(input('get.page')){
            //$article->getlastsql();
            return json($lists);
        }
        return $this->fetch();
    }
    /*
     * 删除留言
     */
    public function del_message(){
        $id = input('param.id');
        $order = new MessageModel();
        $flag = $order->delMessage($id);
        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
    }
}