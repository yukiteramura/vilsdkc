<!DOCTYPE HTML>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<!--prefix属性:トップページはwebsite、個別ページはarticle-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VILS DANCE KIDS CLUB ビルズダンスキッズクラブ大阪校</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="keywords" content="VILS DANCE KIDS CLUB ビルズダンスキッズクラブ,キッズダンス,大阪校,大阪,西心斎橋,堀江">
	<meta name="description" content="大阪 西心斎橋・堀江のキッズダンススタジオ VILS DANCE KIDS CLUB ビルズダンスキッズクラブ大阪校">
	<!-- ※ OGP 基本設定 -->
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="大阪 西心斎橋・堀江のキッズダンススタジオ VILS DANCE KIDS CLUB"/>
	<!--20文字以内が好ましい-->
	<meta property="og:description" content="大阪 西心斎橋・堀江のキッズダンススタジオ VILS DANCE KIDS CLUB ビルズダンスキッズクラブ大阪校"/>
	<!--最適文字数 80~90-->
	<meta property="og:url" content="https://www.vils-dkc.com/osaka/"/>
	<meta property="og:site_name" content="VILS DANCE KIDS CLUB ビルズダンスキッズクラブ大阪校"/>
	<!--サイト名やブランド情報-->
	<!--推奨size w1200×h630-->
	<meta property="og:locale" content="ja_JP"/>
	<!-- ※ OGP Twitter共通設定 -->
	<meta name="twitter:card" content="summary_large_image"/>
	<!--summaryにする場合は1:1の画像を別途用意-->
	<!--<meta name="twitter:image" content="Twitter用の画像URL" /> summaryの場合の画像設定-->
	<link rel="canonical" href="https://www.vils-dkc.com/osaka/">
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
					<h1> <span class="logo"><img src="<?php echo get_bloginfo("template_directory") ?>/images/osaka/img_logo.svg" alt="RENT A STUDIO Avenue"></span> <span class="ptn01">VILS DANCE KIDS CLUB<br>
        ビルズダンスキッズクラブ大阪校</span> </h1>
					<p>心斎橋駅・四ツ橋駅より徒歩3分!<br>
随時無料体験レッスン実施中！<br>予約無しでOK!<br class="sp">当日は動きやすい服装と靴をご持参ください</p>
				</section>
				<section class="catch">
					<h2><img src="<?php echo get_bloginfo("template_directory") ?>/images/osaka/bana_osaka.jpg" alt="VILS DANCE KIDS CLUBビルズダンスキッズクラブ大阪校"></h2>
					<p><span>心斎橋駅・四ツ橋駅より徒歩3分!<br>大阪校がOPENしました!!</span><br>初めてさんばかりなので、初めてダンスをする子にも入りやすいクラスです。<br>
現在は幼児クラスを展開中!!<br>随時無料体験レッスン実施中！<br>
予約無しでOK!<br>
当日は動きやすい服装と靴をご持参ください(^^)</p>
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
							'category_name' => '大阪心斎橋'
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
					<!--<p class="blogArea__btnArea"><a href="<?php echo home_url(); ?>/blog/?blog_category=大阪心斎橋" class="btn">一覧を見る</a>
					</p>-->
				</section>
				<section class="scheduleArea fadein" id="schdule">
					<h2 class="scheduleArea__ttl subTtl">Schedule<span>大阪校スケジュール</span></h2>
					<ul class="scheduleArea__list">
						<li>
							<p class="scheduleArea__list__fig"><a href="http://www.vils-dkc.com/instructor/aya-vetty/" target="_blank"><img src="<?php echo get_bloginfo("template_directory") ?>/images/osaka/img_aya.png" alt="aya"></a>
							</p>
							<div>
                <p class="scheduleArea__list__name">インストラクター：AYA先生</p>
							<p class="scheduleArea__list__time">毎週木曜日<br>【ドールクラス】<br>16:30~(50分クラス)</p>
							<p class="scheduleArea__list__txt">プリキュアやアイドルのダンスを中心に<br class="sp">女の子が可愛く夢中になれるレッスンをしています！<br><br>
対象年齢 3歳〜小学生まで</p>
                <a href="http://www.vils-dkc.com/instructor/aya-vetty/" target="_blank" class="scheduleArea__list__btn">AYA先生のプロフィールを見る</a>
					</div>
						</li>
						<li>
							<p class="scheduleArea__list__fig"><a href="http://www.vils-dkc.com/instructor/mayu-venom/" target="_blank"><img src="<?php echo get_bloginfo("template_directory") ?>/images/osaka/img_mayu.png" alt="MAYU"></a>
							</p>
							<div>
                <p class="scheduleArea__list__name">インストラクター：MAYU先生</p>
							<p class="scheduleArea__list__time">毎週木曜日<br>【リトルヒップホップクラス】<br>17:20〜(50分クラス)</p>
							<p class="scheduleArea__list__txt">初めてでも、丁寧な指導でリズムトレーニング中心のリトルヒップホップクラス！男の子も大歓迎！<br><br>
対象年齢 4歳〜小学校低学年まで</p>
                <a href="http://www.vils-dkc.com/instructor/mayu-venom/" target="_blank" class="scheduleArea__list__btn">MAYU先生のプロフィールを見る</a>
							</div>
						</li>
					</ul>
				</section>
				<section class="systemArea fadein" id="system">
					<h2 class="systemArea__ttl subTtl">System<span>料金</span></h2>
					<p class="systemArea__txt">1レッスンは1500円（税別）<br> お月謝 4000円（税別）/月4回（1回1000円）</p>
					<p class="systemArea__btnArea"><a href="http://www.vils-dkc.com/blog/?blog_category=%E5%A4%A7%E9%98%AA%E5%BF%83%E6%96%8E%E6%A9%8B" class="btn">ブログを見る</a>
					</p>
					<p class="systemArea__btnArea"><a href="http://www.vils-dkc.com/" class="btn">京都山科校のサイトはコチラ</a>
					</p>
          <p class="systemArea__btnArea"><a href="http://www.vils-dkc.com/tachibana/" class="btn">兵庫立花校のサイトはコチラ</a>
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
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.2686494917657!2d135.4955151152314!3d34.67316858044153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7100e390541%3A0xac78fde8abaf66ab!2z44CSNTQyLTAwODYg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy66KW_5b-D5paO5qmL77yR5LiB55uu77yR77yW4oiS77yXIOOCteOCtuODs-OCpuOCqOOCueODiOODk-ODqzfpmo4!5e0!3m2!1sja!2sjp!4v1555849496570!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="access__inner__add">
							<div class="inner">
								<h2>RO studio<br>
              <span>アールオースタジオ</span></h2>
								<p>住所<br> 大阪府大阪市中央区西心斎橋１丁目16-7 サザンウエストビル7階<br> TEL:06-6539-0655
								</p>
								<p>心斎橋駅・四ツ橋駅より徒歩3分!<br>
アメリカ村内のイキナリステーキ、王将の前にあるmojoという服屋さんのビルの7階</p>
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