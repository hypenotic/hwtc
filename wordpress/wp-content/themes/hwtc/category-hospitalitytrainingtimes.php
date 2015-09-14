<?php get_header();
$current_category = $wp_query->get_queried_object();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
?>
<?php 
$img= get_bloginfo('template_url').'/images/banner-newsletter.jpg';
?>
<div class="banner">
		<img src="<?php echo $img;?>" />
        <div class="bannertext">
            <div class="bannertext-content">
                <div class="banner-title-big">Hospitality Training Times</div>
            </div>
        </div>
</div>
<div class="full-width content">
	<div class="container">
	<p style="width: 70%;">
	The Hospitality Workers Training Centre (HWTC) is your training centre. 
	We work in partnership with Unite Here, Local 75 to make sure you have access to skills and training
	that meets your needs. We offer classes on a range of topics from English and computer classes to hands on skills like banquet and restaurant serving and Smart Serve. 
	Many of the classes take place right in your properties. All our small classes are led by professionals who are there to help you succeed. 
	Please visit our <a href="http://hospitalitytrainingcentre.com">website</a> to learn about our upcoming training programs:
	and “Like” us on <a href="https://www.facebook.com/HospitalityTrainingCentre">Facebook</a> to stay up to date.
</p>

		<?php 
		if(have_posts()):
			echo "<ul class='blog-lists'>";
			while(have_posts()):the_post();
			$feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
		?>
				<li>
					<div class="blog-icon" style="background-image:url(<?php echo $feat_image;?>);">
						<?php if($feat_image) { ?>
							<a href="<?php the_permalink();?>"><img src="<?php echo $feat_image;?>"></a>
						<?php } ?>
					</div>
					<div class="blog-content">
						<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						<p class="meta">
							<span>Posted <?php the_time('m-d-y');?></span> 
							<span>by <?php the_author_posts_link();?> <?php echo " In ".get_the_category_list(',');?></span>
						</p>	
						<?php the_excerpt();?>
					</div>
				</li>
			<?php endwhile;
			echo "</ul>";
			?>
			<div class="pagination">            
				<?php pagination();?>
			</div>
		<?php
		else: 
			echo "<h3 class='text-center'>There are no posts in this category.</h3>";
		endif;wp_reset_query();?>
	</div>
</div>	
<?php get_footer();?>