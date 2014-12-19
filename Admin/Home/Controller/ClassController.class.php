<?php
namespace Home\Controller;
use Think\Controller;
class ClassController extends Controller {
    public function add(){
        $this->display('add');
    }
	public function add_pro(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 3145728 ;// 设置附件上传大小
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 // 设置附件上传根目录
		$upload->rootPath = './Public/';
		$upload->savePath = '/classImg/';
		$info   =   $upload->upload(); 
		$path=$info['myfiles']['savepath'].$info['myfiles']['savename'];
		$User = M("class"); // 实例化User对象
		$data['pei_class'] = $_POST['classname'];
		$data['pei_intro'] = $_POST['jianjie'];
		$data['pei_img'] = $path;
		if($info){
			if($User->add($data)){
				  $this->success('添加成功',U('/admin.php/home/class/addlist'));
			}else{
				$this->error('添加失败',U('/admin.php/home/class/addlist'));
			}
		}else{
			$this->error($upload->getError());
		}
	}
    
	public function addlist(){
		$User = M("class"); // 实例化User对象
		// 查找status值为1name值为think的用户数据
		$list = $User->select();
		$this->assign('info',$list);
        $this->display('addlist');
    }
}