<div class="single-course">
		<?php 
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
			$message_before_classes = get_post_meta(get_the_ID(),'_course_details_message_before_classes',true);
		?>
			<div class="accordion-item">	
				<div class="title">Course:</div> 
				<div class="detail"><b><?php the_title(); ?></b></div>
			</div>
			<?php if($course_description !='') { ?>
				<div class="accordion-item">	
					<div class="title">Course Description:</div> 
					<div class="detail"><?php echo $course_description; ?> </div>
				</div>
			<?php } ?>
			<?php if($location !='') { ?>
				<div class="accordion-item">		
					<div class="title">Location:</div>
					<div class="detail"><?php echo $location; ?> </div>
				</div>
			<?php } ?>
			<?php if($day_of_the_week !='') { ?>
				<div class="accordion-item">			
					<div class="title">Day of the week:</div>
					<div class="detail"><?php echo $day_of_the_week; ?> </div>
				</div>
			<?php } ?>
			<?php if($course_from !='' || $course_to!='') { ?>
				<div class="accordion-item">		
					<div class="title">Course upto:</div> 
					<div class="detail">
						<?php echo date('F d', $course_from); if($course_to!='') { echo ' - '.date('F d', $course_to);} ?> 
					</div>
				</div>									
			<?php } ?>
			<?php if($from_time !='' || $to_time!='') { ?>
				<div class="accordion-item">		
					<div class="title">Course Timing:</div> 
					<div class="detail">
						<?php echo date('h:i A ', strtotime($from_time)); if($to_time!='') { echo ' - '.date('h:i A ', strtotime($to_time));} ?> 
					</div>
				</div>									
			<?php } ?>
			<?php if($you_will_need !='') { ?>
				<div class="accordion-item">		
					<div class="title">You will need:</div>
					<div class="detail"><?php echo $you_will_need; ?> </div>
				</div>
			<?php } ?>
			<?php if($please_consider !='') { ?>
				<div class="accordion-item">		
					<div class="title">Please consider:</div> <div class="detail"><?php echo $please_consider; ?> </div>
				</div>
			<?php } ?>									
			<?php if($contact_to_register !='') { ?>
				<div class="accordion-item">		
					<div class="title">Contact to register:</div> 
					<div class="detail"><?php echo $contact_to_register; ?> </div>
				</div>
			<?php } ?>
			
			<?php if($message_before_classes !='') { ?>
				<div class="accordion-item">		
					<div class="title">Note:</div> 
					<div class="detail"><?php echo $message_before_classes; ?> </div>
				</div>
			<?php } ?>
			
			<?php if($class_details!='') {
					foreach($class_details as $class_detail) {
			?>
				
				<?php if($class_detail['_class_details_class_date'] !='') { ?>
				<div class="accordion-item">		
					<div class="title">Class date:</div> 
					<div class="detail">
					
						<?php 
							$class_date=$class_detail['_class_details_class_date'];
							echo $class_date;
						?> 
						</div>
				</div>
				<?php } ?>	
				
				<?php if($class_detail['_class_details_class_name'] !='') { ?>
				<div class="accordion-item">		
					<div class="title">Class name:</div>
					<div class="detail"><b><?php echo $class_detail['_class_details_class_name']; ?></b></div>
				</div>
				<?php } ?>	
				<?php if($class_detail['_class_details_class_description'] !='') { ?>
				<div class="accordion-item">		
					<div class="title">Class description:</div>
					<div class="detail"><?php echo $class_detail['_class_details_class_description']; ?> </div>
				</div>
				<?php			
					}
						echo "</br>";
						}
					}
				?>	
			</div>