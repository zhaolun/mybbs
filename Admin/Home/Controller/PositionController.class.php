<?php
namespace Home\Controller;
use Think\Controller;
class PositionController extends Controller {
    public function add(){
        $this->display('add');
    }
	public function addpro(){
		$data['position']=$_POST['p_name'];
		$data['p_desc']=$_POST['p_desc'];
		$model=M('position');
		$arr=$model->add($data);
		if($arr){
			$this->success('添加成功',U('/admin.php/home/position/lists'));
		}else{
			$this->error();
		}

	}
    public function lists(){
        $model=M("position");
        $data=$model->select();
        $this->assign('list',$data);
		$this->display('list');
    }
}