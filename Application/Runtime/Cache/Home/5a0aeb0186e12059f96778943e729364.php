<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="php培训,php教程,php视频,php下载,php视频教程" />
<meta name="description" content="php培训的龙头老大,口碑最好的php培训机构,进来看看同学们的呐喊，就会知道我们是个怎么样的学校,问天下php培训机构谁与争锋?php培训课程内容包含目前最流行的zendframework、thinkphp框架、ECShop、dedecms等产品的二次开发" />
<title>传智播客PHP学院官网-北京PHP培训_PHP网站开发培训_PHP程序员培训学校</title>
<link href="/Public/css/css.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/news.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/query.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/mod.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/bdsstyle.css" type="text/css" rel="stylesheet" />

<link href="/Public/css/nav/nav_main.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/imageswitch.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/webim.css" type="text/css" rel="stylesheet" />
<link type="image/x-icon" rel="shortcut icon" href="favicon.ico" /> 
<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/js/imageschange.js"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>
</head>
<body>
<div id="header">
	<!-- 页面顶部 -->
<div class="top1">
	<p style="background:url(/Public/images/hot.png) 107px 10px no-repeat; padding-right:35px;" class="fl"><span class="blue">专业的IT培训机构！</span></p>
	<p class="fr"><a target="_blank" href="http://www.itcast.cn/channel/job.shtml">就业宣言</a><a target="_blank" href="http://www.itcast.cn/channel/flow.shtml">报名流程</a><a target="_blank" href="http://open.itcast.cn">免费公开课</a><a target="_blank" href="http://dvd.itcast.cn">免费学习光盘</a><a target="_blank" href="http://www.itcast.cn/channel/book.shtml">原创教材</a><a target="_blank" href="http://bbs.itcast.cn/zine.php">传智特刊</a><a target="_blank" href="http://bbs.itcast.cn">技术论坛</a></p>
</div>

	<div class="clear"></div>
	<div class="top2">
		<h1 class="fl"><a href="/index.php"><img border="0" class="png" alt="传智播客php培训学院" src="/Public/images/logo.jpg"></a></h1>
		<div class="fl toubu">
		<div class="toubu-font1">PHP学院</div>
			 <!-- 校区 -->
<p><a target="_blank" href="http://www.itcast.cn">北京校区</a></p>
<p><a href="http://sh.itcast.cn" target="_blank">上海校区</a></p>
<p><a target="_blank" href="http://gz.itcast.cn">广州校区</a></p><br>
<p><a href="http://wh.itcast.cn" target="_blank">武汉校区</a></p>
<p><a target="_blank" href="http://cd.itcast.cn">成都校区</a></p>
<p><a target="_blank" href="http://zz.itcast.cn">郑州校区</a></p><br>
<p><a target="_blank" href="http://xa.itcast.cn">西安校区</a></p>
<!-- 校区 --> 
		</div>
		<p class="fr"><img class="png" alt="改变中国教育，我们正在行动..." src="/Public/images/topword.gif"></p>
	</div>
	<div class="clear"></div>
		<ul id="nav">
	<li><a id="nav_main" href="/index.php">首 页</a></li>
	<li class="widt"><a id="nav_course" href="/index.php/Home/project/index">PHP培训课程</a> </li> 
	<li class="widt"><a id="nav_videodl" href="/index.php/Home/video/index">PHP视频下载</a></li>
    <li id="nav_teacher"><a href="/index.php/Home/teacher/index">师资力量</a> </li>
    <li id="nav_job"><a href="/index.php/Home/message/index">就业信息</a> </li>
	<li id="nav_question"><a href="/index.php/Home/problem/index">常见问题</a></li>
	<li><a target="_blank" href="/index.php/Home/video/index" target="_blank">技术论坛 </a></li>
</ul>
	</div>

<div id="box">
  <div style="width:960px; height:149px; margin:0 auto;"><img src="/Public/images/teacherpic.jpg"  /></div>
  <div id="left" class="fl"  style="margin-top:3px;">
    <div><img src="/Public/images/lefttop.gif"/></div>
    <div class="left_content2">
      <h4 class="ganyan"><span class="STYLE3">师资</span>介绍</h4>
      <div class="teacher_z" style="height: auto; overflow: hidden">
