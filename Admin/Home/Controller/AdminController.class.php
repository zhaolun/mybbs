<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function index(){
        $this->display('index');
    }

	//前台导航管理
	function nav(){
		$this->display();
	}
}