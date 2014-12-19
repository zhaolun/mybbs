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
	public function add_do(){
		header("content-type:text/html;charset=utf-8");
		print_r($_POST);die;
		$user = M('question');
		$data = $_POST['status'];
		$data = $_POST['title'];
        $data = $_POST['content'];
		$data = time();
		//print_r($data);die;
        if ($user->add($data)){
	
             $this->redirect('/admin.php/Home/problem/lists', "", 2, '添加成功  页面跳转中...请等待。');
         }else{
             $this->redirect('/admin.php/Home/problem/lists', "", 2, '添加失败  页面跳转中...请等待。');
         }
	}
}