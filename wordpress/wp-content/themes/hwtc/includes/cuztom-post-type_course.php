<?php
$course  = new Cuztom_Post_Type( 'Course', array(
    'has_archive' => true,
    'supports' => array( 'title', '' )
) );

$course->add_meta_box(
    'Course Details',
    'course_details',
	array(
		array(
			'name'          => 'assign_page',
			'label'         => 'Select Page',
			'description'   => 'Please select at least a page to assign course',
			'type'          => 'post_checkboxes',
			'args'       => array(
				'post_type' => 'page',
				'post_parent' =>'18'
			)
		),
        array(
			'name'          => 'course_description',
			'label'         => 'Course Description',
			'description'   => '',
			'type'          => 'wysiwyg',
		),
		array(
			'name'          => 'location',
			'label'         => 'Location',
			'description'   => '',
			'type'          => 'text',
		),
		array(
			'name'          => 'day_of_the_week',
			'label'         => 'Day of the week',
			'description'   => '',
			'type'          => 'text',
		),
		array(
			'name'          => 'course_from',
			'label'         => 'Course start date',
			'description'   => '',
			'type'          => 'date'
		),
		array(
			'name'          => 'course_to',
			'label'         => 'Course end date',
			'description'   => '',
			'type'          => 'date'
		),
		array(
			'name'          => 'from_time',
			'label'         => 'From time',
			'description'   => '',
			'type'          => 'time',
		),
		array(
			'name'          => 'to_time',
			'label'         => 'To time',
			'description'   => '',
			'type'          => 'time',
		),
		array(
			'name'          => 'you_will_need',
			'label'         => 'You will need',
			'description'   => 'Requirements',
			'type'          => 'wysiwyg'
		),
		array(
			'name'          => 'please_consider',
			'label'         => 'Please consider',
			'description'   => '',
			'type'          => 'wysiwyg'
		),
		array(
			'name'          => 'contact_to_register',
			'label'         => 'Contact to Register',
			'description'   => '',
			'type'          => 'wysiwyg'
		),
		array(
			'name'          => 'message_before_classes',
			'label'         => 'Message before classes',
			'description'   => '',
			'type'          => 'textarea'
		),
		array(
			'name'          => 'file',
			'label'         => 'Add file',
			'description'   => '',
			'type'          => 'file'
		)
    )
);


$course->add_meta_box(
    'class_details',
    'Class Details',
	array(
		'bundle',
		array (
			array(
				'name'          => 'class_name',
				'label'         => 'Class name',
				'description'   => '',
				'type'          => 'text'
			),			
			array(
				'name'          => 'location',
				'label'         => 'Location',
				'description'   => '',
				'type'          => 'text',
			),
			array(
				'name'          => 'class_description',
				'label'         => 'Class description',
				'description'   => '',
				'type'          => 'textarea'
			),
			array(
				'name'          => 'class_day_of_the_week',
				'label'         => 'Class day of the week',
				'description'   => '',
				'type'          => 'text'
			),
			array(
				'name'          => 'class_from_date',
				'label'         => 'Class from date',
				'description'   => 'Please enter date in this format.(e.g, dd/mm/yy)',
				'type'          => 'text'
			),
			
			array(
				'name'          => 'class_to_date',
				'label'         => 'Class to date',
				'description'   => 'Please enter date in this format.(e.g, dd/mm/yy)',
				'type'          => 'text'
			),
			array(
				'name'          => 'class_from_time',
				'label'         => 'Class From Time',
				'description'   => 'Please enter time in this format.(e.g, Hour:Minute)',
				'type'          => 'text'
			),
			array(
				'name'          => 'class_to_time',
				'label'         => 'Class To Time',
				'description'   => 'Please enter time in this format.(e.g, Hour:Minute)',
				'type'          => 'text'
			)
		)	
	)
);	
?>