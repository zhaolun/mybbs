<?php
namespace Home\Controller;
use Think\Controller;
use \Think\Upload;
class AdminController extends Controller {
	//主页信息
    public function index(){
        $this->display('index');
    }

	//前台导航管理
	function nav(){
		$db=M("nav");
		$this->info=$db->select();
		$this->display();
	}

	//前台导航添加
	function add_nav(){
		$this->display();
	}

	//导航添加操作数据库
	function nav_addpro(){
		$db=M("nav");
		$db->create();
		if($db->add())
			$this->success('添加成功,正在跳转...','/admin.php/Home/admin/nav',2);
		else
			$this->error('添加失败,正在跳转...');
	}

	//删除导航
	function delnav(){
		$db=M("nav");
		//echo $_GET['id'];die;
		if($db->where("nav_id=".$_GET['id'])->delete())
			$this->success('删除成功,正在跳转...');
		else
			$this->error('删除失败,正在跳转...');
	}

	//导航编辑
	function upnav(){
		$db=M("nav");
		$this->info = $db->where('nav_id='.$_GET['id'])->find();
		$this->display();
	}

	//导航编辑操作数据库修改数据库中数据
	function nav_uppro(){
		$db=M("nav");
		$db->create();
		//echo $_POST['h_id'];
		//print_r($db->create());die;
		if($db->where("nav_id=".$_POST['h_id'])->save())
			$this->success('修改成功,正在跳转...','/admin.php/Home/admin/nav',2);
		else
			$this->error('您尚未进行任何操作或者因为某些原因导致修改失败,正在跳转...','/admin.php/Home/admin/nav',3);
	}

	//幻灯片管理
	function image(){
		$db=M("slide_image");
		$this->info=$db->select();
		$this->display();
	}

	//添加幻灯片
	function add_image(){
		$this->display();
	}


	function img_addpro(){
		$db=M("slide_image");
		$data=$db->create();
		$upload = new Upload();
		$upload->maxSize = 3145728;
		$upload->exts = array('jpg','gif','png','jpeg');
		$upload->rootPath = './Public';
		$upload->savePath = '/images/slide_image/';
		$upload->saveName = substr($_FILES['myfile']['name'],0,strrpos($_FILES['myfile']['name'],"."));
		$data['img_path']='/Public/images/slide_image/'.date('Y-m-d',time()).'/'.$_FILES['myfile']['name'];
		if($upload->upload()&&$db->add($data))
			$this->success('添加成功,正在跳转...','/admin.php/Home/admin/image',2);
		else
			$this->error('添加失败,正在跳转...','/admin.php/Home/admin/image',2);
	}

	//删除幻灯片
	function delimg(){
		$db=M("slide_image");
		//echo $_GET['id'];die;
		if($db->where("img_id=".$_GET['id'])->delete())
			$this->success('删除成功,正在跳转...');
		else
			$this->error('删除失败,正在跳转...');
	}

	//幻灯片修改
	function upimg(){
		$db=M("slide_image");
		$this->info=$db->where("img_id=".$_GET['id'])->find();
		$this->display();
	}

	//幻灯片修改操作数据库
	function img_uppro(){
		$db=M("slide_image");
		//$data['img_id']=$_POST['img_id'];
		//$data['img_title']=$_POST['img_title'];
		//$data['img_link']=$_POST['img_link'];
		//$data['img_desc']=$_POST['img_desc'];
		$data=$db->create();
		if(empty($_FILES['myfile']['name']))
			$data['img_path']=$_POST['h_img_path'];
		else{
			$upload = new Upload();
			$upload->maxSize = 3145728;
			$upload->exts = array('jpg','gif','png','jpeg');
			$upload->rootPath = './Public';
			$upload->savePath = '/images/slide_image/';
			$upload->saveName = 'time';
			$data['img_path']='/Public/images/slide_image/'.date('Y-m-d',time()).'/'.time().substr($_FILES['myfile']['name'],strrpos($_FILES['myfile']['name'],"."));
			//$data['path']='/Public/images/slide_image/'.date('Y-m-d',time()).'/'.$_FILES['myfile']['name'];
			//echo $data['logo_path'];die;
			$upload->upload();
		}
		//echo "<pre>";
		//print_r($data);
		//die;
		if($db->where("img_id=".$_POST['img_id'])->save($data))
			$this->success('修改成功,正在跳转...','/admin.php/Home/admin/image',2);
		else
			$this->error('修改失败,正在跳转...','/admin.php/Home/admin/image',2);
	}

	//首页LOGO设计
	function logo(){
		$db=M("logo");
		$this->info=$db->select();
		$this->display();
	}

	//logo更换
	function logo_up(){
		//echo $_GET['id'];
		$db=M("logo");
		$this->info=$db->where("id=".$_GET['id'])->find();
		//print_r($this->info);die;
		$this->display();
	}

	//logo更换操作数据库
	function logo_uppro(){
		if(empty($_FILES['myfile']['name'])){
			$this->success("您尚未进行任何操作",'/admin.php/Home/admin/logo',2);
			die;
		}
		$db=M("logo");
		$data=$db->create();
		$upload = new Upload();
		$upload->maxSize = 3145728;
		$upload->exts = array('jpg','gif','png','jpeg');
		$upload->rootPath = './Public';
		$upload->savePath = '/images/logo/';
		$upload->saveName = 'time';
		$data['logo_path']='/Public/images/logo/'.date('Y-m-d',time()).'/'.time().substr($_FILES['myfile']['name'],strrpos($_FILES['myfile']['name'],"."));
		if($upload->upload()&&$db->save($data))
			$this->success('修改成功,正在跳转...','/admin.php/Home/admin/logo',2);
		else
			$this->error('修改失败,正在跳转...','/admin.php/Home/admin/logo',2);
	}
	
	//退出
	function loginout(){
		$_SESSION=array();
		$this->success('退出成功,正在跳转...','/admin.php/Home/index/index',2);
	}
	function add(){
		$this->display('add');
	}
	public function addpro(){
		$data['title']=$_POST['p_name'];
		$data['content']=$_POST['p_desc'];
		$model=M('mingshi');
		$arr=$model->add($data);
		if($arr){
			$this->success('添加成功',U('/admin.php/home/admin/add'));
		}else{
			$this->error();
		}
	}
	function lists(){
	    $model=M("mingshi");
        $data=$model->select();
        $this->assign('list',$data);
		$this->display('list');
    }
	public function del(){
		$id=$_GET['id'];	
		$model=M('mingshi');
		$arr=$model->delete($id);
		//echo $arr;die;
		if($arr){
			$this->success("删除成功",U("/admin.php/home/admin/lists"));
		}else{
			$this->error();
		}
	}
	public function up(){
		$id=$_GET['id'];
		$model=M("mingshi");
        $data=$model->find($id);
		//var_dump($data[0]['position']);die;
        $this->assign('list',$data);
		$this->display('up');
	}
	public function uppro(){
		$id=$_POST['id'];
		$model=M('mingshi');
		$data['title']=$_POST['p_name'];
		$data['content']=$_POST['p_desc'];
		$arr=$model->where("id=$id")->save($data);
		if($arr){
			$this->success('编辑成功',U('/admin.php/home/admin/lists'));
		}else{
			$this->error();
		}
	}

}