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
                $phone  = $teammate['_phone'];
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
                    <article>
                        <h3 class="team--name"><?php echo $name;?></h3>
                        <h4 class="team--title"><?php echo $title;?></h4>
                        <?php echo $bio;?>
                    </article>
               </li>
            </ul>

          
            <?php
                    }
                }
            ?>
        <!-- end loop -->
            
        <?php 
        endforeach; 
        wp_reset_postdata();
        ?>
    </div>
</div>
<?php get_footer();?>