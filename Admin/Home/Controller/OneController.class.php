<?php
namespace Home\Controller;
use Think\Controller;
class OneController extends Controller {
    public function lists(){
        $this->display('list');
    }
	
}