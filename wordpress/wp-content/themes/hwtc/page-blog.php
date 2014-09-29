<?php 
/* Template Name: About Page Template */
?>
<?php get_header();?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<?php  
	$img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); 
	if($img_src!='') { 	
		$img=$img_src[0];
	}else {
		$img= get_bloginfo('template_url').'/images/banner.jpg';
	}
?>
<div class="banner">
		<img src="<?php echo $img;?>" />
        <div class="bannertext">
            <div class="bannertext-content">
                <div class="banner-title-big"><?php the_title();?></div>
                <?php $sub_title = get_post_meta(get_the_ID(),'second-title',true); 
					  if($sub_title) {
				?>
                <div class="banner-title-small"><?php echo $sub_title;?></div>
                <?php } ?>
            </div>
        </div>
</div>


<div class="container">
    <div class="columns-1 content">
	    <?php the_content();?>    
        
        <?php query_posts('cat=-3&showposts=-1');
		if(have_posts()):
		echo "<ul class='our-people'>";
		while(have_posts()):the_post();
		?>
        <li>
			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<?php the_excerpt();?>
        </li>
        <?php endwhile;
		echo "</ul>";
		endif;wp_reset_query();?>
    </div>
</div>
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>