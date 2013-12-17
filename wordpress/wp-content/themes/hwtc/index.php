<?php get_header();?>
<?php 
	query_posts('post_type=page&p=22');
	if(have_posts()):while(have_posts()):the_post(); ?>
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
        <div class="banner-bottom">
        	<div class="box-1">
	          	<div class="container">    
                    <h6>Get Skills & Training</h6>
                    <p>The Hospitality Workers Training Centre (HWTC) is a non-profit organization that provides hands-on, relevant training and programs that meet your work and life needs and aligns with the needs of the Hospitality industry.</p>
                 </div>   
            </div>
            <div class="box-2">
            	<div class="container">
                    <h6>Find Skilled Workers</h6>
                    <p>Connect with job-ready, engaged team members and develop the skills needed for them to thrive in the Hospitality workplace.</p>
                 </div>
            </div>
            
        </div>
</div>

<div class="container">
    <div class="columns-wide content">
	    <?php the_content();?>    
    </div>
</div>
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>