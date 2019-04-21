<!DOCTYPE HTML>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<!--prefix属性:トップページはwebsite、個別ページはarticle-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>VILS DANCE KIDS CLUB ビルズダンスキッズクラブ大阪校</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="keywords" content="VILS DANCE KIDS CLUB ビルズダンスキッズクラブ,キッズダンス,大阪校,大阪,西心斎橋,堀江">
<meta name="description" content="大阪 西心斎橋・堀江のキッズスタジオ VILS DANCE KIDS CLUB ビルズダンスキッズクラブ大阪校">
<!-- ※ OGP 基本設定 -->
<meta property="og:type" content="article" />
<meta property="og:title" content="大阪 西心斎橋・堀江のレンタル専門スタジオ RENT A STUDIO Avenue" />
<!--20文字以内が好ましい-->
<meta property="og:description" content="大阪 西心斎橋・堀江のキッズスタジオ VILS DANCE KIDS CLUB ビルズダンスキッズクラブ大阪校" />
<!--最適文字数 80~90-->
<meta property="og:url" content="http://www.vils-dkc.com/osaka_top/" />
<meta property="og:site_name" content="VILS DANCE KIDS CLUB ビルズダンスキッズクラブ大阪校" />
<!--サイト名やブランド情報-->
<!--推奨size w1200×h630-->
<meta property="og:locale" content="ja_JP" />
<!-- ※ OGP Twitter共通設定 -->
<meta name="twitter:card" content="summary_large_image" />
<!--summaryにする場合は1:1の画像を別途用意-->
<!--<meta name="twitter:image" content="Twitter用の画像URL" /> summaryの場合の画像設定-->
<link rel="canonical" href="http://www.vils-dkc.com/osaka_top/">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages.css">
<!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<div id="container">
<header id="pageHeader" class="fixed">
  <div id="headerInner">
    <p class="logo">VILS DANCE KIDS CLUB</p>
    <ul class="nav">
      <li><a href="#schdule">スケジュール</a></li>
      <li><a href="#system">料金</a></li>
      <li><a href="#access">アクセス</a></li>
    </ul>
    <!--/#headerInner--></div>
  <!--/#pageHeader--></header>
<div id="contents">
  <div id="contentsInner">
    <section class="mv">
      <h1> <span class="logo"><img src="<?php echo get_bloginfo("template_directory") ?>/images/osaka/img_logo.svg" alt="RENT A STUDIO Avenue"></span> <span class="ptn01">VILS DANCE KIDS CLUB<br>
        ビルズダンスキッズクラブ大阪校</span> </h1>
    </section>

    <section class="blogArea fadein" id="blog">
      <h2 class="blogArea__ttl subTtl">Blog<span>ブログ</span></h2>
      <ul class="blog__list">
        <?php
            $args = array(
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC',
              'category_name' => '大阪心斎橋'
          );
          $the_query = new WP_Query($args);
          while ($the_query->have_posts()):
              $the_query->the_post();
        ?>
        <li class="blog__list__item<?php
              // newマーク
              $days = 7;  // 一週間表示
              $now = date_i18n('U');  // 今の時間
              $entry = get_the_time('U');  // 投稿日の時間
              $day_term = date('U',($now - $entry)) / 86400;
              if( $days > $day_term ){
                  echo ' new';
              }
            ?>">
            <figure class="blog__list__thumb">
              <?php if (has_post_thumbnail()) : ?>
                  <!-- アイキャッチ画像 -->
                  <?php the_post_thumbnail('thumbnail'); ?>
              <?php else : ?>
                  <!-- アイキャッチが設定されてないときの画像 -->
                  <img src="https://placehold.jp/300x300.png" alt="no-image" />
              <?php endif ; ?>
            </figure>
            <div class="blog__list__contents">
              <p class="blog__list__ttl">
               <?php the_title(); ?>
              </p>
              <time class="blog__list__date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y.m.d' ); ?></time>
            </div>
        </li>
        <?php
          endwhile;
          wp_reset_postdata();
        ?>
      </ul>
      <p class="blogArea__btnArea"><a href="<?php echo home_url(); ?>/blog/?blog_category=大阪心斎橋" class="btn">一覧を見る</a></p>
