<?php
/**
 * Month View Template
 * The wrapper template for month view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );

?>

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

	$thecontent=new WP_Query(
		array(
			'page_id'=> $theid,
		)
	);

?>


<?php 
if($thecontent->have_posts()):while($thecontent->have_posts()):$thecontent->the_post(); 
?>
	<!-- Social Share Ends -->
	<div>
		<?php the_content();?> 
	</div>

<?php endwhile; endif;wp_reset_query();?>

<h2 style="text-align: center;margin-bottom: 20px;">Course Calendar</h2>

<?php

// Tribe Bar
tribe_get_template_part( 'modules/bar' );

// Main Events Content
tribe_get_template_part( 'month/content' );

do_action( 'tribe_events_after_template' );