<!-- 第一位老师 -->
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="teacher">
<p class="fl"><img alt="" src="<?php echo ($vo["img"]); ?>" style="width: 155px; height: 189px;" /></p>
<dl class="fr">
	<dt>
		<span class="blue"><strong><?php echo ($vo["t_name"]); ?></strong></span><strong>--<span style="color:#0000ff;"><a href="/index.php/home/teacher/video/id/<?php echo ($vo["id"]); ?>" target="_blank"><span style="color: rgb(0, 0, 255);">在线试听精彩课程</span></a></span></strong></dt>
	<dt>
		<strong>职 务：<?php echo ($vo["position"]); ?></strong></dt>
	<dd><?php echo ($vo["t_desc"]); ?></dd>
</dl>
</div><?php endforeach; endif; ?>

<div></div>
</div>
<br />

    </div>
    <div><img src="/Public/images/leftbottom.gif"/></div>
  </div>
  <div id="right" class="fl">
    <h4 class="righttitle1 zhaopin"><span class="blue">讲师</span>招聘</h4>
    <div class="rightkuang1">
      <p class="cent"><img src="/Public/images/xuanze.jpg" width="256" height="66" /></p>
      <div class="clear"> </div>
      <p class="miaoshu"> 中国的软件教育已经坑害了不少软件工程师苗子，传智播客自成立之日起就立志于改变中国的软件教育，目前已经出版IT教程书籍十多本，教学视频几十套，发表各类技术文章几百篇，已经开始对中国的软件教育有所影响。随着传智播客的事业被越来越多的人认知，加盟到传智播客愿意为此事业奋斗终生的技术牛人也越来越多。尽管加盟到传智播客的技术牛人很多，但要从政策上改变中国的软件教育，我们的力量还很小，小到可以说是微不足道。所以我们需要各路英雄豪杰加盟传智播客，为改变中国的软件教育而奋斗不息。</p>
      <p class="cent"><a href="/news/9838ccfe/74aa/4532/915e/f905284de34e.shtml" target="_blank"><img src="/Public/images/liulan.jpg" width="142" height="23"/></a></p>
    </div>
    <div class="rightbottom"><img src="/Public/images/bottom1.gif"/></div>
    <h4 class="righttitle1"><span class="fl">我们出版的书籍</span><span class="fr"><a href="/channel/book.shtml">+MORE</a></span></h4>
    <div class="rightkuang chuban" style="height:auto; overflow:hidden;">
       <dl>
        <dt><a href="http://product.dangdang.com/product.aspx?product_id=8758723" target="_blank"><img src="/Public/images/book04.jpg"/></a></dt>
        <dd><span class="blue"><strong><a href="http://product.dangdang.com/product.aspx?product_id=8758723" target="_blank">《Java就业培训教程》</a></strong></span></dd>
        <dd>作 者：<span class="STYLE4">张孝祥</span> </dd>
        <dd>定价：<span class="STYLE6"><strong>￥39.00元</strong> </span></dd>
        <dd>页数：<span class="STYLE4">394</span> </dd>
</dl>
<dl>
        <dt><a href="http://product.dangdang.com/product.aspx?product_id=20280496" target="_blank"><img src="/Public/images/book01.jpg"/></a></dt>
        <dd><span class="blue"><strong><a href="http://product.dangdang.com/product.aspx?product_id=20280496" target="_blank">《EJB3.0入门经典》</a></strong></span></dd>
        <dd>作 者：<span class="STYLE4">黎活明</span> </dd>
        <dd>定价：<span class="STYLE6"><strong>￥59.80 元</strong> </span></dd>
        <dd>页数：<span class="STYLE4">479</span> </dd>
</dl> 
    </div>
    <div class="rightbottom"><img src="/Public/images/rightbottom.jpg"/></div>
    <h4 class="righttitle1 lianxi"><span class="fl"><span class="blue">课程</span>咨询</span></h4>
    <div class="rightkuang">
      <dl>
	<dt style="padding-bottom:20px;">
		北京传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="北京传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqtwo">
	<dt style="padding-bottom:20px;">
		广州传智播客</dt>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA2ODg2OF8yMDczMV84MDAwNjg4NjhfMl8" target="_blank"><img alt="广州传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style=" width:120px;height:40px;float:left;">
		<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA2ODg2OF8yMDczMV84MDAwNjg4NjhfMl8" target="_blank"><img alt="广州传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqthree">
	<dt style="padding-bottom:20px;">
		上海传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/djUD" target="_blank"><img alt="上海传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/djUD" target="_blank"><img alt="上海传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqfour">
	<dt style="padding-bottom:20px;">
		武汉传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/shPF" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/shPF" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqfive">
	<dt style="padding-bottom:20px;">
		郑州传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/0LVE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/0LVE" target="_blank"><img alt="武汉传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
