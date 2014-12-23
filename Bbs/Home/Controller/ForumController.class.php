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

}