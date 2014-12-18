<?php
namespace Home\Controller;
use Think\Controller;
class TeacherController extends Controller {
    public function lists()
    {
    	$model=M("teacher");
        $data=$model->select();
        $this->assign('list',$data);
        $this->display('list');
    }
    public function add()
    {
    	$this->display('add');
    }
}