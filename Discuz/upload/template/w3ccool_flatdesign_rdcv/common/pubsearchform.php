<?php echo '<p>/* PUBSEARCHFORM Document */</p> <p>/*------------------------------------------------------------------</p><p>*Fiename:               pubsearchform.php</p>         <p>*Description:           fiatdesign pubsearchform</p> <p>*Version:               1.0.0(2014-07-12)YYYY-MM-DD</p> <p>*Website:               http://www.subzerolove.com</p> <p>*Copyright:             http://www.w3ccool.com</p> <p>*Assist:                w3ccool</p> <p>*Author:                SubzeroLove</p> <br>==END:=========================================================<p>W3CCOOL商业模板保护！请到官网上购买正版模板  www.w3ccool.com</p> ';exit ;?>
<script src="template/w3ccool_flatdesign_rdcv/static/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">//var STYLEID = '4', STATIC_DIR = '/bbs_v4/', STATICURL = 'static/', IMGDIR = 'static/image/common', VERHASH = 'Wyi', charset = 'utf-8', discuz_uid = '0', cookiepre = 'xIka_2132_', cookiedomain = '', cookiepath = '/', showusercard = '0', attackevasive = '0', disallowfloat = '', creditnotice = '', defaultstyle = '', REPORTURL = 'aHR0cDovL2Jicy5mZW5nLmNvbS8=', SITEURL = 'http://bbs.feng.com/', JSPATH = 'static/js/', DYNAMICURL = '';
 jQuery.noConflict().ajaxSetup({ cache: true });
 </script>
<style>
 </style>
<div id="search_box" class="wrap search_box">
	<div class="field_panel curr_owner">
		<div class="type_panel">
			<span class="type"><em class="google">百 度</em><em class="owner">论坛搜索</em></span>
		</div>
		<div class="sch_panel google_sch" style="dispalay:none;">
			<form action="http://www.baidu.com/s" method="get" target="_blank">
				<ul>
					<li class="txt_field">
						<span class="txt"><i class="zoom" style="float: left;"></i>
							<input type="text" name="wd" id="keyword" style="float: left;" placeholder="搜索其实很简单！ (^_^)" x-webkit-grammar="builtin:translate" x-webkit-speech />
							<i class="clear hide" style="float: right;"></i></span>
					</li>
					<li class="btns">
						<button type="submit">
							搜索
						</button>
					</li>
				</ul>
			</form>
		</div>

