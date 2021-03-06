<?php get_header();?>
<?php 
	query_posts('post_type=page&p=22');
	if(have_posts()):while(have_posts()):the_post();
	
	$img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); 
	if($img_src!='') { 	
		$img=$img_src[0];
	}else {
		$img= get_bloginfo('template_url').'/images/banner.jpg';
	}
?>
    
    <style>
        .bannertext a:hover {
            background: white;
            color:rgb(154, 93, 180);
        }
    </style>
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

                <a class="button" style="border-radius: 8px;display: inline-block;text-decoration:none;margin-top: 16px;font-size: 18px;padding: 20px 35px;background: rgb(154, 93, 180);color:white;" href="http://hospitalitytrainingcentre.com/registration-form/">Register for Training Courses Now</a>
            </div>
        </div>
        <div class="banner-bottom">
                <div class="box-1">

                    <a href="<?php echo get_permalink(16);?>"> 	                        
                        <div class="container">                            
                                <h6>Get Skills & Training</h6>
                                <p>The Hospitality Workers Training Centre (HWTC) is a non-profit organization that provides hands-on, relevant training and programs that meet your work and life needs and aligns with the needs of the Hospitality industry.</p>
                        </div>   
                    </a>
                </div>
                <div class="box-2">                
                    <a href="<?php echo get_permalink(18);?>">
                        <div class="container">
                            <h6>Find Skilled Talent</h6>
                            <p>Connect with job-ready, engaged team members and develop the skills needed for them to thrive in the Hospitality workplace.</p>
                         </div>
                    </a> 
                </div>
            
        </div>
</div>
<div class="container">
    <div class="columns-wide content front-page-content">
	    <?php the_content();?>    
    </div>
</div>

<?php 

$ctatitle   = get_post_meta($post->ID,'_cta_heading',true);
$ctatext   = get_post_meta($post->ID,'_cta_blurb',true);
$ctabtn     = get_post_meta($post->ID,'_cta_btext',true);
$ctalink    = get_post_meta($post->ID,'_cta_blink',true);

if ($ctatext) { ?>

<section class="call-to-action front-cta">
<div class="container">
    <div class="columns-1 content">
    <?php if ($ctatitle) { ?>
         <h3><?php echo $ctatitle; ?></h3>
    <?php } ?>
    <div><?php echo $ctatext; ?></div>
    <?php if ($ctalink) { ?>
    <a href="<?php echo $ctalink; ?>" class="button" target="_blank"><?php echo $ctabtn; ?></a>
    <?php } ?>
    </div>
    </div>
</section>
    
<?php } ?>
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>