﻿<?php echo '<p>/* HEADER_QMENU Document */</p> <p>/*------------------------------------------------------------------</p><p>*Fiename:               header_qmenu.php</p>         <p>*Description:           fiatdesign header_qmenu</p> <p>*Version:               1.0.0(2014-07-12)YYYY-MM-DD</p> <p>*Website:               http://www.subzerolove.com</p> <p>*Copyright:             http://www.w3ccool.com</p> <p>*Assist:                w3ccool</p> <p>*Author:                SubzeroLove</p> <br>==END:=========================================================<p>W3CCOOL商业模板保护！请到官网上购买正版模板  www.w3ccool.com</p> ';exit ;?>
<div id="w3cmenu_menu" class="p_pop {if !$_G['uid']}blk{/if}" style="display: none;">
	<!--{hook/global_qmenu_top}-->
	<!--{if $_G['uid']}-->
		<ul class="cl nav">
			<!--{loop $_G['setting']['mynavs'] $nav}-->
				<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->
					<li>$nav[code]</li>
				<!--{/if}-->
			<!--{/loop}-->
		</ul>
	<!--{elseif $_G[connectguest]}-->
		<div class="ptm pbw hm">
			{lang connect_fill_profile_to_visit}
		</div>
	<!--{else}-->
		<div class="ptm pbw hm">
			{lang my_nav_login}
		</div>
	<!--{/if}-->
	<!--{if $_G['setting']['showfjump']}--><div id="fjump_menu" class="btda"></div><!--{/if}-->
	<!--{hook/global_qmenu_bottom}-->
</div>