<?php 
/* Template Name: Training Page Template */
?>
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
	    <?php the_content();?>    
    </div>
</div>
<div class="container" style="max-width:100%;">
    	 <div class="columns-1 content">
			<?php 
				$parent=get_the_ID();
				$query=new WP_Query(array('post_type'=>'course','showposts'=> -1));
				if($query->have_posts()):
			?>
			<h5>Courses We Offered:</h5>
			<div class="course-accordion">
				<?php while($query->have_posts()):$query->the_post(); 
						$assigned=get_post_meta(get_the_ID(),'_course_details_assign_page',true);
						$course_description=get_post_meta(get_the_ID(),'_course_details_course_description',true);
						$location=get_post_meta(get_the_ID(),'_course_details_location',true);
						$day_of_the_week=get_post_meta(get_the_ID(),'_course_details_day_of_the_week',true);
						$course_from=get_post_meta(get_the_ID(),'_course_details_course_from',true);
						$course_to=get_post_meta(get_the_ID(),'_course_details_course_to',true);
						$from_time=get_post_meta(get_the_ID(),'_course_details_from_time',true);
						$to_time=get_post_meta(get_the_ID(),'_course_details_to_time',true);
						$you_will_need=get_post_meta(get_the_ID(),'_course_details_you_will_need',true);
						$please_consider=get_post_meta(get_the_ID(),'_course_details_please_consider',true);
						$contact_to_register=get_post_meta(get_the_ID(),'_course_details_contact_to_register',true);
						$class_details=get_post_meta(get_the_ID(),'class_details',true);
						
						if($assigned[0] == $parent) {
				?>
							<h3><a href="<?php the_permalink();?>" id="<?php echo( basename(get_permalink()) );?>"><?php the_title();?></a></h3>
							<div class="<?php echo( basename(get_permalink()) );?> course-accodion-content">
									<?php if($course_description !='') { ?>
										<div class="accordion-item">	
											<div class="title">Course Description:</div> <div class="detail"><?php echo $course_description; ?> </div>
										</div>
									<?php } ?>
									<?php if($location !='') { ?>
										<div class="accordion-item">		
											<div class="title">Location:</div> <div class="detail"><?php echo $location; ?> </div>
										</div>
									<?php } ?>
									<?php if($day_of_the_week !='') { ?>
										<div class="accordion-item">			
											<div class="title">Day of the week:</div> <div class="detail"><?php echo $day_of_the_week; ?> </div>
										</div>
									<?php } ?>
									<?php if($course_from !='') { ?>
										<div class="accordion-item">		
											<div class="title">Course Start Date:</div> 
											<div class="detail"><?php echo $course_from; ?> </div>
										</div>
									<?php } ?>
									<?php if($course_to !='') { ?>
										<div class="accordion-item">			
											<div class="title">Course End Date:</div> 
											<div class="detail"><?php echo $course_to; ?> </div>
										</div>
									<?php } ?>									
									<?php if($from_time !='') { ?>
										<div class="accordion-item">			
											<div class="title">Course Start Time:</div> <div class="detail"><?php echo date('h:i A', strtotime($from_time)); ?> </div>
										</div>
									<?php } ?>
									<?php if($to_time !='') { ?>
										<div class="accordion-item">		
											<div class="title">Course End Time:</div> <div class="detail"><?php echo date('h:i A', strtotime($to_time)); ?></div>
										</div>
									<?php } ?>									
									<?php if($you_will_need !='') { ?>
										<div class="accordion-item">		
											<div class="title">You will need:</div> <div class="detail"><?php echo $you_will_need; ?> </div>
										</div>
									<?php } ?>
									<?php if($please_consider !='') { ?>
										<div class="accordion-item">		
											<div class="title">Please consider:</div> <div class="detail"><?php echo $please_consider; ?> </div>
										</div>
									<?php } ?>									
									<?php if($contact_to_register !='') { ?>
										<div class="accordion-item">		
											<div class="title">Contact to register:</div> <div class="detail"><?php echo $contact_to_register; ?> </div>
										</div>
									<?php } ?>
									
									<?php if($class_details!='') {
											foreach($class_details as $class_detail) {
									?>
										<?php if($class_detail['_class_details_class_name'] !='') { ?>
										<div class="accordion-item">		
											<div class="title">Class name:</div> <div class="detail"><?php echo $class_detail['_class_details_class_name']; ?> </div>
										</div>
										<?php } ?>	
										<?php if($class_detail['_class_details_class_description'] !='') { ?>
										<div class="accordion-item">		
											<div class="title">Class description:</div> <div class="detail"><?php echo $class_detail['_class_details_class_description']; ?> </div>
										</div>
										<?php } ?>	
										<?php if($class_detail['_class_details_class_date'] !='') { ?>
										<div class="accordion-item">		
											<div class="title">Class date:</div> <div class="detail"><?php echo $class_detail['_class_details_class_date']; ?> </div>
										</div>
										<?php } ?>	
										<?php if($class_detail['_class_details_class_from_time'] !='') { ?>
										<div class="accordion-item">		
											<div class="title">Class start time:</div> <div class="detail"><?php echo $class_detail['_class_details_class_from_time']; ?> </div>
										</div>
										<?php } ?>		
										<?php if($class_detail['_class_details_class_to_time'] !='') { ?>
										<div class="accordion-item">		
											<div class="title">Class end time:</div> <div class="detail"><?php echo $class_detail['_class_details_class_to_time']; ?> </div>
										</div>
										<?php } ?>				
									<?php			
											echo "</br>";
											}
										}
									?>
							</div>
				<?php
						}
					endwhile;
				?>
			</div>
			<?php endif;wp_reset_query();?>
		</div>
</div>

<?php if(is_page(18)) {?>
	<div class="full-width skilled-banner">
    	<div class="overlay-content">
        	<?php dynamic_sidebar('Find Talent Page Bottom Content');?>
        </div>
    </div>
<?php } ?>
<?php endwhile; endif; wp_reset_query();?>
<?php get_footer();?>