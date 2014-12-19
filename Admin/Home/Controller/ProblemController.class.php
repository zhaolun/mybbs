<?php
namespace Home\Controller;
use Think\Controller;
class ProblemController extends Controller {
    public function lists(){
		$user = M('question');
        //获取表总数据
        $count = $user->count();
        //调用分页  并且设置每页显示的记录数
        $page = new \Think\Page($count,5);
        //分页显示
        $data['page'] = $page->show();
        //获取分页后数据
        $data['user'] = $user->limit($page->firstRow.','.$page->listRows)->select();
        //传递分页和数据
        $this->assign('data',$data);
        $this->display('list');
    }
	//删除
	public function del(){
		header("content-type:text/html;charset=utf-8");
		$id = $_GET['id'];
		$user = M('question');	
        $user->where("id = ".$id)->delete(); // 删除id为5的用户数据
        $this->redirect('/admin.php/Home/problem/lists', "", 2, '删除成功.....页面跳转中，请等待。');
	}
	public function add(){
         $this->display('add');
	}
	//添加验证
	public function add_do(){
		header("content-type:text/html;charset=utf-8");
		//print_r($_POST);die;
	    $model = M("question");
        $data = $model->create();
        $aa = $model->add($data);
		//print_r($aa);die;
        if($aa)
        {
        	$this->redirect("/admin.php/home/problem/lists");
        }else
        {
        	$this->error();
        }

	}
	//修改
	public function upd(){
		$model = M("question");
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
    	$model = M("question");
    	$data['status'] = $_POST['status'];
    	$data['title']=$_POST['title'];
    	$data['content']=$_POST['content'];
    	//var_dump($data);
    	$update=$model->where('id='.$id.'')->save($data);
    	//var_dump($qq);
    	if($update)
    	{
    		$this->redirect("/admin.php/home/problem/lists","", 2, '修改成功.....页面跳转中，请等待。');
    	}else
    	{
    		$this->error("编辑失败");
    	}
	}
}