<?php
namespace Home\Controller;
use Think\Controller;
class BanjiController extends Controller {
    public function add(){
        $this->display('huodong');
    }
	public function add_pro(){
        //print_R($_POST);die;
		/*Array ( [huodong] => 大苏打撒旦 [xhuodong] => 大苏打撒 [content] => 大苏打打扫打扫 ) */
		$User = M("banji"); // 实例化User对象
		$data['title'] = $_POST['huodong'];
		$data['content'] = $_POST['content'];
		$data['littitle'] = $_POST['xhuodong'];
		if($User->add($data)){
			  $this->success('添加成功',U('/admin.php/home/banji/add'));
		}else{
			$this->error('添加失败',U('/admin.php/home/banji/add'));
		}
    }
	public function addlist(){
		$User = M("banji"); // 实例化User对象
		// 查找status值为1name值为think的用户数据
		$list = $User->select();
		$this->assign('info',$list);
        $this->display('addlist');
	}
	public function del(){
		$id=$_GET['id'];
		$User = M("banji"); // 实例化User对象
		$info=$User->where('id='.$id)->delete(); // 删除id为5的用户数据
		if($info){
			  $this->success('删除成功',U('/admin.php/home/banji/addlist'));
		}else{
			$this->error('删除失败',U('/admin.php/home/banji/addlist'));
		}

	}
	public function bian(){
		$id=$_GET['id'];
		$User = M("banji"); // 实例化User对象
		// 查找status值为1name值为think的用户数据
		$list=$User->where('id='.$id)->find();
		//print_r($list);die;
		$this->assign('info',$list);
        $this->display('bian');
	}
	public function bian_pro(){
		$id=$_POST['id'];
		$User = M("banji");
		$data['title'] = $_POST['huodong'];
		$data['littitle'] = $_POST['xhuodong'];
		$data['content'] = $_POST['content'];	
		$info=$User->where('id='.$id)->save($data); 
		// 根据条件更新记录
		if($info){
			  $this->success('修改成功',U('/admin.php/home/banji/addlist'));
		}else{
			$this->error('修改失败',U('/admin.php/home/banji/addlist'));
		}
	}
	
}