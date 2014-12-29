<?php
namespace Home\Controller;
use Think\Controller;
class ProjectController extends Controller {
    public function index(){
		$model=M("class");
        $data = $model->query("select * from bbs_class join bbs_kecheng on bbs_class.pei_id = bbs_kecheng.bbs_banji join bbs_jieduan on bbs_kecheng.bbs_id=bbs_jieduan.bbs_kechengid");
		//print_r($data);die;
		$this->assign('info',$data);
        $this->display('index');
    }
	public function jichu(){
        $this->display('jichu');
    }
	public function kecheng(){
		layout(false);
		layout("index");
		$id=$_GET['id'];
		$model=M("class");
		$data = $model->query("select * from bbs_class join bbs_kecheng on bbs_class.pei_id = bbs_kecheng.bbs_banji join bbs_jieduan on bbs_kecheng.bbs_id=bbs_jieduan.bbs_kechengid where pei_id=".$id);
		$data1 = $model->query("select count(*) as num from bbs_class join bbs_kecheng on bbs_class.pei_id = bbs_kecheng.bbs_banji join bbs_jieduan on bbs_kecheng.bbs_id=bbs_jieduan.bbs_kechengid where pei_id=".$id);
		$this->assign('info',$data);
		$this->assign('info1',$data1);
        $this->display('kecheng');
    }
}