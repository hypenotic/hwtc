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
                <div class="banner-title-big">News<?php //the_title();?></div>
                <?php $sub_title = get_post_meta(get_the_ID(),'second-title',true); 
					  if($sub_title) {
				?>
                <div class="banner-title-small"><?php echo $sub_title;?></div>
                <?php } ?>
            </div>
        </div>
</div>

 <div class="full-width content">
	<div class="container">
	    <?php the_content();?>
		<div class="filters text-center">
			<h5 class="title">Categories</h5>
			<?php 
				$categories=get_categories(array('hide_empty' => 0,'exclude'=>array(1,3,75)));
				if($categories) {
						foreach($categories as $category) {
			?>
			<a href="<?php echo get_category_link($category->term_id);?>" class="<?php echo $category->slug;?>"><span class="blog-icon"></span><?php echo $category->name;?></a>
			<?php 
						}
				}
			?>
			<a href="javascript:void(0);" class="is-checked all" data-filter="*"><span class="blog-icon"></span> All</a>
		</div>
        <?php 
		global $wp_query;	
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
		$wp_query=new WP_Query(array('cat'=>'-3','post_type'=>'post','paged'=>$paged));
		if($wp_query->have_posts()):
		echo "<ul class='blog-lists'>";
		while($wp_query->have_posts()):$wp_query->the_post();
			$feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
			//echo $feat_image;
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
		endif;wp_reset_query();?>
    </div>
</div>
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>