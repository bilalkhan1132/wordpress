<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package microt_ecommerce
 */

if(get_theme_mod('microt_ecommerce_display_breadcrumb_section',true) != ''){
	microt_ecommerce_breadcrumb_slider();
}
elseif(get_post_type()){	
	if(get_post_meta(get_the_ID(),'breadcrumb_select',true) == 'yes'){
		microt_ecommerce_breadcrumb_slider();
	}
}