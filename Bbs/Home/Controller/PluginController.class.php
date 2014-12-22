<?php
namespace Home\Controller;
use Think\Controller;
class PluginController extends Controller {
    public function plugin(){
		$user = M('shop');//获取表总数据
		
		$data = $user->select();
		//print_r($data);die;
		$this->assign('info',$data);
        $this->display('plugin');
    }
	//详情页面
	public function plugin_xq(){
		$id = $_GET['id'];
		$user = M('shop');
        $data = $user->where("id = $id")->select();
		//print_r($data);die;
		$arr=ceil((strtotime(end_time)-strtotime(start_time))/60);
		$a=ceil($arr/60);
		$b=floor($a/24);
		$list = floor($a/24)."天".floor($b/24)."时".floor($a/60/60)."分";
		//print_r($list);die;
		$this->assign('info',$data);
		$this->display('plugin_xq');
	}
}