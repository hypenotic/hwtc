<?php 
/* Template Name: Team Page Template */
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
<?php endwhile; endif; wp_reset_query();?>


<div class="container">
    <div class="columns-1 content">

        <div class="social-share" style="margin-bottom: 30px;">
                    <?php
                    $post_title=get_the_title();
                    $post_link= urlencode(get_permalink());
                    $post_description= strip_tags($course_description);
                    $post_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                    $twitter_url ='http://twitter.com/home?status='.$post_link.'+'.$post_title;
                    $fb_url = 'https://www.facebook.com/sharer.php?s=100&amp;p[title]='.$post_title.'&amp;p[summary]='.$post_description.'&amp;p[url]='.$post_link;
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

	    <?php

            $teams = get_posts(array('post_type' => 'team'));

            foreach ($teams as $post) : setup_postdata( $post );

            $team = get_post_meta($post->ID,'_teammate',true);

            // print_r($teams);
            
        ?>
            
            <ul class='our-people'>

            <?php if($team) {
                foreach($team as $teammate) {
                // Get custom meta values    
                $name   = $teammate['_name'];
                $title  = $teammate['_title'];
                $email  = $teammate['_email'];
                $emaild  = $teammate['_emaild'];
                $phone  = $teammate['_phone'];
                $phoned  = $teammate['_phoned'];
                $cell  = $teammate['_cell'];
                $celld  = $teammate['_celld'];
                $bio    = $teammate['_bio'];
                $image  = $teammate['_image'];
            ?>       
                <li>
                    <aside>
                         <?php if ($image) {
                            echo wp_get_attachment_image($image) . '<br>';
                            } else {
                            echo '<img src="http://placehold.it/300x150"><br>';
                            }
                        ?>
                    </aside>
                    <article class="team-member">
                        <h3 class="team--name"><?php echo $name;?></h3>
                        <h4 class="team--title"><?php echo $title;?></h4>
                        <div class="team-member--contact">
                            <?php if ($email) { ?>
                            <a href="mailto:<?php echo $email;?>"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $email;?></a><br/>
                            <?php } ?>
                            <?php if ($phone) { ?>
                            <a href="tel:<?php echo $phone;?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $phoned;?></a><br/>
                            <?php } ?>
                            <?php if ($cell) { ?>
                            <a href="tel:<?php echo $cell;?>"><i class="fa fa-mobile" aria-hidden="true"></i><?php echo $celld;?></a>
                            <?php } ?>
                        </div>
                       
                        <?php echo $bio;?>
                    </article>
               </li>
          
            <?php
                    }
                }
            ?>
        <!-- end loop -->
        </ul>
            
        <?php 
        endforeach; 
        wp_reset_postdata();
        ?>
    </div>
</div>
<?php get_footer();?>