<!--{if $_G['setting']['search']}-->
		<!--{eval $slist = array();}-->
		<!--{if $_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group'}--><!--{block slist[forumfid]}-->
		<li>
			<a href="javascript:;" rel="curforum" fid="$_G[fid]" >
				{lang search_this_forum}
			</a>
		</li><!--{/block}--><!--{/if}-->
		<!--{if $_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)}--><!--{block slist[portal]}-->
		<li>
			<a href="javascript:;" rel="article">
				{lang article}
			</a>
		</li><!--{/block}--><!--{/if}-->
		<!--{if $_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)}--><!--{block slist[forum]}-->
		<li>
			<a href="javascript:;" rel="forum" class="curtype">
				{lang thread}
			</a>
		</li><!--{/block}--><!--{/if}-->
		<!--{if helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)}--><!--{block slist[blog]}-->
		<li>
			<a href="javascript:;" rel="blog">
				{lang blog}
			</a>
		</li><!--{/block}--><!--{/if}-->
		<!--{if helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)}--><!--{block slist[album]}-->
		<li>
			<a href="javascript:;" rel="album">
				{lang album}
			</a>
		</li><!--{/block}--><!--{/if}-->
		<!--{if $_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)}--><!--{block slist[group]}-->
		<li>
			<a href="javascript:;" rel="group">
				$_G['setting']['navs'][3]['navname']
			</a>
		</li><!--{/block}--><!--{/if}-->
		<!--{block slist[user]}-->
		<li>
			<a href="javascript:;" rel="user">
				{lang users}
			</a>
		</li><!--{/block}-->
		<!--{/if}-->
		<!--{if $_G['setting']['search'] && $slist}-->
		<div class="sch_panel owner_sch">
			<form id="scbar_form" method="{if $_G[fid] && !empty($searchparams[url])}get{else}post{/if}" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="{if $_G[fid] && !empty($searchparams[url])}$searchparams[url]{else}search.php?searchsubmit=yes{/if}" target="_blank">
				<ul>
					<li class="txt_field">
						<span class="txt"><i class="zoom" style="float: left;"></i>
							<input type="text" name="srchtxt" id="scbar_txt" style="width:240px;border:0 none;float: left;" placeholder="搜索其实很简单！ (^_^)" />
							<i class="clear hide" style="float: right;"></i></span>
					</li>
					<li class="sch_type">
						<div class="type_list">
							<span class="current">论坛</span>
							<span data-type="forum">帖子</span>
							<span data-type="user">用户</span>
							<!--<i class="arrow"></i><i class="line"></i>-->
						</div>
					</li>
					<li class="btns">
						<div class="scbar_btn">
							<button type="submit" id="scbar_btn">
								搜索
							</button>
						</div>
					</li>
				</ul>

				<input type="hidden" name="mod" id="scbar_mod" value="search" />
				<input type="hidden" name="formhash" value="{FORMHASH}" />
				<input type="hidden" name="srchtype" value="title" />
				<input type="hidden" name="srhfid" value="$_G[fid]" />
				<input type="hidden" name="srhlocality" value="$_G['basescript']::{CURMODULE}" />
				<!--{if !empty($searchparams[params])}-->
				<!--{loop $searchparams[params] $key $value}-->
				<!--{eval $srchotquery .= '&' . $key . '=' . rawurlencode($value);}-->
				<input type="hidden" name="$key" value="$value" />
				<!--{/loop}-->
				<input type="hidden" name="source" value="discuz" />
				<input type="hidden" name="fId" id="srchFId" value="$_G[fid]" />
				<input type="hidden" name="q" id="cloudsearchquery" value="" />

				<div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
					<div id="st_box" cellpadding="2" cellspacing="0"></div>
				</div>
				<!--{/if}-->
			</form>
		</div>

		<div class="hot_keys" id="scbar_hot_1" style="padding-top:6px;overflow:visible;">
			<!--{if $_G['setting']['srchhotkeywords']}-->
			<span class="label">{lang hot_search}:</span>
			<!--{loop $_G['setting']['srchhotkeywords'] $val}-->
			<!--{if $val=trim($val)}-->
			<!--{eval $valenc=rawurlencode($val);}-->
			<!--{block srchhotkeywords[]}-->
			<!--{if !empty($searchparams[url])}-->
			<a href="$searchparams[url]?q=$valenc&source=hotsearch{$srchotquery}" target="_blank" class="xi2" sc="1">
				$val
			</a>
			<!--{else}-->
			<a href="search.php?mod=forum&srchtxt=$valenc&formhash={FORMHASH}&searchsubmit=true&source=hotsearch" target="_blank" class="xi2" sc="1">
				$val
			</a>
			<!--{/if}-->
			<!--{/block}-->
			<!--{/if}-->
			<!--{/loop}-->
			<!--{echo implode('', $srchhotkeywords);}-->
			<!--{/if}-->
		</div>
		</div>
		<ul id="scbar_type_menu" class="p_pop" style="display: none;">
			<!--{echo implode('', $slist);}-->
		</ul>
		</div>
		<!--{/if}-->
<!-- Container -->
<script type="text/javascript">
	//搜索
	jQuery(function($) {
		var shell = $('#search_box'), showInfo = window.showDialog || alert;
		//切换
		var typePanel = shell.find('.field_panel').eq(0);
		shell.delegate('.type_panel em', 'click', function(e) {
			var currClassName = typePanel[0].className, cName = this.className;
			if (currClassName.indexOf(cName) < 0) {
				typePanel[0].className = 'field_panel curr_' + cName;
				shell.find('.' + cName + '_sch input[type=text]').eq(0).focus();
				setcookie('use_google_sch', cName === 'google' ? 1 : 0, cName === 'google' ? 86400 * 30 : -1);
			}
		});
		//Clear & submit
		shell.delegate('form', 'submit', function(e) {
			var field = $(this).find('input[type=text]');
			if (field.val() == '') {
				showInfo('请输入搜索关键字！');
				return false;
			}
		}).delegate('input[type=text]', 'keyup', function() {
			var self = $(this), clearBtn = self.data('clearBtn');
			if (!clearBtn) {
				clearBtn = self.next('.clear');
				self.data('clearBtn', clearBtn);
				clearBtn.data('target_field', self);
			}
			clearBtn[this.value != '' ? 'show' : 'hide']();
		}).delegate('i.clear', 'click', function() {
			var field = $(this).data('target_field');
			if (field) {
				this.style.display = '';
				field.val('').focus();
			}
		});
		//类别
		shell.delegate('.type_list', 'mouseenter', function() {
			$(this).addClass('active');
		}).delegate('.type_list', 'mouseleave', function() {
			$(this).removeClass('active');
		}).delegate('.type_list span', 'click', function() {
			var panel = $(this.parentNode).removeClass('active');

			if (this.className.indexOf('current') < 0) {
				panel.find('span.current').html(this.innerHTML);

				var field = $('#scbar_mod').val(this.getAttribute('data-type')), form = field[0] && field[0].form;
				form && $('input[type=text]', form).focus();
			}
		});
	}); 
</script>