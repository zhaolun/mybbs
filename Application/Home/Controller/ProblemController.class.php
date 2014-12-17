<?php
namespace Home\Controller;
use Think\Controller;
class ProblemController extends Controller {
    public function index(){
		$user = M('bbs_question');//获取表总数据
		print_r($user);die;
		$data = $user->where('status=1')->select();
		$data1 = $user->where('status=0')->select();
		$this->assign('info',$data);
		$this->assign('list',$data1);
        $this->display('index');


    }
}