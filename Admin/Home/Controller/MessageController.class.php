<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function company()
    {
    	$model=M("company");
        $data=$model->select();
        //var_dump($data);
        $this->assign('list',$data);
        $this->display('company');
    }
    public function school()
    {
    	echo "123";
    }
}