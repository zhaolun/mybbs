<?php	
namespace Home\Controller;
use Think\Controller;
class ApiController extends Controller {
    public function index(){
		if(!$this->keys($_GET['key'])){
			echo $_GET['callback']."(".json_encode(['error'=>"秘钥不正确"]).")";
			die;
		}
		$db=M("teacher");
		$list=$db->limit($_GET['count'])->select();
        echo $_GET['callback']."(".json_encode($list).")";
    }

	public function keys($key){
		$rekek=md5("123456");
		if( $rekek == $key )
			return true;
		else
			return false;
	}
}