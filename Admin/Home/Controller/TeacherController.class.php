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
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath = '/Uploads/'; // 设置附件上传根目录
		// 上传文件
		$model=M('teacher');
        $data['t_name']=$_POST['site_name'];
        $data['t_desc']=$_POST['position_id'];
        $data['p_id']=$_POST['p_id'];
		$data['img']='/Uploads/'.$_FILES['filename']['name'];
		$info = $upload->upload();
		if($info&&$model->add($data)) {
			// 上传错误提示错误信息
			$this->success('上传成功！',U('/admin.php/home/teacher/lists'));
			
		}else{// 上传成功
			$this->error($upload->getError());
		}
    }
}