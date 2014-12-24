<?php
namespace Home\Controller;
use Think\Controller;
class XueyuanController extends Controller {
    public function add(){
        $this->display('add');
    }
	public function addpro(){
		$User = M("ganyan");
		$data['ganyan']=$_POST['title'];
		$data['content']=$_POST['content'];
		if($User->data($data)->add()){
			$this->success("发表成功",U("Home/xueyuan/add"));
		}
    }
}