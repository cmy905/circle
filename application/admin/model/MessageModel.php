<?php
/**
 * Created by PhpStorm.
 * User: jonny
 * Date: 2017/2/9
 * Time: 10:26
 */

namespace app\admin\model;

use think\Db;
use think\Model;

class MessageModel extends Model
{
    protected $name='messages';

    /*
     * 留言列表
     */
    public function getMessagelist($start, $limits){
        return $this->order('id desc')->limit($start,$limits)->select();
    }

    /*
     * 删除留言
     */
    public function delMessage($id)
    {
        try{
            $this->where('id', $id)->delete();
            return ['code' => 1, 'data' => '', 'msg' => '删除私信成功'];
        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }
}