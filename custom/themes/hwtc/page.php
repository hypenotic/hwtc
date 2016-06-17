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

        <?php 

        $shares   = get_post_meta($post->ID,'_social_share',true);
        print_r($shares);

        if ($shares == 'yes') { ?>
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
        <?php } ?>

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
    <?php if ($ctalink) { ?>
    <a href="<?php echo $ctalink; ?>" class="button" target="_blank"><?php echo $ctabtn; ?></a>
    <?php } ?>
    </div>
    </div>
</section>
    
<?php } ?>

<?php if(is_page(18)) {?>
	<div class="full-width skilled-banner">
    	<div class="overlay-content">
        	<?php dynamic_sidebar('Find Talent Page Bottom Content');?>
        </div>
    </div>
<?php } ?>
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>