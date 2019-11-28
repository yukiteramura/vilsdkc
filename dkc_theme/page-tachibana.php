<!DOCTYPE HTML>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
	<!--prefix属性:トップページはwebsite、個別ページはarticle-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VILS DANCE KIDS CLUB ビルズダンスキッズクラブ立花校</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="keywords" content="VILS DANCE KIDS CLUB ビルズダンスキッズクラブ,キッズダンス,兵庫県,尼崎市,立花">
	<meta name="description" content="兵庫県尼崎市立花のキッズスダンスタジオ VILS DANCE KIDS CLUB ビルズダンスキッズクラブ立花校">
	<!-- ※ OGP 基本設定 -->
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="兵庫県尼崎市立花のキッズスダンススタジオ ビルズダンスキッズクラブ"/>
	<!--20文字以内が好ましい-->
	<meta property="og:description" content="兵庫県尼崎市立花のキッズスダンススタジオ VILS DANCE KIDS CLUB ビルズダンスキッズクラブ立花校"/>
	<!--最適文字数 80~90-->
	<meta property="og:url" content="https://www.vils-dkc.com/tachibana/"/>
	<meta property="og:site_name" content="VILS DANCE KIDS CLUB ビルズダンスキッズクラブ立花校"/>
	<!--サイト名やブランド情報-->
	<!--推奨size w1200×h630-->
	<meta property="og:locale" content="ja_JP"/>
	<!-- ※ OGP Twitter共通設定 -->
	<meta name="twitter:card" content="summary_large_image"/>
	<!--summaryにする場合は1:1の画像を別途用意-->
	<!--<meta name="twitter:image" content="Twitter用の画像URL" /> summaryの場合の画像設定-->
	<link rel="canonical" href="https://www.vils-dkc.com/tachibana/">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tachibana.css">
	<!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Ads: 845182420 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-845182420"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-845182420'); </script>
</head>

<body>
  <!--<div id="tachibanaImg"><a href="<?php echo get_bloginfo("template_directory") ?>/images/tachibana/tachibana01.png" target="_blank"><img src="<?php echo get_bloginfo("template_directory") ?>/images/tachibana/tachibana01.png" alt=""></a>
  <a href="<?php echo get_bloginfo("template_directory") ?>/images/tachibana/tachibana01.png" target="_blank"><img src="<?php echo get_bloginfo("template_directory") ?>/images/tachibana/tachibana02.png" alt=""></a></div>-->
	<div id="container">
		<header id="pageHeader" class="fixed">
			<div id="headerInner">
				<p class="logo">VILS DANCE KIDS CLUB</p>
				<ul class="nav">
					<li><a href="#schdule">スケジュール</a>
					</li>
					<li><a href="#system">料金</a>
					</li>
					<li><a href="#access">アクセス</a>
					</li>
				</ul>
				<!--/#headerInner-->
			</div>
			<!--/#pageHeader-->
		</header>
		<div id="contents">
			<div id="contentsInner">
				<section class="mv">
					<h1> <span class="logo"><img src="<?php echo get_bloginfo("template_directory") ?>/images/tachibana/img_logo.svg" alt="RENT A STUDIO Avenue"></span> <span class="ptn01">VILS DANCE KIDS CLUB<br>
        ビルズダンスキッズクラブ立花校</span> </h1>
					<p>JR立花駅より徒歩3分!<br>
