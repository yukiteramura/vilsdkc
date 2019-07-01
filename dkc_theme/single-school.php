<!-- this is single school.php-->
<?php get_header();?>
<?php include_once("pc_nav.php");?>
<div id="sp_about_area">
<a href="<?php echo site_url(); ?>/instructor"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_int.jpg"></a>
<a href="<?php echo site_url(); ?>/school"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_school.jpg"></a>
<a href="<?php echo site_url(); ?>/blog"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_blg.jpg"></a>
<a href="<?php echo site_url(); ?>/contact"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_cont.jpg"></a>
<a href="<?php echo site_url(); ?>/osaka"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bana_osaka.jpg"></a>
<p>大阪校OPEN!<br>心斎橋駅・四ツ橋駅より徒歩3分!<br>初めてさんばかりなので、初めてダンスをする子にも入りやすいクラスです。</p>
</div>
<?php if(have_posts()): while(have_posts()):the_post();
$place = post_custom('place');
$address = post_custom('address');
$tel = post_custom('tel');
$map = post_custom('map');
$description = post_custom('description');
$schedule = post_custom('schedule');
wp_reset_postdata();
 ?><?php endwhile; endif; ?>
 <ul class="dancer_list">
<?php
$args = array(
        'posts_per_page' => '10', //表示件数。-1なら全件表示
        'post_type' => 'instructor', //カスタム投稿タイプの名称を入れる
        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
        'orderby' => 'ID', //ID順に並び替え
        'order' => 'DESC',
        'category_name' => $place
    );
$my_query = new WP_Query( $args );
while ( $my_query->have_posts() ) : $my_query->the_post();
$the_permalink = get_permalink($post->ID);
$the_title =  the_title( '' , '' , false ); ?>
<?php $image_id = get_post_thumbnail_id(); 
$image_url = wp_get_attachment_image_src($image_id, ”, true); 
?>

<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id, ”, true); ?>
<?php

$string .= <<< EOM
<li>
<a href="{$the_permalink}">
<span class="thumbnail_area">
<img class="instructor_thumbnail" alt="インストラクター写真" src="$image_url[0]">
</span>
{$the_title}
</a>
</li>
EOM;




?>





<?php
endwhile;
// 投稿データをリセット
wp_reset_postdata();
?>

</ul>


<!-- sp_contents -->
<div id="sp_page_content_area">
<section class="contents_inner_box">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_school_d.jpg"></h2>

<div class="content page_content">
<div class="dancer_profile_area">
<h3 class="school_h3"><span class="profile"><?php echo $place ?></span></h3>
<p>【場所】<span class="profile"><?php echo $place; ?></span></p>
<?php if($address){?>
<p>【住所】<span class="profile"><?php echo $address; ?></span></p>
<?php } ?>
<?php if($tel){?>
<p>【電話番号】<span class="profile"><?php echo $tel; ?></span></p>
<?php } ?>
<?php if($map){?>
<p><span class="map_area"><?php echo $map; ?></span></p>
<?php } ?>
<?php if($description){?>
<p>【教室紹介】<span class="profile"><?php echo $description; ?></span></p>
<?php } ?>
<?php if($schedule){?>
<p>【スケジュール】<span class="profile"><?php echo $schedule; ?></span></p>
<?php } ?>
</div>
<div class="single_content_area">
<h3 class="schoolTtl">【インストラクター】</h3>
 <ul class="dancer_list">
<?php echo $string  ?>
</ul>
<a href="http://www.vils-dkc.com/blog/?blog_category=<?php echo $place ?>" class="blog_category_list"><?php echo $place ?>教室のブログはコチラ</a>
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
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_school_d.jpg"></h2>
<div class="content">
<h3 class="school_h3"><span class="profile"><?php echo $place ?>教室</span></h3>
<div class="dancer_profile_area">
<p>【場所】<span class="profile"><?php echo $place; ?></span></p>
<?php if($address){?>
<p>【住所】<span class="profile"><?php echo $address; ?></span></p>
<?php } ?>
<?php if($tel){?>
<p>【電話番号】<span class="profile"><?php echo $tel; ?></span></p>
<?php } ?>
<?php if($map){?>
<p><span class="profile"><?php echo $map; ?></span></p>
<?php } ?>
<?php if($description){?>
<p>【教室紹介】<span class="profile"><?php echo $description; ?></span></p>
<?php } ?>
<?php if($schedule){?>
<p>【スケジュール】<span class="profile"><?php echo $schedule; ?></span></p>
<?php } ?>

</div>
<div class="single_content_area">
<h3 class="schoolTtl">【インストラクター】</h3>
 <ul class="dancer_list">
<?php echo $string  ?>
</ul>

<a href="http://www.vils-dkc.com/blog/?blog_category=<?php echo $place ?>" class="blog_category_list"><?php echo $place ?>教室のブログはコチラ</a>
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