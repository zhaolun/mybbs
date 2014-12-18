<?php
namespace Home\Controller;
use Think\Controller;
class ProblemsController extends Controller {
    public function list(){
        $this->display('list');
    }
}