<?php get_header();
$current_category = $wp_query->get_queried_object();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
?>
<?php 
$img= get_bloginfo('template_url').'/images/banner.jpg';
?>
<div class="banner">
		<img src="<?php echo $img;?>" />
        <div class="bannertext">
            <div class="bannertext-content">
                <div class="banner-title-big"><?php printf( __( 'All posts by %s', 'twentyfourteen' ), get_the_author() );?></div>
            </div>
        </div>
</div>
<div class="full-width content">
	<div class="container">
		<h5 class="text-center">Categories</h6>
		<div class="filters text-center">
			<?php 
				$categories=get_categories(array('hide_empty' => 0,'exclude'=>array(1,3)));
				if($categories) {
						foreach($categories as $category) {
			?>
			<a href="<?php echo get_category_link($category->term_id);?>" class="<?php echo $category->slug;?> <?php echo $category->slug;?> <?php if($current_category->term_id == $category->term_id) { echo "is-checked";}?>"><span class="blog-icon"></span><?php echo $category->name;?></a>
			<?php 
						}
				}
			?>
			<a href="<?php bloginfo('url');?>/blog" class="all" data-filter="*"><span class="blog-icon"></span> All</a>
		</div>
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