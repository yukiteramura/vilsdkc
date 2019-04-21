<div id="sp_contents">
<div class="sp_content_area">
<section class="contents_inner_box">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_info.jpg"></h2>
<div class="content sp_new_info_area">


<?php
$args = array(
        'posts_per_page' => '1', //表示件数。-1なら全件表示
        'post_type' => 'news', //カスタム投稿タイプの名称を入れる
        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
        'orderby' => 'ID', //ID順に並び替え
        'order' => 'DESC'
    );
$my_query = new WP_Query( $args );

// ループ
while ( $my_query->have_posts() ) : $my_query->the_post();
$the_permalink = get_permalink();
$the_title =  the_title( '' , '' , false );
    echo "<h2>".$the_title."</h2>";
 the_content();

endwhile;
// 投稿データをリセット
wp_reset_postdata();
?>
</div>
</section>
</div>
<div class="sp_content_area">
<section class="contents_inner_box" id="sp_topicks_area">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_topicks.jpg"></h2>





<div class="content sp_new_info_area">
<?php
$args = array(
        'posts_per_page' => '1', //表示件数。-1なら全件表示
        'post_type' => 'topicks', //カスタム投稿タイプの名称を入れる
        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
        'orderby' => 'ID', //ID順に並び替え
        'order' => 'DESC'
    );
$my_query = new WP_Query( $args );

// ループ
while ( $my_query->have_posts() ) : $my_query->the_post();
$the_permalink = get_permalink();
$the_title =  the_title( '' , '' , false );
    echo "<h2>".$the_title."</h2>";
 the_content();

endwhile;
// 投稿データをリセット
wp_reset_postdata();
?>
</div>
</section>
</div>
	<ul class="scbana">
		<li><a href="<?php echo site_url(); ?>/triallesson" class="sp_banner"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/s_free.jpg"></a></li>
		<li><a href="<?php echo site_url(); ?>/blog" class="sp_banner"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/s_les.jpg"></a></li>
		<li><a href="<?php echo site_url(); ?>/event" class="sp_banner"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/s_ive.jpg"></a></li>
	</ul>
<img src="http://www.vils-dkc.com/wp-content/uploads/instagram-1.jpg" style="margin-bottom:10px; width:120px;" class="insta">
<!-- SnapWidget -->
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/319520" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; margin-bottom:10px;"></iframe>
</div>

