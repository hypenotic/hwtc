<?php 
/* Template Name: Calendar View Template */

get_header();

$page_object = get_queried_object();
$page_id     = get_queried_object_id();

if ($page_id == 107) {
    $theurl = get_term_link(107);
} else {
    $theurl = get_term_link(106);
} 

?>

<?php if(have_posts()):while(have_posts()):the_post(); 

    if (tribe_is_month() && is_tax() ) {

       
        if ($page_id == 107) {
            $theid = 299;
        } else {
            $theid = 302;
        } 

        $img_src = wp_get_attachment_image_src(get_post_thumbnail_id($theid), 'full', false, ''); 
        if($img_src!='') {  
            $img=$img_src[0];
        }else {
            $img= get_bloginfo('template_url').'/images/banner.jpg';
        }

    } else {


        $img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); 
        if($img_src!='') {  
            $img=$img_src[0];
        }else {
            $img= get_bloginfo('template_url').'/images/banner.jpg';
        }
    }
	
?>
<div class="banner">
		<img src="<?php echo $img;?>" />
        <div class="bannertext">
            <div class="bannertext-content">
                <div class="banner-title-big">
                    <?php

                        if( tribe_is_month() && !is_tax() ) { // The Main Calendar Page
                            echo 'Course Calendar';
                        } elseif( tribe_is_month() && is_tax() ) { // Calendar Category Pages
                            echo 'Training' . ' &raquo; ' . single_term_title('', false);
                        } elseif( tribe_is_event() && !tribe_is_day() && !is_single() ) { // The Main Events List
                            echo 'Course List';
                        } elseif( tribe_is_event() && is_single() ) { // Single Events
                            echo get_the_title();
                        } elseif( tribe_is_day() ) { // Single Event Days
                            echo 'Courses on: ' . date('F j, Y', strtotime($wp_query->query_vars['eventDate']));
                        } elseif( tribe_is_venue() ) { // Single Venues
                            echo get_the_title();
                        } else {
                            echo get_the_title();
                        }

                    ?>
                </div>
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
            <div class="social-share">
                <?php

                if ($page_id == 107) {
                    $thetitle = 'Training - Hospitality Workers';
                } else {
                    $thetitle = 'Training - New to Hospitality';
                } 

                $post_title= $thetitle;
                $post_link= $theurl;
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
	    <?php the_content();?>    
    </div>
</div>

<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>