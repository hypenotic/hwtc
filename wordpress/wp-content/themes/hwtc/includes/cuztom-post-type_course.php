<?php
$course  = new Cuztom_Post_Type( 'Course', array(
    'has_archive' => true,
    'supports' => array( 'title', 'editor' )
) );

$course->add_meta_box(
    'Assign Pages',
    'assign_page',
    array(
        array(
        'name'          => 'name_post_checkboxes',
        'label'         => 'Pages',
        'description'   => 'Please select atleast a page',
        'type'          => 'post_checkboxes',
        'args'       => array(
            'post_type' => 'page'
			)
		)
    )
);
?>