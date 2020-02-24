<?php get_header();?>

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
</div>
</div><!-- //pc_contents -->
<img src="<?php echo get_bloginfo("template_directory") ?>/images/pc/kids.png" id="kids_image">
</div><!-- //pc_contents_bg -->
<?php get_footer();?>


</html>