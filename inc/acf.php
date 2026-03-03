<?php
if (!defined('ABSPATH')) {
    exit;
}
if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key' => 'group_5b5ab6357a14d',
        'title' => __('Page Options', 'lawgist'),
        'fields' => array(
            array(
                'key' => 'field_5b5db8adfad44',
                'label' => __('General','lawgist'),
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c721ec24addf',
                'label' => __('Body Background Color','lawgist'),
                'name' => 'body_background_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5b5db828d1eb4',
                'label' => __('Header','lawgist'),
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'left',
                'endpoint' => 0,
            ),

            array(
                'key' => 'field_5c71891eb2114',
                'label' => __('Logo','lawgist'),
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5c718923b2115',
                'label' => __('Use Custom Logo','lawgist'),
                'name' => 'use_custom_logo',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5c71894cb2116',
                'label' => __('Select Logo','lawgist'),
                'name' => 'select_logo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c718923b2115',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5b82b1e19608e',
        'title' => __('Post Page Layout', 'lawgist'),
        'fields' => array(
            array(
                'key' => 'field_5b82b1e86dd24',
                'label' => __('Use Custom Page Layout?','lawgist'),
                'name' => 'use_custom_page_layout',
                'type' => 'true_false',
                'instructions' => 'Check this to override theme default single page layout function to any custom layout for this page only.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => 'Yes',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5b82b1fd6dd25',
                'label' => __('Select Custom Layout','lawgist'),
                'name' => 'select_custom_layout',
                'type' => 'select',
                'instructions' => 'Select custom page layout for this posts page.',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5b82b1e86dd24',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'fullpage' => 'Full Page',
                    'left-sidebar' => 'Left Sidebar',
                    'right-sidebar' => 'Right Sidebar',
                ),
                'default_value' => false,
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'modified' => false,
    ));



//Header Footer Include/Eclude Options
acf_add_local_field_group(array(
    'key' => 'group_600e8b288c563',
    'title' => __('Header Footer Include/Exclude Permission', 'lawgist'),
    'fields' => array(
        array(
            'key' => 'field_600e8b3a91509',
            'label' => __('Include Rules','lawgist'),
            'name' => 'include_rules',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => 'Add Include Rule',
            'sub_fields' => array(
                array(
                    'key' => 'field_600e8bd99150a',
                    'label' => __('Include On','lawgist'),
                    'name' => 'include_on',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'all' => 'Entire Website',
                        'specific' => 'Specific Pages',
                        'archive' => 'Archive Pages',
                        '404'   => '404 Page'
                    ),
                    'default_value' => false,
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 0,
                    'return_format' => 'value',
                    'ajax' => 0,
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_600e8cc79150b',
                    'label' => __('Pages','lawgist'),
                    'name' => 'pages',
                    'type' => 'post_object',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_600e8bd99150a',
                                'operator' => '==',
                                'value' => 'specific',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => array(
                        0 => 'page',
                        1 => 'post',
                        2 => 'portfolio'
                    ),
                    'taxonomy' => '',
                    'allow_null' => 0,
                    'multiple' => 1,
                    'return_format' => 'id',
                    'ui' => 1,
                ),
            ),
        ),
        array(
            'key' => 'field_600e8d139150c',
            'label' => __('Exclude Rules','lawgist'),
            'name' => 'exclude_rules',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => 'Add Exclude Rule',
            'sub_fields' => array(
                array(
                    'key' => 'field_600e8d139150d',
                    'label' => __('Exclude On','lawgist'),
                    'name' => 'exclude_on',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'all' => 'Entire Website',
                        'specific' => 'Specific Pages',
                        'archive' => 'Archive Pages',
                        '404'   => '404 Page'
                    ),
                    'default_value' => false,
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 0,
                    'return_format' => 'value',
                    'ajax' => 0,
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_600e8d139150e',
                    'label' => __('Pages','lawgist'),
                    'name' => 'pages',
                    'type' => 'post_object',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_600e8d139150d',
                                'operator' => '==',
                                'value' => 'specific',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => array(
                        0 => 'page',
                        1 => 'post',
                        2 => 'portfolio'
                    ),
                    'taxonomy' => '',
                    'allow_null' => 0,
                    'multiple' => 1,
                    'return_format' => 'id',
                    'ui' => 1,
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'lawgist_header',
            ),
        ),
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'lawgist_footer',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
));


//Main Menu
acf_add_local_field_group(array(
	'key' => 'group_5fe431f037a11',
	'title' => __('Menu Item Option','lawgist'),
	'fields' => array(
		array(
			'key' => 'field_5fe43201d9712',
			'label' => __('Hide this menu','lawgist'),
			'name' => 'hide_this_menu',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5fe43201',
			'label' => __('Mark as megamenu title','lawgist'),
			'name' => 'is_it_title',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'nav_menu_item',
				'operator' => '==',
				'value' => 'all',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));


acf_add_local_field_group(array(
	'key' => 'group_603b382c4e046',
	'title' => __('Megamenu Options', 'lawgist'),
	'fields' => array(
		array(
			'key' => 'field_603b3849b275f',
			'label' => __('Select Megamenu','lawgist'),
			'name' => 'select_megamenu',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'lawgist_megamenu',
			),
			'taxonomy' => '',
			'allow_null' => 1,
			'multiple' => 0,
			'return_format' => 'id',
			'ui' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'nav_menu_item',
				'operator' => '==',
				'value' => 'all',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));


acf_add_local_field_group(array(
	'key' => 'group_6075e4b703200',
	'title' => __('Testimonial', 'lawgist'),
	'fields' => array(
		array(
			'key' => 'field_6075e4c157efc',
			'label' => __('Designation','lawgist'),
			'name' => 'designation',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Web Developer',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_6075e4dc57efd',
			'label' => __('Review Rating','lawgist'),
			'name' => 'review_rating',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				1 => '1',
				2 => '2',
				3 => '3',
				4 => '4',
				5 => '5',
			),
			'default_value' => 5,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
        array(
            'key' => 'field_5f69fdfe6c023',
            'label' => __('Social Links','lawgist'),
            'name' => 'social_links',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => '',
            'sub_fields' => array(
                array(
                    'key' => 'field_5f69fe0f6c024',
                    'label' => __('icon','lawgist'),
                    'name' => 'icon',
                    'type' => 'font-awesome',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'icon_sets' => array(
                        0 => 'fas',
                        1 => 'far',
                        2 => 'fab',
                    ),
                    'custom_icon_set' => '',
                    'default_label' => '',
                    'default_value' => '',
                    'save_format' => 'element',
                    'allow_null' => 0,
                    'show_preview' => 1,
                    'enqueue_fa' => 0,
                    'fa_live_preview' => '',
                    'choices' => array(
                    ),
                ),
                array(
                    'key' => 'field_5f69feb807fcb',
                    'label' => __('URL','lawgist'),
                    'name' => 'url',
                    'type' => 'url',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'https://facebook.com',
                    'placeholder' => 'https://facebook.com',
                ),
            ),
        ),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'lawgist_testimonial',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
    ));


    


endif;
