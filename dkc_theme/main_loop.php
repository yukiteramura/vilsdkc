<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php $content = get_the_content(); 
echo $content;
?>
<?php endwhile;endif; ?>