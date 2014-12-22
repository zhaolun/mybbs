<?php
namespace Home\Controller;
use Think\Controller;
class ForumController extends Controller {
    public function forum(){
		$model=M('ganyan');
		$data = $model->select();
		$this->assign('info',$data);
        $this->display('forum');
    }
	 public function forum_pro(){
		 $model=M('ganyan');
		 $model1=M('pinglun');
		 $id=$_GET['id'];
		 $data = $model->where('id='.$id)->select();
		 $data1 = $model1->where('uid='.$id)->select();
		 $this->assign('info',$data);
		 $this->assign('info1',$data1);
		 $this->display('forumlist');
    }
	public function addforum(){
		$User = M("pinglun");
		$data['pinglun']=$_POST['name'];
		$data['uid']=$_POST['id'];
		//@session_start();
		@$data['pid']=1;
		if($User->data($data)->add()){
			$this->success("发表成功",U("Home/forum/forum_pro?id=".$_POST['id']));
		}
	}
}