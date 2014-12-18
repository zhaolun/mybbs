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
				<head>
<title>新闻类别列表</title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/admin/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/admin/js/transport.js"></script>
<script type="text/javascript" src="/Public/admin/js/common.js"></script>
</head>
<body>
<h1>
<span class="action-span1">公司信息</span><span id="search_id" class="action-span1"></span>
<div style="clear:both"></div>
</h1>
<!-- 新闻类别搜索 -->
<form>
  公司名称：
  <input type="text" name="">
  <input type="submit" value="查询">
</form>
<a href="/admin.php/home/message/com_addform">添加公司</a>
<br>
<!-- 新闻类别列表 -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr align="center">
         <th>公司编号</th>
         <th>公司名称</th>
         <th>创办时间</th>
         <th>公司网站</th>
         <th>招收人数</th>
         <th>操作</th>
      </tr>
      <?php foreach ($list as $key => $val) { ?>
          <tr align="center">
             <td><?php echo ($val["com_id"]); ?></td>
             <td><?php echo ($val["com_name"]); ?></td>
             <td><?php echo ($val["r_time"]); ?></td>
             <td><?php echo ($val["r_url"]); ?></td>
             <td><?php echo ($val["r_num"]); ?></td>

          </tr>
      <?php } ?>
  
  
</table>
</div>
<br />
<div id="footer">
版权所有 &copy; 八维研修学院软件工程学院1308phpA班，并保留所有权利。</div>
</body>
</html>
			</div>
		</td>
	</tr>
</table>
</body>
</html>