<!-- this is index.php-->
<?php get_header();?>
<nav id="pc_nav">
<ul id="topNav">
<li><a href="<?php echo site_url(); ?>">TOP</a></li>
<li><a href="<?php echo site_url(); ?>/school">教室一覧</a></li>
<li><a href="<?php echo site_url(); ?>/instructor">インストラクター</a></li>
<li><a href="<?php echo site_url(); ?>/blog">ブログ</a></li>
<li><a href="<?php echo site_url(); ?>/triallesson">無料体験レッスン</a></li>
<li><a href="<?php echo site_url(); ?>/contact">お問い合わせ</a></li>
</ul>
</nav>
<ul id="top_banner_ul">
	<li><a href="<?php echo site_url(); ?>/contact"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/dkc-top01.jpg" class="slide_bn"></a></li>
	<li><a href="<?php echo site_url(); ?>/osaka"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bana_osaka.jpg"></a>
  <p>大阪校OPEN!<br>心斎橋駅・四ツ橋駅より徒歩3分!<br>初めてさんばかりなので、初めてダンスをする子にも入りやすいクラスです。</p></li>
</ul>
<!-- スライダーエリア -->
<!--<div id="slide_area">
<ul id="slide_list">
	<li><a href="<?php echo site_url(); ?>/contact"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/dkc-top01.jpg" class="slide_bn"></a></li>
</ul>
</div>-->
    <!--margin area -->
<!-- スライダーエリア　ここまで --> 
<div id="sp_about_area">
<a href="<?php echo site_url(); ?>/instructor"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_int.jpg"></a>
<a href="<?php echo site_url(); ?>/school"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_school.jpg"></a>
<a href="<?php echo site_url(); ?>/blog"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_blg.jpg"></a>
<a href="<?php echo site_url(); ?>/contact"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_cont.jpg"></a>
<a href="<?php echo site_url(); ?>/osaka"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bana_osaka.jpg"></a>
<p>大阪校OPEN!<br>心斎橋駅・四ツ橋駅より徒歩3分!<br>初めてさんばかりなので、初めてダンスをする子にも入りやすいクラスです。</p>
</div>
<!-- sp_contents -->
<div id="sp_page_content_area">
<?php include_once("sp_contents.php");?>
</div><!-- pc_contents_bg -->
<div id="pc_contents_bg">
<div id="pc_contents">
<div id="pc_contents_left">
<?php include_once("new_info.php");?>
<?php include_once("topicks.php");?>
</div>
<!-- pc_contents_right -->
<?php include_once("sidebar.php");?>
<!-- //pc_contents_right -->
</div><!-- //pc_contents -->
<img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/kids.png" id="kids_image">
</div><!-- //pc_contents_bg -->
<?php get_footer();?>
<script>
//スライダー用　スクリプト
var a = document.getElementById('slide_list');
var aw = document.getElementById('slide_area').offsetWidth;
aw = parseInt(aw);
var c = a.children;
ac = c.length;
if(ac < 2){
ne = document.getElementById('next');
pr = document.getElementById('prev');
ne.style.display = "none";
pr.style.display = "none";
}
n = ac + 1;
var testTimer;
var i = 0;
var x = 0;
var w = aw;//list width
var vc = Math.floor(aw / w);
var lp = ac - vc;
var cr,st;
function bannerSlide(w,i){
testTimer = setInterval(function() {
if(i < lp){
ct = a.style.transform;
ct = parseInt(ct.replace(/[^0-9^\.]/g,""));
next = w + ct;
a.style.transform = "translateX(-" + next + "px)";
i++;
}else{
a.style.transform = "translateX(0px)";
i = 0;
}  
}, 2000);//ここの数字を変えるとスライダーのスピードが変わります。
}//bannerSlide

bannerSlide(w,i);

function stopTimer(){
clearInterval(testTimer);
};
function slide_prev(){
stopTimer();
cr = a.style.transform;
cr = parseInt(cr.replace(/[^0-9^\.]/g,"")) - w;
var mod = Math.floor(cr / w);
if(mod >= 0){
a.style.transform = "translateX(-" + cr + "px)";
bannerSlide(w,mod);
}else{
bannerSlide(w,0);
}　
};
function slide_next(){
stopTimer();
cr = a.style.transform;
cr = parseInt(cr.replace(/[^0-9^\.]/g,"")) + w;
var mod = Math.floor(cr / w);
if(mod <= lp){
a.style.transform = "translateX(-" + cr + "px)";
cr = cr + w;
bannerSlide(w,mod);
}else{
bannerSlide(w,mod);
}
}

window.onresize = function(){

stopTimer();
var a = document.getElementById('slide_list');
var aw = document.getElementById('slide_area').offsetWidth;
a.style.transform = "translateX(0px)";
aw = parseInt(aw);
var c = a.children;
ac = c.length;
n = ac + 1;
var testTimer;
var i = 0;
var x = 0;
var w = aw;//list width
var vc = Math.floor(aw / w);
var lp = ac - vc;
var cr,st;

bannerSlide(w,i);
}
//PC用　フッターイメージ
window.onload = function(){
var img = document.getElementById("kids_image");
var t = document.getElementById("topicks_area").clientHeight;
if(t > 1299){
img.style.display = "inline-block";
}
}
</script>
</html>