<?php get_header();?>
<?php include_once("pc_nav.php");?>
<div id="sp_about_area">
<a href="<?php echo site_url(); ?>/instructor"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_int.jpg"></a>
<a href="<?php echo site_url(); ?>/school"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_school.jpg"></a>
<a href="<?php echo site_url(); ?>/blog"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_blg.jpg"></a>
<a href="<?php echo site_url(); ?>/contact"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_cont.jpg"></a>
<a href="<?php echo site_url(); ?>/osaka"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bana_osaka.jpg"></a>
<p>大阪校OPEN!<br>心斎橋駅・四ツ橋駅より徒歩5分!<br>初めてさんばかりなので、初めてダンスをする子にも入りやすいクラスです。</p>
</div>
<!-- sp_contents -->
<div id="sp_page_content_area">
<section class="contents_inner_box">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_blog.jpg"></h2>
<div class="content page_content">

<?php
function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
$category = (string)$_GET["blog_category"];
if(!$category){
$category = "";
}
?>
教室別に表示
<ul class="subNav blog">
<li><a href="?" class="blog_category_list">全て表示</a></li>
<li><a href="?blog_category=京都山科" class="blog_category_list">京都山科</a></li>
<li><a href="?blog_category=大阪心斎橋" class="blog_category_list">大阪心斎橋</a></li>
</ul>
<?php $paged = get_query_var('paged'); ?>
<?php query_posts("posts_per_page=3&paged=$paged&order=DESC&category_name=".h($category).""); ?>
<?php if (have_posts()) : while(have_posts()) : the_post();


$title = get_the_title();
$time = get_the_time('Y年m月d日');
$content = get_the_content();
$category = get_the_category_list();

$blog .= <<< EOM
<article class="blog_article">
<h3 class="post_title">{$title}</h3>
{$category}
<p class="post_time">{$time}</p>
{$content}
</article>
EOM;

 ?>



<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>



<?php echo $blog ?>















<div class="pagenate">
  <?php next_posts_link('過去の記事へ'); ?>
<?php previous_posts_link('新しい記事へ'); ?>


</div>
</div>
</section>
<?php include_once("sp_contents.php");?>
</div>
<!-- //sp_contents -->
<!-- pc_contents_bg -->
<div id="pc_contents_bg">
<div id="pc_contents">
<div id="pc_contents_left">
<section class="contents_inner_box main_contents">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_blog.jpg"></h2>
<div class="content">
<?php $paged = get_query_var('paged'); ?>
教室別に表示
<ul class="subNav blog">
<li><a href="?" class="blog_category_list">全て表示</a></li>
<li><a href="?blog_category=京都山科" class="blog_category_list">京都山科</a></li>
<li><a href="?blog_category=大阪心斎橋" class="blog_category_list">大阪心斎橋</a></li>
</ul>
<?php echo $blog ?>

<div class="pagenate">
  <?php next_posts_link('過去の記事へ'); ?>
<?php previous_posts_link('新しい記事へ'); ?>


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
<img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/kids.png" id="kids_image">
</div><!-- //pc_contents_bg -->
<?php get_footer();?>
<script>
window.onload = function(){
var img = document.getElementById("kids_image");
var t = document.getElementById("topicks_area").clientHeight;
if(t > 1299){
img.style.display = "inline-block";
}
}
</script>
</html>