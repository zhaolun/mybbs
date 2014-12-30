<?php
/**
 *      本程序由尹兴飞开发
 *      若要二次开发或用于商业用途的，需要经过尹兴飞同意。
 *
 *		http://app.yinxingfei.com			插件技术支持
 *
 *		http://www.cglnn.com			    插件演示站点
 *
 ->		==========================================================================================
 *
 *      2014-11-01 开始由6.1升级到6.2！
 *
 *		愿我的同学、家人、朋友身体安康，天天快乐！
 ->		同时也祝您使用愉快！
 */
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
if($_G['uid'] != '1'){
	echo 'No permissions';
	exit;
}
$page = $_GET['page'];
$limit = 100;
$allnum = $limit * $page;
$num = $_GET['num'] ? $_GET['num'] : DB::result_first("SELECT COUNT(*) FROM ".DB::table('yinxingfei_zzza_rank')."");
$bfb = ($allnum/$num)*100;
$bfb = intval($bfb);
$page = max(1, intval($_GET['page']));
$start_limit = ($page - 1) * $limit;


$query_rank = DB::query("SELECT * FROM ".DB::table('yinxingfei_zzza_rank')." ORDER BY jf_all DESC LIMIT ".$start_limit." ,".$limit);
while($zzza_rank = DB::fetch($query_rank)){	
	DB::query("UPDATE ".DB::table('yinxingfei_zzza_rank')." SET lxyj = '0' WHERE zzza_uid= '$zzza_rank[zzza_uid]'", 'UNBUFFERED');//初始化为0天
	$zzza_tja = array();
	$query_tja = DB::query("SELECT * FROM ".DB::table('yinxingfei_zzza_tj')." WHERE uid = '".$zzza_rank['zzza_uid']."' ORDER BY data DESC");//从最新一天倒退检测
	/* echo 'UID:'.$zzza_rank['zzza_uid'].'</br>';  */
	while($zzza_tja = DB::fetch($query_tja)){
		//当前日期数据转换
		$zzzayear=(int)substr($zzza_tja['data'],0,4);//取得年份
		$zzzamonth=(int)substr($zzza_tja['data'],4,2);//取得月份
		$zzzaday=(int)substr($zzza_tja['data'],6,2);//取得几号
		$zzzamtime = mktime(0,0,0,$zzzamonth,$zzzaday,$zzzayear);
		
		//获取前一天时间戳
		$zzzajtime = $zzzamtime - (3600*24);
		$zzza_tjab = dgmdate($zzzajtime,'Ymd',$_G['setting']['timeoffset']);
			
		 //当天的前一天是否摇奖
		$ifdata = DB::result_first("SELECT COUNT(*) FROM ".DB::table('yinxingfei_zzza_tj')." WHERE uid = '".$zzza_rank['zzza_uid']."' AND data = '".$zzza_tjab."'");//检查是否摇奖
		if($ifdata == 0){//沒摇奖就不再连续
			//DB::query("UPDATE ".DB::table('yinxingfei_zzza_rank')." SET lxyj = '0' WHERE zzza_uid= '$zzza_rank[zzza_uid]'", 'UNBUFFERED');
			break;
		}else{//连续责加1
			DB::query("UPDATE ".DB::table('yinxingfei_zzza_rank')." SET lxyj = lxyj+1 WHERE zzza_uid= '$zzza_rank[zzza_uid]'", 'UNBUFFERED');
			//继续循环
		}
		
		/* echo '&nbsp;&nbsp;&nbsp;当天:'.$zzza_tja['data'];
		echo '&nbsp;&nbsp;&nbsp;前一天:'.$zzza_tjab;
		echo '&nbsp;&nbsp;&nbsp;是否连续:'.$ifdata; */
	}
	/* echo '</br>---------------------------------------------</br>'; */
}
$page++;
if($allnum <= $num){
showmessage("all:".$num."</br>completed:".$allnum."(".$bfb."%)</br>Continue...</br>Do not close or stop!", 'plugin.php?id=yinxingfei_zzza:tool&page='.$page.'&num='.$num,'',array('refreshtime' => 1));
}else{
showmessage("over!thanks by thinfell", 'plugin.php?id=yinxingfei_zzza:yinxingfei_zzza_hall&typeid=lxyj',array('refreshtime' => 1));
}
?>