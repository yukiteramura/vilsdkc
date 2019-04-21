<?php get_header();?>
<?php include_once("pc_nav.php");?>
<div id="sp_about_area">
<a href="<?php echo site_url(); ?>/instuctor"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_int.jpg"></a>
<a href="<?php echo site_url(); ?>/lesson"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_les.jpg"></a>
<a href="<?php echo site_url(); ?>/access"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_map.jpg"></a>
<a href="<?php echo site_url(); ?>/blog"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_blg.jpg"></a>
<a href="<?php echo site_url(); ?>/osaka"><img src="<?php echo get_bloginfo("template_directory") ?>/images/bana_osaka.jpg"></a>
</div>
<!-- sp_contents -->
<div id="sp_page_content_area">
<section class="contents_inner_box">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_contact.jpg"></h2>
<div class="content page_content">
<p class="contact_desc">全ての項目が必須項目となっておりますので記入漏れのないようお気をつけください。</p>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php the_content(); ?>
<?php endwhile;endif; ?>
<div class="sp_tell_area">
<p class="sp_tell_contact">お電話番号でのお問い合わせも行っております。お気軽にお問い合わせください。</p>
<!--
<p>年中無休</p>
<p>受付時間 10：00～19：00</p>-->
<p class="tap">タップすると電話がかかります。</p>
<p class="sp_tell">06-6539-0655</p>
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
<h2 class="contents_h2"><img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_contact.jpg"></h2>
<div class="content">
<p class="contact_desc">全ての項目が必須項目となっておりますので記入漏れのないようお気をつけください。</p>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php the_content(); ?>
<?php endwhile;endif; ?>
<div class="sp_tell_area">
<p class="sp_tell_contact">お電話番号でのお問い合わせも行っております。お気軽にお問い合わせください。</p>
<!--<p>年中無休</p>
<p>受付時間 10：00～19：00</p>-->
<p class="pc_tell">06-6539-0655</p>
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
window.onload = function(){
var img = document.getElementById("kids_image");
var t = document.getElementById("topicks_area").clientHeight;
if(t > 1299){
img.style.display = "inline-block";
}
}
</script>
</html>