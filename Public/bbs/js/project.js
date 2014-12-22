$(function(){
    var s = document.createElement('script'); s.src = 'http://tajs.qq.com/stats?sId=32903127'; document.body.appendChild(s);
    setTimeout(function() {
        $("a[title='腾讯分析']").hide();
    },1000);
});
function initNavi(index){
    var naviHtml =
        '<li><a href="/index.html">首页</a></li>'+
        '<li><a href="/infoNews.html">足球资讯</a></li>'+
        '<li><a href="video.html">精彩视频</a></li>'+
		'<li class="sp"><span class="splendid">精彩活动</span><span class="scrawl scrawl1"><a href="/diy">我的能量我来绘</a></span><span class="scrawl scrawl2 "><a target="_blank" href="/guess.html">胜利竞猜</a></span><span class="scrawl scrawl3"><a href="topgame.html" >10场伟大的胜利</a></span><span class="scrawl scrawl4 menu_hot"><a target="_blank" href="audio.html" >说我精彩</a><strong class="mhot"></strong></span></li>'+
        //'<li class="sp"><span class="splendid">精彩活动</span><span class="scrawl scrawl1"><a href="/diy">我的能量我来绘</a></span><span class="scrawl scrawl2"><a href="/quizCup.html">世界杯胜利竞猜</a></span><span class="scrawl scrawl3"><a href="topgame.html" >10场伟大的胜利</a></span></li>'+
        '<li><a href="/draw.html" target="_blank">射门抽奖</a></strong></li>'+
        '<li><a href="/exchange.html">能量商城</a></li>'+
        '<li><a href="javascript:;" onclick="info()">个人中心</a></li>'+
        '<li><a href="/activity.html">一起玩</a></li>'+
        '<li><a href="/chat.html">一起聊</a></li>'+
        '<li class="href menu_end"><a href="/guide.html">社区指南</a></li>';
    $('#menu').html(naviHtml);
    $('#menu li').eq(index).addClass('active');
    if(index == 0){
        $('#menu li').eq(8).removeClass('href');
        //todo 胜利竞猜上线将此行注释
        //$('#menu .scrawl2 a').attr('href','javascript:;').click(function(){shows(".z_prize");});
    }
}

function init2Navi(index){
    var naviHtml =
        '<li><a href="infoNews.html"><img src="images/info_tab1.png"></a></li>'+
        //'<li><a href="infoCup.html"><img src="images/info_tab2.png"></a></li>'+
        '<li><a href="infoEuroPremium.html"><img src="images/info_tab3.png"></a></li>'+
        '<li><a href="infoMatch.html"><img src="images/info_tab4.png"></a></li>'+
        '<li><a href="infoInland.html"><img src="images/video_tab4.png"></a></li>'+
		'<li class="tab_forth"><a href="infoOriginal.html"><img src="images/info_tab7.png"></a></li>';
    $('.info_tab').html(naviHtml);
    if(index > 1){
        index = index -1 ;
    }
    $('.info_tab a').eq(index).addClass('licur');
}
//世界杯赠饮弹层
function tips(){
    return ;
    if(!checkLogin()){
        return ;
    }
    $.ajax({
        type : 'GET',
        dataType :"json",
        cache:false,
        url:Act.base_url + "/cup/tips",
        success : function(data) {
                if (0 == data.code) {
                    $('#tip_footer').css({display:'block'});
                    $('#tip_footer').stop().animate({height:'150px'});
                    $('.close_btn').click(function (){
                        $('#tip_footer').stop().animate({height:0,opacity:0},function (){
                            $(this).css({display:'none'});
                        });
                    });
                }
        }
    });
}
//社区公告
function indextips(){
    if(!checkLogin()){
        return ;
    }
    $.ajax({
        type : 'GET',
        dataType :"json",
        cache:false,
        url:Act.base_url + "/default/indextips",
        success : function(data) {
                if (0 == data.code) {
                    if(data.ret == 1){
                         showMoon();//15的月亮
                    }else if(data.ret == 2){
                        shows(".z_community");//社区公告弹窗
			            showComm(".comtab li",".com","cur");//切换公告
                    }
                }
        }
    });
}
//签到数据
function indexDatePicker(d){
    if(!checkLogin()){
        return [];
    }
    $.ajax({
        type : 'POST',
        dataType :"json",
        cache:false,
        data:{d:d},
        async : false,
        url:Act.base_url + "/info/getsign",
        success : function(res) {
                if (0 == res.code) {
                    signDay = res.data;
                }else{
                    signDay = [];
                }
        }
    });
}
function checkLogin(){
    if(Act.ptlogin.isLogin()){
        return true;
    }
    return false;
}
function doLogin(){
    Act.ptlogin.login();
}
function flashLogin(){
    Act.ptlogin.login();
}
function flashLogout(){
    Act.ptlogin.logout();
}
function flashIsLogin(){
    if(Yall.utils.close()) {
        alert('活动已经结束，感谢您的参与');
        return false;
    }
    if(!checkLogin()){
        doLogin();
        return false;
    }
    return true;
}
function flashGtk(){
    return  Act.util.getACSRFToken();
}
function flashImgUrl() {
        var url = "/fileupload/fileupload/ticket?app=fileupload1&t=" + Date.parse(new Date());
        var result = false;
        $.ajax({
            type : 'GET',
            async : false,
            cache : false,
            url : url,
            dataType : 'json',
            success : function(data) {
                if (0 == data.code) {
                    ticket = data.data.ticket;
                    uin =Act.ptlogin.getQQNum();
                    actid = Act.tamsid;
                    result = "http://upload.act.qq.com/cgi-bin/up_pic_sec?uin="
                        + uin + '&actid=' + actid + '&ticket=' + ticket;
                } else {
                    alert(data.message);
                }
            },
            error : function() {
                alert(data.message);
            }
        });
        return result;
}

