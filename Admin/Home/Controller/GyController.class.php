<?php
namespace Home\Controller;
use Think\Controller;
class GyController extends Controller {
    public function lists(){
		$user = M('zhaolun');
		$data = $user->select();
		//print_r($data);die;
		$this->assign('info',$data);
		$this->display('list');
    }
	public function add(){
		$this->display('add');
	}
	public function add_do(){
		header("content-type:text/html;charset=utf-8");
		//print_r($_POST);die;
	    $model = M("zhaolun");
        $data = $model->create();
        $aa = $model->add($data);
		//print_r($aa);die;
        if($aa)
        {
        	$this->redirect("/admin.php/home/gy/lists");
        }else
        {
        	$this->error();
        }
	}
	//删除
	public function del(){
		header("content-type:text/html;charset=utf-8");
		$id = $_GET['id'];
		$user = M('zhaolun');	
        $user->where("id = ".$id)->delete(); // 删除id为5的用户数据
        $this->redirect('/admin.php/Home/gy/lists', "", 2, '删除成功.....页面跳转中，请等待。');
	}
	//修改
	public function upd(){
		$model = M("zhaolun");
		$id = $_GET['id'];
		//print_r($id);die;
		$data = $model->find($id);
    	$this->assign('list',$data);
    	$this->display('upd');
	}
	//修改验证
	public function upd_do(){
		$id = $_POST['id'];
		//print_r($id);die;
    	$model = M("zhaolun");
    	$data['title']=$_POST['title'];
    	$data['content']=$_POST['content'];
    	//var_dump($data);
    	$update=$model->where('id='.$id.'')->save($data);
    	//var_dump($qq);
    	if($update)
    	{
    		$this->redirect("/admin.php/home/gy/lists","", 2, '修改成功.....页面跳转中，请等待。');
    	}else
    	{
    		$this->error("编辑失败");
    	}
	}

	
	
}