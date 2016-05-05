<?php 
/* Template Name: About Page Template */
?>
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
                <div class="banner-title-big"><?php the_title();?></div>
                <?php $sub_title = get_post_meta(get_the_ID(),'second-title',true); 
					  if($sub_title) {
				?>
                <div class="banner-title-small"><?php echo $sub_title;?></div>
                <?php } ?>
            </div>
        </div>
</div>


<div class="container">
    <div class="columns-1 content">
	    <?php the_content();?>    
    </div>
</div>

<?php 

$ctatitle   = get_post_meta($post->ID,'_cta_heading',true);
$ctatext   = get_post_meta($post->ID,'_cta_blurb',true);
$ctabtn     = get_post_meta($post->ID,'_cta_btext',true);
$ctalink    = get_post_meta($post->ID,'_cta_blink',true);

if ($ctatext) { ?>

<section class="call-to-action">
<div class="container">
    <div class="columns-1 content">
    <?php if ($ctatitle) { ?>
         <h3><?php echo $ctatitle; ?></h3>
    <?php } ?>
    <div><?php echo $ctatext; ?></div>
    <a href="<?php echo $ctalink; ?>" class="button" target="_blank"><?php echo $ctabtn; ?></a>
    </div>
    </div>
</section>
    
<?php } ?>
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>