function flashScore(score){
    Yall.utils.changeScore(score);
}

function info(){
    if(!checkLogin()){
        Act.ptlogin.login(Act.base_url + '/info');
        return ;
    }
    window.location.href = Act.base_url + '/info';
}

function votediy(id){
    if(Yall.utils.close()) {
        alert('活动已经结束，感谢您的参与');
        return;
    }
    if(!checkLogin()){
        doLogin();
        return ;
    }
    Act.ptlogin.vcodeShow(function(e){
        Yall.ajax.vote({verifycode:e.verifycode,id:id});
    });
}


function shareDiy(id){
    if(Yall.utils.close()) {
        alert('活动已经结束，感谢您的参与');
        return;
    }
    if(!checkLogin()){
        doLogin();
        return ;
    }
    Yall.ajax.share({id:id});
}

function exchange(id) {
    if (Yall.utils.close()) {
        alert("活动已经结束，谢谢您的参与！");
        return;
    }

    if(!checkLogin()){
        doLogin();
        return ;
    }
    Yall.ajax.exchange({"exgid":id});
}

function ralation(id){

    if (Yall.utils.close()) {
        alert("活动已经结束，谢谢您的参与！");
        return;
    }

    if(!checkLogin()){
        doLogin();
        return ;
    }
    Yall.ajax.ralation({"id":id});
}
function sendScore(id){

    if (Yall.utils.close()) {
        alert("活动已经结束，谢谢您的参与！");
        return;
    }

    if(!checkLogin()){
        doLogin();
        return ;
    }
    Yall.ajax.sendScore({"id":id});
}
function sayHello(id){

    if (Yall.utils.close()) {
        alert("活动已经结束，谢谢您的参与！");
        return;
    }

    if(!checkLogin()){
        doLogin();
        return ;
    }
    Yall.ajax.sayHello({"id":id});
}
function sendLetter(uid,nick,t){

    //t:1:发送  2:回复
    if (Yall.utils.close()) {
        alert("活动已经结束，谢谢您的参与！");
        return;
    }

    if(!checkLogin()){
        doLogin();
        return ;
    }

    if(t == 1){
        $('#z_sendmessage_uid').val(uid);
        $('.z_sendmessage .name_remessage').html('给<span>'+ nick +'</span>发站内信');
    }else if(t == 2){
        $('#z_sendmessage_uid').val($('#z_recmessage_uid').val());
        nick = $('#z_recmessage_nick').val();
        $.zClose('.z_recmessage');
        $('.z_sendmessage .name_remessage').html('给<span>'+ nick +'</span>回复');
    }
    shows('.z_sendmessage');

}

function do_sendLetter(){

    if (Yall.utils.close()) {
        alert("活动已经结束，谢谢您的参与！");
        return;
    }

    if(!checkLogin()){
        doLogin();
        return ;
    }
    var content = $('#z_sendmessage_content').val();
    var id = $('#z_sendmessage_uid').val();
    var data = {content:content,uid:id};
    $.zClose('.z_sendmessage');
    Yall.ajax.sendLetter(data);
}

function showLetter(fid,ffid,nick,content,time,status){

    $('#z_recmessage_uid').val(ffid);
    $('#z_recmessage_nick').val(nick);
    var d = time.substr(0,10);
    var t = time.substr(11,5);
    $('.z_recmessage .day_remessage').html(d);
    $('.z_recmessage .hour_remessage').html(t);
    $('.z_recmessage .name_remessage').html('<span>'+ nick +'</span>向您发来站内信');
    $('.z_recmessage .con_remessage').html(content);
    shows('.z_recmessage');
    if(status == 0){
        Yall.ajax.sendLetterStatus({id:fid});
    }
    //设置已读
}

