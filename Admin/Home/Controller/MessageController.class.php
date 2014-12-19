<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function company()
    {
    	$model = M('company'); //实例化User对象
		$count= $model->count();//查询满足要求的总记录数
		$Page = new \Think\Page($count,2);//实例化分页类 传入总记录数和每页显示的记录数
		$show= $Page->show();//分页显示输出
		//var_dump($show);die;
		//进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $model->limit($Page->firstRow.','.$Page->listRows)->select();
		//var_dump($list);
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
    	/*
    	$model=M("company");
        $data=$model->select();
        var_dump($data);die;
        $this->assign('list',$data);
        $this->display();
        */
    }
    //显示公司添加表单
    public function com_addform()
    {
    	//echo "234";
    	$this->display();
    }
    //执行公司添加
    public function com_add()
    {
    	//echo "<pre>";var_dump($_POST);die;
    	$model=M("company");
        $data = $model->create();
        $aa = $model->add($data);
        if($aa)
        {
        	$this->redirect("/admin.php/home/message/company");
        }else
        {
        	$this->error();
        }

    }
    //删除公司
    public function com_del()
    {
    	$com_id=$_GET['com_id'];
    	//var_dump($com_id);die;
    	$model=M("company");
    	//var_dump($com_id);
    	$del=$model->delete($com_id); 
    	if($del)
    	{
    		$this->redirect("/admin.php/home/message/company");
    	}else
    	{
    		$this->error("删除失败");
    	}

    }
    //显示编辑表单
    public function com_editform()
    {
    	$com_id=$_GET['com_id'];
    	//echo $com_id;
    	$model=M("company");
    	$data=$model->find($com_id);
    	//var_dump($data['com_id']);die;
    	$this->assign('list',$data);
    	$this->display();
    }/*
    $User = M("User"); // 实例化User对象// 要修改的数据对象属性赋值
    $data['name'] = 'ThinkPHP';$data['email'] = 'ThinkPHP@gmail.com';
    $User->where('id=5')->save($data); // 根据条件更新记录*/
    //执行编辑
    public function com_edit()
    {
    	//echo "<pre>";var_dump($_POST);
    	$com_id=$_POST['com_id'];
    	//echo $com_id;
    	$model=M("company");
    	$data['com_name'] = $_POST['com_name'];
    	$data['r_time']=$_POST['r_time'];
    	$data['r_url']=$_POST['r_url'];
    	$data['r_num']=$_POST['r_num'];
    	//var_dump($data);
    	$update=$model->where('com_id='.$com_id.'')->save($data);
    	//var_dump($qq);
    	if($update)
    	{
    		$this->redirect("/admin.php/home/message/company");
    	}else
    	{
    		$this->error("编辑失败");
    	}


    }
    public function school()
    {
    	echo "123";
    }
    public function student()
    {
    	echo "df";
    }

}