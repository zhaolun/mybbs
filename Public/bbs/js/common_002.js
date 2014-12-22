var menu_txt = ["首页","社区指南","精彩活动"]
var windowW = document.documentElement.clientWidth;
var indexHeight = document.documentElement.clientHeight;
function addMenu(){
	var obj_menu = $("#fullPage-nav").find("ul").find("li");
	for(var i=0;i<menu_txt.length;i++){
		obj_menu.eq(i).find("a").html(menu_txt[i]);
		}
	}
	
 function fixMouse(){
	 indexHeight = document.documentElement.clientHeight;
	 var topMouse = indexHeight-110;
	 windowW = document.documentElement.clientWidth;
	 $(".tableCell").width(windowW);
	 $(".mouse1").css("top",topMouse+"px");
	 if(windowW<1400){
            $(".menu").css("right",'10px');
        }else{
            var right = (windowW-1400)/2;
            $(".menu").css("right",right+"px");			
        }
	 }
	 
var ok = true;
function list(o){
	ok = false;
	var w = $(o).find("li").height();
	$(o).find("li:first").clone().appendTo(o);
	$(o).animate({top:-w},500,function(){
		$(o).css("top","0px").find("li:first").remove();
		ok = true;
		});	
	}

function removActive(){
	/* $("#menu").find("li").click(function(){
		 $(this).siblings("li").removeClass("active");
		 })*/
	 $(".splendid").parent("li").siblings("li").click(function(){
		 $('.splendid').removeClass("thirdback");
		 })
	 
	}
	
	
function picScroll(){
	var ulW = $(".li_f").width()*$("#idSlider2").find("li").length;
	$("#idSlider2").css("width",ulW);			
	    var forEach = function(array, callback, thisObject){
		if(array.forEach){
			array.forEach(callback, thisObject);
		}else{
			for (var i = 0, len = array.length; i < len; i++) { callback.call(thisObject, array[i], i, array); }
		}
	}
	var st = new SlideTrans("idContainer2", "idSlider2", 2, { Vertical: false,Pause: 2000 });
	var nums = [];
	//插入数字
	for(var i = 0, n = st._count - 1; i <= n;){
		(nums[i] = document.getElementById("idNum").appendChild(document.createElement("li"))).innerHTML = ++i;
	}
	forEach(nums, function(o, i){
		o.onmouseover = function(){ o.className = "on"; st.Auto = false; st.Run(i); }
		o.onmouseout = function(){ o.className = ""; st.Auto = true; st.Run(); }
	})
	//设置按钮样式
	st.onStart = function(){
		forEach(nums, function(o, i){ o.className = st.Index == i ? "on" : ""; })
	}
	st.Run();
	
	}


function selectNum(){
	$(".p_select").click(function(){
		$(".num_select").show();
		})
	$(".num_select li").click(function(){
		$(".powerCoin").val($(this).html());
		$(".p_select").html($(this).html());
		$(".num_select").hide();
		})
	$(".num_select").mouseleave(function(){$(".num_select").hide();})
	}
	
function showChangeList(o,o1,o2){	
		jQuery(o).click(function(){
			var li_index = jQuery(this).index();
			var show_div = jQuery(o1).eq(li_index);
			jQuery(this).children().addClass(o2);
			jQuery(this).siblings().children().removeClass(o2);
			show_div.show();
			show_div.siblings(o1+":visible").hide();
			show_div.jScrollPane(
			{	
				verticalDragMinHeight: 96,
				verticalDragMaxHeight: 96,
				horizontalDragMinWidth: 20,
				horizontalDragMaxWidth: 20
				}
		 );
		  })
		}
		
$(function(){
	$(".power_right").height($(".power_right").find("li").length*44-2);
	})
	
function scrollList(o){
	$(o).jScrollPane(
			{	
				verticalDragMinHeight: 27,
				verticalDragMaxHeight: 27,
				horizontalDragMinWidth: 20,
				horizontalDragMaxWidth: 20
				}
		 );
	}
	
	
function Day(endTime){
	var time_now = new Date().getTime(); 
	//获取给定的结束时间
    var time_end = new Date($(endTime).val()).getTime();
	//计算两个时间距多少秒
	var seconds = (time_end-time_now)/1000;
	//计算天数
    var days = Math.floor((seconds/3600)/24);
	 if(time_end<=time_now){
	$(".days").html(0); 
	   window.clearInterval(setDaInter);         					
      }else{                  
      $(".days").html(days+"天");    
      }
 }
 
 function Time(){
	 $(".time_box").each(function(){
		var str_h="",str_m="",str_s="";
		var d = new Date(); 
		var nowh = d.getHours();
		var nowm = d.getMinutes(); 
		var nows = d.getSeconds(); 
		if(String(nowh).length==1){str_h="0"+nowh;} else{str_h=nowh;}
		if(String(nowm).length==1){str_m="0"+nowm;} else{str_m=nowm;}
		if(String(nows).length==1){str_s="0"+nows;} else{str_s=nows;}
		$(".time_box").html("<span class='hour'>"+str_h+":</span><span class='minute'>"+str_m+":</span><span class='second'>"+str_s+"</span>"); 
          });
   
  };