function flashSign(){
    if (Yall.utils.close()) {
        alert("活动已经结束，谢谢您的参与！");
        return -1;
    }

    if(!checkLogin()){
        doLogin();
        return -1 ;
    }
    var result = -1;
    $.ajax({
        type : 'GET',
        async : false,
        cache : false,
        url:Act.base_url + "/info/sign",
        dataType : 'json',
        success : function(data) {
                if (0 == data.code) {
                    result = data.data;
                } else {
                    alert(data.message);
                    result = -1;
                }
        }
    });
    return result;
}
//Yall Js Core;
;
(function($) {
    var global = window;
    if (typeof global.Yall === "undefined") {
        global.Yall = {};
    }
    Yall.param = {page:'',prize:{}};

    Yall.utils = {
        close:function() {
            var endtime = '2015/01/31 23:59:59';
            var now = new Date();//取今天的日期
            var end = new Date(Date.parse(endtime));
            if(now > end){
                return true;
            }
			return false;
        },
        changeScore:function(score) {
            $('#user-score').html(score + '分');
        }
    }
    Yall.ajax = {

        share:function(data){
            $.ajax({
                url:Act.base_url + "/diy/sharediy",
                dataType :"json",
                type:"POST",
                data:data,
                cache:false,
                success:function(res) {
                    if(res.code == 0){
                        if(Yall.param.page == 'self'){
                            $('.info_head span').eq(0).html(res.data.allscore + '分');
                            $('.info_head span').eq(1).html(res.data.usescore + '分');
                            $('.info_head span').eq(2).html(res.data.score + '分');
                        }
                    }
                    $('#z_common_text').html(res.message);
                    shows('.z_common');

                }
            });
        },
        vote:function(data){
             $.ajax({
                url:Act.base_url + "/diy/votediy",
                dataType :"json",
                type:"POST",
                data:data,
                cache:false,
                success:function(res) {
                    if (res.code == 0) {
                        $('#z_common_text').html(res.message);
                        $('.vote_'+data.id).html(parseInt($('.vote_'+data.id).html()) + 1);
                        shows('.z_common');
                    } else if(res.code == 2) {
                        votediy(data.id);
                        alert(res.message);
                    }else{
                        $('#z_common_text').html(res.message);
                        shows('.z_common');
                    }
                }
            });
        },
        exchange:function(data){
             $.ajax({
                url:Act.base_url + "/exchange/exchange/do",
                dataType :"json",
                type:"POST",
                data:data,
                cache:false,
                success:function(res) {
                    if(res.code == 0){
                        //兑换成功
                        Yall.utils.changeScore(res.data.score);
                        var count = $('#reserve_' + data.exgid).html();
                        $('#reserve_' + data.exgid).html(parseInt(count) - 1);
                        //兑换成功，礼品将在7个工作日内寄出，请您耐心等待，如有问题请咨询 394207027 社区客服QQ，谢谢！
                        shows('.z_new');
                    }else{
                        $('#z_common_text').html(res.message);
                        shows('.z_common');
                    }

                }
            });
        },
        info:function(data, callback, scope){
            $.ajax({
                url:Act.base_url + "/info/getinfo",
                dataType :"json",
                type:"POST",
                data:{r:q},
                cache:false,
                success:function(response) {
                    callback.call(scope,response) ;
                }
            });
        },
        ralation:function(data){
            $.ajax({
                url:Act.base_url + "/info/ralation",
                dataType :"json",
                type:"POST",
                data:data,
                cache:false,
                success:function(res) {
                    if(res.code == 0){
                        if(res.data == 2){
                            $('#z_common_text').html('成功关注');
                            $('.con1_btn a').eq(0).html('+取消关注');
                        }else{
                            $('#z_common_text').html('成功取消关注');
                            $('.con1_btn a').eq(0).html('+关注');
                        }
                    }else{
                      $('#z_common_text').html(res.message);
                    }
                    shows('.z_common');
                }
            });
        },
        sendScore:function(data){
            $.ajax({
                url:Act.base_url + "/info/sendscore",
                dataType :"json",
                type:"POST",
                data:data,
                cache:false,
                success:function(res) {
                    if(res.code == 0){
                        $('.info_head li').eq(1).find('span').html(res.score + '分');
                        $('#z_common_text').html('成功赠送能量币');
                    }else{
                        $('#z_common_text').html(res.message);
                    }
                    shows('.z_common');
                }
            });
        },
        sayHello:function(data){
            $.ajax({
                url:Act.base_url + "/info/sayhello",
                dataType :"json",
                type:"POST",
                data:data,
                cache:false,
                success:function(res) {
                    if(res.code == 0){
                        if(Yall.param.page == 'self'){
                            $('.info_head span').eq(0).html(res.data.allscore + '分');
                            $('.info_head span').eq(1).html(res.data.usescore + '分');
                            $('.info_head span').eq(2).html(res.data.score + '分');
                        }
                        $('#z_common_text').html('成功向好友打招呼');
                    }else{
                        $('#z_common_text').html(res.message);
                    }
                    shows('.z_common');
                }
            });
        },
        sendLetter:function(data){
            $.ajax({
                url:Act.base_url + "/info/sendletter",
                dataType :"json",
                type:"POST",
                data:data,
                cache:false,
                success:function(res) {
                    if(res.code == 0){
                        if(Yall.param.page == 'self'){
                            $('.info_head span').eq(0).html(res.data.allscore + '分');
                            $('.info_head span').eq(1).html(res.data.usescore + '分');
                            $('.info_head span').eq(2).html(res.data.score + '分');
                        }
                        $('#z_common_text').html('成功发送站内信');
                    }else{
                        $('#z_common_text').html(res.message);
                    }
                    shows('.z_common');
                }
            });
        },
        sendLetterStatus:function(data){
            $.ajax({
                url:Act.base_url + "/info/sendletterstatus",
                dataType :"json",
                type:"POST",
                data:data,
                cache:false,
                success:function(res) {
                }
            });
        }
    }
})(jQuery);

