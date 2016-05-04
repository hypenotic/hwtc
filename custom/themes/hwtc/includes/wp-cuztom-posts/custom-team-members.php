<?php //Connect CPT

$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-groups', //http://melchoyce.github.io/dashicons/
    'supports'    => array( 'title' )
     );

$team = register_cuztom_post_type( 'team', $args);

$team->add_meta_box(
    'teammate',
    'Members',    
    array(
        'bundle',    
            array( 
                array(
                    'name'          => 'name',
                    'label'         => 'Name',
                    'description'   => 'First and Last name',
                    'type'          => 'text',          
                ),
                array(
                    'name'          => 'title',
                    'label'         => 'Title',
                    'description'   => '',
                    'type'          => 'text',          
                ),
                // array(
                //     'name'          => 'email',
                //     'label'         => 'Email',
                //     'description'   => '',
                //     'type'          => 'text'
                //  ),
                //  array(
                //     'name'          => 'phone',
                //     'label'         => 'Phone',
                //     'description'   => '',
                //     'type'          => 'text'
                //  ),
                array(
                    'name'          => 'bio',
                    'label'         => 'Bio',
                    'description'   => '',
                    'type'          => 'wysiwyg'
                ),
                 array(
                    'name'          => 'image',
                    'label'         => 'Image',
                    'description'   => 'Dimensions 300px x 300px',
                    'type'          => 'image',
                )
            )
        )
);  

$team->add_meta_box(
'choose',
'Page',
    array(
        array(
            'name'          => 'page_select',
            'label'         => 'Page Select',
            'description'   => 'Which page will this team show up on?',
            'type'          => 'post_select',
            'args'          => array(
                'post_type' => 'page',
                'show_option_none'   => '-- Select Page --'
            )
        ),
    )
);  

?>