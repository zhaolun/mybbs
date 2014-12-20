<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
class MessageController extends Controller {
    public function company()
    {
    	/*$model = M('company'); //实例化User对象
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
    	 */
    	$model=M("company");
        $data=$model->select();
       // var_dump($data);die;
        $this->assign('list',$data);
        $this->display();
       
    }
    public function sphinx()
    {
   		require_once("/Public/sphinxapi.php");
        $model = M("company");
        $search=$_POST['com_name'];
        echo $search;
        $sphinx = new \SphinxClient();
        //var_dump($sphinx);die;
		$sphinx->SetServer("192.168.1.2",9312);
		$sphinx->SetMatchMode(SPH_MATCH_ANY);
		$result = $sphinx->query($search,'*');
        $key = array_keys($result['matches']);
        //$id = implode(',',$key);
        var_dump($result);die;
        $ids = join(',',$key);
        $where= '';
        if($search == '')
        {
            $where.='1=1';
        }else
        {
            $where.="com_id in ($key)";
        }
        $data = $model->where($where)->select();
        //$data=$model->query("select * from bbs_company where com_name like '%".$where."%'");
       // var_dump($data);die;
        $this->assign('list',$data); 
        $this->display();
 	
    }
    /*
		if($keywords) {
		$where .= " and goods_id in($ids)";
		}
		if($brand_id) {
			$where .= " and brand_id = $brand_id";
		}
		if($cat_id) {
			$where .= " and cat_id = $cat_id";
		}
    */
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
    }
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
    //显示学院列表
    public function school()
    {
        $model=M("school");
        $data=$model->select();
        $this->assign("list",$data);
        $this->display();
        //echo "123";
    }
    //显示学校添加form
    public function sch_addform()
    {
        $this->display();
    }
    //执行添加学校
    public function sch_add()
    {
        //var_dump($_POST);
        $model=M("school");
        $data=$model->create();
        $sch=$model->add($data);
        if($sch)
        {
            $this->redirect("/admin.php/home/message/school");
        }else
        {
            $this->error("添加失败");
        }
    }
    //学校删除
    public function sch_del()
    {
        //var_dump($_GET);
        $s_id=$_GET['s_id'];
        $model=M('school');
        $del=$model->where("s_id=$s_id")->delete();
        if($del)
        {
            $this->redirect("/admin.php/home/message/school");
        }else
        {
            $this->error("删除失败");
        }
    }
    //显示编辑form
    public function sch_editform()
    {
        $s_id=$_GET['s_id'];
        //echo $s_id;die;
        $model=M("school");
        $data=$model->find($s_id);
        //echo "<pre>";var_dump($data['s_id']);die;
        $this->assign("list",$data);
        $this->display();
    }
    //执行编辑
    public function sch_edit()
    {
        //var_dump($_POST);
        $s_id=$_POST['s_id'];
        //echo $s_id;
        $model=M('school');
        $data['s_name']=$_POST['s_name'];
        $update=$model->where("s_id=$s_id")->save($data);
        if($update)
        {
            $this->redirect("/admin.php/home/message/school");
        }else
        {
            $this->error("编辑失败");
        }
    }
    //显示学生列表
    public function student()
    {
        $model=M("student");
        $data=$model->query("select * from bbs_student,bbs_school,bbs_company where bbs_student.school=bbs_school.s_id and bbs_student.company=bbs_company.com_id");
       // var_dump($data);die;
        $this->assign('list',$data);
    	$this->display();
    }
    //显示添加学生form
    public function stu_addform()
    {
        $modle=M("company");
        $com=$modle->select();
        $this->assign('com',$com);

        $model1=M('school');
        $sch=$model1->select();
        $this->assign('sch',$sch);

        $this->display();
    }
    //执行学生添加
    public function stu_add()
    {
        $model=M('student');
        //上传文件
        $upload=new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->saveName = 'time';
        $upload->exts= array('jpg','gif','png','jpeg');// 设置附件上传类型    
        $upload->savePath  ='/Uploads';//设置附件上传目录
        $info=$upload->upload();
        //执行添加
        $data['stu_name']=$_POST['stu_name'];
        $data['school']=$_POST['school'];
        $data['work_time']=$_POST['r_time'];
        $data['company']=$_POST['company'];
        $data['money']=$_POST['money'];
        $data['pic']=$info['pic']['savename'];//获取文件保存的名称
        $stu=$model->add($data);
        //echo "<pre>";var_dump($info['pic']['savename']);die; 
        if($info&&$stu) 
        {
            $this->redirect("/admin.php/home/message/student");
        }else
        {  
            $this->error($upload->getError());    
        }
    }
    //删除学生信息
    public function stu_del()
    {
        $stu_id=$_GET['stu_id'];
        $model=M('student');
        $del=$model->where("stu_id=$stu_id")->delete();
        if($del)
        {
            $this->redirect("/admin.php/home/message/student");
        }else
        {
            $this->error("删除失败");
        }
    }
    //显示编辑列表
    public function stu_editform()
    {
        $stu_id=$_GET["stu_id"];

        $modle=M("company");
        $com=$modle->select();
        $this->assign('com',$com);

        $model1=M('school');
        $sch=$model1->select();
        $this->assign('sch',$sch);

        $model=M("student");
        $data=$model->where("stu_id=$stu_id")->select();
        //echo "<pre>";var_dump($data);
        $this->assign("list",$data);
        $this->display();
    }
    //执行编辑
    public function stu_edit()
    {
        //var_dump($_POST['stu_id']);die;
        $stu_id=$_POST['stu_id'];


        $model=M('student');
        //上传文件
        $upload=new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->saveName = 'time';
        $upload->exts= array('jpg','gif','png','jpeg');// 设置附件上传类型    
        $upload->savePath  ='/Uploads';//设置附件上传目录
        $info=$upload->upload();
        //执行添加
        $data['stu_name']=$_POST['stu_name'];
        $data['school']=$_POST['school'];
        $data['work_time']=$_POST['work_time'];
        $data['company']=$_POST['company'];
        $data['money']=$_POST['money'];
        $data['pic']=$info['pic']['savename'];//获取文件保存的名称
        //$stu=$model->add($data);
        $update=$model->where("stu_id=$stu_id")->save($data);
        //echo "<pre>";var_dump($info['pic']['savename']);die; 
        if($info&&$update) 
        {
            $this->redirect("/admin.php/home/message/student");
        }else
        {  
            $this->error($upload->getError());    
        }
    }
}