<style>
  .blogArea {
    width: 100%;
    padding: 80px 0;
  }
  .blog__list {
    max-width: 960px;
    margin: 80px auto 0;
  }
  .blog__list__item {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    font-size: 16px;
    font-size: 1.6rem;
    color: #000;
  }
  .blog__list__item.new .blog__list__thumb::before {
    content: "NEW";
    position: absolute;
    top: 0;
    left: 0;
    width: 50px;
    height: 30px;
    line-height: 30px;
    color: #fff;
    background: #ff7bac;
    font-size: 14px;
    font-size: 1.4rem;
    font-weight: bold;
    display: block;
    text-align: center;
    z-index: 2;
  }
  .blog__list__item + li{
    margin-top: 20px;
  }
  .blog__list__item a {
  }
  .blog__list__thumb {
    width: 200px;
    padding-top: 200px;
    position: relative;
  }
  .blog__list__thumb img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
    height: auto;
  }
  .blog__list__contents {
    width: calc(100% - 230px);
  }
  
  .blog__list__date {
    color: #ff7bac;
  }
  .blog__list__ttl {
    font-size: 20px;
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: .5em;
  }
  .blogArea__btnArea {
    margin-top: 40px;
  }
  
@media screen and (max-width:767px){
  .blogArea {
    padding: 40px 15px;
    box-sizing: border-box;
  }
  .blog__list__item {
    font-size: 12px;
    font-size: 1.2rem;
  }
  .blog__list__thumb {
    width: 100px;
  }
  .blog__list__contents {
    width: calc(100% - 120px);
  }
  .blog__list__ttl {
    font-size: 16px;
    font-size: 1.6rem;
  }
}


</style>
    </section>
   
   
   
    <section class="catch fadein">
      <h2><img src="<?php echo get_bloginfo("template_directory") ?>/images/osaka/bana_osaka.jpg" alt="VILS DANCE KIDS CLUBビルズダンスキッズクラブ大阪校"></h2>
      <p>大阪、心斎橋、堀江近くのキッズダンススタジオがOPEN!!<br>
        現在は幼児クラスを展開中!!無料体験レッスン開催中です！<br>
        是非お気軽におこしください。</p>
    </section>
    <section class="scheduleArea fadein" id="schdule">
      <h2 class="scheduleArea__ttl subTtl">Schedule<span>スケジュール</span></h2>
      <ul class="scheduleArea__list">
        <li>
          <p class="scheduleArea__list__fig"><img src="<?php echo get_bloginfo("template_directory") ?>/images/osaka/img_aya.png" alt="aya"></p>
          <p class="scheduleArea__list__time">毎週木曜日<br>【ドールクラス】16:10~(50分クラス)</p>
        </li>
        <li>
          <p class="scheduleArea__list__fig"><img src="<?php echo get_bloginfo("template_directory") ?>/images/osaka/img_mayu.png" alt="MAYU"></p>
          <p class="scheduleArea__list__time">毎週木曜日<br>【リトルホップクラス】17:00〜(50分クラス)</p>
        </li>
      </ul>
    </section>
    <section class="systemArea fadein" id="system">
      <h2 class="systemArea__ttl subTtl">System<span>料金</span></h2>
      <p class="systemArea__txt">1レッスン/1,800円<br>
        お月謝/4,320円 </p>
			<p class="systemArea__btnArea"><a href="http://www.vils-dkc.com/blog/?blog_category=%E5%A4%A7%E9%98%AA%E5%BF%83%E6%96%8E%E6%A9%8B" class="btn">ブログを見る</a></p>
			<p class="systemArea__btnArea"><a href="http://www.vils-dkc.com/" class="btn">京都山科校のサイトはコチラ</a></p>
    </section>
    <section class="access fadein" id="access">
      <h2 class="access__ttl subTtl">Access<span>アクセスマップ</span></h2>
      <div class="access__inner">
        <div class="access__inner__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.3116829269325!2d135.49538951523144!3d34.6720822804418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7103b2142d5%3A0x3eddf5e62b7eb1c9!2z44CSNTQyLTAwODYg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy66KW_5b-D5paO5qmL77yS5LiB55uu77yR77yY4oiS77yW!5e0!3m2!1sja!2sjp!4v1553334503717" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="access__inner__add">
          <div class="inner">
            <h2>レンタル専門スタジオ<br>
              <span>「RENT A STUDIO Avenue」</span><br>
              スタジオ アベニュー</h2>
            <p>住所<br>
              大阪市中央区西心斎橋2丁目18-6-2階<br>
              TEL:06-6539-0655</p>
            <p>アメリカ村 三角公園前にある<br class="sp">
              ファミリーマートの2階！<br>
              ファミリーマートの横の階段から上がり、<br>
              クロックスと美容室の間の奥に<br class="sp">
              スタジオがあります。</p>
          </div>
        </div>
      </div>
    </section>
    <!--/#contentsInner--></div>
  <!--/#contents--></div>
<footer id="pageFooter">
<div id="footerInner"> <small id="copyright">© 2019RENT A STUDIO Avenue</small>
  <p>運営元<br>
    株式会社ベナムクリエイティブ </p>
  <p class="pageTop"><a href="javascript:void(0);">ページトップ</a></p>
  <!--/#pageFooter-->
  </div>
</footer>
  <!--/#container--></div>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
