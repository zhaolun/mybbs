<?php
namespace Home\Controller;
use Think\Controller;
class OneController extends Controller {
    public function lists(){
		$user = M('pv');
		$str="";
        $pv="";
        $list = $user->query("select * from bbs_pv");
		//print_r($list);
		//die;
        foreach($list as $k=>$v){
          $str.="'".$v["time"]."',";
          $pv.="".$v["pv"].",";  
        }
        //echo $str;
        //die;
        //echo $pv;
        //die;
        $a=trim($str,",");
		
        //s$b='"'..'"'
        $b=trim($pv,",");
		//echo $b;
		//die;
		$this->assign('json',$a);
		$this->assign('pv',$b);
        $this->display('list');
    }
	
	
}