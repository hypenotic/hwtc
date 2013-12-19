<?php get_header();?>
<?php if(have_posts()):while(have_posts()):the_post(); 
	$img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); 
	if($img_src!='') { 	
		$img=$img_src[0];
	}else {
		$img= get_bloginfo('template_url').'/images/banner.jpg';
	}
?>
<div class="banner" style="background-image: url('<?php echo $img;?>'); background-size:cover; background-repeat:no-repeat;">
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
    </div>
</div>
<?php if(is_page(18)) {?>
	<div class="full-width skilled-banner">
    	<div class="overlay-content">
        <?php dynamic_sidebar('Find Talent Page Bottom Content');?>
        <!--<h6>We look forward to discussing your training & hiring needs & to arrange for English or computer classes at your property</h6>
		<p>Please contact us to arrange a meeting to discuss the opportunity to work together. </p>
        <p>Email or call for more information <a href="mailto:training@hospitalitytrainingcentre.com">training@hospitalitytrainingcentre.com</a> | 647 930 9518</p> -->
        </div>
    </div>
<?php } ?>
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>