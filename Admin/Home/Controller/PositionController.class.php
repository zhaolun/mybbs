<?php
namespace Home\Controller;
use Think\Controller;
class PositionController extends Controller {
    public function add(){

        $this->display('add');
    }
    public function lists(){
        $model=M("position");
        $data=$model->select();
        $this->assign('list',$data);
		$this->display('list');
    }
}