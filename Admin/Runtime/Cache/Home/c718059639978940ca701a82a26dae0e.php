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
					<td width="74%" height="38" class="admin_txt">管理员：<b><?php echo ($_SESSION["username"]); ?></b> 您好,感谢登陆使用！</td>
					<td width="22%"><a href="#" target="_self" onClick="logout();"><img src="/Public/admin/images/out.gif" alt="安全退出" width="46" height="20" border="0"></a></td>
					<script type="text/javascript">
					<!--
						function logout(){
							if(confirm("确认退出后台管理?"))
								location.href="/admin.php/Home/admin/loginout";
							return false;
						}
					//-->
					</script>
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
          <li><a href="/admin.php/Home/admin/nav">导航管理</a></li>
          <li><a href="/admin.php/Home/admin/image">幻灯片管理</a></li>
		  <li><a href="/admin.php/Home/admin/logo">LOGO管理</a></li>
		  <li><a href="/admin.php/Home/admin/add">添加疑问</a></li>
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
		  <li><a href="/admin.php/home/intro/addlist">添加阶段</a></li>
          <li><a href="/admin.php/home/class/addlist">班级列表</a></li>
          <li><a href="/admin.php/home/intro/kechenglist">课程列表</a></li>
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
							


							<h1 class="type"><a>yi利一组PV</a></h1>
							<div class="content">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
							<td><img src="/Public/admin/images/menu_topline.gif" width="182" height="5" /></td>
							</tr>
							</table>
							<ul class="MM">
							<li><a href="/admin.php/home/one/lists" >条形图</a></li>
							</ul>
                            </div>
							<h1 class="type"><a>学员感言</a></h1>
							<div class="content">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
							<td><img src="/Public/admin/images/menu_topline.gif" width="182" height="5" /></td>
							</tr>
							</table>
							<ul class="MM">
							<li><a href="/admin.php/home/gy/lists" >感言列表</a></li>
							<li><a href="/admin.php/home/gy/lists" >感言添加</a></li>
							</ul>
                            </div>
							<h1 class="type"><a>学院信息</a></h1>
							<div class="content">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
							<td><img src="/Public/admin/images/menu_topline.gif" width="182" height="5" /></td>
							</tr>
							</table>
							<ul class="MM">
							<li><a href="/admin.php/home/xy/lists" >学院信息列表</a></li>
							<li><a href="/admin.php/home/xy/add" >学院信息添加</a></li>
							</ul>	
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
<title>前台幻灯片列表</title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/admin/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/admin/js/transport.js"></script>
<script type="text/javascript" src="./js/common.js"></script>
</head>
<body>
<h1>
<span class="action-span1">前台幻灯片列表</span><span id="search_id" class="action-span1"></span>
<div style="clear:both"></div>
</h1>
<!-- 新闻类别列表 -->
<div class="list-div">
<table cellspacing='1' cellpadding='3'>
  <tr>
    <th  class="group-title">编号</th>
	<th  class="group-title">幻灯片</th>
	<th  class="group-title">幻灯片名称</th>
	<th  class="group-title">幻灯片介绍</th>
	<th  class="group-title">幻灯片链接</th>
	<th  class="group-title">操作</th>
  </tr>
  <?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr class="table_tr">
	<td width="10%"><?php echo ($vo["img_id"]); ?></td>
    <td width="10%"><img src="<?php echo ($vo["img_path"]); ?>" width=50></td>
    <td width="15%"><?php echo ($vo["img_title"]); ?></td>
    <td width="15%"><?php echo ($vo["img_desc"]); ?></td>
	<td width="30%"><?php echo ($vo["img_link"]); ?></td>
	<td width="20%"><a href="/admin.php/Home/admin/delimg/id/<?php echo ($vo["img_id"]); ?>">删除</a>||<a href="/admin.php/Home/admin/upimg/id/<?php echo ($vo["img_id"]); ?>">编辑</a></td>
  </tr><?php endforeach; endif; ?>
  <tr align="center">
	<td colspan=6>
		<input type="button" value="看哪个幻灯片不爽?去添加一个" onclick="location.href='/admin.php/Home/admin/add_image'">
	</td>
  </tr>
  
</table>
</div>
<br />
<div id="footer">
版权所有 &copy; 八维研修学院软件工程学院1302phpA班，并保留所有权利。</div>
</body>
</html>
			</div>
		</td>
	</tr>
</table>
</body>
</html>