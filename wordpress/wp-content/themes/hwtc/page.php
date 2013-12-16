<?php get_header();?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="banner" style="background-image: url('<?php bloginfo('template_url');?>/images/banner.jpg'); background-size:cover;">
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
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>