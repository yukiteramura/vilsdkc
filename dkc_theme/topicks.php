<section class="contents_inner_box" id="topicks_area">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_topicks.jpg"></h2>
<div class="content">
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