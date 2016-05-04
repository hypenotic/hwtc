<?php get_header();?>
<?php if(have_posts()):while(have_posts()):the_post(); 
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
                <div class="banner-title-big">
                    <?php

                        if( tribe_is_month() && !is_tax() ) { // The Main Calendar Page
                            echo 'Course Calendar';
                        } elseif( tribe_is_month() && is_tax() ) { // Calendar Category Pages
                            echo 'Training' . ' &raquo; ' . single_term_title('', false);
                        } elseif( tribe_is_event() && !tribe_is_day() && !is_single() ) { // The Main Events List
                            echo 'Course List';
                        } elseif( tribe_is_event() && is_single() ) { // Single Events
                            echo get_the_title();
                        } elseif( tribe_is_day() ) { // Single Event Days
                            echo 'Courses on: ' . date('F j, Y', strtotime($wp_query->query_vars['eventDate']));
                        } elseif( tribe_is_venue() ) { // Single Venues
                            echo get_the_title();
                        } else {
                            echo get_the_title();
                        }

                    ?>
                </div>
                <?php $sub_title = get_post_meta(get_the_ID(),'second-title',true); 
					  if($sub_title) {
				?>
                <div class="banner-title-small"><?php echo $sub_title;?></div>
                <?php } ?>
            </div>
        </div>
</div>
<div class="container" style="max-width:100%;">
    <div class="columns-1 content">
	    <?php the_content();?>    
    </div>
</div>
<?php if(is_page(18)) {?>
	<div class="full-width skilled-banner">
    	<div class="overlay-content">
        	<?php dynamic_sidebar('Find Talent Page Bottom Content');?>
        </div>
    </div>
<?php } ?>
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>