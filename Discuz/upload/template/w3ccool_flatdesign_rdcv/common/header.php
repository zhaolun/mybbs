<?php echo '<p>/* HEADER Document */</p> <p>/*------------------------------------------------------------------</p><p>*Fiename:               header.php</p>         <p>*Description:           fiatdesign header</p> <p>*Version:               1.0.0(2014-07-12)YYYY-MM-DD</p> <p>*Website:               http://www.subzerolove.com</p> <p>*Copyright:             http://www.w3ccool.com</p> <p>*Assist:                w3ccool</p> <p>*Author:                SubzeroLove</p> <br>==END:=========================================================<p>W3CCOOL商业模板保护！请到官网上购买正版模板  www.w3ccool.com</p> ';exit ;?>
<!--{subtemplate common/header_common}-->
	<meta name="application-name" content="$_G['setting']['bbname']" />
	<meta name="msapplication-tooltip" content="$_G['setting']['bbname']" />
	<!--{if $_G['setting']['portalstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][1]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G[siteurl].'portal.php'};icon-uri={$_G[siteurl]}{IMGDIR}/portal.ico" /><!--{/if}-->
	<meta name="msapplication-task" content="name=$_G['setting']['navs'][2]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G[siteurl].'forum.php'};icon-uri={$_G[siteurl]}{IMGDIR}/bbs.ico" />
	<!--{if $_G['setting']['groupstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][3]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G[siteurl].'group.php'};icon-uri={$_G[siteurl]}{IMGDIR}/group.ico" /><!--{/if}-->
	<!--{if helper_access::check_module('feed')}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][4]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G[siteurl].'home.php'};icon-uri={$_G[siteurl]}{IMGDIR}/home.ico" /><!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' && $_G['setting']['archiver']}-->
		<link rel="archives" title="$_G['setting']['bbname']" href="{$_G[siteurl]}archiver/" />
	<!--{/if}-->
	<!--{if !empty($rsshead)}-->$rsshead<!--{/if}-->
	<!--{if widthauto()}-->
		<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_{STYLEID}_widthauto.css?{VERHASH}" />
		<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
	<!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' || $_G['basescript'] == 'group'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}forum.js?{VERHASH}"></script>
	<!--{elseif $_G['basescript'] == 'home' || $_G['basescript'] == 'userapp'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}home.js?{VERHASH}"></script>
	<!--{elseif $_G['basescript'] == 'portal'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
	<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_{STYLEID}_css_diy.css?{VERHASH}" />
	<!--{/if}-->
    <!--<script type="text/javascript" src="/w3ccool_businex_imges/camera.min.js?{VERHASH}"></script>
    <script type="text/javascript" src="/w3ccool_businex_imges/jquery.easing.1.3.js?{VERHASH}"></script>
    <script type="text/javascript" src="/w3ccool_businex_imges/jquery.lightbox.js?{VERHASH}"></script>
    <link rel="stylesheet" type="text/css" href="/w3ccool_businex_imges/lightbox.css?{VERHASH}" />
    <link rel="stylesheet" type="text/css" href="/w3ccool_businex_imges/slider.css?{VERHASH}" />-->
</head>

<body id="nv_{$_G[basescript]}" class="pg_{CURMODULE}{if $_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)} {$cat['bodycss']}{/if}" onkeydown="if(event.keyCode==27) return false;">
	<div id="append_parent"></div><div id="ajaxwaitid"></div>
	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<!--{template common/header_diy}-->
	<!--{/if}-->
	<!--{if check_diy_perm($topic)}-->
		<!--{template common/header_diynav}-->
	<!--{/if}-->
	<!--{if CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)}-->
		$diynav
	<!--{/if}-->
	<!--{if empty($topic) || $topic['useheader']}-->
		<!--{if $_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')}-->
			<div class="xi1 bm bm_c">
			    {lang your_mobile_browser}<a href="{$_G['siteurl']}forum.php?mobile=yes">{lang go_to_mobile}</a> <span class="xg1">|</span> <a href="$_G['setting']['mobile']['nomobileurl']">{lang to_be_continue}</a>
			</div>
		<!--{/if}-->
		<!--{if $_G['setting']['shortcut'] && $_G['member'][credits] >= $_G['setting']['shortcut']}-->
			<div id="shortcut">
				<span><a href="javascript:;" id="shortcutcloseid" title="{lang close}">{lang close}</a></span>
				{lang shortcut_notice}
				<a href="javascript:;" id="shortcuttip">{lang shortcut_add}</a>
			</div>
			<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
		<!--{/if}-->
		<!----start-wrap---->
		<div class="wrap">
			<!---start-header---->
			<div class="top-links" id="top">
                <div class="z w3c_z">
                    <ul>                        
                        <li>
                            <a class="sethomepage" href="javascript:;" onClick="setHomepage('{if $_G['setting']['domain']['app']['default']}http://{$_G['setting']['domain']['app']['default']}/{else}./{/if}');" title="设为首页">设为首页</a>
                        </li>
                        <li>
                            <a class="addfavorite" href="$_G['siteurl']" onClick="addFavorite(this.href, '$_G['setting']['bbname']');return false;" title="收藏本站">收藏本站</a>
                        </li>
                    </ul>
                    <!--{hook/global_cpnav_extra1}-->
                </div>
                <div class="y w3cdiy">                        
                    <!--{hook/global_cpnav_extra2}-->
                    <!--{loop $_G['setting']['topnavs'][1] $nav}-->
                        <!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
                    <!--{/loop}-->
                    
                    <!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}--><a id="sslct" href="javascript:;" onMouseOver="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">{lang changestyle}</a><!--{/if}-->
                    <!--{if check_diy_perm($topic)}-->
                        $diynav
                    <!--{/if}-->
                </div>
                <div class="social-icons">
                    <!--{if $_G['uid']}-->
                    <div class="mlogin z">
                        <b>
                            <strong class="vwmy{if $_G['setting']['connect']['allow'] && $_G[member][conisbind]} qq{/if}"><a href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}">{$_G[member][username]}</a></strong>
                        </b>                        
                        <!--{if $_G['group']['allowinvisible']}-->
                        <span id="loginstatus">
                            <a id="loginstatusid" href="member.php?mod=switchstatus" title="{lang login_switch_invisible_mode}" onClick="ajaxget(this.href, 'loginstatus');return false;" class="xi2"></a>
                        </span>
                        <!--{/if}-->
                        <span class="pipe">|</span>
                        <a href="javascript:;" id="myitem_w3c" class="showmenu" onMouseOver="showMenu({'ctrlid':'myitem_w3c'});">绑定帐号</a>
                        <span class="pipe">|</span>
                        <a href="javascript:;" id="myitem" class="showmenu" onMouseOver="showMenu({'ctrlid':'myitem'});">{lang myitem}</a>
                        <span class="pipe">|</span><!--{hook/global_usernav_extra4}--><a href="home.php?mod=spacecp">{lang setup}</a>
                        <span class="pipe">|</span><a href="home.php?mod=space&do=pm" id="pm_ntc"{if $_G[member][newpm]} class="new"{/if}>{lang pm_center}</a>
                        <span class="pipe">|</span><a href="home.php?mod=space&do=notice" id="myprompt"{if $_G[member][newprompt]} class="new"{/if}>{lang remind}<!--{if $_G[member][newprompt]}-->($_G[member][newprompt])<!--{/if}--></a><span id="myprompt_check"></span>              
                        <!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
                            <span class="pipe">|</span><a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a>
                        <!--{/if}-->
                        <!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
                            <span class="pipe">|</span><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a>
                        <!--{/if}-->
                        <!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
                            <span class="pipe">|</span><a href="admin.php" target="_blank">{lang admincp}</a>
                        <!--{/if}-->
                        <!--{hook/global_usernav_extra3}-->              
                        <!--{hook/global_usernav_extra2}-->
                        <span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>             
                    </div>
                    <ul class="y">  
                        <li class="astx"><!--{avatar(0,small)}--></li>
                        <li><a class="showforummenu" href="javascript:;" id="w3cmenu" onMouseOver="delayShow(this, function () {showMenu({'ctrlid':'w3cmenu','pos':'34!','ctrlclass':'a','duration':2});showForummenu($_G[fid]);})" title="快捷导航">{lang my_nav}</a></li>
                        <li><a href="javascript:;" onClick="widthauto(this)" title="{if widthauto()}{lang switch_narrow}{else}{lang switch_wide}{/if}" class="switching"><!--{if widthauto()}-->{lang switch_narrow}<!--{else}-->{lang switch_wide}<!--{/if}--></a></li>   
                    </ul>      
                    <!--{elseif !$_G[connectguest]}-->
                    <ul class="y">    
                        <li>
                            <a class="qq" href="connect.php?mod=login&op=init&referer=forum.php&statfrom=login_simple" target="_blank" title="QQ登录"></a>
                        </li>
                        <li>
                            <a class="weixin" href="plugin.php?id=wechat:login" target="_blank" title="微信登录"></a>
                        </li>
                        <li>
                            <a class="sina" href="https://api.weibo.com/oauth2/authorize?client_id=1421232396&redirect_uri=http%3A%2F%2Fwww.w3ccool.com%2Fplugin.php%3Fid%3Dljxlwb&response_type=code" target="_blank" title="新浪登录"></a>
                        </li>
                        <li>
                            <a class="login" href="member.php?mod=logging&action=login&referer={echo rawurlencode($dreferer)}" onClick="showWindow('login', this.href);return false;" title="{lang login}">{lang login}</a>
                        </li>
                        <li>
                            <a class="register" href="member.php?mod={$_G[setting][regname]}" title="$_G['setting']['reglinkname']">$_G['setting']['reglinkname']</a>
                        </li>
                        <li>
                            <a class="viewlostpw" href="javascript:;" onClick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')" title="{lang forgotpw}">{lang forgotpw}</a>
                        </li> 
                        <li>
                            <a class="showforummenu" href="javascript:;" id="w3cmenu" onMouseOver="delayShow(this, function () {showMenu({'ctrlid':'w3cmenu','pos':'34!','ctrlclass':'a','duration':2});showForummenu($_G[fid]);})" title="快捷导航">{lang my_nav}</a></li>
                        <li>
                            <a href="javascript:;" onClick="widthauto(this)" title="{if widthauto()}{lang switch_narrow}{else}{lang switch_wide}{/if}" class="switching"><!--{if widthauto()}-->{lang switch_narrow}<!--{else}-->{lang switch_wide}<!--{/if}--></a>
                        </li>   
                    </ul>  
                    <!--{else}-->
                    <div class="mlogin z"> 
                        <strong class="vwmy qq">{$_G[member][username]}</strong>
                        <!--{hook/global_usernav_extra1}-->   
                        <span class="pipe">|</span>   
                        <a href="member.php?mod=connect" target="_blank" title="体验本站更多功能">完善帐号信息</a>
                        <span class="pipe">|</span>
                        <a href="member.php?mod=connect&amp;ac=bind" target="_blank" title="使用QQ帐号快速登录本站">绑定已有帐号</a>
                        <span class="pipe">|</span>
                        <a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a>
                        <span class="pipe">|</span>{lang usergroup}: $_G[group][grouptitle]
                        <span class="pipe">|</span>
                        <a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
                    </div>
                    <ul class="y">  
                        <li class="astx"><!--{avatar(0,small)}--></li>
                        <li><a class="showforummenu" href="javascript:;" id="w3cmenu" onMouseOver="delayShow(this, function () {showMenu({'ctrlid':'w3cmenu','pos':'34!','ctrlclass':'a','duration':2});showForummenu($_G[fid]);})" title="快捷导航">{lang my_nav}</a></li>
                        <li><a href="javascript:;" onClick="widthauto(this)" title="{if widthauto()}{lang switch_narrow}{else}{lang switch_wide}{/if}" class="switching"><!--{if widthauto()}-->{lang switch_narrow}<!--{else}-->{lang switch_wide}<!--{/if}--></a></li>   
                    </ul>
                    <!--{/if}-->
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!--{if $_G['uid']}-->
            <ul id="myitem_menu" class="p_pop" style="display: none;">
                <li><a href="forum.php?mod=guide&view=my">{lang mypost}</a></li>
                <li><a href="home.php?mod=space&do=favorite&view=me">{lang favorite}</a></li>
                <li><a href="home.php?mod=space&do=friend">{lang friends}</a></li>
                <!--{hook/global_myitem_extra}-->
            </ul>
        <!--{/if}-->
        <!--{if $_G['uid']}-->
            <ul id="myitem_w3c_menu" class="p_pop" style="display: none;">
                <!--{hook/global_usernav_extra1}-->
            </ul>
        <!--{/if}-->
        <!--{subtemplate common/header_qmenu}-->
		<!--{ad/headerbanner/wp a_h}-->        
		<div class="header">
				<div class="wrap">
				<div class="logo">
                <!--{eval $mnid = getcurrentnav();}-->
					<!--{if !isset($_G['setting']['navlogos'][$mnid])}--><a href="{if $_G['setting']['domain']['app']['default']}http://{$_G['setting']['domain']['app']['default']}/{else}./{/if}" title="$_G['setting']['bbname']">{$_G['style']['boardlogo']}</a><!--{else}-->$_G['setting']['navlogos'][$mnid]<!--{/if}-->
				</div>
				<div class="top-nav">
					<ul>
                    <!--{loop $_G['setting']['navs'] $nav}-->
							<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 ))}--><li {if $mnid == $nav[navid]}class="active" {/if}$nav[nav]></li><!--{/if}-->
						<!--{/loop}-->
						<div class="clear"> </div>
					</ul>
                     <!--{hook/global_nav_extra}--> 
				</div>
                <!--{if !empty($_G['setting']['plugins']['jsmenu'])}-->
					<ul class="p_pop h_pop" id="plugin_menu" style="display: none">
					<!--{loop $_G['setting']['plugins']['jsmenu'] $module}-->
						 <!--{if !$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])}-->
						 <li>$module[url]</li>
						 <!--{/if}-->
					<!--{/loop}-->
					</ul>
				<!--{/if}-->
                $_G[setting][menunavs]                				
				<div class="clear"> </div>
			</div>
			<!---End-header---->
		</div>
        <div id="mu" class="cl">
        <!--{if $_G['setting']['subnavs']}-->
            <!--{loop $_G[setting][subnavs] $navid $subnav}-->
                <!--{if $_G['setting']['navsubhover'] || $mnid == $navid}-->
                <ul class="cl {if $mnid == $navid}current{/if}" id="snav_$navid" style="display:{if $mnid != $navid}none{/if}">
                $subnav
                </ul>
                <!--{/if}-->
            <!--{/loop}-->
        <!--{/if}-->
        </div>
        <!--{subtemplate common/subnav}-->
        <div class="w3c_search">
        <!--{subtemplate common/pubsearchform}-->
        </div>
		<!--{hook/global_header}-->
	<!--{/if}-->
	<div id="wp" class="wp">
