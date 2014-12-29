<?php
namespace Home\Controller;
use Think\Controller;
use \Think\Verify;
class IndexController extends Controller {
    public function index(){
		/*$ip=['14','19'];
		$pwd=['940614','root'];
		$dk=['3306','3307'];
		$key=rand(0,1);
		$yip=$ip[$key];
		$ypwd=$pwd[$key];
		$ydk=$dk[$key];
		echo $yip."@#@".$ypwd."@#@".$ydk;die;*/

        $user = M('student');//获取表总数据

        $user = M('family');//获取表总数据
		//学院
        $com=M('company');
        $usera = M('xueyuan');
		$userb = M('banji');
		$userc = M('zhaolun');
		$userd = M('liujun');
		$userf = M('mingshi');
		$userbb = M('question');
		$data=$user->query("select * from bbs_company,bbs_student where bbs_student.company=bbs_company.com_id limit 7");
		$aa=$data[0]['work_time'];
		$bb=substr($aa,0,10);
		$this->assign('cc',$bb);
		$data1 = $usera->select();        
		$data1 = $usera->order("id desc")->select();
		$data2 = $userb->select();
		$comp=$com->select();
		//var_dump($comp);die;

		$data3 = $userc->select();
		$data4 = $userd->select();
		$data6 = $userf->order('id desc')->select();
		//$data7 = $useraa->select();

		$data3 = $userc->order("id desc")->select();
		$data4 = $userd->order("id desc")->select();
		$data6 = $userf->select();
		$data8 = $userbb->where('status=0')->select();
		$db=M("slide_image");
		$this->slide_image=$db->select();
		$this->assign('info',$data);
		$this->assign('infoa',$data1);
		$this->assign('infob',$data2);
		$this->assign('infoc',$data3);
		$this->assign('infod',$data4);
		$this->assign('infof',$data6);
		$this->assign('infobb',$data8);
		$this->assign('company',$comp);
        $this->display('index');
    }
	public function xueyuan_xq(){
		$id = $_GET['id'];
		$usera = M('xueyuan');
		$data = $usera->where("id=$id")->select();
		//print_r($data);die;
        $this->assign('info',$data);
		$this->display('xueyuan_xq');
	}
	public function zhaolun_xq(){
		$id = $_GET['id'];
		$usera = M('xueyuan');
		$data = $usera->where("id=$id")->select();
		//print_r($data);die;
        $this->assign('info',$data);
		$this->display('zhaolun_xq');
	}
	public function liujun_xq(){
		$id = $_GET['id'];
		$usera = M('xueyuan');
		$data = $usera->where("id=$id")->select();
		//print_r($data);die;
        $this->assign('info',$data);
		$this->display('liujun_xq');
	}
	public function login(){
		if(!empty($_GET['nickname'])&&!empty($_GET['img'])){
			//echo $_GET['img'];die;
			$img=str_replace("@","/",$_GET['img']);
			//echo $img;die;
			session("img",$img);
			session("username",$_GET['nickname']);
			$this->success("使用qq登陆成功","/index.php");
		}
        $Verify = new Verify();
		if($Verify->check($_POST['yzm'])){
			$name=addslashes($_POST['username']);
			$pwd=sha1($_POST['password']);
			$db=M("admin_user");
			$res=$db->where("username='$name' and password='$pwd'")->select();
			if(empty($res[0]['user_id']))
				$this->error("用户名密码错误");
			else{
				session("userid",$res[0]['user_id']);
				session("username",$res[0]['username']);
				$this->success("登陆成功","/index.php");
			}
		}else{
			$this->error("验证码有误");
		}
    }

	function register(){
		$Verify = new Verify();
		if($Verify->check($_POST['yzm'])){
			$name=addslashes($_POST['username']);
			$pwd=sha1($_POST['password']);
			$db=M("admin_user");
			$data['username']=$name;
			$data['password']=$pwd;
			$data['tel']=$_POST['tel'];
			$res=$db->add($data);
			if(!$res)
				$this->error("注册失败");
			else{
				$this->success("注册成功","/index.php");
			}
		}else{
			$this->error("验证码有误");
		}
	}

	function loginout(){
		//session("telyzm",rand(1000,9999));
		//echo $_SESSION['telyzm'];die;
		session_destroy();
		$this->success("退出成功","/index.php");
	}

	function send_message(){
		$db=M("admin_user");
		$name=addslashes($_GET['name']);
		$tel=$_GET['tel'];
		//echo $name.$tel;
		$res=$db->where("username='$name' and tel='$tel'")->find();
		if(empty($res)){
			echo "用户名与手机号码不匹配!";
		}else{
			$telyzm=rand(1000,9999);
			ini_set("session.gc_maxlifetime","600");
			session("telyzm",$telyzm);
			$url="http://utf8.sms.webchinese.cn/?Uid=zhaolun&Key=879dfccb74573d62cb28&smsMob=".$tel."&smsText=".$name.":Yi利一组验证码:".$telyzm.".(验证码有效期10分钟)";
			//echo $url;die;
			if(file_get_contents($url)>0)
				echo "短信已发送,请注意及时查收.";
			else
				echo "短信发送失败.";
		}
	}

	function findpwd(){
		$db=M("admin_user");
		$name=addslashes($_POST['username']);
		$pwd=sha1($_POST['password']);
		$res=$db->where("username = '$name'")->save(['password'=>$pwd]);
		if($res)
			$this->success("修改成功");
		else
			$this->error("修改失败");
	}

	function ajax_message(){
		if($_GET['yzm']==$_SESSION['telyzm'])
			echo 1;
		else
			echo 0;
	}
	function detail(){
		$id=$_GET['id'];
		$model=M("mingshi");
        $data=$model->where("id='$id'")->find();
		//echo $data;die;
        $this->assign('list',$data);
        $this->display('detail');
	}
}