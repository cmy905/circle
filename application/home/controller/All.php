<?php
namespace app\home\controller;
use think\Db;
use think\Session;
use think\Controller;
use think\Model;


class All extends Controller
{   
      
     public function index(){
        return $this->fetch();
    }
     public function center(){
        return $this->fetch();
    }
   /* public function Login(){
      return 'login';
    }*/

     public function single(){
        return $this->fetch();
    }
    public function about(){
    	return $this->fetch();
    }
     public function shows(){
    	return $this->fetch();
    }
    public function concern(){
    	return $this->fetch();
    }
    public function movies(){
    	return $this->fetch();
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
   
}