$.fn.extend({
	teamScroll:function(pdir,polist){
		  var ok = true;
 		  var piw = $(polist).find("li").width();
		  var pilength = $(polist).find("li").length;
		  $(polist).css('width',piw*pilength+"px");
		  $(this).click(function(){
			   if(pdir =='left' && ok == true){
				       ok= false;
					   $(polist).css({"width":piw*(pilength+1)+"px"}).find("li:first").clone().appendTo(polist);
   				       $(polist).animate({"left":-piw+"px"},500,function(){
					   $(polist).find("li:first").remove();
					   $(polist).css({"left":"0px","width":piw*pilength+"px"});
					   ok=true;
					   })
				   }
				else if(pdir =="right" && ok == true){
					   ok= false;
					   $(polist).css({"width":piw*(pilength+1)+"px","left":-piw+"px"});
					   $(polist).find("li:last").clone().prependTo(polist);
 					   $(polist).animate({"left":0+"px"},500,function(){
					   $(polist).find("li:last").remove();
					   $(polist).css({"left":"0px","width":piw*pilength+"px"});
					   ok = true;
					   })
				 }
			  })
		 }
		 })
		 
		 
function scrollTeam(o){
	$(o).jScrollPane(
			{	
				verticalDragMinHeight: 50,
				verticalDragMaxHeight: 50,
				horizontalDragMinWidth: 20,
				horizontalDragMaxWidth: 20
				}
		 );
	}
	
function showList(o,o1,o2){	
			var li_index = $(o).attr("rank");
			var show_div = $(o1).eq(li_index);
			$(o).addClass(o2);
			$(o).siblings().removeClass(o2);
			show_div.show();
			show_div.siblings(o1+":visible").hide();
			scrollTeam(show_div);
		}
		
function showScore(o,o1,o2){	
			var li_index = $(o).attr("rank");
			var show_div = $(o1).eq(li_index);
			$(o).addClass(o2);
			$(o).siblings().removeClass(o2);
			show_div.show();
			show_div.siblings(o1+":visible").hide();
			scrollTeam(show_div.find(".team"));
		}	
function fixSmenu(){
	 var windowW = document.documentElement.clientWidth;
	 if(windowW<1700){
            $(".smenu").css("right",'20px');
			$(".dataBox").css("right",'30px');
        }else{
            $(".smenu").css("right","300px");
			$(".dataBox").css("right",'287px');			
        }
	 }
	 
function shows(o){
	$(o).zShow({
			"types":0
        })
	}
function closeMsg(){
	$.zClose(".z_sendmessage");
	$(".z_sendmessage .con_remessage").html('<textarea></textarea>');
	}
	
	
function timeFunction(){
	//var stopDay = moment(resp.time);
	var resp = new Date();
	var day = new Date(2014,5,13,3,0,0);
	//alert(day)
	day = day.getTime();
	resp = resp.getTime();
	//alert(day);
	//stopDay = new Date(stopDay);
	//stopDay = stopDay.getTime();

	var distance = day-resp;
		//alert(distance)
	var dayD = parseInt(distance/(1*24*60*60*1000));
	var hourD = parseInt((distance%(1*24*60*60*1000))/(60*60*1000));
	var minuteD = parseInt(((distance%(1*24*60*60*1000))%(60*60*1000))/(60*1000));
	var secondD = parseInt(((distance%(1*24*60*60*1000))%(60*60*1000))%(60*1000)/1000);
	//alert(dayD+"天"+hourD+"小时"+minuteD+"分"+secondD+"秒")
	if(distance < 0){
		dayD = 0;
		hourD = 0;
		minuteD = 0;
		secondD = 0;
	}
	$(".days").html(dayD+"天");
	$(".time_box").html("<span class='hour'>"+hourD+":</span><span class='minute'>"+minuteD+":</span><span class='second'>"+secondD+"</span>"); 	
	var t = resp + 1000 ;
	if(distance>0){
	  setTimeout(function(){
		  timeFunction(t);
	  },1000);
	}
}

function scrollVideo(o){
	$(o).jScrollPane(
			{	
				verticalDragMinHeight: 60,
				verticalDragMaxHeight: 60,
				horizontalDragMinWidth: 20,
				horizontalDragMaxWidth: 20
				}
		 );
	}
	
function selectVideo(o){
	  var vid = $(o).attr("v");	
	  var video = new tvp.VideoInfo();
      video.setVid(vid);
      var player = new tvp.Player(560,420);
      //设置播放器初始化时加载的视频
      player.setCurVideo(video);
	 //是否播放广告；1播放，0不播放，默认为1
	 player.addParam("adplay","0");
	 player.addParam("wmode","transparent");
     player.addParam("searchbar","0");
	 player.addParam("showend","0");
	 player.addParam("loadingswf","http://imgcache.qq.com/minivideo_v1/vd/res/skins/nologo_loading.swf");
	 //输出播放器
     player.write("videoPlayer"); 
	}
	
