<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function index()
    {
    	$model=M("student");
    	$data=$model->query("select * from bbs_student,bbs_company,bbs_school where bbs_student.school=bbs_school.s_id and bbs_student.company=bbs_company.com_id");
    	//var_dump($data);die;
    	$video=$model->query("select * from bbs_student,bbs_company,bbs_school where bbs_student.school=bbs_school.s_id and bbs_student.company=bbs_company.com_id limit 6");
    	$this->assign("list",$data);
    	$this->assign("video",$video);
        $this->display();
    }
    public function video()
    {
    	$this->display();
    }
	
}