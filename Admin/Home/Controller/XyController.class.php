<?php
namespace Home\Controller;
use Think\Controller;
class XyController extends Controller {
    public function lists(){
		$user = M('xueyuan');
		
		$data = $user->select();
		//print_r($data);die;
		$this->assign('info',$data);
		$this->display('list');
    }
	public function add(){
		$this->display('add');
	}
	
	
}