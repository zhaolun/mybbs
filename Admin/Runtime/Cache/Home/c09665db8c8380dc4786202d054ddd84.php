<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>MyBBS后台管理</title>
</head>
<script src="/Public/admin/js/prototype.lite.js" type="text/javascript"></script>
<script src="/Public/admin/js/moo.fx.js" type="text/javascript"></script>
<script src="/Public/admin/js/moo.fx.pack.js" type="text/javascript"></script>
<link href="/Public/admin/css/skin.css" rel="stylesheet" type="text/css">
<link href="/Public/admin/css/main.css" rel="stylesheet" type="text/css">

<style>
body {
	font:12px Arial, Helvetica, sans-serif;
	color: #000;
	background-color: #EEF2FB;
	margin: 0px;
}
#container {
	width: 182px;
}
H1 {
	font-size: 12px;
	margin: 0px;
	width: 182px;
	cursor: pointer;
	height: 30px;
	line-height: 20px;	
}
H1 a {
	display: block;
	width: 182px;
	color: #000;
	height: 30px;
	text-decoration: none;
	moz-outline-style: none;
	background-image: url("/Public/admin/images/menu_bgs.gif");
	background-repeat: no-repeat;
	line-height: 30px;
	text-align: center;
	margin: 0px;
	padding: 0px;
}
.content{
	width: 182px;
	height: 26px;
	
}
.MM ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	display: block;
}
.MM li {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	list-style-type: none;
	display: block;
	text-decoration: none;
	height: 26px;
	width: 182px;
	padding-left: 0px;
}
.MM {
	width: 182px;
	margin: 0px;
	padding: 0px;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
}
.MM a:link {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url("/Public/admin/images/menu_bg1.gif");
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:visited {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url("/Public/admin/images/menu_bg1.gif");
	background-repeat: no-repeat;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
.MM a:active {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url("/Public/admin/images/menu_bg1.gif");
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:hover {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	font-weight: bold;
	color: #006600;
	background-image: url("/Public/admin/images/menu_bg2.gif");
	background-repeat: no-repeat;
	text-align: center;
	display: block;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
</style>
<body>
<table width="100%" height="64" border="0" cellpadding="0" cellspacing="0" class="admin_topbg">
	<tr style="background:url('/Public/admin/images/top-right.gif')">
		<td width="61%" height="64">
			<img src="/Public/admin/images/logo.gif" width="262" height="64">
		</td>
		<td width="39%" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="74%" height="38" class="admin_txt">管理员：<b><%=session("admin_name")%></b> 您好,感谢登陆使用！</td>
					<td width="22%"><a href="#" target="_self" onClick="logout();"><img src="/Public/admin/images/out.gif" alt="安全退出" width="46" height="20" border="0"></a></td>
					<td width="4%">&nbsp;</td>
				</tr>
				<tr>
					<td height="19" colspan="3">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td width="10%" valign="top">
			<table width="100%" height="auto" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB" style="margin-top:0px;">
				<tr>
					<td width="182" valign="top">
						<div id="container">
							<h1 class="type"><a>首页信息</a></h1>
							<div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="/Public/admin/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="http://www.865171.cn">导航管理</a></li>
          <li><a href="http://www.865171.cn">幻灯片管理</a></li>
        </ul>
      </div>
      
							<h1 class="type"><a>培训课程</a></h1>
							<div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="/Public/admin/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="/admin.php/home/class/add">添加班级</a></li>
          <li><a href="/admin.php/home/intro/add">添加课程</a></li>
          <li><a href="/admin.php/home/class/addlist">班级列表</a></li>
          <li><a href="/admin.php/home/intro/addlist">课程列表</a></li>
        </ul>
      </div>
							<h1 class="type"><a>就业信息</a></h1>
								<div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="/Public/admin/images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="/admin.php/home/message/company" >公司管理</a></li>
          <li><a href="/admin.php/home/message/school" >毕业院校</a></li>
          <li><a href="/admin.php/home/message/student" >学生信息</a></li>
        </ul>
      </div>
							<h1 class="type"><a>师资力量</a></h1>
							<div class="content">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
							<td><img src="/Public/admin/images/menu_topline.gif" width="182" height="5" /></td>
							</tr>
							</table>
							<ul class="MM">
							<li><a href="/admin.php/home/teacher/add" >添加讲师</a></li>
							<li><a href="/admin.php/home/teacher/lists" >讲师列表</a></li>
							<li><a href="/admin.php/home/position/add" >职位添加</a></li>
							<li><a href="/admin.php/home/position/lists" >职位列表</a></li>
							</ul>
							</div>
							<h1 class="type"><a>常见问题</a></h1>
							<div class="content">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
							<td><img src="/Public/admin/images/menu_topline.gif" width="182" height="5" /></td>
							</tr>
							</table>
							<ul class="MM">
							<li><a href="/admin.php/home/problem/lists" >问题管理</a></li>
							<li><a href="/admin.php/home/problem/add" >添加问题</a></li>
							</ul>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</td>
		<script type="text/javascript">
			var contents = document.getElementsByClassName('content');
			var toggles = document.getElementsByClassName('type');
			var myAccordion = new fx.Accordion(toggles, contents, {opacity: true, duration:400});
			myAccordion.showThisHideOpen(contents[0]);
		</script>
		<td width="87%" valign="top">
			<div style="margin:10px;padding:10px;">
				<link href="/Public/admin/css/skin.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="middle" background="/Public/admin/images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      
      <tr>
        <td colspan="2" valign="top"><span class="left_bt">感谢您使用 商家信息网 网站管理系统程序</span><br>
              <br>
            <span class="left_txt">&nbsp;<img src="/Public/admin/images/ts.gif" width="16" height="16"> 提示：<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您现在使用的是www.865171.cn开发的一套用于构建商务信息类门户型网站的专业系统！如果您有任何疑问请点左下解的</span><span class="left_ts">在线客服</span><span class="left_txt">进行咨询！<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;七大栏目完美整合，一站通使用方式，功能强大，操作简单，后台操作易如反掌，只需会打字，会上网，就会管理网站！<br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;此程序是您建立地区级商家信息门户的首选方案！　 <br>
</span></td>
        <td width="7%">&nbsp;</td>
        <td width="40%" valign="top"><table width="100%" height="144" border="0" cellpadding="0" cellspacing="0" class="line_table">
          <tr>
            <td width="7%" height="27" background="/Public/admin/images/news-title-bg.gif"><img src="/Public/admin/images/news-title-bg.gif" width="2" height="27"></td>
            <td width="93%" background="/Public/admin/images/news-title-bg.gif" class="left_bt2">最新动态</td>
          </tr>
          <tr>
            <td height="102" valign="top">&nbsp;</td>
            <td height="102" valign="top"></td>
          </tr>
          <tr>
            <td height="5" colspan="2">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" valign="top">
              <!--HTML部分-->
              <TABLE width=72% border=0 cellPadding=0 cellSpacing=0 id=secTable>
                <TBODY>
                  <TR align=middle height=20>
                    <TD align="center" class=sec2 onclick=secBoard(0)>验证信息</TD>
                    <TD align="center" class=sec1 onclick=secBoard(1)>统计信息</TD>
                    <TD align="center" class=sec1 onclick=secBoard(2)>系统参数</TD>
                    <TD align="center" class=sec1 onclick=secBoard(3)>版权说明</TD>
                  </TR>
                </TBODY>
              </TABLE>
          <TABLE class=main_tab id=mainTable cellSpacing=0
cellPadding=0 width=100% border=0>
                <!--关于TBODY标记-->
                <TBODY style="DISPLAY: block">
                  <TR>
                    <TD vAlign=top align=middle><TABLE width=98% height="133" border=0 align="center" cellPadding=0 cellSpacing=0>
                        <TBODY>
                          <TR>
                            <TD height="5" colspan="3"></TD>
                          </TR>
                          <TR>
                            <TD width="4%" height="28" background="/Public/admin/images/news-title-bg.gif"></TD>
                            <TD height="25" colspan="2" background="/Public/admin/images/news-title-bg.gif" class="left_txt">亲爱的管理员： <font color="#FFFFFF" class="left_ts"><b></b></TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD width="42%" height="25" bgcolor="#FAFBFC"><span class="left_txt">您有未验证分类信息： </span>
                               
                                <span class="left_ts"> </span></TD>
                            <TD width="54%" height="25" bgcolor="#FAFBFC"><span class="left_txt">您有未验证广告张贴： </span>
                               
                                <span class="left_ts"> </span></TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">您有未验证商家展示： </span>
                               
                                <span class="left_ts"> </span></TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">您有未验证网上商城： </span>
                               
                                <span class="left_ts"> </span></TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">您有未验证网上名片： </span>
                                <span class="left_ts"> </span></TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">您有未验证市场联盟： </span>
                               
                                <span class="left_ts"> </span></TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">您有未验证市场资讯： </span>
                               
                                <span class="left_ts"> </span></TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">您有未验证商家商品： </span>
                                <span class="left_ts"> </span></TD>
                          </TR>
                          <TR>
                            <TD height="5" colspan="3"></TD>
                          </TR>
                        </TBODY>
                    </TABLE></TD>
                  </TR>
                </TBODY>
                <!--关于cells集合-->
                <TBODY style="DISPLAY: none">
                  <TR>
                    <TD vAlign=top align=middle><TABLE width=98% height="133" border=0 align="center" cellPadding=0 cellSpacing=0>
                        <TBODY>
                          <TR>
                            <TD height="5" colspan="3"></TD>
                          </TR>
                          <TR>
                            <TD width="4%" height="28" background="/Public/admin/images/news-title-bg.gif"></TD>
                            <TD colspan="2" background="/Public/admin/images/news-title-bg.gif" class="left_txt">现有会员：名&nbsp;&nbsp; 其中：                                名&nbsp;&nbsp;&nbsp;&nbsp;名&nbsp;&nbsp;&nbsp;&nbsp;名</TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD width="42%" height="25" bgcolor="#FAFBFC"><span class="left_txt">本站现有分类信息： </span><span class="left_txt">条</span></TD>
                            <TD width="54%" bgcolor="#FAFBFC"><span class="left_txt">本站现有广告张贴： </span><span class="left_txt">条</span></TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">本站现有商家展示： </span><span class="left_txt">个</span></TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">本站现有网上商城： </span><span class="left_txt">个</span></TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">本站现有网上名片： </span><span class="left_txt">个</span></TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">本站现有市场联盟： </span><span class="left_txt">个</span></TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">本站现有市场资讯： </span><span class="left_txt">条</span></TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">本站现有商家商品： </span><span class="left_txt">个</span></TD>
                          </TR>
                          <TR>
                            <TD height="5" colspan="3"></TD>
                          </TR>
                        </TBODY>
                    </TABLE></TD>
                  </TR>
                </TBODY>
                <!--关于tBodies集合-->
                <TBODY style="DISPLAY: none">
                  <TR>
                    <TD vAlign=top align=middle><TABLE width=98% border=0 align="center" cellPadding=0 cellSpacing=0>
                        <TBODY>
                          <TR>
                            <TD colspan="3"></TD>
                          </TR>
                          <TR>
                            <TD height="5" colspan="3"></TD>
                          </TR>
                          <TR>
                            <TD width="4%" height="25" background="/Public/admin/images/news-title-bg.gif"></TD>
                            <TD height="25" colspan="2" background="/Public/admin/images/news-title-bg.gif" class="left_txt"><span class="TableRow2">服务器IP:</span>系统版本：</TD>
                          </TR>
                          <TR>
                            <TD height="25" bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD width="42%" height="25" bgcolor="#FAFBFC"><span class="left_txt">服务器类型：</span></TD>
                            <TD width="54%" height="25" bgcolor="#FAFBFC"><span class="left_txt">脚本解释引擎：</span></TD>
                          </TR>
                          <TR>
                            <TD height="25" bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD height="25" colspan="2" bgcolor="#FAFBFC"><span class="left_txt">站点物理路径：</span></TD>
                          </TR>
                          <TR>
                            <TD height="25" bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">FSO文本读写：</span><span class="TableRow2"><font color="#FF0066"><b><img src="/Public/admin/images/X.gif" width="12" height="13"></b></font><img src="/Public/admin/images/g.gif" width="12" height="12"></span></TD>
                            <TD height="25" bgcolor="#FAFBFC"><span class="left_txt">数据库使用：</span><span class="left_ts"><img src="/Public/admin/images/X.gif" width="12" height="13"><b style="color:blue">
                              
                            MS SQL
                            
                              ACCESS
                              
                            </b></span></TD>
                          </TR>
                         
                          <TR>
                            <TD height="5" colspan="3"></TD>
                          </TR>
                        </TBODY>
                    </TABLE></TD>
                  </TR>
                </TBODY>
                <!--关于display属性-->
                <TBODY style="DISPLAY: none">
                  <TR>
                    <TD vAlign=top align=middle><TABLE width=98% border=0 align="center" cellPadding=0 cellSpacing=0>
                        <TBODY>
                          <TR>
                            <TD colspan="3"></TD>
                          </TR>
                          <TR>
                            <TD height="5" colspan="3"></TD>
                          </TR>
                          <TR>
                            <TD width="4%" background="/Public/admin/images/news-title-bg.gif"></TD>
                            <TD width="91%" background="/Public/admin/images/news-title-bg.gif" class="left_ts">《》程序说明：</TD>
                            <TD width="5%" background="/Public/admin/images/news-title-bg.gif" class="left_txt">&nbsp;</TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD bgcolor="#FAFBFC" class="left_txt"><span class="left_ts">1、</span>本程序由www.865171.cn全新改造(QQ:215288671) </TD>
                            <TD bgcolor="#FAFBFC" class="left_txt">&nbsp;</TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD bgcolor="#FAFBFC" class="left_txt"><span class="left_ts">2、</span>本程序仅提供使用，任何违反互联网规定的行为，自行负责！</TD>
                            <TD bgcolor="#FAFBFC" class="left_txt">&nbsp;</TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD bgcolor="#FAFBFC" class="left_txt"><span class="left_ts">3、</span> 支持作者的劳动，请保留版权。</TD>
                            <TD bgcolor="#FAFBFC" class="left_txt">&nbsp;</TD>
                          </TR>
                          <TR>
                            <TD bgcolor="#FAFBFC">&nbsp;</TD>
                            <TD bgcolor="#FAFBFC" class="left_txt"><span class="left_ts">4、</span>程序使用，技术支持请联系www.865171.cn。</TD>
                            <TD bgcolor="#FAFBFC" class="left_txt">&nbsp;</TD>
                          </TR>
                          <TR>
                            <TD height="5" colspan="3"></TD>
                          </TR>
                        </TBODY>
                    </TABLE></TD>
                  </TR>
                </TBODY>
            </TABLE></td>
        <td>&nbsp;</td>
        <td valign="top"><table width="100%" height="144" border="0" cellpadding="0" cellspacing="0" class="line_table">
          <tr>
            <td width="7%" height="27" background="/Public/admin/images/news-title-bg.gif"><img src="/Public/admin/images/news-title-bg.gif" width="2" height="27"></td>
            <td width="93%" background="/Public/admin/images/news-title-bg.gif" class="left_bt2">程序说明</td>
          </tr>
          <tr>
            <td height="102" valign="top">&nbsp;</td>
            <td height="102" valign="top"><label></label>
              <label>
              <textarea name="textarea" cols="60" rows="8" class="left_txt">一、专业的地区级商家门户建站首选方案！
二、全站一号通，一次注册，终身使用，一个帐号，全站通用！
三、分类信息、商家展示（百业联盟）、网上商城、网上名片（网上黄页）、广告张贴、市场联盟、市场资讯七大栏目完美整合。
四、界面设计精美，后台功能强大。傻瓜式后台操作，无需专业的网站制作知识，只要会打字，就会管理维护网站。</textarea>
              </label></td>
          </tr>
          <tr>
            <td height="5" colspan="2">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="40" colspan="4"><table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
          <tr>
            <td></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="51%" class="left_txt"><img src="/Public/admin/images/icon-mail2.gif" width="16" height="11"> 客户服务邮箱：1725440647@qq.com<br>
              <img src="/Public/admin/images/icon-phone.gif" width="17" height="14"> 官方网站：http://www.17tian.com</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td background="/Public/admin/images/mail_rightbg.gif">&nbsp;</td>
  </tr>

</table>
</body>
			</div>
		</td>
	</tr>
</table>
</body>
</html>