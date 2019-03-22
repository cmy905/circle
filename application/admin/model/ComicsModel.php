<?php

namespace app\admin\model;
use Think\Model;
use Think\Db;

class ComicsModel extends Model
{
    protected $name = 'comics';
    
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = true;


    /**
     * 根据搜索条件获取用户列表信息
     * @author [cmy] [347196043@qq.com]
     */
    public function getComicsByWhere($Nowpage, $limits)
    {
        return $this->order('id desc')->limit($Nowpage,$limits)->select();
    }
    
    
    /**
     * [insertArticle 添加文章]
     * @author [cmy] [347196043@qq.com]
     */
    public function insertComics($param)
    {
        try{
            $result = $this->allowField(true)->save($param);
            if(false === $result){             
                return ['code' => -1, 'data' => '', 'msg' => $this->getError()];
            }else{
                return ['code' => 1, 'data' => '', 'msg' => '漫画添加成功'];
            }
        }catch( PDOException $e){
            return ['code' => -2, 'data' => '', 'msg' => $e->getMessage()];
        }
    }



    /**
     * [updateArticle 编辑文章]
     * @author [cmy] [347196043@qq.com]
     */
    public function updateComics($param)
    {
        try{
            $result = $this->allowField(true)->save($param, ['id' => $param['id']]);
            if(false === $result){          
                return ['code' => 0, 'data' => '', 'msg' => $this->getError()];
            }else{
                return ['code' => 1, 'data' => '', 'msg' => '漫画编辑成功'];
            }
        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }



    /**
     * [getOneArticle 根据文章id获取一条信息]
     * @author [jonny] [980218641@qq.com]
     */
    public function getOneComics($id)
    {
        return $this->where('id', $id)->find();
    }



    /**
     * [delArticle 删除文章]
     * @author [jonny] [980218641@qq.com]
     */
    public function delComics($id)
    {
        try{
            $this->where('id', $id)->delete();
            return ['code' => 1, 'data' => '', 'msg' => '删除漫画成功'];
        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }

}