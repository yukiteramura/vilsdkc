<?php get_header();?>
<?php include_once("pc_nav.php");?>
<div id="sp_about_area">
<a href="<?php echo site_url(); ?>/instructor"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_int.jpg"></a>
<a href="<?php echo site_url(); ?>/school"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_school.jpg"></a>
<a href="<?php echo site_url(); ?>/blog"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_blg.jpg"></a>
<a href="<?php echo site_url(); ?>/contact"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_cont.jpg"></a>
<a href="<?php echo site_url(); ?>/osaka"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bana_osaka.jpg"></a>
</div>
<!-- sp_contents -->
<div id="sp_page_content_area">
<section class="contents_inner_box">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_instructor_list.jpg"></h2>
<div class="content page_content">
<ul class="dancer_list">
<?php
$args = array(
        'posts_per_page' => '50', //表示件数。-1なら全件表示
        'post_type' => 'instructor', //カスタム投稿タイプの名称を入れる
        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
        'orderby' => 'ID', //ID順に並び替え
        'order' => 'DESC'
    );
$my_query = new WP_Query( $args );

// ループ
while ( $my_query->have_posts() ) : $my_query->the_post();
$the_permalink = get_permalink($post->ID);
$the_title =  the_title( '' , '' , false ); ?>
<li>
<a href="<?php echo $the_permalink ?>">
<span class="thumbnail_area">
<img class="instructor_thumbnail" alt="インストラクター写真" src="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id, ”, true); echo $image_url[0]; ?>">
</span>
<?php the_title(); ?>
</a>
</li>
<?php
endwhile;
// 投稿データをリセット
wp_reset_postdata();
?>
</ul>
</div>
</section>
<?php include_once("sp_contents.php");?>
</div>
<!-- //sp_contents -->
<!-- pc_contents_bg -->
<div id="pc_contents_bg">
<div id="pc_contents">
<div id="pc_contents_left">
<?php include_once("instructor.php");?>
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