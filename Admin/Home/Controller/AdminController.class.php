<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
	//主页信息
    public function index(){
        $this->display('index');
    }

	//前台导航管理
	function nav(){
		$db=M("nav");
		$this->info=$db->select();
		$this->display();
	}

	//前台导航添加
	function add_nav(){
		$this->display();
	}

	//导航添加操作数据库
	function nav_addpro(){
		$db=M("nav");
		$db->create();
		if($db->add())
			$this->success('添加成功,正在跳转...','/admin.php/Home/admin/nav',2);
		else
			$this->error('添加失败,正在跳转...');
	}

	//删除导航
	function delnav(){
		$db=M("nav");
		//echo $_GET['id'];die;
		if($db->where("nav_id=".$_GET['id'])->delete())
			$this->success('删除成功,正在跳转...');
		else
			$this->error('删除失败,正在跳转...');
	}

	//导航编辑
	function upnav(){
		$db=M("nav");
		$this->info = $db->where('nav_id='.$_GET['id'])->find();
		$this->display();
	}

	//导航编辑操作数据库修改数据库中数据
	function nav_uppro(){
		$db=M("nav");
		$db->create();
		//echo $_POST['h_id'];
		//print_r($db->create());die;
		if($db->where("nav_id=".$_POST['h_id'])->save())
			$this->success('修改成功,正在跳转...','/admin.php/Home/admin/nav',2);
		else
			$this->error('您尚未进行任何操作或者因为某些原因导致修改失败,正在跳转...','/admin.php/Home/admin/nav',3);
	}

	//幻灯片管理
	function image(){
		$db=M("slide_image");
		$this->info=$db->select();
		$this->display();
	}

	//添加幻灯片
	function add_image(){
		$this->display();
	}
	
	//退出
	function loginout(){
		$_SESSION=array();
		$this->success('退出成功,正在跳转...','/admin.php/Home/index/index',2);
	}
}