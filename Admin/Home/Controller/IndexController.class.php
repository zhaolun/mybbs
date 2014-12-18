<?php
namespace Home\Controller;
use Think\Controller;
use \Think\Verify;
class IndexController extends Controller {
    public function index(){
		layout(false);
		//var_dump($_SESSION['verify_code']);die;
        $this->display('index');
    }

	function yzm(){
		//layout(false);
		$Verify =     new Verify();
		$Verify->fontSize = 14;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->entry();
	}

	//用户登录验证
	function login(){
		$Verify = new Verify();
		if($Verify->check($_POST['yzm'])){
			$name=addslashes($_POST['username']);
			$pwd=sha1($_POST['password']);
			$db=M("admin_user");
			$res=$db->where("username='$name' and password='$pwd'")->select();
			if(empty($res[0]['user_id']))
				$this->error("用户名密码错误");
			else{
				session("userid",$res[0]['user_id']);
				session("username",$res[0]['username']);
				$this->success("登陆成功","/admin.php/Home/admin/index");
			}
		}else{
			$this->error("验证码有误");
		}
	}
}