<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $user = M('family');//获取表总数据
        $usera = M('xueyuan');
		$userb = M('banji');
		$userc = M('zhaolun');
		$userd = M('liujun');
		$usere = M('php');
		$userf = M('mingshi');
		$useraa = M('zhaopin');
		$userbb = M('question');
		$data = $user->select();
		$data1 = $usera->select();
		$data2 = $userb->select();
		$data3 = $userc->select();
		$data4 = $userd->select();
		$data5 = $usere->select();
		$data6 = $userf->select();
		$data7 = $useraa->select();
		$data8 = $userbb->where('status=0')->select();
		//print_r($data);die;
		$this->assign('info',$data);
		$this->assign('infoa',$data1);
		$this->assign('infob',$data2);
		$this->assign('infoc',$data3);
		$this->assign('infod',$data4);
		$this->assign('infoe',$data5);
		$this->assign('infof',$data6);
		$this->assign('infoaa',$data7);
		$this->assign('infobb',$data8);
        $this->display('index');
    }
	public function jiuye(){
        $this->display('jiuye');
    }
}