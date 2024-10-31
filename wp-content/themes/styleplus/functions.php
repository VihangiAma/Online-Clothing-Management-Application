<?php
/**
 * Setup Child Theme Styles
 */
function styleplus_enqueue_styles() {
	wp_enqueue_style( 'styleplus-style', get_stylesheet_directory_uri() . '/style.css', false, '1_0' );
}
// add_action( 'wp_enqueue_scripts', 'styleplus_enqueue_styles', 20 );


/**
 * Setup Child Theme Palettes
 *
 * @param string $palettes registered palette json.
 * @return string
 */
function styleplus_change_palette_defaults( $palettes ) {
	$palettes = '{"palette":[{"color":"#0a0a0a","slug":"palette1","name":"Palette Color 1"},{"color":"#232323","slug":"palette2","name":"Palette Color 2"},{"color":"#222222","slug":"palette3","name":"Palette Color 3"},{"color":"#0a0a0a","slug":"palette4","name":"Palette Color 4"},{"color":"#626262","slug":"palette5","name":"Palette Color 5"},{"color":"#626262","slug":"palette6","name":"Palette Color 6"},{"color":"#e9f5f5","slug":"palette7","name":"Palette Color 7"},{"color":"#f3f3f3","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"second-palette":[{"color":"#3182CE","slug":"palette1","name":"Palette Color 1"},{"color":"#2B6CB0","slug":"palette2","name":"Palette Color 2"},{"color":"#1A202C","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#F7FAFC","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"third-palette":[{"color":"#3182CE","slug":"palette1","name":"Palette Color 1"},{"color":"#2B6CB0","slug":"palette2","name":"Palette Color 2"},{"color":"#1A202C","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#F7FAFC","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"active":"palette"}';
	return $palettes;
}
add_filter( 'kadence_global_palette_defaults', 'styleplus_change_palette_defaults', 20 );

/**
 * Setup Child Theme Defaults
 *
 * @param array $defaults registered option defaults with kadence theme.
 * @return array
 */
