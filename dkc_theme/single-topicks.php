<?php get_header();?>
<?php include_once("pc_nav.php");?>
<?php include_once("newinfo.php");?>
<div id="sp_about_area">
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_int.jpg"></a>
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_les.jpg"></a>
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_map.jpg"></a>
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_blg.jpg"></a>
<a href="<?php echo site_url(); ?>/osaka"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bana_osaka.jpg"></a>
<p>大阪校OPEN!<br>心斎橋駅・四ツ橋駅より徒歩3分!<br>初めてさんばかりなので、初めてダンスをする子にも入りやすいクラスです。</p>
</div>
<!-- sp_contents -->
<?php include_once("sp_contents.php");?>
</div><!-- pc_contents_bg -->
<div id="pc_contents_bg">
<div id="pc_contents">
<div id="pc_contents_left">
<section class="contents_inner_box main_contents">
<h2 class="contents_h2"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_info.jpg"></h2>
<div class="content">
シングルトピックス
<?php query_posts("posts_per_page=3"); ?>
<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
         ?>
<p class="post_title"><?php the_title(); ?></p>
<p class="post_time"><?php the_time('Y年m月d日'); ?></p>
        <?php 
        the_content();
    } // end while
} // end if
?>
<div class="pagenate" id="page_btn">
  
<?php previous_post_link('%link','前の記事へ'); ?>
<?php next_post_link('%link','次の記事へ'); ?>

</div>
</div>
</section>
<?php include_once("new_info.php");?>
<?php include_once("topicks.php");?>
</div>
<!-- pc_contents_right -->
<?php include_once("sidebar.php");?>
<!-- //pc_contents_right -->
</div><!-- //pc_contents -->
<img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/kids.png" id="kids_image">
</div><!-- //pc_contents_bg -->
<?php get_footer();?>
<script>
//スライダー用　スクリプト
window.onload = function(){
var a = document.getElementById('slide_list');
var aw = document.getElementById('slide_area').offsetWidth;
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
function bannerSlide(w,i){
testTimer = setInterval(function() {
if(i < lp){
var ct = a.style.transform;
ct = parseInt(ct.replace(/[^0-9^\.]/g,""));
var next = w + ct;
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
}
function prev(){
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
}
function next(){
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

var img = document.getElementById("kids_image");
var t = document.getElementById("topicks_area").clientHeight;
if(t > 1299){
img.style.display = "inline-block";
}
}
</script>
</html>