<?php
/**
 * Advanced Custom Fields Setup
 *
 * @package _s
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_general-fields',
		'title' => 'General Fields',
		'fields' => array (
			array (
				'key' => 'field_544954f65ce14',
				'label' => 'Street Address',
				'name' => 'street_address',
				'type' => 'text',
				'instructions' => 'Enter the street address of the bar here.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5449550a52b60',
				'label' => 'Phone Number',
				'name' => 'phone_number',
				'type' => 'text',
				'instructions' => 'Enter the bar\'s phone number here.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => 'acf_menu-fields',
		'title' => 'Menu Fields',
		'fields' => array (
			array (
				'key' => 'field_544968651d42a',
				'label' => 'Beers',
				'name' => 'beers',
				'type' => 'repeater',
				'instructions' => 'Add beers by clicking "Add Row" below.',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_5449687b1d42b',
						'label' => 'Brewery',
						'name' => 'brewery',
						'type' => 'text',
						'instructions' => 'Enter the brewery here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5449688e1d42c',
						'label' => 'Beer Name',
						'name' => 'beer_name',
						'type' => 'text',
						'instructions' => 'Enter the name of the beer here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_544968bf1d42d',
						'label' => 'Beer ABV',
						'name' => 'beer_abv',
						'type' => 'number',
						'instructions' => 'Enter the ABV of the beer here.',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array (
						'key' => 'field_544968cc1d42e',
						'label' => 'Beer Price',
						'name' => 'beer_price',
						'type' => 'number',
						'instructions' => 'Enter the price of the beer here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_544968da1d42f',
				'label' => 'Beer & Shot Combos',
				'name' => 'beer_and_shot_combos',
				'type' => 'repeater',
				'instructions' => 'Add beer/shot combos by clicking "Add Row" below.',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_5449697ab71e8',
						'label' => 'Combo',
						'name' => 'combo',
						'type' => 'text',
						'instructions' => 'Enter the combination here.',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'e.g. PBR + Spring Whiskey',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_544968da1d433',
						'label' => 'Combo Price',
						'name' => 'combo_price',
						'type' => 'number',
						'instructions' => 'Enter the price of the combo here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array (
						'key' => 'field_544969d4b71e9',
						'label' => 'Combo Description',
						'name' => 'combo_description',
						'type' => 'textarea',
						'instructions' => 'Add a description of the beer/shot combo here.',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_54496a17b71eb',
				'label' => 'Wines',
				'name' => 'wines',
				'type' => 'repeater',
				'instructions' => 'Add wines by clicking "Add Row" below.',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_54496a36b71ec',
						'label' => 'Wine Name',
						'name' => 'wine_name',
						'type' => 'text',
						'instructions' => 'Enter the name of the wine here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_54496a84b71ed',
						'label' => 'Source Region',
						'name' => 'source_region',
						'type' => 'text',
						'instructions' => 'Enter the region the wine is sourced from here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'e.g. Dao, Portugal',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_54496aecb71ee',
						'label' => 'Wine Price',
						'name' => 'wine_price',
						'type' => 'number',
						'instructions' => 'Enter the price of the wine here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_54496b01221b5',
				'label' => 'Food',
				'name' => 'food',
				'type' => 'repeater',
				'instructions' => 'Add food items by clicking "Add Row" below.',
				'sub_fields' => array (
					array (
						'key' => 'field_54496b2e221b6',
						'label' => 'Item Name',
						'name' => 'item_name',
						'type' => 'text',
						'instructions' => 'Enter the food item\'s name here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_54496b8c221b8',
						'label' => 'Item Price',
						'name' => 'item_price',
						'type' => 'number',
						'instructions' => 'Enter the price of the item here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array (
						'key' => 'field_54496b58221b7',
						'label' => 'Item Description',
						'name' => 'item_description',
						'type' => 'textarea',
						'instructions' => 'Enter a description of the item here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_54496b9fe942c',
				'label' => 'Cocktails',
				'name' => 'cocktails',
				'type' => 'repeater',
				'instructions' => 'Add cocktails by clicking "Add Row" below.',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_54496bd9e942d',
						'label' => 'Cocktail Name',
						'name' => 'cocktail_name',
						'type' => 'text',
						'instructions' => 'Enter the name of the cocktail here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'e.g. The Sleeping Monkey',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_54496c52e942f',
						'label' => 'Cocktail Price',
						'name' => 'cocktail_price',
						'type' => 'number',
						'instructions' => 'Enter the price of the cocktail here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array (
						'key' => 'field_54496c0be942e',
						'label' => 'Cocktail Description',
						'name' => 'cocktail_description',
						'type' => 'textarea',
						'instructions' => 'Enter a description of the cocktail here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));
	register_field_group(array (
		'id' => 'acf_gallery-fields',
		'title' => 'Gallery Fields',
		'fields' => array (
			array (
				'key' => 'field_5449553dd3c6e',
				'label' => 'Image Gallery',
				'name' => 'image_gallery',
				'type' => 'repeater',
				'instructions' => 'Add images to the gallery by clicking "Add Row" below.',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_54495559d3c6f',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'instructions' => 'Upload the image here.',
						'required' => 1,
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_54495576d3c70',
						'label' => 'Caption',
						'name' => 'caption',
						'type' => 'textarea',
						'instructions' => 'If you\'d like, enter a caption for the image here.',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
				),
				'row_min' => '',
				'row_limit' => 10,
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 3,
	));
	register_field_group(array (
		'id' => 'acf_press-fields',
		'title' => 'Press Fields',
		'fields' => array (
			array (
				'key' => 'field_544955bd560d6',
				'label' => 'Reviews',
				'name' => 'reviews',
				'type' => 'repeater',
				'instructions' => 'Add press reviews by clicking "Add Row" below.',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_54495609560d7',
						'label' => 'Media Outlet',
						'name' => 'media_outlet',
						'type' => 'text',
						'instructions' => 'Enter the name of the media outlet here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_54495650560d8',
						'label' => 'Source Link',
						'name' => 'source_link',
						'type' => 'text',
						'instructions' => 'Add a link to the source of the review here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_54495667560d9',
						'label' => 'Review Excerpt',
						'name' => 'review_excerpt',
						'type' => 'wysiwyg',
						'instructions' => 'Add a selection, or excerpt, from the review here.',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'basic',
						'media_upload' => 'yes',
					),
				),
				'row_min' => '',
				'row_limit' => 10,
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 4,
	));
	register_field_group(array (
		'id' => 'acf_info-fields',
		'title' => 'Info Fields',
		'fields' => array (
			array (
				'key' => 'field_54495737940be',
				'label' => 'Bar Hours',
				'name' => 'bar_hours',
				'type' => 'repeater',
				'instructions' => 'Add the bar\'s hours by clicking "Add Row" below.',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_544963bd940bf',
						'label' => 'Day(s) of the Week',
						'name' => 'days_of_the_week',
						'type' => 'text',
						'instructions' => 'Enter the day(s) of the week here (formatted however you\'d like).',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'e.g. Sun-Thu',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_54496430940c0',
						'label' => 'Hours',
						'name' => 'hours',
						'type' => 'text',
						'instructions' => 'Enter the hours here.',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'e.g. 6PM to 4AM',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_544964c4940c1',
				'label' => 'Stations',
				'name' => 'stations',
				'type' => 'textarea',
				'instructions' => 'Add the train stations the bar is accessible from. Enter each station on its own line.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_54496584940c3',
				'label' => 'Email Address',
				'name' => 'email_address',
				'type' => 'text',
				'instructions' => 'Add the info email address here.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_544965d5940c4',
				'label' => 'Reservation Notes',
				'name' => 'reservation_notes',
				'type' => 'wysiwyg',
				'instructions' => 'Enter any notes about calling/emailing for reservations and party size restrictions.',
				'required' => 1,
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 5,
	));
	register_field_group(array (
		'id' => 'acf_footer-fields',
		'title' => 'Footer Fields',
		'fields' => array (
			array (
				'key' => 'field_544956db28b12',
				'label' => 'Facebook Link',
				'name' => 'facebook_link',
				'type' => 'text',
				'instructions' => 'Add a link to the bar\'s Facebook page here.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_544956f428b13',
				'label' => 'Twitter Link',
				'name' => 'twitter_link',
				'type' => 'text',
				'instructions' => 'Add a link to the bar\'s Twitter profile here.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5449570528b14',
				'label' => 'Instagram Link',
				'name' => 'instagram_link',
				'type' => 'text',
				'instructions' => 'Add a link to the bar\'s Instagram profile here.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5449571b28b15',
				'label' => 'Yelp Link',
				'name' => 'yelp_link',
				'type' => 'text',
				'instructions' => 'Add a link to the bar\'s Yelp page here.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 6,
	));
}