<dl class="qqsix">
	<dt style="padding-bottom:20px;">
		西安传智播客</dt>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqmfst.jpg" width="99" /></a></dd>
	<dd style="width:120px;height:40px;float:left;">
		<a href="http://cnrdn.com/iP66" target="_blank"><img alt="西安传智播客QQ在线咨询" border="0" height="27" src="http://www.itcast.cn/images/qqkczx.jpg" width="99" /></a></dd>
</dl>
      <div class="clear"></div>
    </div>
    <div class="rightbottom"><img src="/Public/images/rightbottom.jpg"/></div>
  </div>
</div>


<div id="footer">
  <div class="footer_info">
    <p class="fl mar"><!--<img src="/images/footlogo.jpg" />--></p>
    <p><a href="http://www.itcast.cn/channel/introduction.shtml" target="_blank" style="padding-left:0;">传智简介</a>|<a href="http://weibo.com/itcast" target="_blank">官方微博</a>|<a href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&fid=175&filter=typeid&typeid=180" target="_blank">传智快报</a>|<a href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&fid=184&filter=typeid&typeid=217" target="_blank">校区活动</a>|<a href="http://www.itcast.cn/channel/campus.shtml" target="_blank">校园生活</a>|<a href="http://www.itcast.cn/channel/personnel.shtml" target="_blank">人才服务</a>|<a href="http://www.itcast.cn/channel/flow.shtml" target="_blank">汇款账号</a>|<a href="http://www.itcast.cn/channel/zhaopin.shtml" target="_blank">招贤纳士</a>|<a href="http://www.itcast.cn/channel/contact.shtml" target="_blank">联系我们</a></p>
    <p>传智播客-专业java培训、.net培训、php培训、iOS培训、C++培训、网页设计、平面设计、网络营销培训机构</p>
    <p>版权所有 2006 - 2014 北京传智播客教育科技有限公司</p>
    <p>地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096</p>
    <p>电话：010-82935150/60/70 传真：010-82935100 邮箱: zhanghj+itcast.cn</p>
    <p><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备08001421号</a><a href="http://www.bjgaj.gov.cn/web/" target="_blank">京公网安备110108007702</a></p>
	<p style="padding-top:10px"><a style="overflow:hidden; margin-right:6px; padding:0;" href="http://webscan.360.cn/index/checkwebsite/url/www.itcast.cn" target="_blank"><img width="124" height="47" src="http://www.itcast.cn/images/360anquan.png"></a><a style="overflow:hidden; margin-right:6px; padding:0;" href="http://t.knet.cn/index_new.jsp" target="_blank"><img width="124" height="47" src="http://www.itcast.cn/images/cx.png"></a><a target="_blank" href="http://www.bj.cyberpolice.cn/index.do" style="padding:0;"><img width="124" height="47" src="http://www.itcast.cn/images/jc.png"></a></p>
  </div>
</div>
<!-- 页面底部 -->
<!-- 营销QQ统计 -->
<!-- WPA Button Begin -->
<script type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzgwMDA2ODg2OF8xNTA3NV84MDAwNjg4Njhf"></script>
<!-- WPA Button END -->
<!--[if lte IE 6]>
<script src="/kefu/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('titZx');
    </script>
