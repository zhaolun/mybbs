<<<<<<< HEAD
<?php

/**
 * Levme.com [ 专业开发各种Discuz!插件 ]
 *
 * Copyright (c) 2013-2014 http://www.levme.com All rights reserved.
 *
 * Author: Mr.Lee <675049572@qq.com>
 *
 * Date: 2013-02-17 16:22:17 Mr.Lee $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once 'lev_class.php';

$C = new lev_class();//print_r(lev_class::$_G);

$_PLG     = lev_class::$PL_G;
$PLURL    = lev_class::$PLURL;
$PLNAME   = lev_class::$PLNAME;
$PLSTATIC = lev_class::$PLSTATIC;

$lev_lang = lev_class::$lang;

$navtitle = $lev_lang['navtitle'] ? $lev_lang['navtitle'] : lev_class::$navtitle;

$_G['setting']['bbname'] = $lev_lang['bbname'] ? $lev_lang['bbname'] : $_G['setting']['bbname'];

$metakeywords = $lev_lang['metakeywords'] ? $lev_lang['metakeywords'] : $metakeywords;

$metadescription = $lev_lang['metadescription'] ? $lev_lang['metadescription'] : $metadescription;






=======
<?php

/**
 * Levme.com [ 专业开发各种Discuz!插件 ]
 *
 * Copyright (c) 2013-2014 http://www.levme.com All rights reserved.
 *
 * Author: Mr.Lee <675049572@qq.com>
 *
 * Date: 2013-02-17 16:22:17 Mr.Lee $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once 'lev_class.php';

$C = new lev_class();//print_r(lev_class::$_G);

$_PLG     = lev_class::$PL_G;
$PLURL    = lev_class::$PLURL;
$PLNAME   = lev_class::$PLNAME;
$PLSTATIC = lev_class::$PLSTATIC;

$lev_lang = lev_class::$lang;

$navtitle = $lev_lang['navtitle'] ? $lev_lang['navtitle'] : lev_class::$navtitle;

$_G['setting']['bbname'] = $lev_lang['bbname'] ? $lev_lang['bbname'] : $_G['setting']['bbname'];

$metakeywords = $lev_lang['metakeywords'] ? $lev_lang['metakeywords'] : $metakeywords;

$metadescription = $lev_lang['metadescription'] ? $lev_lang['metadescription'] : $metadescription;






>>>>>>> 9820e9875048c8be901aee69c268c519ca421160
