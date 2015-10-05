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
	$file= get_post_meta(get_the_ID(),'_course_details_file',true);
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
			<div class="detail"><p><?php echo $location; ?></p></div>
		</div>
	<?php } ?>
	<?php if($day_of_the_week !='') { ?>
		<div class="accordion-item">			
			<div class="title">Day of the week:</div>
			<div class="detail"><p><?php echo $day_of_the_week; ?></p></div>
		</div>
	<?php } ?>
	<?php if($course_from !='' || $course_to!='') { ?>
		<div class="accordion-item">		
			<div class="title">Start Date:</div>
			<div class="detail">
				<p><?php echo date('F d', $course_from); if($course_to!='') { echo ' - '.date('F d', $course_to);} ?> </p>
			</div>
		</div>									
	<?php } ?>
	<?php if($from_time !='' || $to_time!='') { ?>
		<div class="accordion-item">		
			<div class="title">Course Timing:</div> 
			<div class="detail">
				<p><?php echo date('h:i A ', strtotime($from_time)); if($to_time!='') { echo ' - '.date('h:i A ', strtotime($to_time));} ?> </p>
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
		<br>
	<?php } ?>

	<?php if($file !='') { ?>
		<div class="accordion-item">		
			<div class="title">Download:</div> 
			<div class="detail">Please see the <a href="<?php echo $file; ?>">downloadable PDF</a> for information about this course </div>
		</div>
		<br>
	<?php } ?>
	
	<?php if($class_details!='') {
			foreach($class_details as $class_detail) {
	?>
		
		
		<?php if($class_detail['_class_details_class_name'] !='') { ?>
		<div class="accordion-item">		
			<div class="title">Class name:</div>
			<div class="detail"><b><?php echo $class_detail['_class_details_class_name']; ?></b></div>
		</div>
		<?php } ?>	
		<?php if($class_detail['_class_details_location'] !='') { ?>
		<div class="accordion-item">		
			<div class="title">Class location:</div>
			<div class="detail"><b><?php echo $class_detail['_class_details_location']; ?></b></div>
		</div>
		<?php } ?>	
		<?php if($class_detail['_class_details_class_description'] !='') { ?>
		<div class="accordion-item">		
			<div class="title">Class description:</div>
			<div class="detail"><?php echo $class_detail['_class_details_class_description']; ?> </div>
		</div>
		<?php } ?>	
		
		<?php if($class_detail['_class_details_class_day_of_the_week']!='') { ?>
			<div class="accordion-item">			
				<div class="title">Class day of the week:</div>
				<div class="detail"><?php echo $class_detail['_class_details_class_day_of_the_week']; ?></div>
			</div>
		<?php } ?>
		
		<?php 
			$class_from_date=$class_detail['_class_details_class_from_date'];
			$class_to_date=$class_detail['_class_details_class_to_date'];
		if($class_from_date!='' || $class_to_date!='') { ?>
			<div class="accordion-item">		
				<div class="title">Course upto:</div> 
				<div class="detail">
					<?php echo date('F d', strtotime($class_from_date)); if($class_to_date!='') { echo ' - '.date('F d', strtotime($class_to_date));} ?>
				</div>
			</div>									
		<?php } ?>
		<?php 
		
			$class_from_time = $class_detail['_class_details_class_from_time'];
			$class_to_time = $class_detail['_class_details_class_to_time'];
		
		if($class_from_time !='' || $class_to_time!='') { ?>
		<div class="accordion-item">		
			<div class="title">Class Timing:</div> 
			<div class="detail">
				<p><?php echo date('h:i A ', strtotime($class_from_time)); if($class_to_time!='') { echo ' - '.date('h:i A ', strtotime($class_to_time));} ?> </p>
			</div>
		</div>									
		<?php } ?>
	<?php			
			echo "</br></br>";
			}
		}	
	?>