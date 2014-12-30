<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
0
|| checktplrefresh('data/diy/./template/comiis_lssy//portal/index.htm', './template/comiis_lssy/common/header.htm', 1419899269, 'diy', './data/template/3_diy_portal_index.tpl.php', 'data/diy/./template/comiis_lssy/', 'portal/index')
|| checktplrefresh('data/diy/./template/comiis_lssy//portal/index.htm', './template/comiis_lssy/common/footer.htm', 1419899269, 'diy', './data/template/3_diy_portal_index.tpl.php', 'data/diy/./template/comiis_lssy/', 'portal/index')
|| checktplrefresh('data/diy/./template/comiis_lssy//portal/index.htm', './template/default/common/header_common.htm', 1419899269, 'diy', './data/template/3_diy_portal_index.tpl.php', 'data/diy/./template/comiis_lssy/', 'portal/index')
|| checktplrefresh('data/diy/./template/comiis_lssy//portal/index.htm', './template/default/common/header_qmenu.htm', 1419899269, 'diy', './data/template/3_diy_portal_index.tpl.php', 'data/diy/./template/comiis_lssy/', 'portal/index')
|| checktplrefresh('data/diy/./template/comiis_lssy//portal/index.htm', './template/default/common/pubsearchform.htm', 1419899269, 'diy', './data/template/3_diy_portal_index.tpl.php', 'data/diy/./template/comiis_lssy/', 'portal/index')
;
block_get('22,23,24,25,26,27,28,29,30,31,32,33,34,35,42,36,43,37,44,38,45,39,46,40,47,41,48,49,52,50,53,51,54,55,56');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_3_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_3_portal_index.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' || $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { include template('common/header_diy'); } if(check_diy_perm($topic)) { include template('common/header_diynav'); } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c">
    请选择 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">进入手机版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">继续访问电脑版</a>
</div>
<?php } if($_G['setting']['shortcut'] && $_G['member']['credits'] >= $_G['setting']['shortcut']) { ?>
<div id="shortcut">
<span><a href="javascript:;" id="shortcutcloseid" title="关闭">关闭</a></span>
您经常访问 <?php echo $_G['setting']['bbname'];?>，试试添加到桌面，访问更方便！
<a href="javascript:;" id="shortcuttip">添加 <?php echo $_G['setting']['bbname'];?> 到桌面</a>
</div>
<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
<?php } ?>
<div id="toptb" class="cl">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
<div class="wp">
<div class="z"><?php if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
</div>
<div class="y">
<a id="switchblind" href="javascript:;" onclick="toggleBlind(this)" title="开启辅助访问" class="switchblind">开启辅助访问</a>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?><?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } if(empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']) { ?>
<a href="javascript:;" id="switchwidth" onclick="widthauto(this)" title="<?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?>" class="switchwidth"><?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?></a>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?><a id="sslct" href="javascript:;" onmouseover="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">切换风格</a><?php } if(check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } ?>
</div>
</div>
</div>
<?php if(!IS_ROBOT) { if($_G['uid']) { ?>
<ul id="myprompt_menu" class="p_pop" style="display: none;">
<li><a href="home.php?mod=space&amp;do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news<?php if(empty($_G['member']['newpm'])) { ?>_0<?php } ?>"></em>消息</a></li>
<li><a href="home.php?mod=follow&amp;do=follower"><em class="prompt_follower<?php if(empty($_G['member']['newprompt_num']['follower'])) { ?>_0<?php } ?>"></em>新听众<?php if($_G['member']['newprompt_num']['follower']) { ?>(<?php echo $_G['member']['newprompt_num']['follower'];?>)<?php } ?></a></li>
<?php if($_G['member']['newprompt'] && $_G['member']['newprompt_num']['follow']) { ?>
<li><a href="home.php?mod=follow"><em class="prompt_concern"></em>我关注的(<?php echo $_G['member']['newprompt_num']['follow'];?>)</a></li>
<?php } if($_G['member']['newprompt']) { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { ?><li><a href="home.php?mod=space&amp;do=notice&amp;view=<?php echo $key;?>"><em class="notice_<?php echo $key;?>"></em><?php echo lang('template', 'notice_'.$key); ?>(<span class="rq"><?php echo $val;?></span>)</a></li>
<?php } } if(empty($_G['cookie']['ignore_notice'])) { ?>
<li class="ignore_noticeli"><a href="javascript:;" onclick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="暂不提醒"><em class="ignore_notice"></em></a></li>
<?php } ?>
</ul>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;">
<?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onclick="extstyle('')" title="默认"><i></i></span><?php } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onclick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span>
<?php } ?>
</div>
<?php } if($_G['uid']) { ?>
<ul id="myitem_menu" class="p_pop" style="display: none;">
<li><a href="forum.php?mod=guide&amp;view=my">帖子</a></li>
<li><a href="home.php?mod=space&amp;do=favorite&amp;view=me">收藏</a></li>
<li><a href="home.php?mod=space&amp;do=friend">好友</a></li>
<?php if(!empty($_G['setting']['pluginhooks']['global_myitem_extra'])) echo $_G['setting']['pluginhooks']['global_myitem_extra'];?>
</ul>
<?php } ?><div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_top'])) echo $_G['setting']['pluginhooks']['global_qmenu_top'];?>
<?php if($_G['uid']) { ?>
<ul class="cl nav"><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<?php } elseif($_G['connectguest']) { ?>
<div class="ptm pbw hm">
请先<br /><a class="xi2" href="member.php?mod=connect"><strong>完善帐号信息</strong></a> 或 <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>绑定已有帐号</strong></a><br />后使用快捷导航
</div>
<?php } else { ?>
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } if($_G['setting']['showfjump']) { ?><div id="fjump_menu" class="btda"></div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_bottom'])) echo $_G['setting']['pluginhooks']['global_qmenu_bottom'];?>
</div><?php } ?><?php echo adshow("headerbanner/wp a_h");?><div id="hd">
<div class="wp">
<div class="hdc cl"><?php $mnid = getcurrentnav();?><h2><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="<?php if($_G['setting']['domain']['app']['default']) { ?>http://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" title="<?php echo $_G['setting']['bbname'];?>"><?php echo $_G['style']['boardlogo'];?></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></h2><?php include template('common/header_userstatus'); ?></div>
<div style="clear:both;"></div>
<div id="nv">
<a href="javascript:;" id="qmenu" onmouseover="delayShow(this, function () {showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});showForummenu(<?php echo $_G['fid'];?>);})">快捷导航</a>
<ul><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php if($mnid == $nav['navid']) { ?>class="a" <?php } ?><?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
<?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?>
</div>
<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
 <li><?php echo $module['url'];?></li>
 <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?>
