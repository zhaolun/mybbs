<?php
namespace Home\Controller;
use Think\Controller;
class TeacherController extends Controller {
    public function lists(){
    	$model=M("teacher");
        $data=$model->select();
        $this->assign('list',$data);
        $this->display('list');
    }
    public function add(){
		$model=M("position");
        $data=$model->select();
        $this->assign('list',$data);
    	$this->display('add');
    }
	public function addpro(){

		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 3145728 ;// 设置附件上传大小
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 // 设置附件上传根目录
		$upload->rootPath = './Public/';
		$upload->savePath = '/Uploads/'; 
		// 上传文件
		$model=M('teacher');
        $data['t_name']=$_POST['t_name'];
        $data['t_desc']=$_POST['t_desc'];
        $data['p_id']=$_POST['p_id'];
		$data['img']='/Public/Uploads/'.$_FILES['filename']['name'];
		var_dump($data);die;
		$info = $upload->upload();
		if($info){
			if($model->add($data)){
				$this->success('添加成功！',U('/admin.php/home/teacher/lists'));
			}
		}else{
			$this->error($upload->getError());
		}
    }
}