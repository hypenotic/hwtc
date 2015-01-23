<?php get_header();?>

<?php if(have_posts()):while(have_posts()):the_post(); 
	$img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); 
	// if($img_src!='') { 	
		// $img=$img_src[0];
	// }else {
		// $img= get_bloginfo('template_url').'/images/banner.jpg';
	// }
	$img="http://hospitalitytrainingcentre.com/wordpress/wp-content/uploads/2015/01/Training_030-e1421859852208.jpg";
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
			<div class="social-share">
            	<?php
				$post_title=get_the_title();
				$post_link= urlencode(get_permalink());
				$post_description= get_the_excerpt();
				$post_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				if($post_img==''){
					$post_img=get_bloginfo('template_url').'/images/logo.png';	
				}
				$twitter_url ='http://twitter.com/home?status='.$post_link.'+'.$post_title;
				$fb_url = 'https://www.facebook.com/sharer.php?s=100&amp;p[title]='.$post_title.'&amp;p[summary]='.$post_description.'&amp;p[url]='.$post_link.'&amp;p[images][0]='.$post_img;
				$pintrest_url='http://pinterest.com/pin/create/bookmarklet/?media='.$post_img.'&amp;url='.$post_link.'&amp;is_video=false&amp;description='.$post_description;
				$gplus_url='https://plus.google.com/share?url='.$post_link;
				$linkedin_url='http://www.linkedin.com/shareArticle?mini=true&amp;url='.$post_link.'&amp;title='.$post_title.'&amp;source='.$post_link;
				//$mail_url='mailto:?subject='.$post_title.'&amp;body='.$post_description .'-'.$post_link;
				$mail_url='http://www.sharethis.com/share?url='.$post_link.'&title='.$post_title.'&summary='.$post_description.'&img='.$post_img;
				?>
            	<ul>
					<li><b>Share this: </b></li>
                    <li><a id="facebook" href="<?php echo $fb_url;?>" rel="nofollow" target="_blank" onclick="ga('send', 'event', 'Share', 'Facebook', '<? echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>');">Facebook</a></li>
                	<li><a id="twitter"  href="<?php echo $twitter_url;?>" rel="nofollow" target="_blank" onclick="ga('send', 'event', 'Share', 'Twitter', '<? echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>');">Twitter</a></li>
					<li><a id="mail" href="<?php echo $mail_url;?>" rel="nofollow" target="_blank" onclick="ga('send', 'event', 'Share', 'Email', '<? echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>');">Email</a></li>
                	<li><a id="pinterest" href="<?php echo $pintrest_url;?>" rel="nofollow" target="_blank" onclick="ga('send', 'event', 'Share', 'Pinterest', '<? echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>');">Pinterest</a></li>
                </ul>
            </div>
			<p class="meta">
				<span>Posted <?php the_time('m-d-y');?></span> 
				<span>by <?php the_author_posts_link();?> <?php echo " In ".get_the_category_list(',');?></span>
			</p>
			
			<?php
			$img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				if($img) {
					echo "<p><img src='".$img."' /></p>";
				}
			?>
			<?php the_content();?>    
			
			<?php if($post->post_type =='course'){ ?>
			<?php get_template_part( 'template-part', 'single-course' ); ?>
			<?php } ?>
			<div class="page-navigation">
				<div class="alignleft">
					<?php previous_post('<< %', '', 'yes','','','8'); ?>
				</div>
				<div class="alignright">
					<?php next_post('% >>', '', 'yes','','','8'); ?>
				</div>
			</div> <!-- end navigation -->	
			<div class="span-8 center">
				<?php comments_template();?>
			</div>			
		</div>
	</div>
</div>
<?php endwhile;endif;wp_reset_query();?>
<?php get_footer();?>