<div id="mu" class="cl">
<?php if($_G['setting']['subnavs']) { if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
<ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
<?php echo $subnav;?>
</ul>
<?php } } } ?>
</div><?php echo adshow("subnavbanner/a_mu");?><?php if($_G['setting']['search']) { $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >本版</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">文章</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">日志</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">相册</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">用户</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="scbar" class="<?php if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { ?>scbar_narrow <?php } ?>cl">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />

<style>
#scbar { overflow: visible; position: relative; }
#sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.scbar_narrow #sg { width: 316px; }
#sg li { padding:0 8px; line-height:30px; font-size:14px; }
#sg li span { color:#999; }
.sml { background:#FFF; cursor:default; }
.smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td class="scbar_icon_td"></td>
<td class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" x-webkit-speech speech /></td>
<td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="xg1" onclick="showMenu(this.id)" hidefocus="true">搜索</a></td>
<td class="scbar_btn_td"><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true"><strong class="xi2">搜索</strong></button></td>
<td class="scbar_hot_td">
<div id="scbar_hot">
<?php if($_G['setting']['srchhotkeywords']) { ?>
<strong class="xw1">热搜: </strong><?php if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { if($val=trim($val)) { $valenc=rawurlencode($val);?><?php
$__FORMHASH = FORMHASH;$srchhotkeywords[] = <<<EOF


EOF;
 if(!empty($searchparams['url'])) { 
$srchhotkeywords[] .= <<<EOF

<a href="{$searchparams['url']}?q={$valenc}&source=hotsearch{$srchotquery}" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } else { 
$srchhotkeywords[] .= <<<EOF

<a href="search.php?mod=forum&amp;srchtxt={$valenc}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } 
$srchhotkeywords[] .= <<<EOF


EOF;
?>
<?php } } echo implode('', $srchhotkeywords);; } ?>
</div>
</td>
</tr>
</table>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script>
<?php } ?></div>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
<?php } ?>
<div id="wp" class="wp">
<style id="diy_style" type="text/css"></style>
<!--[diy=comiis_pd_kuxw00]--><div id="comiis_pd_kuxw00" class="area"></div><!--[/diy]-->
<!--[diy=comiis_pd_kuxw01]--><div id="comiis_pd_kuxw01" class="area"><div id="frameO6ei4x" class="cl_frame_bm frame move-span cl frame-1"><div id="frameO6ei4x_left" class="column frame-1-c"><div id="frameO6ei4x_left_temp" class="move-span temp"></div><?php block_display('22');?></div></div></div><!--[/diy]-->
<div class="AntNewMain">
  <div class="Left">
  <!--[diy=comiis_pd_kuxw02]--><div id="comiis_pd_kuxw02" class="area"><div id="framegx3Xia" class="cl_frame_bm frame move-span cl frame-1"><div id="framegx3Xia_left" class="column frame-1-c"><div id="framegx3Xia_left_temp" class="move-span temp"></div><?php block_display('23');?></div></div></div><!--[/diy]-->
  </div>
  <div class="Right">
    <div class="AntNewTop">
      <div class="Lin">
      <!--[diy=comiis_pd_kuxw03]--><div id="comiis_pd_kuxw03" class="area"><div id="frameKajax1" class="cl_frame_bm frame move-span cl frame-1"><div id="frameKajax1_left" class="column frame-1-c"><div id="frameKajax1_left_temp" class="move-span temp"></div><?php block_display('24');?></div></div></div><!--[/diy]-->
      </div>
    </div>
    <div class="AntNewsPictures">
      <div class="imgup">
        <h2>热图推荐</h2>
        <div style="clear:both;"></div>
        <!--[diy=comiis_pd_kuxw04]--><div id="comiis_pd_kuxw04" class="area"><div id="frameE3IIfA" class="cl_frame_bm frame move-span cl frame-1"><div id="frameE3IIfA_left" class="column frame-1-c"><div id="frameE3IIfA_left_temp" class="move-span temp"></div><?php block_display('25');?></div></div></div><!--[/diy]-->
      </div>
      <div class="newslist">
        <h2>热点推荐</h2>
        <div class="comiie_lsx">
        <!--[diy=comiis_pd_kuxw05]--><div id="comiis_pd_kuxw05" class="area"><div id="frameqn35ie" class="cl_frame_bm frame move-span cl frame-1"><div id="frameqn35ie_left" class="column frame-1-c"><div id="frameqn35ie_left_temp" class="move-span temp"></div><?php block_display('26');?></div></div></div><!--[/diy]-->
        </div> 
        <div class="Bottom"></div>       
      </div>      
    </div>    
  </div>
</div>
<div class="AntClear"></div>
<div class="AntNewsInfo">
  <div class="AntTodayHot">
    <div class="Titlekm"><a href="#" target="_blank" style="color:#777;">更多>></a>城市资讯</div>
    <div class="Content">
      <div class="l">
      <!--[diy=comiis_pd_kuxw06]--><div id="comiis_pd_kuxw06" class="area"><div id="framepb36If" class="cl_frame_bm frame move-span cl frame-1"><div id="framepb36If_left" class="column frame-1-c"><div id="framepb36If_left_temp" class="move-span temp"></div><?php block_display('27');?></div></div></div><!--[/diy]-->
     </div>
     <div class="ldafd">
     <!--[diy=comiis_pd_kuxw07]--><div id="comiis_pd_kuxw07" class="area"><div id="frameG4FIAX" class="cl_frame_bm frame move-span cl frame-1"><div id="frameG4FIAX_left" class="column frame-1-c"><div id="frameG4FIAX_left_temp" class="move-span temp"></div><?php block_display('28');?></div></div></div><!--[/diy]-->
       </div>     
    </div>
    <div class="Bottom"></div>
  </div>
  <div class="AntTodayHot AntTodayHotR">
    <div class="Titlekm"><a href="#" target="_blank" style="color:#777;">更多>></a>网友中心</div>
    <div class="Content">
      <div class="l">
      <!--[diy=comiis_pd_kuxw08]--><div id="comiis_pd_kuxw08" class="area"><div id="framedfBEJI" class="cl_frame_bm frame move-span cl frame-1"><div id="framedfBEJI_left" class="column frame-1-c"><div id="framedfBEJI_left_temp" class="move-span temp"></div><?php block_display('29');?></div></div></div><!--[/diy]-->        
      </div>
      <div class="ldafd">
      <!--[diy=comiis_pd_kuxw09]--><div id="comiis_pd_kuxw09" class="area"><div id="frameS9zJZ3" class="cl_frame_bm frame move-span cl frame-1"><div id="frameS9zJZ3_left" class="column frame-1-c"><div id="frameS9zJZ3_left_temp" class="move-span temp"></div><?php block_display('30');?></div></div></div><!--[/diy]-->     
      </div>
    </div>
    <div class="Bottom"></div>
  </div>
</div>
<!--[diy=comiis_pd_kuxw10]--><div id="comiis_pd_kuxw10" class="area"><div id="frameCz3Azv" class="cl_frame_bm frame move-span cl frame-1"><div id="frameCz3Azv_left" class="column frame-1-c"><div id="frameCz3Azv_left_temp" class="move-span temp"></div><?php block_display('31');?></div></div></div><!--[/diy]-->
<div class="AntNewPicture">
  <div class="Titlekm"><a href="#" target=_blank>更多>></a>图个痛快</div>
  <div class="c">  
<!--[diy=comiis_pd_kuxw11]--><div id="comiis_pd_kuxw11" class="area"><div id="framez5b9Bi" class="cl_frame_bm frame move-span cl frame-1"><div id="framez5b9Bi_left" class="column frame-1-c"><div id="framez5b9Bi_left_temp" class="move-span temp"></div><?php block_display('32');?></div></div></div><!--[/diy]-->     
  </div>
  <div class="Bottom"></div>
</div>
<div class="AntNewDB">
  <div class="Left">
    <div class="AntNewClass">
      <div class="Titlekm">
        <div><a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> </div>
        <b><a href="#" target=_blank>城市八卦</a></b></div> 
<div class="Content">
<!--[diy=comiis_pd_kuxw12]--><div id="comiis_pd_kuxw12" class="area"><div id="framee336Fn" class="cl_frame_bm frame move-span cl frame-1"><div id="framee336Fn_left" class="column frame-1-c"><div id="framee336Fn_left_temp" class="move-span temp"></div><?php block_display('33');?></div></div><div id="framene953j" class="cl_frame_bm frame move-span cl frame-1"><div id="framene953j_left" class="column frame-1-c"><div id="framene953j_left_temp" class="move-span temp"></div><?php block_display('34');?></div></div></div><!--[/diy]-->
      </div>
      <div class="Bottom"></div>
    </div>
    <div class="AntNewClass AntNewClassR">
      <div class="Titlekm">
        <div><a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> </div>
        <b><a href="#" target=_blank>休闲娱乐</a></b></div>
      <div class="Content">
      <!--[diy=comiis_pd_kuxw13]--><div id="comiis_pd_kuxw13" class="area"><div id="frameO16FIA" class="cl_frame_bm frame move-span cl frame-1"><div id="frameO16FIA_left" class="column frame-1-c"><div id="frameO16FIA_left_temp" class="move-span temp"></div><?php block_display('35');?></div></div><div id="frameinz1X1" class="cl_frame_bm frame move-span cl frame-1"><div id="frameinz1X1_left" class="column frame-1-c"><div id="frameinz1X1_left_temp" class="move-span temp"></div><?php block_display('42');?></div></div></div><!--[/diy]-->
      </div>
      <div class="Bottom"></div>
    </div>
    <div class="AntNewClass">
      <div class="Titlekm">
        <div><a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> </div>
        <b><a href="#" target=_blank>饮食男女</a></b></div>
      <div class="Content">
      <!--[diy=comiis_pd_kuxw14]--><div id="comiis_pd_kuxw14" class="area"><div id="framea9N3lJ" class="cl_frame_bm frame move-span cl frame-1"><div id="framea9N3lJ_left" class="column frame-1-c"><div id="framea9N3lJ_left_temp" class="move-span temp"></div><?php block_display('36');?></div></div><div id="framev5V366" class="cl_frame_bm frame move-span cl frame-1"><div id="framev5V366_left" class="column frame-1-c"><div id="framev5V366_left_temp" class="move-span temp"></div><?php block_display('43');?></div></div></div><!--[/diy]-->
      </div>
      <div class="Bottom"></div>
    </div>
    <div class="AntNewClass AntNewClassR">
      <div class="Titlekm">
        <div><a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> </div>
        <b><a href="#" target=_blank>旅游天地</a></b></div>
      <div class="Content">
      <!--[diy=comiis_pd_kuxw15]--><div id="comiis_pd_kuxw15" class="area"><div id="frameSZV3LN" class="cl_frame_bm frame move-span cl frame-1"><div id="frameSZV3LN_left" class="column frame-1-c"><div id="frameSZV3LN_left_temp" class="move-span temp"></div><?php block_display('37');?></div></div><div id="framea5F3n3" class="cl_frame_bm frame move-span cl frame-1"><div id="framea5F3n3_left" class="column frame-1-c"><div id="framea5F3n3_left_temp" class="move-span temp"></div><?php block_display('44');?></div></div></div><!--[/diy]-->    
      </div>
      <div class="Bottom"></div>
    </div>
    <div class="AntNewClass">
      <div class="Titlekm">
        <div><a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> </div>
        <b><a href="#" target=_blank>情感沙龙</a></b></div>
      <div class="Content">
      <!--[diy=comiis_pd_kuxw16]--><div id="comiis_pd_kuxw16" class="area"><div id="framekvH4Jf" class="cl_frame_bm frame move-span cl frame-1"><div id="framekvH4Jf_left" class="column frame-1-c"><div id="framekvH4Jf_left_temp" class="move-span temp"></div><?php block_display('38');?></div></div><div id="frameJjJnJ3" class="cl_frame_bm frame move-span cl frame-1"><div id="frameJjJnJ3_left" class="column frame-1-c"><div id="frameJjJnJ3_left_temp" class="move-span temp"></div><?php block_display('45');?></div></div></div><!--[/diy]-->   
      </div>
      <div class="Bottom"></div>
    </div>
    <div class="AntNewClass AntNewClassR">
      <div class="Titlekm">
        <div><a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> </div>
        <b><a href="#" target=_blank>娱乐八卦</a></b></div>
      <div class="Content">
     <!--[diy=comiis_pd_kuxw17]--><div id="comiis_pd_kuxw17" class="area"><div id="frameG2JX35" class="cl_frame_bm frame move-span cl frame-1"><div id="frameG2JX35_left" class="column frame-1-c"><div id="frameG2JX35_left_temp" class="move-span temp"></div><?php block_display('39');?></div></div><div id="framevhh23X" class="cl_frame_bm frame move-span cl frame-1"><div id="framevhh23X_left" class="column frame-1-c"><div id="framevhh23X_left_temp" class="move-span temp"></div><?php block_display('46');?></div></div></div><!--[/diy]--> 
      </div>
      <div class="Bottom"></div>
    </div>
    <div class="AntNewClass">
      <div class="Titlekm">
        <div><a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> </div>
        <b><a href="#" target=_blank>亲子乐园</a></b></div>
      <div class="Content">
      <!--[diy=comiis_pd_kuxw18]--><div id="comiis_pd_kuxw18" class="area"><div id="frameb95fbz" class="cl_frame_bm frame move-span cl frame-1"><div id="frameb95fbz_left" class="column frame-1-c"><div id="frameb95fbz_left_temp" class="move-span temp"></div><?php block_display('40');?></div></div><div id="frameXAzjfZ" class="cl_frame_bm frame move-span cl frame-1"><div id="frameXAzjfZ_left" class="column frame-1-c"><div id="frameXAzjfZ_left_temp" class="move-span temp"></div><?php block_display('47');?></div></div></div><!--[/diy]-->    
      </div>
      <div class="Bottom"></div>
    </div>
    <div class="AntNewClass AntNewClassR">
      <div class="Titlekm">
        <div><a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> <a href="#" target=_blank>自定内容</a> </div>
        <b><a href="#" target=_blank>健康生活</a></b></div>
      <div class="Content">
      <!--[diy=comiis_pd_kuxw19]--><div id="comiis_pd_kuxw19" class="area"><div id="frameaLfI3E" class="cl_frame_bm frame move-span cl frame-1"><div id="frameaLfI3E_left" class="column frame-1-c"><div id="frameaLfI3E_left_temp" class="move-span temp"></div><?php block_display('41');?></div></div><div id="framenXi3Z5" class="cl_frame_bm frame move-span cl frame-1"><div id="framenXi3Z5_left" class="column frame-1-c"><div id="framenXi3Z5_left_temp" class="move-span temp"></div><?php block_display('48');?></div></div></div><!--[/diy]--> 
      </div>
      <div class="Bottom"></div>
    </div>
  </div>
  <div class="Right">
  <div class="comiis_rad comiis_mb8">
  <!--[diy=comiis_pd_kuxw20]--><div id="comiis_pd_kuxw20" class="area"><div id="framevb43Zf" class="cl_frame_bm frame move-span cl frame-1"><div id="framevb43Zf_left" class="column frame-1-c"><div id="framevb43Zf_left_temp" class="move-span temp"></div><?php block_display('49');?></div></div></div><!--[/diy]-->
  </div>
    <div class="AntRightInfo">
      <div class="Titlekm"><a href="#" target=_blank class="Mor">更多>></a>
        <div class="Tabkm"><a href="#" id="SiteForum1" class="Current">最新发表</a></div>
      </div>
      <div class="Content">
       <!--[diy=comiis_pd_kuxw21]--><div id="comiis_pd_kuxw21" class="area"><div id="framee42323" class="cl_frame_bm frame move-span cl frame-1"><div id="framee42323_left" class="column frame-1-c"><div id="framee42323_left_temp" class="move-span temp"></div><?php block_display('52');?></div></div></div><!--[/diy]-->
      </div>
      <div class="Bottom"></div>
    </div>
    <div class="comiis_rad comiis_mt8">
     <!--[diy=comiis_pd_kuxw22]--><div id="comiis_pd_kuxw22" class="area"><div id="frameRL4Zfb" class="cl_frame_bm frame move-span cl frame-1"><div id="frameRL4Zfb_left" class="column frame-1-c"><div id="frameRL4Zfb_left_temp" class="move-span temp"></div><?php block_display('50');?></div></div></div><!--[/diy]-->
     </div>
    <div class="AntRightInfo comiis_mt8">
      <div class="Titlekm"><a href="#" target=_blank class="Mor">更多>></a>
        <div class="Tabkm"><a href="#" id="SiteForum1" class="Current">最新点评</a></div>
      </div>
      <div class="Content">
      <!--[diy=comiis_pd_kuxw23]--><div id="comiis_pd_kuxw23" class="area"><div id="frameVIeZVb" class="cl_frame_bm frame move-span cl frame-1"><div id="frameVIeZVb_left" class="column frame-1-c"><div id="frameVIeZVb_left_temp" class="move-span temp"></div><?php block_display('53');?></div></div></div><!--[/diy]-->       
      </div>
      <div class="Bottom"></div>
    </div>
    <div class="comiis_rad comiis_mt8">
    <!--[diy=comiis_pd_kuxw24]--><div id="comiis_pd_kuxw24" class="area"><div id="frameJ6v525" class="cl_frame_bm frame move-span cl frame-1"><div id="frameJ6v525_left" class="column frame-1-c"><div id="frameJ6v525_left_temp" class="move-span temp"></div><?php block_display('51');?></div></div></div><!--[/diy]-->
    </div>
    <div class="AntRightInfo comiis_mt8">
      <div class="Titlekm"><a href="#" target=_blank class="Mor">更多>></a>
        <div class="Tabkm"><a href="#" id="SiteForum1" class="Current">精华推荐</a></div>
      </div>
      <div class="Content">
      <!--[diy=comiis_pd_kuxw25]--><div id="comiis_pd_kuxw25" class="area"><div id="framey32a9i" class="cl_frame_bm frame move-span cl frame-1"><div id="framey32a9i_left" class="column frame-1-c"><div id="framey32a9i_left_temp" class="move-span temp"></div><?php block_display('54');?></div></div></div><!--[/diy]-->
      </div>
      <div class="Bottom"></div>
    </div>    
  </div>
</div>
<div style="clear:both;"></div>
<!--[diy=comiis_pd_kuxw26]--><div id="comiis_pd_kuxw26" class="area"><div id="frameB3J5b9" class="cl_frame_bm frame move-span cl frame-1"><div id="frameB3J5b9_left" class="column frame-1-c"><div id="frameB3J5b9_left_temp" class="move-span temp"></div><?php block_display('55');?></div></div></div><!--[/diy]-->
<div style="clear:both;"></div>
<div class="AntNewPicturekm">
  <div class="Titlekm"><a href="#" target=_blank>+ 申请友情链接</a>友情链接</div>
  <div class="c">
    <!--[diy=comiis_pd_kuxw_link]--><div id="comiis_pd_kuxw_link" class="area"><div id="framen2iex3" class="cl_frame_bm frame move-span cl frame-1"><div id="framen2iex3_left" class="column frame-1-c"><div id="framen2iex3_left_temp" class="move-span temp"></div><?php block_display('56');?></div></div></div><!--[/diy]-->
  </div>
  <div class="Bottom comiis_mb8"></div>
</div>
</div>
<div style="clear:both;"></div></div>
<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="关闭">关闭</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站长推荐<?php } ?>
<span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="上一条" title="上一条" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="下一条" title="下一条" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
</h2>
</div>
<div class="bm_c" id="focus_con">
</div>
</div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
<dl class="xld cl bbda">
<dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
<?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
<dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
</dl>
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">查看 &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>
<div style="clear:both;"></div>
<div id="ft" class="comiis_footer wp">
<div class="comiis_footertop"><?php if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||	!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile' || $nav['id'] == 'darkroom'))) { ?><?php echo $nav['code'];?>|<?php } } ?></div>
<div class="comiis_Copyright">
Copyright &copy; 2008-2015 <a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a>(<?php echo $_G['setting']['siteurl'];?>) 版权所有 All Rights Reserved.<br />
风格购买及设计联系：13450110120  15813025137 QQ：21400445  8821775<br />
Powered by <a href="http://www.discuz.net" target="_blank">Discuz!</a> <?php echo $_G['setting']['version'];?>&nbsp;
<!---*感谢你对克米设计的支持, 为获得更多克米设计的技术支持和服务, 建议保留下面克米设计的版权连接，谢谢!*--->
技术支持: <A href="http://www.comiis.com" rel="nofollow" target=_blank title="克米设计-商业技术认证客户">克米设计</A> <?php if($_G['setting']['icp']) { ?><a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a><?php } ?> <?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><?php } ?> <?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?> <?php if($_G['setting']['site_qq']) { ?><a href="http://wpa.qq.com/msgrd?V=3&amp;Uin=<?php echo $_G['setting']['site_qq'];?>&amp;Site=<?php echo $_G['setting']['bbname'];?>&amp;Menu=yes&amp;from=discuz" target="_blank" title="QQ"><img src="<?php echo IMGDIR;?>/site_qq.jpg" alt="QQ" /></a><?php } ?>
</div>
</div><?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>隐身<?php } else { ?>在线<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } } if(!$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])) { ?>
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script>
<?php } if(!$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])) { ?>
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } if(($_G['member']['newpm'] || $_G['member']['newprompt']) && empty($_G['cookie']['ignore_notice'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html5notification.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var h5n = new Html5notification();
if(h5n.issupport()) {
<?php if($_G['member']['newpm'] && $_GET['do'] != 'pm') { ?>
h5n.shownotification('pm', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=pm', '<?php echo avatar($_G[uid],small,true);?>', '新的短消息', '有新的短消息，快去看看吧');
<?php } if($_G['member']['newprompt'] && $_GET['do'] != 'notice') { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { $noticetitle = lang('template', 'notice_'.$key);?>h5n.shownotification('notice_<?php echo $key;?>', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=notice&view=<?php echo $key;?>', '<?php echo avatar($_G[uid],small,true);?>', '<?php echo $noticetitle;?> (<?php echo $val;?>)', '有新的提醒，快去看看吧');
<?php } } ?>
}
</script>
<?php } userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<div id="scrolltop">
<?php if($_G['fid'] && $_G['mod'] == 'viewthread') { ?>
<span><a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('reply', this.href)" class="replyfast" title="快速回复"><b>快速回复</b></a></span>
<?php } ?>
<span hidefocus="true"><a title="返回顶部" onclick="window.scrollTo('0','0')" class="scrolltopa" ><b>返回顶部</b></a></span>
<?php if($_G['fid']) { ?>
<span>
<?php if($_G['mod'] == 'viewthread') { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a>
<?php } else { ?>
<a href="forum.php" hidefocus="true" class="returnboard" title="返回版块"><b>返回版块</b></a>
<?php } ?>
</span>
<?php } ?>
</div>
<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
<?php } if(isset($_G['makehtml'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html2dynamic.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var html_lostmodify = <?php echo TIMESTAMP;?>;
htmlGetUserStatus();
<?php if(isset($_G['htmlcheckupdate'])) { ?>
htmlCheckUpdate();
<?php } ?>
</script>
<?php } output();?></body>
</html>