<![endif]-->
<LINK rel=stylesheet type=text/css href="/kefu/css/common.css">
<!--[if lte IE 6]>
<link type="text/css" rel="stylesheet" href="/kefu/css/ie.css" mce_href="/kefu/css/ie.css" />
<![endif]-->
<SCRIPT type=text/javascript src="/Public/js/jquery.js"></SCRIPT>
<SCRIPT type=text/javascript src="/Public/js/kefu.js"></SCRIPT>
<SCRIPT type=text/javascript>kfguin="800068868";ws="www.itcast.cn"; companyname=""; welcomeword=""; type="1";</SCRIPT>
<SCRIPT src="/Public/js/kf.js" type=text/javascript></SCRIPT>
<link href="/Public/css/init.css" mce_href="/Public/css/init.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/kefu.css" mce_href="/Public/css/kefu.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]>
<link type="text/css" rel="stylesheet" href="/kefu2/ie.css" mce_href="/kefu2/ie.css" />
<![endif]-->
<div class="fixed">
	<div class="f_left"></div>
	<div class="f_right">
		<div class="fr_c1"></div>
		<div class="fr_c2">
			<ul>
				<li class="fr_c2_li1">QQ在线客服</li>
				<li class="fr_c2_li2">
					<div><script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzgwMDA2ODg2OF8yNjY4M184MDAwNjg4Njhf"></script></div>
				</li>
				<li class="fr_c2_li3" style="padding:6px 0 0 12px; height:30px; width:90px; border-bottom:none;">
					<!-- WPA Button Begin -->
					<a href="http://cnrdn.com/iP66" target="_blank"><img src="/Public/images/wpa_preview_a02.png"/></a>
					<!-- WPA Button End -->
				</li>
			</ul>
		</div>
		<div class="fr_c3">
			<a href="http://cnrdn.com/iP66" target="_blank"><img src="/Public/images/right_float_web.png" width="122" height="50" /></a>
		</div>
		<div class="fr_c4">
			<ul>
				<li class="fr_c4_li1">电话咨询</li>
				<li class="fr_c4_li2"><div id="nobold" style="font-family:Arial;">010-82935150</div></li>
			</ul>
		</div>
		<div class="fr_c6">
			<ul>
				<li><a style="display: block; text-indent: 22px; margin: 0px auto; width: 84px; background: url(&quot;http://www.itcast.cn/images/navicon.gif&quot;) no-repeat scroll 0px -20px transparent;" href="http://www.itcast.cn/forms/index.shtml" target="_blank">预约报名<div></div></a></li>
				<li style="border-bottom:none;"><a style="display: block; text-indent: 22px; margin: 0px auto; width: 84px; background: url(&quot;http://www.itcast.cn/images/navicon.gif&quot;) no-repeat scroll 0px -78px transparent;" href="http://bbs.itcast.cn/" target="_blank">技术交流<div></div></a></li>
			</ul>
		</div>
		<div class="fr_c7"></div>
	</div>
</div>
<script>
	$(document).ready(function(e) {
		var t=true;
		$('.f_left').click(function(){
			if(t){
				$('.fixed').animate({right:'-131px'},300);
				$(this).css('background-position','-30px -396px');
				t= !t;
			} else{
				$('.fixed').animate({right:'0px'},300);
				$(this).css('background-position','0px -396px');
				t= !t;
			}
		});
	});
</script>


<div id="webim">
<dl class="dlstyle">
	<dt class="dtstyle">
		<strong id="webim_title">&nbsp;</strong><span id="webimclosebutton">关闭</span></dt>
</dl>
<dl>
	<dd>
		<a href="/Public/images/104914z8lary1qv9vvv8fz.jpg" id="webim_link" target="_blank"><img id="webim_img" src="" style="width: 280px; height: 188px" /></a></dd>
</dl>
</div>
<script type="text/javascript">
  var arr = new Array(); 

       arr[0] = {title:"yi利一组：有实力就是任性",link:"/index.php",img:"/Public/images/104914z8lary1qv9vvv8fz.jpg"};

  var randIndex = Math.floor(Math.random()*arr.length);
  var obj = arr[randIndex];
  document.getElementById("webim_title").innerHTML = obj.title;
  document.getElementById("webim_link").href = obj.link;
  document.getElementById("webim_img").src = obj.img;
</script><script type="text/javascript" src="http://www.itcast.cn/js/webim.js"></script>
<script type="text/javascript" src="/js/baidushare.js"></script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F616f7dbc9d62017d85a273460d618961' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src="http://s84.cnzz.com/stat.php?id=4617784&web_id=4617784&show=pic" language="JavaScript"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-51288244-1', 'itcast.cn');ga('send', 'pageview');</script>
<!--<SCRIPT id='qclient_js' type=text/javascript src='http://www.81c.cn:8888/tj.js?4b6c2b6ca9da278fba7bd49127ae3b97'></SCRIPT>-->
</body>
</html>