随時無料体験レッスン実施中！<br>予約無しでOK!<br class="sp">当日は動きやすい服装と靴をご持参ください</p>
				</section>
				<section class="catch">
					<h2>2019年11月６日(水）OPEN</h2>
					<p><span>JR立花駅より徒歩3分!<br>兵庫県尼崎市立花に<br class="sp">キッズダンススタジオがOPEN!!</span><br>初めてさんばかりなので、初めてダンスをする子にも入りやすいクラスです。<br><span>11/6(水)・11/8(金)の2日間無料体験レッスンキャンペーンを開催!!</span><br>
            お問い合わせフォームよりご予約、お問い合わせお待ちしております！<br>当日は動きやすい服装と靴をご持参ください(^^)</p>
					<p class="catch__btnArea"><a href="<?php echo home_url(); ?>/contact/" class="btn mail">お問い合わせ</a>
					</p>
					<p class="txt pc">※お電話のお問い合わせは06-6539-0655<br> 営業時間外の場合はお問い合わせフォームよりお問い合わせください。
					</p>
					<p class="catch__btnArea sp"><a href="tel:0665390655" class="btn tel">06-6539-0655</a>
					</p>
					<p class="txt sp">※営業時間外の場合は<br class="sp">お問い合わせフォームよりお問い合わせください。</p>
				</section>
				<section class="blogArea fadein" id="blog">
					<h2 class="blogArea__ttl subTtl">NEWS<span>お知らせ</span></h2>
					<ul class="blog__list">
						<?php
						$args = array(
							'posts_per_page' => 1,
							'orderby' => 'date',
							'order' => 'DESC',
							'category_name' => '兵庫立花'
						);
						$the_query = new WP_Query( $args );
						while ( $the_query->have_posts() ):
							$the_query->the_post();
						?>
						<li class="blog__list__item">
							<div class="blog__list__contents">
								<p class="blog__list__ttl">
									<?php the_title(); ?>
								</p>
								<time class="blog__list__date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
									<?php echo get_the_date( 'Y.m.d' ); ?>
								</time>
								<div class="blog__list__contents__txt">
								  <?php the_content(); ?>
								</div>
							</div>
						</li>
						<?php
						endwhile;
						wp_reset_postdata();
						?>
					</ul>
					<p class="blogArea__btnArea"><a href="<?php echo home_url(); ?>/blog/?blog_category=大阪心斎橋" class="btn">一覧を見る</a>
					</p>
				</section>
				<section class="scheduleArea fadein" id="schdule">
					<h2 class="scheduleArea__ttl subTtl">Schedule<span>立花校スケジュール</span></h2>
					<ul class="scheduleArea__list">
						<li>
							<p class="scheduleArea__list__fig"><a href="http://www.vils-dkc.com/instructor/yukie-candy-neon/" target="_blank"><img src="<?php echo get_bloginfo("template_directory") ?>/images/tachibana/img_yukie.png" alt="YUKIE"></a>
							</p>
							<div>
                <p class="scheduleArea__list__name">インストラクター：YUKIE先生</p>
							<p class="scheduleArea__list__time">毎週水曜日<br>【ドールクラス】<br>17:10〜18:00</p>
							<p class="scheduleArea__list__txt">ファントミラージュやパプリカダンス、韓国アイドルなどのアイドル振付など初めての子でも楽しくダンスが始めれる初心者クラス！</p>
                <p>対象年齢 3才〜小学校低学年まで</p>
                <p class="scheduleArea__list__time">毎週水曜日<br>【ストリートジャズクラス】<br>18:10〜19:00</p>
							<p class="scheduleArea__list__txt">小学生になったらちょっと大人っぽいダンス挑戦してみよう！アーティストの振付を担当しているプロの先生の基礎中心のストリートジャズを是非体験しにきてください！</p>
                <p>対象年齢 小学校〜</p>
                <p><a href="http://www.vils-dkc.com/instructor/yukie-candy-neon/" target="_blank" class="scheduleArea__list__btn">YUKIE先生のプロフィールを見る</a></p>
              
					</div>
						</li>
						<li>
							<p class="scheduleArea__list__fig"><a href="http://www.vils-dkc.com/instructor/mayu-venom/" target="_blank"><img src="<?php echo get_bloginfo("template_directory") ?>/images/osaka/img_mayu.png" alt="MAYU"></a>
							</p>
							<div>
                <p class="scheduleArea__list__name">インストラクター：MAYU先生</p>
							<p class="scheduleArea__list__time">毎週金曜日<br>【リトルヒップホップクラス】<br>16:30〜17:20</p>
							<p class="scheduleArea__list__txt">初めてでも、丁寧な指導でリズムトレーニング中心のリトルヒップホップクラス！男の子も大歓迎！</p>
                <p>対象年齢 4歳〜小学校低学年まで</p>
                <p><a href="http://www.vils-dkc.com/instructor/mayu-venom/" target="_blank" class="scheduleArea__list__btn">MAYU先生のプロフィールを見る</a></p>
							</div>
						</li>
					</ul>
				</section>
				<section class="systemArea fadein" id="system">
					<h2 class="systemArea__ttl subTtl">System<span>料金</span></h2>
					<p class="systemArea__txt">1レッスンは1500円（税別）<br> お月謝 4000円（税別）/月4回（1回1000円）</p>
					<p class="systemArea__btnArea"><a href="http://www.vils-dkc.com/blog/?blog_category=%E5%85%B5%E5%BA%AB%E7%AB%8B%E8%8A%B1" class="btn">ブログを見る</a>
					</p>
					<p class="systemArea__btnArea"><a href="http://www.vils-dkc.com/" class="btn">京都山科校のサイトはコチラ</a>
					</p>
          <p class="systemArea__btnArea"><a href="http://www.vils-dkc.com/osaka/" class="btn">大阪校のサイトはコチラ</a>
					</p>
					<p class="systemArea__btnArea"><a href="<?php echo home_url(); ?>/contact/" class="btn mail">お問い合わせ</a>
					</p>
					<p class="txt pc">※お電話のお問い合わせは06-6539-0655<br> 営業時間外の場合はお問い合わせフォームよりお問い合わせください。
					</p>
					<p class="systemArea__btnArea sp"><a href="tel:0665390655" class="btn tel">06-6539-0655</a>
					</p>
					<p class="txt sp">※営業時間外の場合は<br class="sp">お問い合わせフォームよりお問い合わせください。</p>
				</section>
				<section class="access fadein" id="access">
					<h2 class="access__ttl subTtl">Access<span>アクセスマップ</span></h2>
					<div class="access__inner">
						<div class="access__inner__map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.620733720002!2d135.39970371523336!3d34.739953180424436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000ee25ef3430f7%3A0x71772482f7e8e566!2z44CSNjYxLTAwMjUg5YW15bqr55yM5bC85bSO5biC56uL6Iqx55S677yS5LiB55uu77yR77yY4oiS77yR!5e0!3m2!1sja!2sjp!4v1570963744836!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
						<div class="access__inner__add">
							<div class="inner">
								<h2>ビルズダンスキッズクラブ立花校</h2>
								<p>住所<br>尼崎市立花町2-18-1 グリーンマンションエル1階<br> TEL:06-6539-0655
								</p>
								<p>JR立花駅より徒歩3分!</p>
							</div>
						</div>
					</div>
					<p class="access__btnArea"><a href="<?php echo home_url(); ?>/contact/" class="btn mail">お問い合わせ</a>
					</p>
					<p class="txt pc">※お電話のお問い合わせは06-6539-0655<br> 営業時間外の場合はお問い合わせフォームよりお問い合わせください。
					</p>
					<p class="access__btnArea sp"><a href="tel:0665390655" class="btn tel">06-6539-0655</a>
					</p>
					<p class="txt sp">※営業時間外の場合は<br class="sp">お問い合わせフォームよりお問い合わせください。</p>
				</section>
				<!--/#contentsInner-->
			</div>
			<!--/#contents-->
		</div>
		<footer id="pageFooter">
			<div id="footerInner"> <small id="copyright">© 2019 VILS DKC All Rights Reserved.</small>
				<p>運営元<br> 株式会社ベナムクリエイティブ </p>
				<p class="pageTop"><a href="javascript:void(0);">ページトップ</a>
				</p>
				<!--/#pageFooter-->
			</div>
		</footer>
		<!--/#container-->
	</div>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>

</html>