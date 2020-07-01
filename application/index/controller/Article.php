<?php
namespace app\index\controller;
use think\Controller;
class Article extends Controller
{
	public function article()
	{
		
        $cates=db('cate')->order('id desc')->select();
        $this->assign('cates',$cates);
        $id=input('id');
        $articles=db('article')->find($id);
        db('article')->where('id','=',$id)->setInc('click');//点击量的增加
        $this->assign('articles',$articles);
        return $this->fetch();

	}
}