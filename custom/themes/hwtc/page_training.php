<?php 
/* Template Name: Training Page Template */
?>
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
                <div class="banner-title-big"><?php the_title();?></div>
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
			<!-- Social Share Starts -->
				<div class="social-share">
					<?php
					$post_title=get_the_title();
					$post_link= urlencode(get_permalink());
					$post_description= strip_tags($course_description);
					$post_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
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
						<li><a id="facebook" href="<?php echo $fb_url;?>" rel="nofollow" target="_blank">Facebook</a></li>
						<li><a id="twitter"  href="<?php echo $twitter_url;?>" rel="nofollow" target="_blank">Twitter</a></li>
						<li><a id="mail" href="<?php echo $mail_url;?>" rel="nofollow" target="_blank">Email</a></li>
						<li><a id="pinterest" href="<?php echo $pintrest_url;?>" rel="nofollow" target="_blank">Pinterest</a></li>
					</ul>
				</div>
			<!-- Social Share Ends -->
    <div class="content">
			<?php 
				$parent=get_the_ID();
				$query=new WP_Query(array('post_type'=>'course','showposts'=> -1));
				if($query->have_posts()):
			?>
			<h5>Courses:</h5>
			<div class="course-accordion">
				<?php while($query->have_posts()):$query->the_post(); 
						$assigned=get_post_meta(get_the_ID(),'_course_details_assign_page',true);
						if($assigned[0] == $parent) {
				?>
					<h3><a href="<?php the_permalink();?>" id="<?php echo( basename(get_permalink()) );?>"><?php the_title();?></a></h3>
							<div class="<?php echo( basename(get_permalink()) );?> course-accodion-content">
									<!-- Social Share Starts -->
										<div class="social-share">
											<?php
											$post_title=get_the_title();
											$post_link= urlencode(get_permalink());
											$post_description= strip_tags($course_description);
											$post_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
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
												<li><a id="facebook" href="<?php echo $fb_url;?>" rel="nofollow" target="_blank">Facebook</a></li>
												<li><a id="twitter"  href="<?php echo $twitter_url;?>" rel="nofollow" target="_blank">Twitter</a></li>
												<li><a id="mail" href="<?php echo $mail_url;?>" rel="nofollow" target="_blank">Email</a></li>
												<li><a id="pinterest" href="<?php echo $pintrest_url;?>" rel="nofollow" target="_blank">Pinterest</a></li>
											</ul>
										</div>
									<!-- Social Share Ends -->
									<?php get_template_part( 'template-part', 'course-details' ); ?>
							</div>
				<?php
						}
					endwhile;
				?>
			</div>
			<?php endif;wp_reset_query();?>
		</div>
	</div>
</div>
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>