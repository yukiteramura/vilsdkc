<?php
//remove_filter('the_content', 'wpautop');
//remove_filter('the_excerpt', 'wpautop');
add_theme_support( 'post-thumbnails' );
// カスタム投稿タイプの追加

add_action('init', 'register_taxonomy10');
function register_taxonomy10() {
    $labels = array('name'=>'特別なお知らせ','singular_name'=>'news');
    $args = array(
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite'   => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_position'   => 7,
    'supports' => array('title','editor','custom-fields','thumbnail')
    );
    register_post_type('news',$args);
    register_taxonomy_for_object_type('category', 'news');
}

add_action('init', 'register_taxonomy11');
function register_taxonomy11() {
    $labels = array('name'=>'TOPインフォメーション','singular_name'=>'information');
    $args = array(
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite'   => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_position'   => 3,
    'supports' => array('title','editor','custom-fields','thumbnail')
    );
    register_post_type('information',$args);
    register_taxonomy_for_object_type('category', 'information');
}






add_action('init', 'register_taxonomy12');
function register_taxonomy12() {
    $labels = array('name'=>'インストラクター','singular_name'=>'instructor');
    $args = array(
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite'   => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_position'   => 5,
    'supports' => array('title','editor','custom-fields','thumbnail')
    );
    register_post_type('instructor',$args);
    register_taxonomy_for_object_type('category', 'instructor');
}

add_action('init', 'register_taxonomy13');
function register_taxonomy13() {
    $labels = array('name'=>'インフォメーション','singular_name'=>'topicks');
    $args = array(
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite'   => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_position'   => 6,
    'supports' => array('title','editor','custom-fields','thumbnail')
    );
    register_post_type('topicks',$args);
    register_taxonomy_for_object_type('category', 'topicks');
}

add_action('init', 'register_taxonomy14');
function register_taxonomy14() {
    $labels = array('name'=>'教室登録','singular_name'=>'school');
    $args = array(
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite'   => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_position'   => 2,
    'supports' => array('title','editor','custom-fields','thumbnail')
    );
    register_post_type('school',$args);
   register_taxonomy_for_object_type('category', 'school');
}







 
function my_remove_post_editor_support() {
 remove_post_type_support( 'post', 'editor' );
}

function image_src() {
  return "http://venom-ip.lolipop.jp/vils-dmc/wp-content/themes/vils_theme/images/";
}
 
add_shortcode('image_src', 'image_src');


function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'ブログ';
    $submenu['edit.php'][5][0] = 'ブログ一覧';
    $submenu['edit.php'][10][0] = 'ブログ登録';
    $submenu['edit.php'][16][0] = 'タグ';
    //echo ”;
}
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'ブログ';
    $labels->singular_name = 'ブログ';
    $labels->add_new = _x('登録', 'ブログ');
    $labels->add_new_item = '新しいブログ';
    $labels->edit_item = 'ブログの編集';
    $labels->new_item = '新しいブログ';
    $labels->view_item = 'ブログを表示';
    $labels->search_items = 'ブログ検索';
    $labels->not_found = 'ブログが見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱のブログにも見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

?>
