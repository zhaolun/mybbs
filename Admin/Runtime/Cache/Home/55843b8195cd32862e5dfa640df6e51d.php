<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>登陆页面</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK 
href="/Public/admin/css/login1.css" type="text/css" rel=stylesheet>
<script type="text/javascript" src="/Public/js/jquery.js"></script>
<STYLE type="text/css">

</STYLE>
<META content="MSHTML 6.00.2900.5848" name=GENERATOR>
</HEAD>
<script type="text/javascript">
<!--
	function sub(){
		var status=true;
		$("input").each(function(i){
			if($(this).val()=="")
				status=false;
		})
		if(status)
			return true;
		return false;
	}
//-->
</script>
<BODY>
<DIV id=div1>
  <TABLE id=login height="100%" cellSpacing=0 cellPadding=0 width=800 
align=center>
    <TBODY>
      <TR id=main>
        <TD>
		<form method="post" action="/admin.php/Home/index/login" onsubmit="return sub()">	
          <TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%">
            <TBODY>
              <TR>
                <TD colSpan=4>&nbsp;</TD>
              </TR>
              <TR height=130>
                <TD width=380>&nbsp;</TD>
                <TD>&nbsp;</TD>
                <TD>&nbsp;</TD>
                <TD>&nbsp;</TD>
              </TR>
              <TR height=40>
                <TD rowSpan=4>&nbsp;</TD>
                <TD>用户名：</TD>
                <TD>
                  <INPUT class="textbox" id= type="text" name="username">
                </TD>
                <TD width=120>&nbsp;</TD>
              </TR>
              <TR height=40>
                <TD>密　码：</TD>
                <TD>
                  <INPUT class="textbox" type="password" 
            name="password">
                </TD>
                <TD width=120>&nbsp;</TD>
              </TR>
              <TR height=40>
                <TD>验证码：</TD>
                <TD vAlign=center colSpan=2>
                  <INPUT id=txtSN size=5 name="yzm">
                  &nbsp; <IMG src="/admin.php/Home/index/yzm" id="captcha"> <A style="cursor:pointer" onclick="$('#captcha').attr('src','/admin.php/Home/index/yzm?count=Math.random()');">不清楚，再来一张</A></TD>
              </TR>
              <TR height=40>
                <TD></TD>
                <TD align=right>
                  <INPUT  type="submit" value=" 登 录 " name=btnLogin>
				  <INPUT  type="reset" value=" 注 册 " name=btnLogin>
                </TD>
                <TD width=120>&nbsp;</TD>
              </TR>
              <TR height=110>
                <TD colSpan=4>&nbsp;</TD>
              </TR>
            </TBODY>
          </TABLE>
		  </form>
        </TD>
      </TR>
      <TR id=root height=104>
        <TD>&nbsp;</TD>
      </TR>
    </TBODY>
  </TABLE>
</DIV>

</CONTENTTEMPLATE>
</BODY>
</HTML>