function request(paras)//获取url 参数
    {  
        var url = location.href; 
        var paraString = url.substring(url.indexOf("?")+1,url.length).split("&"); 
        var paraObj = {} 
        for (i=0; j=paraString[i]; i++){ 
        paraObj[j.substring(0,j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=")+1,j.length); 
        } 
        var returnValue = paraObj[paras.toLowerCase()]; 
        if(typeof(returnValue)=="undefined"){ 
        return ""; 
        }else{ 
        return returnValue; 
        } 
    }
	
function showVideo(val){
	if(val==""){val="k0127qkiune"}
	  var video = new tvp.VideoInfo();
      video.setVid(val);
      var player = new tvp.Player(560,420);
      //设置播放器初始化时加载的视频
      player.setCurVideo(video);
	 //是否播放广告；1播放，0不播放，默认为1
	 player.addParam("adplay","0");
	 player.addParam("wmode","transparent");
     player.addParam("searchbar","0");
	 player.addParam("showend","0");
	 player.addParam("loadingswf","http://imgcache.qq.com/minivideo_v1/vd/res/skins/nologo_loading.swf");
	 //输出播放器
     player.write("videoPlayer"); 
	}
	
function showRace(o,o1,o2){	
		$(o).addClass(o2);
		$(o).siblings().removeClass(o2);
		$(o1).parent(".team2").show();
		$(o1).parent(".team2").siblings(".team:visible").hide();
		scrollTeam(o1);
		}
		
function showGroup(o,o1,o2){	
		$(o).mouseover(function(){
			var li_index = $(this).index();
			var show_div = $(o1).eq(li_index);
			$(this).addClass(o2);
			$(this).siblings().removeClass(o2);
			show_div.show();
			show_div.siblings(o1+":visible").hide();
			scrollTeam(show_div);
		  })
		}
		
function fixSmenuspic(){
	 var windowW = document.documentElement.clientWidth;
	 if(windowW<1700){
            $(".smenu").css("right",'20px');
        }else{
            $(".smenu").css("right","420px");			
        }
	 }
	 
	 
$.fn.extend({
	prizeScroll:function(pdir,polist){
		  var ok = true;
 		  var piw = $(polist).find("li").width();
		  var pilength = $(polist).find("li").length;
		  $(polist).css('width',piw*pilength+"px");
		  $(this).click(function(){
			   if(pdir =='left' && ok == true){
				       ok= false;
					   $(polist).css({"width":piw*(pilength+1)+"px"}).find("li:first").clone().appendTo(polist);
   				       $(polist).animate({"left":-piw+"px"},500,function(){
					   $(polist).find("li:first").remove();
					   $(polist).css({"left":"0px","width":piw*pilength+"px"});
					   ok=true;
					   })
				   }
				else if(pdir =="right" && ok == true){
					   ok= false;
					   $(polist).css({"width":piw*(pilength+1)+"px","left":-piw+"px"});
					   $(polist).find("li:last").clone().prependTo(polist);
 					   $(polist).animate({"left":0+"px"},500,function(){
					   $(polist).find("li:last").remove();
					   $(polist).css({"left":"0px","width":piw*pilength+"px"});
					   ok = true;
					   })
				 }
			  })
		 }
		 })


function showBigPic(imgo){

	var imgsrc  = $(imgo).attr("src");
	$(".big_pic").html('<img src='+imgsrc+' />');
	$(imgo).addClass("cur").siblings(".cur").removeClass("cur");
	}
	
function showNotice(){
	$(".z_notice").zShow({
			"types":0
        })
	$(".notice_con").jScrollPane(
			{	
				verticalDragMinHeight: 68,
				verticalDragMaxHeight: 68,
				horizontalDragMinWidth: 20,
				horizontalDragMaxWidth: 20
				}
		 );
	}
	
function showsWork(wo){
	var wsrc = $(wo).find("img").attr("src");
	$(".work_pic").html('<img src='+wsrc+' />');
	$(".z_allwork").zShow({
			"types":0
        })
	}
	
function showsVideo(vo){
	$(".my_wall").html($(vo).parent("li").find(".video_name").html());
	var vid = $(vo).attr("v");
	$(".z_video").zShow({
			"types":0
        })
	  var video = new tvp.VideoInfo();
      video.setVid(vid);
      var player = new tvp.Player(900,556);
      //设置播放器初始化时加载的视频
      player.setCurVideo(video);
	 //是否播放广告；1播放，0不播放，默认为1
	 player.addParam("adplay","0");
	 player.addParam("wmode","transparent");
     player.addParam("searchbar","0");
	 player.addParam("showend","0");
	 player.addParam("loadingswf","http://imgcache.qq.com/minivideo_v1/vd/res/skins/nologo_loading.swf");
	 //输出播放器
     player.write("scrawVideo"); 
	}
		
function getImg(){
	var iheight;
	var img = new Image();
	img.src  =$(".news_img").find("img").attr("src");
		img.onload = function(){
		iheight = $(".news_img").find("img").height();
		$(".news_img").height(iheight);
		
		$(".news_detail").jScrollPane(
			{	
				verticalDragMinHeight: 104,
				verticalDragMaxHeight: 104,
				horizontalDragMinWidth: 20,
				horizontalDragMaxWidth: 20
				}
		 );
			   }
			  
	}