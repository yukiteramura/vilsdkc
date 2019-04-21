<?php get_header();?>
<?php include_once("pc_nav.php");?>
<div id="sp_about_area">
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_int.jpg"></a>
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_les.jpg"></a>
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_map.jpg"></a>
<a href="<?php echo site_url(); ?>/about"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_blg.jpg"></a>
</div>
<!-- sp_contents -->
<?php include_once("sp_contents.php");?>
</div><!-- pc_contents_bg -->404 Not Found
<div id="pc_contents_bg">
404 Not Found

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