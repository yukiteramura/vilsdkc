<!-- this is index.php-->
<?php get_header();?>
<!--<nav id="pc_nav">
<ul id="topNav">
<li><a href="<?php echo site_url(); ?>">TOP</a></li>
<li><a href="<?php echo site_url(); ?>/school">教室一覧</a></li>
<li><a href="<?php echo site_url(); ?>/instructor">インストラクター</a></li>
<li><a href="<?php echo site_url(); ?>/blog">ブログ</a></li>
<li><a href="<?php echo site_url(); ?>/triallesson">無料体験レッスン</a></li>
<li><a href="<?php echo site_url(); ?>/contact">お問い合わせ</a></li>
</ul>
</nav>-->
<div class="mv"><a href="<?php echo site_url(); ?>/contact"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/dkc-top01.jpg" class="slide_bn"></a></div>
<ul id="top_banner_ul">
	<li><a href="<?php echo site_url(); ?>/osaka/"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bn_osaka.jpg" class="slide_bn"></a></li>
  <li><a href="<?php echo site_url(); ?>/tachibana/"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bn_tachibana.jpg" class="slide_bn"></a></li>
</ul>
<!-- スライダーエリア -->
<!--<div id="slide_area">
<ul id="slide_list">
	<li><a href="<?php echo site_url(); ?>/contact"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/dkc-top01.jpg" class="slide_bn"></a></li>
</ul>
</div>-->
    <!--margin area -->
<!-- スライダーエリア　ここまで --> 
<!--<div id="sp_about_area">
<a href="<?php echo site_url(); ?>/instructor"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_int.jpg"></a>
<a href="<?php echo site_url(); ?>/school"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_school.jpg"></a>
<a href="<?php echo site_url(); ?>/blog"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_blg.jpg"></a>
<a href="<?php echo site_url(); ?>/contact"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/pc/bn_cont.jpg"></a>
<a href="<?php echo site_url(); ?>/osaka"><img alt="a" src="<?php echo get_bloginfo("template_directory") ?>/images/bana_osaka.jpg"></a>
<p>大阪校OPEN!<br>心斎橋駅・四ツ橋駅より徒歩3分!<br>初めてさんばかりなので、初めてダンスをする子にも入りやすいクラスです。</p>
</div>-->
<!-- sp_contents -->
<div id="sp_page_content_area">
<?php include_once("sp_contents.php");?>
</div><!-- pc_contents_bg -->
<div id="pc_contents_bg">
<div id="pc_contents">
<div id="pc_contents_left">
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
</div>
</body>
</html>