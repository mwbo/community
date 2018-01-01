<?php
namespace app\index\controller;

class News extends \think\Controller
{
    public function preview()
    {
        // 查询这篇文章的信息
        $info = db('news')->where("id=".input('id'))->find();

        $this->assign('info',$info);
        
        return $this->fetch();
    }

     
}
