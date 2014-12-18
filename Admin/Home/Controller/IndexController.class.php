<?php
namespace Home\Controller;
use Think\Controller;
use \Think\Verify;
class IndexController extends Controller {
    public function index(){
		layout(false);
		//var_dump($_SESSION['verify_code']);die;
        $this->display('index');
    }

	function yzm(){
		//layout(false);
		$Verify =     new Verify();
		$Verify->fontSize = 14;
		$Verify->length   = 3;
		$Verify->useNoise = false;
		var_dump($Verify->check('WLJ'));die;
		var_dump($Verify->entry());
	}
	function yzms(){
		//layout(false);
		$Verify =     new Verify();
		$Verify->fontSize = 14;
		$Verify->length   = 3;
		$Verify->useNoise = false;
		//var_dump($Verify->check('123'));die;
		var_dump($Verify->entry());
	}
}