function styleplus_change_option_defaults( $defaults ) {
	$new_defaults = '{"header_desktop_items":{"top":{"top_left":[],"top_left_center":[],"top_center":[],"top_right_center":[],"top_right":[]},"main":{"main_left":["social"],"main_left_center":[],"main_center":["logo"],"main_right_center":[],"main_right":["search","html","cart","navigation-2"]},"bottom":{"bottom_left":[],"bottom_left_center":[],"bottom_center":["navigation"],"bottom_right_center":[],"bottom_right":[]},"flag":true},"custom_logo":8,"logo_width":{"size":{"mobile":"","tablet":"","desktop":161},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":false},"logo_layout":{"include":{"mobile":"","tablet":"","desktop":"logo_only"},"layout":{"mobile":"","tablet":"","desktop":"standard"},"flag":true},"header_top_height":{"size":{"mobile":"","tablet":"","desktop":58},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":true},"header_main_height":{"size":{"mobile":"","tablet":"","desktop":77},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":true},"header_top_background":{"desktop":{"color":"#e9f5f5"},"flag":true},"header_main_background":{"desktop":{"color":"palette7"},"flag":false},"base_font":{"size":{"desktop":17},"lineHeight":{"desktop":1.6},"family":"Montserrat","google":true,"weight":"normal","variant":"regular","color":"palette4","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"sans-serif","flag":true},"primary_navigation_style":"standard","header_bottom_background":{"desktop":{"color":"palette1"},"flag":true},"primary_navigation_color":{"color":"palette9","hover":"palette8","active":"palette8"},"primary_navigation_spacing":{"size":4,"unit":"em"},"primary_navigation_typography":{"size":{"desktop":15},"lineHeight":{"desktop":""},"family":"inherit","google":false,"weight":"600","variant":"600","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"uppercase","fallback":"","flag":false},"header_bottom_height":{"size":{"mobile":"","tablet":"","desktop":50},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":true},"header_html_content":"<a href=\"\/wishlist\/\"><img class=\"aligncenter wp-image-350\" src=\"https:\/\/styleplus.wpdemosite.xyz\/wp-content\/uploads\/2021\/08\/menu.png\" alt=\"\" width=\"23\" height=\"21\" \/><\/a>","header_search_woo":true,"header_html_margin":{"size":[0,6,0,0],"unit":"px","locked":false,"flag":false},"header_search_background":{"color":"","hover":""},"header_search_modal_background":{"desktop":{"color":"palette7"},"flag":true},"header_search_modal_color":{"color":"palette1","hover":"palette5"},"header_search_icon":"search","header_search_icon_size":{"size":{"mobile":"","tablet":"","desktop":1.2},"unit":{"mobile":"em","tablet":"em","desktop":"em"},"flag":false},"secondary_navigation_typography":{"size":{"desktop":15},"lineHeight":{"desktop":""},"family":"inherit","google":false,"weight":"600","variant":"600","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"uppercase","fallback":"","flag":true},"header_cart_style":"slide","footer_items":{"top":{"top_1":["footer-widget5"],"top_2":[],"top_3":[],"top_4":[],"top_5":[]},"middle":{"middle_1":["footer-widget1"],"middle_2":["footer-widget2"],"middle_3":["footer-widget3"],"middle_4":["footer-widget4"],"middle_5":[]},"bottom":{"bottom_1":["footer-html"],"bottom_2":[],"bottom_3":[],"bottom_4":[],"bottom_5":[]},"flag":true},"footer_middle_columns":"4","footer_middle_layout":{"mobile":"row","tablet":"","desktop":"equal","flag":true},"footer_middle_widget_content":{"size":{"desktop":15},"lineHeight":{"desktop":""},"family":"inherit","google":false,"weight":"","variant":"","color":"","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":true},"footer_html_content":"{copyright} {year} {site-title}","footer_bottom_background":{"desktop":{"color":"palette7"},"flag":true},"footer_bottom_top_spacing":{"size":{"mobile":"","tablet":"","desktop":0},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":false},"footer_bottom_bottom_spacing":{"size":{"mobile":"","tablet":"","desktop":0},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":true},"footer_top_contain":{"mobile":"","tablet":"","desktop":"standard","flag":false},"footer_top_columns":"1","footer_top_layout":{"mobile":"row","tablet":"","desktop":"row","flag":false},"page_title_layout":"normal","page_title_height":{"size":{"mobile":"","tablet":"","desktop":20},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":false},"product_archive_title_layout":"normal","product_archive_layout":"normal","product_archive_content_style":"unboxed","product_archive_title_height":{"size":{"mobile":"","tablet":"","desktop":162},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":true},"product_archive_title_element_breadcrumb":{"enabled":true,"show_title":true,"flag":true},"product_content_element_extras":{"enabled":true,"title":"Free shipping on orders over $50!","feature_1":"Satisfaction Guaranteed","feature_2":"No Hassle Refunds","feature_3":"Secure Payments","feature_4":"","feature_5":"","feature_1_icon":"shield_check","feature_2_icon":"shield_check","feature_3_icon":"shield_check","feature_4_icon":"shield_check","feature_5_icon":"shield_check","flag":true},"product_content_element_payments":{"enabled":true,"title":"GUARANTEED SAFE CHECKOUT","visa":true,"mastercard":true,"amex":true,"discover":false,"paypal":false,"applepay":false,"stripe":false,"card_color":"inherit","custom_enable_01":false,"custom_img_01":"","custom_id_01":"","custom_enable_02":false,"custom_img_02":"","custom_id_02":"","custom_enable_03":false,"custom_img_03":"","custom_id_03":"","custom_enable_04":false,"custom_img_04":"","custom_id_04":"","custom_enable_05":false,"custom_img_05":"","custom_id_05":"","flag":true},"product_content_element_product_meta":{"enabled":false,"flag":true},"header_cart_padding":{"size":[0,"","",""],"unit":"em","locked":false,"flag":true},"page_title_element_breadcrumb":{"enabled":true,"show_title":true,"flag":true},"page_title_element_meta":{"id":"meta","enabled":false,"divider":"dot","author":true,"authorImage":false,"authorEnableLabel":true,"authorLabel":"","date":true,"dateEnableLabel":false,"dateLabel":"","dateUpdated":false,"dateUpdatedEnableLabel":false,"dateUpdatedLabel":"","comments":false,"flag":false},"page_content_style":"unboxed","footer_top_column_spacing":{"size":{"mobile":"","tablet":""},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":true},"footer_top_direction":{"mobile":"","tablet":"","desktop":"row","flag":false},"header_mobile_items":{"popup":{"popup_content":["mobile-navigation"]},"top":{"top_left":[],"top_center":[],"top_right":[]},"main":{"main_left":["mobile-logo"],"main_center":[],"main_right":["search","mobile-cart","popup-toggle"]},"bottom":{"bottom_left":[],"bottom_center":[],"bottom_right":[]},"flag":false},"header_popup_background":{"desktop":{"color":"palette7"},"flag":true},"mobile_navigation_color":{"color":"palette1","hover":"palette2","active":"palette1"},"mobile_navigation_typography":{"size":{"desktop":13},"lineHeight":{"desktop":""},"family":"inherit","google":false,"weight":"600","variant":"600","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"uppercase","fallback":"","flag":false},"product_archive_mobile_columns":"twocolumn","product_archive_title_font":{"size":{"desktop":15},"lineHeight":{"desktop":""},"family":"inherit","google":false,"weight":"","variant":"","color":"","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":false},"product_title_font":{"size":{"desktop":17},"lineHeight":{"desktop":""},"family":"inherit","google":false,"weight":"","variant":"","color":"","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":false},"footer_top_background":{"desktop":{"color":"palette7"},"flag":true},"footer_top_height":{"size":{"mobile":"","tablet":"","desktop":100},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":false},"footer_top_top_spacing":{"size":{"mobile":"","tablet":"","desktop":40},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":true},"footer_top_bottom_spacing":{"size":{"mobile":"","tablet":"","desktop":30},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":false}}';
	$new_defaults = json_decode( $new_defaults, true );
	return wp_parse_args( $new_defaults, $defaults );
}
add_filter( 'kadence_theme_options_defaults', 'styleplus_change_option_defaults', 20 );
/**
 * Setup Child Theme Starter
 *
 * @param array $data registered custom templates.
 * @return array
 */
