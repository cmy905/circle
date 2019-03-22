<?php
namespace app\home\controller;
use think\Controller;


class Single extends Controller
{    
   
    public function single(){
        return $this->fetch();
    }
   
}
