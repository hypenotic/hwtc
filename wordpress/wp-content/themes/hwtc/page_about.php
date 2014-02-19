<?php 
/* Template Name: About Page Template */
?>
<?php get_header();?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php
$args = array(
        'post_type' => 'slide',
        'posts_per_page' => 10
	);	
	
	// The Query
	$the_query = new WP_Query( $args );
	
	// Check if the Query returns any posts
	if ( $the_query->have_posts() ) {
	
	// Start the Slider ?>
		<ul class="slider">
			
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'banner') );
			?>
			
				<li class="slide-container" style="background-image:url(<?php echo $url;?>);">
					<img src="<?php echo $url;?>" alt="<?php the_title();?>" />
                    <div class="bannertext">
                        <div class="bannertext-content">
                        	<div class="banner-title-big"><?php the_title();?></div>
                        </div>     
                   </div>
				</li>
				
			<?php endwhile; ?>
	
		</ul><!-- .slider-->
		<?php 
	// Reset Post Data
	wp_reset_postdata();
	} else { 
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

<?php } ?>

<div class="container">
    <div class="columns-1 content">
	    <?php the_content();?>    
        <div class="our-people-title"><h1>Our People</h1></div>
        <?php query_posts('cat=3');
		if(have_posts()):
		echo "<ul class='our-people'>";
		while(have_posts()):the_post();
		?>
        <li>
        	<?php $img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(150,150), false, ''); if($img_src[0]) { ?>
        	<aside><img src="<?php echo $img_src[0];?>" /></aside>
            <?php } ?>
            <article>
                <h3><?php the_title();?></h3>
                <?php the_content();?>
            </article>
        </li>
        <?php endwhile;
		echo "</ul>";
		endif;wp_reset_query();?>
    </div>
</div>
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>