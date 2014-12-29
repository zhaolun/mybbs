jq(function() {
	var sWidth = jq("#focus").width(); //銮峰彇铹︾偣锲剧殑瀹藉害锛堟樉绀洪溃绉级
	var len = jq("#focus ul li").length; //銮峰彇铹︾偣锲句釜鏁?
	var index = 0;
	var picTimer;
	
	//浠ヤ笅浠ｇ爜娣诲姞鏁板瓧鎸夐挳鍜屾寜阍悗镄勫崐阃忔槑鏉★紝杩樻湁涓娄竴椤点€佷笅涓€椤典袱涓寜阍?
	var btn = "<div class='btnBg'></div><div class='btn'>";
	for(var i=0; i < len; i++) {
		btn += "<span></span>";
	}
	btn += "</div><div class='preNext pre'></div><div class='preNext next'></div>";
	jq("#focus").append(btn);
	jq("#focus .btnBg").css("opacity",0.5);

	//涓哄皬鎸夐挳娣诲姞榧犳爣婊戝叆浜嬩欢锛屼互鏄剧ず鐩稿簲镄勫唴瀹?
	jq("#focus .btn span").css("opacity",0.4).mouseenter(function() {
		index = jq("#focus .btn span").index(this);
		showPics(index);
	}).eq(0).trigger("mouseenter");

	//涓娄竴椤点€佷笅涓€椤垫寜阍€忔槑搴﹀鐞?
	jq("#focus .preNext").css("opacity",0.8).hover(function() {
		jq(this).stop(true,false).animate({"opacity":"1"},300);
	},function() {
		jq(this).stop(true,false).animate({"opacity":"0.8"},300);
	});

	//涓娄竴椤垫寜阍?
	jq("#focus .pre").click(function() {
		index -= 1;
		if(index == -1) {index = len - 1;}
		showPics(index);
	});

	//涓嬩竴椤垫寜阍?
	jq("#focus .next").click(function() {
		index += 1;
		if(index == len) {index = 0;}
		showPics(index);
	});

	//链緥涓哄乏鍙虫粴锷紝鍗虫墍链塴i鍏幂礌閮芥槸鍦ㄥ悓涓€鎺掑悜宸︽诞锷紝镓€浠ヨ繖閲岄渶瑕佽绠楀嚭澶栧洿ul鍏幂礌镄勫搴?
	jq("#focus ul").css("width",sWidth * (len));
	
	//榧犳爣婊戜笂铹︾偣锲炬椂锅沧镊姩鎾斁锛屾粦鍑烘椂寮€濮嬭嚜锷ㄦ挱鏀?
	jq("#focus").hover(function() {
		clearInterval(picTimer);
	},function() {
		picTimer = setInterval(function() {
			showPics(index);
			index++;
			if(index == len) {index = 0;}
		},6000); //姝?000浠ｈ〃镊姩鎾斁镄勯棿闅旓紝鍗曚綅锛氭绉?
	}).trigger("mouseleave");
	
	//鏄剧ず锲剧墖鍑芥暟锛屾抵鎹帴鏀剁殑index链兼樉绀虹浉搴旗殑鍐呭
	function showPics(index) { //鏅€氩垏鎹?
		var nowLeft = -index*sWidth; //镙规嵁index链艰绠梪l鍏幂礌镄刲eft链?
		jq("#focus ul").stop(true,false).animate({"left":nowLeft},300); //阃氲绷animate()璋冩暣ul鍏幂礌婊氩姩鍒拌绠楀嚭镄刾osition
		//$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //涓哄綋鍓岖殑鎸夐挳鍒囨崲鍒伴€変腑镄勬晥鏋?
		jq("#focus .btn span").stop(true,false).animate({"opacity":"0.4"},300).eq(index).stop(true,false).animate({"opacity":"1"},300); //涓哄綋鍓岖殑鎸夐挳鍒囨崲鍒伴€変腑镄勬晥鏋?
	}
});
//寤虹珯鐩稿叧镓嬮鐞?

jq(function(){
	//鍙橀噺瀹氢箟鍖?
	var _listBox=jq('.jq');
	var _navItem=jq('.jq>h4');
	var _boxItem=null, _icoItem=null, _parents=null, _index=null;
	
	//鍒濆鍖栫涓€涓睍寮€
	_listBox.each(function(i){
		jq(this).find('div.box').eq(0).show();
		jq(this).find('h4>span').eq(0).text('-');
		
	});
	
	//阆嶅巻镓€链夌殑镣瑰向椤?
	_navItem.each(function(i){
		jq(this).click(function(){
			//镓惧埌褰揿墠镣瑰向鐖跺厓绱犱负listbox(鍗曚釜鍖哄潡)镄勫厓绱?
			_parents=jq(this).parents('.listbox');
			_navItem=_parents.find('h4');//姝ゅ尯鍧椾腑镄勭偣鍑婚」
			_icoItem=_parents.find('span');//姝ゅ尯鍧椾腑镄勫睍寮€鍏抽棴锲炬爣
			_boxItem=_parents.find('div.box');//姝ゅ尯鍧椾腑灞曞紑鍏抽棴椤?
			_index=_navItem.index(this);//鍙栧缑褰揿墠镣瑰向鍦ㄥ綋鍓嶅尯鍧椾笅镣瑰向椤逛腑镄勭储寮曞€?
			if(_boxItem.eq(_index).is(':visible')){
				//鑻ュ綋鍓岖偣鍑婚」涓嬬殑灞曞紑鍏抽棴椤规槸鏄剧ず镄?鍒椤叧闂?鍚屾椂灞曞紑鍙﹀椤逛腑镄勭涓€涓?
				_boxItem.eq(_index).hide().end().not(':eq('+_index+')').first().show();
				_icoItem.eq(_index).text('+').end().not(':eq('+_index+')').first().text('-');
                _navItem.eq(_index).addclass('+').end().not(':eq('+_index+')').first().addclass('-');

			}else{
				//鑻ュ綋鍓岖偣鍑婚」涓嬬殑灞曞紑鍏抽棴椤规槸闅愯棌镄?鍒椤睍寮€,鍚屾椂闅愯棌鍏朵粬椤?
				_boxItem.eq(_index).show().end().not(':eq('+_index+')').hide();
				_icoItem.eq(_index).text('-').end().not(':eq('+_index+')').text('+');
				_navItem.eq(_index).addclass('-').end().not(':eq('+_index+')').first().addclass('+');
				
			}
		});
	});
});