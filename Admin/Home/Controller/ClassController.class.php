<?php
namespace Home\Controller;
use Think\Controller;
class ClassController extends Controller {
    public function add(){
        $this->display('add');
    }
	public function addlist(){
        $this->display('addlist');
    }
}