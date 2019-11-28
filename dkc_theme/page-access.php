<?php get_header();?>
<?php include_once("pc_nav.php");?>
<!--<div id="sp_about_area">
<a href="<?php echo site_url(); ?>/instructor"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_int.jpg"></a>
<a href="<?php echo site_url(); ?>/school"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_school.jpg"></a>
<a href="<?php echo site_url(); ?>/blog"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_blg.jpg"></a>
<a href="<?php echo site_url(); ?>/contact"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_cont.jpg"></a>
<a href="<?php echo site_url(); ?>/osaka"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bana_osaka.jpg"></a>
<p>大阪校OPEN!<br>心斎橋駅・四ツ橋駅より徒歩3分!<br>初めてさんばかりなので、初めてダンスをする子にも入りやすいクラスです。</p>
</div>-->
<!-- sp_contents -->
<div id="sp_page_content_area">
<section class="contents_inner_box">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_access.jpg"></h2>
<div class="content page_content">
<?php if ( have_posts() ) : ?> 
  <?php while ( have_posts() ) : the_post(); ?> 
    <p class="sp_page_title"><?php the_title(); ?></p>
    <?php the_content(); ?> 
  <?php endwhile; ?>
<?php else : ?> 
  <p>申し訳ございませんが、ただいま準備中です。</p>
<?php endif; ?>
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
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_access.jpg"></h2>
<div class="content">
<?php if ( have_posts() ) : ?> 
  <?php while ( have_posts() ) : the_post(); ?> 
    <p><?php the_title(); ?></p>
    <?php the_content(); ?> 
  <?php endwhile; ?>
<?php else : ?> 
  <p>申し訳ございませんが、ただいま準備中です。</p>
<?php endif; ?>
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