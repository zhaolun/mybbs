<?php
namespace Home\Controller;
use Think\Controller;
class ForumController extends Controller {
    public function forum(){
		$model=M("pl");
        $data = $model->query("select * from bbs_pl join bbs_fl on bbs_pl.f_id = bbs_fl.f_id");
		//var_dump($data);die;
        $this->assign('list',$data);
        $this->display('forum');
    }
	public function pinglun(){
		$id=$_GET['id'];
		//echo $id;die;
		$model=M("pl");
		$data=$model->select();
        //$data = $model->where("id=$id")->find();
		//var_dump($data);die;
        $this->assign('list',$data);
        $this->display('pinglun');
    }
	public function huifu(){
		$this->display('huifu');
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