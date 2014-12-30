<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $plugin_config['title'];?></title>
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0">
<style>#sg-loadscrn{
    position:fixed; top:0;left:0;width:100%; height:100%; background-color:#fff; z-index:9999;
}

#sg-spinner{
position: absolute; width: 150px; height: 50px; top:50%; left:50%; margin-top:-25px; margin-left:-75px;
background-image: url('source/plugin/tyx_blackjack/template/images/sg-loader.gif');
}

#sg-spinner.no-img{
    background: #ffffff;
}

#sg-loadtext{
    position:absolute;
    font-family: sans-serif;
    top:50%; left:50%;
    width: 250px;
    margin-left:-125px;
    margin-top:-125px;
    text-align:center;
    line-height:150%;
    font-size:16px;
}</style>

<script>

function updateShareScore(bestScore) {
if(bestScore > 0) {
shareTitle = "我在#21点#赢了$" + bestScore + "，快点过来玩两手！";
}
else{
shareTitle = "休闲棋牌#21点#让你随时随地玩两手！";
}
}
</script>

<script type="text/javascript">
        window.gameLangs = ['en', 'es', 'tr'];
window.gameJS = ['source/plugin/tyx_blackjack/template/images/viewporter.js','source/plugin/tyx_blackjack/template/images/TweenMax.min.js','source/plugin/tyx_blackjack/template/images/howler.js','source/plugin/tyx_blackjack/template/images/app.min.js'];
var logo = '<?php echo $plugin_config['logo'];?>';
</script>
<script src="source/plugin/tyx_blackjack/template/images/softgames-1.1.js" type="text/javascript"></script>

<!--Analytics-->


</head>
<body> 
        <style>
body {
margin: 0px;
padding: 0px;
width: 100%;
background-color:black;
}	

canvas {	
image-rendering: optimizeSpeed;            
/*image-rendering: -moz-crisp-edges;*/        
image-rendering: -webkit-optimize-contrast; 												
image-rendering: -o-crisp-edges;           
image-rendering: optimize-contrast;        
-ms-interpolation-mode: nearest-neighbor;  
-webkit-tap-highlight-color: rgba(0,0,0,0);
-moz-tap-highlight-color: rgba(0,0,0,0);
tap-highlight-color: rgba(0,0,0,0);
user-select: none;
-webkit-touch-callout: none;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
} 
</style>
<div id="viewporter">
   <canvas id="canvas" moz-opaque></canvas>
</div>

</body>
</html>
