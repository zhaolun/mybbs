<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
use Think\Model;
class IntroController extends Controller {
    public function add(){
		//添加课程
		$User = M("class"); // 实例化User对象
		// 查找status值为1name值为think的用户数据
		$list = $User->select();
		$this->assign('info',$list);
        $this->display('add');
    }
	 public function add_pro(){
		 //添加课程处理
        $User = M("kecheng"); // 实例化User对象
		$data['bbs_name'] = $_POST['kecheng'];
		$data['bbs_banji'] = $_POST['id'];
		if($User->add($data)){
			  $this->success('添加成功',U('/admin.php/home/intro/addlist'));
		}else{
			$this->error('添加失败',U('/admin.php/home/intro/addlist'));
		}
    }
	public function addlist(){
        $User = M("kecheng"); // 实例化User对象
		// 查找status值为1name值为think的用户数据
		$list = $User->select();
		$this->assign('info',$list);
        $this->display('addlist');
    }
	public function addlist_pro(){
        $User = M("jieduan"); // 实例化User对象
		$data['bbs_kechengid'] = $_POST['kecheng'];
		$data['bbs_jieduan'] = $_POST['jieduan'];
		$data['neirong'] = $_POST['neirong'];
		$data['mubiao'] = $_POST['mubiao'];
		// 查找status值为1name值为think的用户数据
		if($User->add($data)){
			  $this->success('添加成功',U('/admin.php/home/intro/addlist'));
		}else{
			$this->error('添加失败',U('/admin.php/home/intro/addlist'));
		}
	}
	public function kechenglist(){
		$Model = new Model();
		$sql = 'select * from bbs_jieduan join bbs_kecheng on bbs_jieduan.bbs_kechengid=bbs_kecheng.bbs_id';
		$list = $Model->query($sql);
		$this->assign('info',$list);
        $this->display('kechenglist');
	}
}