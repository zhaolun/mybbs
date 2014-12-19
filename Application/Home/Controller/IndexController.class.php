<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $user = M('family');//获取表总数据
		$data = $user->select();
		//print_r($data);die;
		$this->assign('info',$data);
        $this->display('index');
    }
	public function jiuye(){
        $this->display('jiuye');
    }
}