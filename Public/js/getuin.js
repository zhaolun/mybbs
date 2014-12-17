// JavaScript Document// JavaScript Document
//¶ÁCookies
function getCookie(name)
{
   var search = name + "=";
   var reg =new RegExp("(^|(?=;)|\\b)"+search);
   var returnvalue = "";
   if (document.cookie.length > 0) 
   {
      var offset = document.cookie.search(reg);
	  var end;
	  if (offset != -1)
	  { 
		 offset += search.length;
		 end = document.cookie.indexOf(";", offset); 
		 if (end == -1)
			  end = document.cookie.length;
		  returnvalue=unescape(document.cookie.substring(offset,end));
	   }
    }
    return returnvalue;
} 
//»ñÈ¡QQºÅ»òµÇÂ¼Ãû
function getUserUin()
{
	var tmp = getCookie('uin') || getCookie('luin');
	if (!tmp)
	{
		return '';
	}
	var uin = '';
	var start = 0;
	for (i = 0; i < tmp.length; ++i)
	{
		var c = tmp.charAt(i);
		if (c == 'o' || c == '0' && start == 0)
		{
			continue;
		}
		else
		{
			start = 1;
			uin += c;
		}
	}
	return uin;
}

function getUserUin2() {
	var qq=getUserUin()
	var cmt_uin = getCookie("comment_uin");
	var web_uin =getCookie("web_user");
	if(!cmt_uin)
	{
		if(web_uin) return web_uin;
		else return qq;
		
	}
	var temp = cmt_uin.split(" ");
	var cmt_qq = temp[0];
	var nick = cmt_uin.substr(cmt_uin.indexOf(" ")+1);
	return nick;
}

function getLoginOutUrl()
{
	var loginOutUrl="";
	if(getCookie('uin') || getCookie('luin'))
	   loginOutUrl=document.getElementById("tab_0").loginOutUrl;
	else loginOutUrl=document.getElementById("tab_1").loginOutUrl;
	
	return loginOutUrl;
}
//ÅÐ¶ÏµÇÂ¼×´Ì¬
function islogging()
{
	return !!(getCookie('uin') || getCookie('luin')||getCookie("comment_uin")||getCookie("web_user"));
}

function ptlogin2_onResize(width, height) {
	login_wnd = document.getElementById("login_frame");
	if(login_wnd) {
		login_wnd.style.width = width + "px";
		login_wnd.style.height = height + "px";
		login_wnd.style.visibility = "hidden";
		login_wnd.style.visibility = "visible";
	}
//	alert(width+" "+height);
}

function addTab(title,loginUrl,loginOutUrl)
{
	var tabHead=document.getElementById("tab_head");
	var newTab=document.createElement("div");
	newTab.id="tab_"+tabHead.getElementsByTagName("div").length;
	newTab.innerHTML=title;
	newTab.className="normal";
	newTab.loginUrl=loginUrl;
	newTab.loginOutUrl=loginOutUrl;
	newTab.onclick=function (tab){return function (){onTabChange(tab);}}(newTab);

	tabHead.appendChild(newTab);
	return newTab;
}

function onTabChange(tab)
{
	var tabHead=document.getElementById("tab_head");
	var tabs=tabHead.getElementsByTagName("div");
	for(var i=0;i<tabs.length;i++)
	{
		tabs[i].className="normal";
	}
	tab.className="click";
	document.getElementById("login_frame").src=tab.loginUrl;
}

function reinitIframe(iframe)
{

	if(!iframe) return;
	if(iframe.src.toString().indexOf("ui.ptlogin2.qq.com")!=-1) {return};
	try{	
		  
		  var bHeight = iframe.contentWindow.document.body.scrollHeight;
		  var dHeight = iframe.contentWindow.document.documentElement.scrollHeight;
		  var height = Math.max(bHeight, dHeight);
		  
		  var bWidth = iframe.contentWindow.document.body.scrollWidth;
		  var dWidth = iframe.contentWindow.document.documentElement.scrollWidth;
		  var width = Math.max(bWidth, dWidth);
		  
		  if((iframe.style.height !=  height+"px") || (iframe.style.width !=  width+"px") ) 
		  {
			  if(islogging())
			     iframe.style.height =  height+"px";
			  else  iframe.style.height =  height+20+"px";
			  iframe.style.width =  width+"px";
			//  iframe.style.visibility = "hidden";
			//  iframe.style.visibility = "visible";
		  };
		  
	}catch (ex){}
}
/*  |xGv00|97b378707ab2c58f5c5ff62a84d821e1 */