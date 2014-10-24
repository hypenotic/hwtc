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
					<?php if($post->post_type =='course'){ ?>
						<?php the_title();?>
					<?php } else { ?>	
						News
					<?php } ?>	
				
				</div>
                <?php $sub_title = get_post_meta(get_the_ID(),'second-title',true); 
					  if($sub_title) {
				?>
                <div class="banner-title-small"><?php echo $sub_title;?></div>
                <?php } ?>
            </div>
        </div>
</div>
<div class="full-width">
	<div class="container content">
		<div class="filters text-center">
			<h5 class="title">Categories</h5>
			<?php 
				$post_categories = wp_get_post_categories( get_the_ID() );
				$cats = array();
				foreach($post_categories as $c){
					$cat = get_category( $c );
					$cats[] = array( 'id'=>$cat->term_id,'name' => $cat->name, 'slug' => $cat->slug );
				}
				$categories=get_categories(array('hide_empty' => 0,'exclude'=>array(1,3)));
				if($categories) {
						foreach($categories as $category) {
			?>
			<a href="<?php echo get_category_link($category->term_id);?>" class="<?php echo $category->slug;?> <?php echo $category->slug;?> <?php if($cats[0]['id'] == $category->term_id) { echo "is-checked";}?>"><span class="blog-icon"></span><?php echo $category->name;?></a>
			<?php 
						}
				}
			?>
			<a href="<?php bloginfo('url');?>/blog" class="all" data-filter="*"><span class="blog-icon"></span> All</a>
		</div>
		<div class="columns-1">
			<h1 class="title"><?php the_title();?></h1>
			<p class="meta">
				<span>Posted <?php the_time('m-d-y');?></span> 
				<span>by <?php the_author_posts_link();?> <?php echo " In ".get_the_category_list(',');?></span>
			</p>
			<?php the_content();?>    
			
			<?php if($post->post_type =='course'){ ?>
			<?php get_template_part( 'template-part', 'single-course' ); ?>
			<?php } ?>
			<div class="page-navigation">
				<div class="alignleft">
					<?php previous_post('%', '', 'yes'); ?>
				</div>
				<div class="alignright">
					<?php next_post('%', '', 'yes'); ?>
				</div>
			</div> <!-- end navigation -->		
		</div>
	</div>
</div>
<?php endwhile;endif;wp_reset_query();?>
<?php get_footer();?>