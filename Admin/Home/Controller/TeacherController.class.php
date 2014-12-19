<?php
namespace Home\Controller;
use Think\Controller;
class TeacherController extends Controller {
    public function lists(){
    	$model=M("teacher");
        $data=$model->query("select * from bbs_teacher join bbs_position on bbs_teacher.p_id = bbs_position.p_id");
        $this->assign('list',$data);
        $this->display('list');
    }
    public function add(){
		$model=M("position");
        $data=$model->select();
        $this->assign('list',$data);
    	$this->display('add');
    }
	public function addpro()
	{
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 3145728 ;// 设置附件上传大小
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 // 设置附件上传根目录
		$upload->rootPath = './Public/';
		$upload->savePath = '/Uploads/';
		$upload->saveName=substr($_FILES['filename']['name'],0,strrpos($_FILES['filename']['name'],"."));
		// 上传文件
		$model=M('teacher');
        $data['t_name']=$_POST['t_name'];
        $data['t_desc']=$_POST['t_desc'];
        $data['p_id']=$_POST['p_id'];
		$data['img']='/Public/Uploads/'.date("Y-m-d",time()).'/'.$_FILES['filename']['name'];
		//var_dump($data);die;
		$info = $upload->upload();
		if($info){
			if($model->add($data)){
				$this->success('添加成功！',U('/admin.php/home/teacher/lists'));
			}
		}else{
			$this->error($upload->getError());
		}
    }
		public function del(){
		$id=$_GET['id'];	
		$model=M('teacher');
		$arr=$model->delete($id);
		//echo $arr;die;
		if($arr){
			$this->success("删除成功",U("/admin.php/home/teacher/lists"));
		}else{
			$this->error();
		}
	}
	public function up(){
		$id=$_GET['id'];
		$model=M("teacher");
        $data=$model->find($id);
		$res=M("position");
        $arr=$res->select();
		$this->assign('info',$arr);
        $this->assign('list',$data);
		$this->display('up');
	}
	/*
	public function uppro(){
		$id=$_POST['id'];
		$model=M('teacher');
		$data['position']=$_POST['p_name'];
		$data['p_desc']=$_POST['p_desc'];
		$arr=$model->where("p_id=$id")->save($data);
		if($arr){
			$this->success('编辑成功',U('/admin.php/home/teacher/lists'));
		}else{
			$this->error();
		}
	}
*/
}