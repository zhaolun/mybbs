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
		$User = M('position'); // 实例化User对象
		$count = $User->where('')->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		//var_dump($show);die;
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->where('')->order('')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display('list'); // 输出模板
		/*
        $model=M("position");
        $data=$model->select();
        $this->assign('list',$data);
		$this->display('list');*/
    }
	public function del(){
		$id=$_GET['id'];	
		$model=M('position');
		$arr=$model->delete($id);
		//echo $arr;die;
		if($arr){
			$this->success("删除成功",U("/admin.php/home/position/lists"));
		}else{
			$this->error();
		}
	}
	public function up(){
		$id=$_GET['id'];
		$model=M("position");
        $data=$model->where("p_id='$id'")->select();
        $this->assign('list',$data);
		$this->display('up');
	}

}