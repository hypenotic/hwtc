<?php //Generic Modular Content Template for Posts and Page

$pages = new Cuztom_Post_Type('page');

$pages->add_meta_box(
    'cta',
    'Call to Action', 
    array(
        array(
            'name'          => 'heading',
            'label'         => 'CTA Heading',
            'description'   => '',
            'type'          => 'text',
        ),
        array(
            'name'          => 'blurb',
            'label'         => 'Blurb',
            'description'   => '',
            'type'          => 'wysiwyg'
        ),
        array(
            'name'          => 'blink',
            'label'         => 'Button Link',
            'description'   => '',
            'type'          => 'text',
        ),
        array(
            'name'          => 'btext',
            'label'         => 'Button Text',
            'description'   => '',
            'type'          => 'text',
        )
    )
);

$pages->add_meta_box(
    'social',
    'Social Share', 
    array(
        array(
            'name'          => 'share',
            'label'         => 'Share Button',
            'description'   => '(appear just above post content)',
            'type'          => 'yesno',
        )    
    )
);


?>