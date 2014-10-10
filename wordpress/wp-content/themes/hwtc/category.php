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
                <div class="banner-title-big"><?php single_cat_title();?></div>
            </div>
        </div>
</div>
<?php if ( have_posts() ) : ?>
<div class="container" style="max-width:100%;">
    <div class="columns-1 content">
		<?php 
		echo "<ul class='our-people'>";
		while(have_posts()):the_post();
		?>
        <li>
			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<?php the_excerpt();?>
        </li>
        <?php 
			endwhile;
			echo "</ul>";
		?>
		<div class="pagination">            
			<?php pagination();?>
		</div>
    </div>
</div>
<?php endif;wp_reset_query(); ?>
<?php get_footer();?>