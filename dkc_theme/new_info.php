<section class="contents_inner_box">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_info.jpg"></h2>
<div class="content" id="new_info_area">
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
$branch = post_custom('branch');
$category = get_the_category_list();
$the_title =  the_title( '' , '' , false );
    echo "<h2>".$the_title."</h2>";
    echo $category;
 the_content();

endwhile;
// 投稿データをリセット
wp_reset_postdata();
?>
</div>
</section>