var selData = [];
function QFriend(data,container,max,pageContainer,hasNext){
    this.data = data;
    this.max = max;//最多选择多少
    this.container = container;//父divid friend_box
    this.pageContainer = pageContainer;//changePage
    this.curPage = 1;//当前页面
    this.hasNext = hasNext;
    this.hasInit = false;
    //this.init();

}
QFriend.prototype = {
    constructor: QFriend,
    init:function(){
        this.hasInit = true;
        this.page(1);
        this.bindDom();
    },

    sel:function(d){
        if(selData.length>this.max-1){
            alert('最多可以选择'+this.max+'位好友');
            return false;
        }
        d.name = d.uin;
        selData.push(d);
        return true;
    },
    delSel:function(qq){
        var data = selData,len = data.length;
        while(len--){
            if (data[len].uin == qq) {
                selData.splice(len,1);
                break;
            }
        }
    },
    inSel:function(qq){
        var len = selData.length,back = false;
        while(len--){
            if(selData[len].uin == qq){
                back = true;
                break;
            }
        }
        return back;
    },

    page:function(p){

        p = p || 1;
        var self = this;
        $.ajax({
            url:Act.base_url + "/default/getwblist",
            dataType :"json",
            type:"POST",
            data:{p:p},
            cache:false,
            async : false,
            success:function(res) {
                self.data = res.data.info;
                self.hasNext = res.data.hasnext;
            }
        });

        var data = this.data;
        var start = 0,html='',len = data.length;

        var end = start+len;
        for (var i =start ; i < end; i++) {
            var qq = data[i],name = qq.nick,img = qq.headurl;

            qq = qq.name;
            var c = '';
            if (this.inSel(qq)) {
                c = 'li_select';

            }
            html += '<li qq="'+qq+'" name="'+name+'" img="'+img+'" class='+ c +'><img src="'+img+'" /><span></span></li>';
        }
        $(this.container).html(html);
        this.curPage = p;

    },
    bindPage:function(){
        var self = this;

    },
    bindDom:function(){
        var self = this;
        $(this.container + '  li').live('click',function(){

            var t = this,$t = $(t);
            var name = $t.attr('name'),qq = $t.attr('qq'),img = $t.attr('img');
            var inSel = self.inSel(qq);
            if(inSel){
                $t.removeClass("li_select");
                self.delSel(qq);
            }else{
               var bool = self.sel({uin:qq,nick:name,qqImg:img});
               if(bool){
                 $t.addClass("li_select");
               }
            }
            var len = selData.length;
            var html = '每天上演赖床大战早起，浪费了多少好时光？赶快行动起来，进入官网URL：http://mnzcn.qq.com 参加《蒙牛早餐奶之早起的鸟儿有活力》，和《里约大冒险2》的主角们开启早活力，来场真正的里约大冒险吧！';
            while(len--){
                html = '@'+selData[len].nick + " " + html;
            }
            $('#conBox01').val(html);
        });
        $(this.pageContainer + ' .a_left').click(function(){
            if(self.curPage == 1){
                return ;
            }
            self.curPage--;
            self.page(self.curPage);
        });
        $(this.pageContainer + ' .a_right').click(function(){

            if(self.hasNext){
                return;
            }
            self.curPage++;
            self.page(self.curPage);
        });

    },

    addData:function(data){
        this.data = this.data.concat(this.data,data);
        this.len = this.data.length;
    }
}
//var qfl = new QFriend([],'.list_nickname',3,'.box_nickname',0);