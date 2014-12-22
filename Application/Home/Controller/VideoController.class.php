<?php	
namespace Home\Controller;
use Think\Controller;
class VideoController extends Controller {
    public function index(){
        $this->display('video');
    }
	public function index_pro(){
		$path = $_GET['path'];
		$filename = substr($path,strrpos($path,"/")+1);
		//文件类型
		header('Content-type: image/pjpeg');
		//激活一个下载的窗口  (文件名)
		header("Content-Disposition: attachment; filename=$filename");
		//读文件
		readfile($path);

	}
}