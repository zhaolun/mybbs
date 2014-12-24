/**
 * Created with JetBrains WebStorm.
 * User: han
 * Date: 13-12-19
 * Time: 上午10:19
 * v:1.4
 * To change this template use File | Settings | File Templates.
 */

(function($){
    $.extend({
        winW: function() {
            return $(window).width() < $(document).width() ? $(document).width() : $(window).width();
        },
        winH: function() {
            var h = top.location == self.location ? $(window).height(): $(parent.window).height();
            return h;
        },
        docH: function() {
            return $.winH() > $(document).height() ? $.winH() : $(document).height();
        },
        scTop: function() {
            var sctop =  top.location == self.location ? $(window).scrollTop() : $(parent.window).scrollTop();
            return sctop;
        },
        zClose: function(o) {
            $(o).fadeOut(500);
            $(o).find(".closePop").remove();
            $(".bgdiv").eq(0).fadeOut(10,
                function() {
                    $(this).remove()
                });
        }
    });
    $.fn.extend({
        oH: function() {
            return $(this).css("height").replace(/px/, '')
        },
        oW: function() {
            var $me = $(this);
            return $me.css("width") == 'undefined' ? $(this).width() : $me.css("width").replace(/px/, '')
        },
        zShow: function(options) {

            if (!$(this)) return;
            $me = $(this);
            var dft = {
                "bgColor": "#000",
                "types": 0,
                "Scroll": false,
                "io": 0,
                "obj": null,
                "nobg": false,
                "hasClose":true,
                "closeCall":function(){}
            };
            var sets = $.extend({},dft,options);
            //alert($(this));
            var bgdiv = "<div class='bgdiv'></div>";
            //if($(".z_voteform").css("display")=="block"&&$(".z_msg_submit").css("display")=="block"){bgdiv = "<div class='bgdiv1'></div>";}
            if (!sets.nobg){$("body").append(bgdiv)}
            if(sets.hasClose) $me.append("<span class='closePop' style='cursor:pointer'>鍏抽棴鎸夐挳</span>");

            var w = $me.css("width").replace(/px/, '');
            var h = $me.css("height").replace(/px/, '');
            if (sets.obj != null) $me.css({
                "left": $(sets.obj).offset().left + "px",
                "top": $(sets.obj).offset().top + "px",
                "width": "1px",
                "height": "2px",
                "display": "block"
            });
            var pos_x = $(this).oW() / 2;
            var pos_z_x = ($.winW() - w) / 2;
            var pos_y =$.scTop() + ($.winH() - $me.oH()) / 2;
            if(top.location == self.location){
                pos_y = $.scTop() + ($.winH() - $me.oH()) / 2;
            }else{
                if((parseInt(pos_y)-parseInt($(parent.document).find("iframe:eq(0)").offset().top)+parseInt($me.oH())) >= parseInt($.docH())){
                    pos_y = $.docH() - $me.oH() - 10;
                }else{
                    if(top.location != self.location){pos_y = parseInt(pos_y) - parseInt($(parent.document).find("iframe:eq(0)").offset().top)}
                }
            }
            if (pos_y <= 10) {
                pos_y = 10
            };

            var pos_z_y = $.scTop() + ($.winH() - h) / 2;
            $me.css({
                "position": "absolute",
                "z-index": 101
            });
            switch (sets.types) {
                case 1:
                    $me.css({
                        "margin-left":
                            -pos_x + "px",
                        "left": "50%",
                        "top": pos_y + "px"
                    });
                    $me.fadeIn(1000);
                    $(".bgdiv").css({
                        "width": $.winW() + "px",
                        "height": $.docH() + "px",
                        "opacity": .8,
                        "position": "absolute",
                        "left": "0",
                        "top": "0",
                        "z-index": 100,
                        "background-color": sets.bgColor,
                        "display": "none"
                    });
                    $(".bgdiv").fadeIn(500);
                    break;
                case 2:
                    $me.css({
                        "top":
                            $.scTop() - $.winH() + "px",
                        "margin-left": -pos_x + "px",
                        "left": "50%"
                    }).show(0);
                    $me.animate({
                            "top": (pos_y + 20) + "px"
                        },
                        400).animate({
                            "top": (pos_y - 15) + "px"
                        },
                        300).animate({
                            "top": pos_y + "px"
                        },
                        200);
                    $(".bgdiv").css({
                        "width": $.winW() + "px",
                        "height": $.docH() + "px",
                        "opacity": .8,
                        "position": "absolute",
                        "left": "0",
                        "top": "0",
                        "z-index": 100,
                        "background-color": sets.bgColor,
                        "display": "none"
                    });
                    $(".bgdiv").show(0);
                    break;
                case 3:
                    $me.animate({
                            "top":
                                pos_z_y + "px",
                            "left": pos_z_x + "px",
                            "width": w + "px",
                            "height": h + "px"
                        },
                        400,
                        function() {
                            $(".closePop").show(0)
                        });
                    $(".bgdiv").css({
                        "width": $.winW() + "px",
                        "height": $.docH() + "px",
                        "opacity": .8,
                        "position": "absolute",
                        "left": "0",
                        "top": "0",
                        "z-index": 100,
                        "background-color": sets.bgColor,
                        "display": "none"
                    });
                    $(".bgdiv").show(0);
                    break;
                default:
                    if($(".z_voteform").css("display")=="block"){
                        pos_x=pos_x-40;
                    }
                    //z_msg_submit
                    $me.css({
                        "margin-left":
                            -pos_x + "px",
                        "left": "50%",
                        "top": pos_y + "px"
                    });
                    if(!sets.nobg){$(".bgdiv").css({
                        "width": $.winW() + "px",
                        "height": $.docH() + "px",
                        "opacity": .8,
                        "position": "absolute",
                        "left": "0",
                        "top": "0",
                        "z-index": 100,
                        "background-color": sets.bgColor,
                        "display": "none"
                    }).fadeIn(100);}
                    $me.show(0)

            };
            if (sets.Scroll) {
                var owin = top.location != self.location ? parent.window : window;
                var thispos = $me.css("top").replace(/px/, '');
                var y;
                $(owin).scroll(function() {
                    if(top.location != self.location){
                        y = $(parent.document).find("iframe:eq(0)").offset().top;
                        var posy =  (parseInt($.scTop())-y+parseInt(($.winH()-$me.oH())/2)) > ($.docH() -$me.oH()-10) ? ($.docH() -$me.oH()-10) : (parseInt($.scTop())-y+parseInt(($.winH()-$me.oH())/2));
                        posy = posy <=10 ? 10 : posy;
                        $me.css("top",posy+"px")
                    }else{
                        if ($.browser.version == "6.0") {
                            $me.css("top", ($.scTop() + Math.abs(thispos)) + "px");
                        } else {
                            $me.css({
                                "position": "fixed",
                                "top": ($.winH() - $me.height()) / 2 + "px"
                            });
                        }

                    }
                })
            };
            $me.children(".closePop").bind("click",function() {
                if(sets.closeCall){
                    sets.closeCall.call();
                }
                var $me = $(this).parent();
                switch (sets.types) {
                    case 3:
                        $(this).remove();
                        $me.animate({
                                "left":
                                    $(sets.obj).eq(sets.io).offset().left + "px",
                                "top": $(sets.obj).eq(sets.io).offset().top + "px",
                                "width": $(sets.obj).width() + "px",
                                "height": $(sets.obj).height() + "px"
                            },
                            500,
                            function() {
                                $me.hide(0);
                                $me.removeAttr("style")
                            });
                        $(".bgdiv").fadeOut(500,
                            function() {
                                $(this).remove();
                            });
                        break;
                    default:
                        $me.fadeOut(50);
                        $(this).remove();
                        if (!sets.nobg) $(".bgdiv").fadeOut(10,
                            function() {
                                $(this).remove();
                            })
                }

            })

        }
    })

})(jQuery);
