<?php get_header();?>
<?php include_once("pc_nav.php");?>
<div id="sp_about_area">
<a href="<?php echo site_url(); ?>/instructor"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_int.jpg"></a>
<a href="<?php echo site_url(); ?>/school"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_school.jpg"></a>
<a href="<?php echo site_url(); ?>/blog"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_blg.jpg"></a>
<a href="<?php echo site_url(); ?>/contact"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_cont.jpg"></a>
<a href="<?php echo site_url(); ?>/osaka"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bana_osaka.jpg"></a>
</div>
<!-- sp_contents -->
<div id="sp_page_content_area">
	<section class="contents_inner_box">
		<div class="content page_content">
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="osaka">ビルズキッズダンスクラブ<br class="sp">大阪校OPEN</h2>
			<p>随時無料体験レッスン受付中！！</p>
			<p class="osakafig"><img src="<?php echo get_bloginfo("template_directory") ?>/images/osaka_lesson.jpg" alt="">
			</p>
			<dl class="osaka_ditail">
				<dt>日程</dt>
				<dd>毎週木曜日<br>
				【ドールクラス】16:10~(50分クラス)<br>
				【リトルホップクラス】17:00〜(50分クラス)
				</dd>
				<dt>料金</dt>
				<dd>1レッスン/1,800円<br> お月謝/4,320円
				</dd>
				<dt>アクセス</dt>
				<dd>
					<h3>レンタル専門スタジオ<br>「RENT A STUDIO Avenue」<br>スタジオ アベニュー</h3>
					<p>
						大阪市中央区西心斎橋2丁目18-6-2階<br> TEL:06-6539-0655
					</p>
					<p>アメリカ村 三角公園前にある<br class="sp">ファミリーマートの2階！<br> ファミリーマートの横の階段から上がり、
						<br> クロックスと美容室の間の奥に
						<br class="sp">スタジオがあります。</p>
				</dd>
			</dl>
			<div class="osaka_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.3116829269325!2d135.49538951523144!3d34.6720822804418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7103b2142d5%3A0x3eddf5e62b7eb1c9!2z44CSNTQyLTAwODYg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy66KW_5b-D5paO5qmL77yS5LiB55uu77yR77yY4oiS77yW!5e0!3m2!1sja!2sjp!4v1553334503717" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
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
				<div class="content">
					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<h2 class="osaka">ビルズキッズダンスクラブ<br class="sp">大阪校OPEN</h2>
			<p>随時無料体験レッスン受付中！！</p>
			<p class="osakafig"><img src="<?php echo get_bloginfo("template_directory") ?>/images/osaka_lesson.jpg" alt="">
			</p>
			<dl class="osaka_ditail">
				<dt>日程</dt>
				<dd>毎週木曜日<br>
				【ドールクラス】16:10~(50分クラス)<br>
				【リトルホップクラス】17:00〜(50分クラス)
				</dd>
				<dt>料金</dt>
				<dd>1レッスン/1,800円<br> お月謝/4,320円
				</dd>
				<dt>アクセス</dt>
				<dd>
					<h3>レンタル専門スタジオ<br>「RENT A STUDIO Avenue」スタジオ アベニュー</h3>
					<p>
						大阪市中央区西心斎橋2丁目18-6-2階<br> TEL:06-6539-0655
					</p>
					<p>アメリカ村 三角公園前にある<br class="sp">ファミリーマートの2階！<br> ファミリーマートの横の階段から上がり、
						<br> クロックスと美容室の間の奥に
						<br class="sp">スタジオがあります。</p>
				</dd>
			</dl>
			<div class="osaka_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.3116829269325!2d135.49538951523144!3d34.6720822804418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7103b2142d5%3A0x3eddf5e62b7eb1c9!2z44CSNTQyLTAwODYg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy66KW_5b-D5paO5qmL77yS5LiB55uu77yR77yY4oiS77yW!5e0!3m2!1sja!2sjp!4v1553334503717" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
					<?php the_content(); ?>
					<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
				</div>
			</section>
			<?php include_once("new_info.php");?>
			<?php include_once("topicks.php");?>
		</div>
		<!-- pc_contents_right -->
		<?php include_once("sidebar.php");?>
		<!-- //pc_contents_right -->
	</div>
	<!-- //pc_contents -->
	<img alt="a" src="<?php echo get_bloginfo(" template_directory ") ?>/images/pc/kids.png" id="kids_image">
</div> <!-- //pc_contents_bg -->
<?php get_footer();?>
<script>
	window.onload = function () {
		var img = document.getElementById( "kids_image" );
		var t = document.getElementById( "topicks_area" ).clientHeight;
		if ( t > 1299 ) {
			img.style.display = "inline-block";
		}
	}
</script>
</html>