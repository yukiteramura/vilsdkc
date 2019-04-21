<?php get_header();?>
<?php include_once("pc_nav.php");?>

<div id="sp_about_area">
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_int.jpg"></a>
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_les.jpg"></a>
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_map.jpg"></a>
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_blg.jpg"></a>
<a href="<?php echo site_url(); ?>/osaka"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bana_osaka.jpg"></a>
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
this is news single.php

<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
         ?>
<article>
<h3 class="post_title"><?php the_title(); ?></h3>
<p class="post_time"><?php the_time('Y年m月d日'); ?></p>

        <?php 
        the_content();?>
        </article>
        <?php
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

var img = document.getElementById("kids_image");
var t = document.getElementById("topicks_area").clientHeight;
if(t > 1299){
img.style.display = "inline-block";
}
}
</script>
</html>