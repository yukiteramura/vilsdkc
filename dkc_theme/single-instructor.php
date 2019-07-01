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
<?php if(have_posts()): while(have_posts()):the_post();
$name = post_custom('name');
$genre = post_custom('genre');
$image_01 = wp_get_attachment_image_src(post_custom('image_01'),'full' );
$image_02 = wp_get_attachment_image_src(post_custom('image_02'),'full' );
$image_03 = wp_get_attachment_image_src(post_custom('image_03'),'full' );

$history = post_custom('history');
$event = post_custom('event');
$info01 = post_custom('info01');
$info02 = post_custom('info02');

$movie_01 = post_custom('movie_01');
$movie_02 = post_custom('movie_02');
$movie_03 = post_custom('movie_03');
$movie_04 = post_custom('movie_04');
 ?><?php endwhile; endif; ?>
 
<!-- sp_contents -->
<div id="sp_page_content_area">
<section class="contents_inner_box">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_instructor.jpg"></h2>
<div class="content page_content">
<div class="dancer_profile_area">
<p>名前 : <span class="profile"><?php echo $name ; ?></span></p>
<?php if($genre){?>

<p>ジャンル : <span class="profile"><?php echo $genre; ?></span></p>
<?php } ?>
<ul class="dancer_image_ul">
<?php if($image_01){?>
<li><img src="<?php echo $image_01[0]; ?>" alt="<?php the_title(); ?>"></li>
<?php } ?>
<?php if($image_02){?>
<li><img src="<?php echo $image_02[0]; ?>" alt="<?php the_title(); ?>"></li>
<?php } ?>
<?php if($image_03){?>
<li><img src="<?php echo $image_03[0]; ?>" alt="<?php the_title(); ?>"></li>
<?php } ?>
</ul>

</div>
<div class="single_content_area">
<?php if($history){?>
<h3>経歴</h3>
<p><?php echo nl2br($history); ?></p>
<?php } ?>
<?php if($event){?>
<h3>出演イベント等</h3>
<?php echo nl2br($event); ?>
<?php }?>

<?php if($info01){?>
<h3>その他</h3>
<?php echo nl2br($info01); ?>
<?php } ?>
<?php if($info02){?>
<h3>その他2</h3>
<?php echo nl2br($info02); ?>
<?php } ?>
<?php if($movie_01){
echo $movie_01;
} ?>
<?php if($movie_02){
echo $movie_02;
} ?>
<?php if($movie_03){
echo $movie_03;
} ?>
<?php if($movie_04){
echo $movie_04;
} ?>
</div>



</div>
</section>
<section class="contents_inner_box single_instructorlist">
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
<section class="contents_inner_box main_contents">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_instructor.jpg"></h2>
<div class="content">
<div class="dancer_profile_area">
<p>名前 : <span class="profile"><?php echo $name ; ?></span></p>
<?php if($genre){?>
<p>ジャンル : <span class="profile"><?php echo $genre; ?></span></p>
<?php } ?>
<ul class="dancer_image_ul">
<?php if($image_01){?>
<li><img src="<?php echo $image_01[0]; ?>" alt="<?php the_title(); ?>"></li>
<?php } ?>
<?php if($image_02){?>
<li><img src="<?php echo $image_02[0]; ?>" alt="<?php the_title(); ?>"></li>
<?php } ?>
<?php if($image_03){?>
<li><img src="<?php echo $image_03[0]; ?>" alt="<?php the_title(); ?>"></li>
<?php } ?>
</ul>

</div>
<div class="single_content_area">
<?php if($history){?>
<h3>経歴</h3>
<p><?php echo nl2br($history); ?></p>
<?php } ?>
<?php if($event){?>
<h3>出演イベント等</h3>
<?php echo nl2br($event); ?>
<?php } ?>
<?php if($info01){?>
<h3>その他</h3>
<?php echo nl2br($info01); ?>
<?php } ?>
<?php if($info02){?>
<h3>その他2</h3>
<?php echo nl2br($info02); ?>
<?php } ?>
<?php if($movie_01){
echo $movie_01;
} ?>
<?php if($movie_02){
echo $movie_02;
} ?>
<?php if($movie_03){
echo $movie_03;
} ?>
<?php if($movie_04){
echo $movie_04;
} ?>
</div>

</div>
</section>
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