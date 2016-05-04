<?php
/**
 * Month View Content Template
 * The content template for the month view of events. This template is also used for
 * the response that is returned on month view ajax requests.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/content.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<div id="tribe-events-content" class="tribe-events-month">
	<!-- Month Title -->
	<?php //do_action( 'tribe_events_before_the_title' ) ?>
	<!-- <h2 class="tribe-events-page-title"><?php// tribe_events_title() ?></h2> -->
	<?php //do_action( 'tribe_events_after_the_title' ) ?>

	<!-- Notices -->
	<?php tribe_the_notices() ?>

	<!-- Month Header -->
	<?php do_action( 'tribe_events_before_header' ) ?>
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>

		<!-- Header Navigation -->
		<?php tribe_get_template_part( 'month/nav' ); ?>

	</div>
	<!-- #tribe-events-header -->
	<?php do_action( 'tribe_events_after_header' ) ?>

	<!-- Month Grid -->
	<?php tribe_get_template_part( 'month/loop', 'grid' ) ?>

	<!-- Month Footer -->
	<?php do_action( 'tribe_events_before_footer' ) ?>
	<div id="tribe-events-footer">

		<!-- Footer Navigation -->
		<?php do_action( 'tribe_events_before_footer_nav' ); ?>
		<?php tribe_get_template_part( 'month/nav' ); ?>
		<?php do_action( 'tribe_events_after_footer_nav' ); ?>

	</div>
	<!-- #tribe-events-footer -->
	<?php do_action( 'tribe_events_after_footer' ) ?>

	<?php tribe_get_template_part( 'month/mobile' ); ?>
	<?php tribe_get_template_part( 'month/tooltip' ); ?>

</div><!-- #tribe-events-content -->

<div class="container" style="max-width:100%;">
    <div class="columns-1 content calendar-page">
    <div class="content">

			<?php 

				$terms = get_the_terms(get_the_ID(), 'tribe_events_cat');
					$count = count($terms);
					if ( $count > 0 ){
						foreach ( $terms as $term ) {
					    		$name  = $term->slug;
						}
					}

				if ($name == 'new-to-hospitality') {
					$theid = 302;
				} else {
					$theid = 299;
				}	

				$query=new WP_Query(
					array(
						'post_type'=>'course',
						'post_status' => 'publish',
  						'posts_per_page' => -1,
					)
				);

			?>

		<?php if ($name == 'new-to-hospitality') { ?>

			<h5>Courses:</h5>
			<div class="course-accordion">
				<?php 
				if($query->have_posts()):while($query->have_posts()):$query->the_post(); 

					$assigned=get_post_meta(get_the_ID(),'_course_details_assign_page',true);

					if($assigned[0] == 302) {
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
			
		<?php } else  { ?>

			<h5>Courses:</h5>
			<div class="course-accordion">
				<?php 
				if($query->have_posts()):while($query->have_posts()):$query->the_post(); 

					$assigned=get_post_meta(get_the_ID(),'_course_details_assign_page',true);

					if($assigned[0] == 299) {
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
		<?php } ?>

			
		</div>
	</div>
</div>