function styleplus_child_add_starter_templates( $data ) {
	$data['styleplus'] = array(
		'slug'                => 'styleplus',
		'name'                => 'StylePlus',
		'local_content'       => get_stylesheet_directory() . '/starter/content.xml',
		'local_widget_data'   => get_stylesheet_directory() . '/starter/widget_data.json',
		'local_theme_options' => get_stylesheet_directory() . '/starter/theme_options.json',
		'url'                 => 'https://styleplus.wpdemosite.xyz/',
		'image'               => get_stylesheet_directory_uri() . '/starter/preview.png',
		'ecommerce'           => true,
		'homepage'            => 'Home',
		'blogpage'            => '',
		'type'                => 'elementor',
		'plugins'             => array(
			'anywhere-elementor/anywhere-elementor.php','easy-login-woocommerce/xoo-el-main.php','elementor/elementor.php','happy-elementor-addons/plugin.php','kadence-blocks/kadence-blocks.php','woocommerce/woocommerce.php','yith-woocommerce-wishlist/init.php',
		),
		'menus'       => array(
			'primary' => array(
				'menu'  => 'primary',
				'title' => 'Main Menu',
			),
'secondary' => array(
				'menu'  => 'secondary',
				'title' => 'Menu 2',
			),
'mobile' => array(
				'menu'  => 'mobile',
				'title' => 'Mobile',
			),

		),
	);
	return $data;
}
add_filter( 'kadence_starter_templates_custom_array', 'styleplus_child_add_starter_templates', 20 );

add_filter( 'kadence_custom_child_starter_templates_enable', '__return_true' );

/**
 * Setup Child Theme Starter Brand
 *
 * @param string $name the brand name.
 * @return string
 */
function styleplus_child_add_starter_templates_name( $name ) {
	return 'WPSinhala';
}
add_filter( 'kadence_custom_child_starter_templates_name', 'styleplus_child_add_starter_templates_name', 20 );

/**
 * Setup Child Theme Starter Logo
 *
 * @param string $url the file url.
 * @return string
 */
function styleplus_child_add_starter_templates_logo( $url ) {
	return get_stylesheet_directory_uri() . '/starter/logo.png';
}
add_filter( 'kadence_custom_child_starter_templates_logo', 'styleplus_child_add_starter_templates_logo', 20 );
