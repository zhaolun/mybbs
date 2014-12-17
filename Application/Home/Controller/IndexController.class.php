<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('index');
    }
	public function jiuye(){
        $this->display('jiuye');
    }
}