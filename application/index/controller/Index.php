<?php
namespace app\index\controller;
use think\Controller;
class Index
	extends Controller
{
	public function index()
	{
//		   $user=db('user')->select();
//		   dump($user);
//           $this->assign('user',$user);

        $cates=db('cate')->order('id desc')->select();
        $this->assign('cates',$cates);
        //$articles=db('article')->select();
        $articles=db('article')->paginate(2);//分页功能
       $this->assign('articles',$articles);
        return $this->fetch();

	}
}
//	
//	
//	
// public function add()
//    {  if(request()->isPost()){
//         $data=[
//	'username'=>input('post.username'),
//	'sex'=>input('post.sex'),
//          ];
//      if(db('user')->insert($data)){  //添加功能
//	return $this->success('用户添加成功','index');
//       }else{
//	return $this->error('用户添加失败');
//       }}
//return $this->fetch();
//    }
//	
//	
//	
//	
//	public function del()
//    {     $id=input('id');
//    if($id!=1){if(db('user')->delete($id)){return $this->success('用户删除成功','index');}
//		else{return $this->error('用户删除失败');}
//    }else{return $this->error('超级用户不能被删除');}
//	}
//	
//	
//	public function modify()
//    { 
//            {  if(request()->isPost()){
//            $data=[
//            'id'=>input('id'),
//            'username'=>input('post.username'),
//            'sex'=>input('post.sex') ];
//            if(db('user')->update($data)){   //修改功能
//	return $this->success('用户修改成功','index');
//           }else{  
//                   return $this->error('用户修改失败');  }
//            return;   }
//                 $id=input('id');
//                 $result=db('user')->find($id);
//                 $this->assign('result',$result);
//                return $this->fetch();
//
//    }
//
//	}
//	
//	 public function update()
//    {      if(request()->isPost()){
//           $data=[
//          'id'=>input('id'),
//          'username'=>input('post.username'),
//          'sex'=>input('post.sex')
//           ];
//           if(db('user')->update($data)){  //修改功能
//	return $this->success('用户修改成功','index');
//           }else{
//	return $this->error('用户修改失败');
//          } } }
//
//
//}