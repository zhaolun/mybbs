<<<<<<< HEAD
<?php

/**
 * 
 *
 * Copyright (c) 2013-2014 
 *
 * Author: Mr.Lee <675049572@qq.com>
 *
 * Date: 2013-02-17 16:22:17 Mr.Lee $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once 'lev_enter.php';
//print_r($PL_G);

switch ($_GET['m']) {
	case 1 :
		if ($_GET['fh'] != FORMHASH) {
			echo '{"result":1,"stat":"-3","msg":"'.$lev_lang['fh'].'","pId":"0"}';exit;
		}
		$isbuy = intval($_GET['isbuy']);
		lev_class::isegg($isbuy);exit;
		break;
	default:
		break;
}

$freenums  = lev_class::getfree(1);
$awardlist = lev_class::awardlist();
$awardbig  = lev_class::awardlist(1, 3);
$zaegg = explode('=', $_PLG['usescore']);

include template($PLNAME.':lev');
		
		
		
		
		
		
		
		
		
		
		
		
=======
<?php

/**
 * 
 *
 * Copyright (c) 2013-2014 
 *
 * Author: Mr.Lee <675049572@qq.com>
 *
 * Date: 2013-02-17 16:22:17 Mr.Lee $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once 'lev_enter.php';
//print_r($PL_G);

switch ($_GET['m']) {
	case 1 :
		if ($_GET['fh'] != FORMHASH) {
			echo '{"result":1,"stat":"-3","msg":"'.$lev_lang['fh'].'","pId":"0"}';exit;
		}
		$isbuy = intval($_GET['isbuy']);
		lev_class::isegg($isbuy);exit;
		break;
	default:
		break;
}

$freenums  = lev_class::getfree(1);
$awardlist = lev_class::awardlist();
$awardbig  = lev_class::awardlist(1, 3);
$zaegg = explode('=', $_PLG['usescore']);

include template($PLNAME.':lev');
		
		
		
		
		
		
		
		
		
		
		
		
>>>>>>> 9820e9875048c8be901aee69c268c519ca421160
		