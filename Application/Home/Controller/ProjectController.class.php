<?php
namespace Home\Controller;
use Think\Controller;
class ProjectController extends Controller {
    public function index(){
        $this->display('index');
    }
	public function jichu(){
        $this->display('jichu');
    }
	public function kecheng(){
        $this->display('kecheng');
    }
}