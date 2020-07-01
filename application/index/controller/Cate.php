<?php
namespace app\index\controller;

use think\Controller;
class Cate extends Controller
{
	public function cate()
	{
		

        $cates=db('cate')->order('id desc')->select();
        $this->assign('cates',$cates);
        //$articles=db('article')->select();
        $articles=db('article')->paginate(2);//分页功能
       $this->assign('articles',$articles);
        return $this->fetch();


	}
}