<?php	
namespace Home\Controller;
use Think\Controller;
class TeacherController extends Controller {
    public function index(){
		$model=M("teacher");
        $data=$model->query("select * from bbs_teacher join bbs_position on bbs_teacher.p_id = bbs_position.p_id");
        $this->assign('list',$data);
        $this->display('teacher');
    }
	 public function video(){
		$id=$_GET['id'];
		$model=M("teacher");
        $data=$model->query("select * from bbs_teacher join bbs_position on bbs_teacher.p_id = bbs_position.p_id where bbs_teacher.id = $id");
		//var_dump($data);die;
        $this->assign('list',$data[0]);
		$this->display("video");
	 }

}