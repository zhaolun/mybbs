<?php
namespace Home\Controller;
use Think\Controller;
class ProblemController extends Controller {
    public function index(){
		

		 S(array(    
					'type'=>'memcache',   
					'host'=>'127.0.0.1',   
					'port'=>'11211',    
					'prefix'=>'think',    
					'expire'=>10));
        //$cache->name = 'value';
		$user = M('question');
		if(empty(S("Indexindex1"))){
			//获取表总数据
			$data = $user->where('status=0')->select();
			S("Indexindex1",$data);
			//echo "来源于数据库";
		}else{
			$data = S("Indexindex1");
			//echo "来源于memcache";
		}
		if(empty(S("Indexindex0"))){
			$data1 = $user->where('status=1')->select();
			S("Indexindex0",$data1);
			//echo "来源于数据库";
		}else{
			$data1 = S("Indexindex0");
			//echo "来源于memcache";
		}
		$this->assign('list',$data);
		$this->assign('info',$data1);
	
/**/

		
        

        $this->display('index');
 }
	public function xq(){
        $id=$_GET["id"];
        $model = M("question");
        $data["q"] = $model->where("id=$id")->find();
        $data["s"] = $model->where("id<$id")->order("id desc")->find();
        $data["x"] = $model->where("id>$id")->order("id asc")->find();
        $this->assign("data",$data);
        $this->display('xq');
		
	}
}