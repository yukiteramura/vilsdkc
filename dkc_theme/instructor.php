<section class="contents_inner_box main_contents">
<h2 class="contents_h2"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/h2_instructor_list.jpg"></h2>
<div class="content">
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