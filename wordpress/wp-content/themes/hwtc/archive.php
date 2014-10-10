<?php get_header();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
?>
<?php 
$img= get_bloginfo('template_url').'/images/banner.jpg';
?>

<div class="banner">
		<img src="<?php echo $img;?>" />
        <div class="bannertext">
            <div class="bannertext-content">
                <div class="banner-title-big">
					<?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'hwtc' ), get_the_date() );

						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'hwtc' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'hwtc' ) ) );

						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'hwtc' ), get_the_date( _x( 'Y', 'yearly archives date format', 'hwtc' ) ) );

						else :
							_e( 'Archives', 'hwtc' );

						endif;
					?>
				</div>
            </div>
        </div>
</div>
<?php if ( have_posts() ) : ?>
<div class="container" style="max-width:100%;">
    <div class="columns-1 content">
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
			endwhile;
		?>
		<div class="pagination">            
			<?php pagination();?>
		</div>
    </div>
</div>
<?php endif; ?>
<?php get_footer();?>