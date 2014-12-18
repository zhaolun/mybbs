<?php
namespace Home\Controller;
use Think\Controller;
class ProblemController extends Controller {
    public function index(){
		$user = M('question');//获取表总数据
		
		$data = $user->where('status=1')->select();
		$data1 = $user->where('status=0')->select();
		//print_r($data);die;
		$this->assign('info',$data);
		$this->assign('list',$data1);
        $this->display('index');
 }
	public function xq(){
        $id=$_GET["id"];
        $model = M("question");
        $data["q"] = $model->where("id=$id")->find();
        $data["s"] = $model->where("id<$id")->order("id desc")->find();
        $data["x"] = $model->where("id>$id")->order("id asc")->find();
        $this->assign("data",$data);
        $this->display('xq');
		
	}
}