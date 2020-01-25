<?php
/**
 * Business Pro Theme
 *
 * This file registers widget areas for the Business Pro theme.
 *
 * @package   BusinessProTheme
 * @link      https://seothemes.com/themes/business-pro
 * @author    SEO Themes
 * @copyright Copyright © 2017 SEO Themes
 * @license   GPL-2.0+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {

	die;

}

// Register front page widget areas.
genesis_register_sidebar( array(
	'id'          => 'front-page-1',
	'name'        => __( 'Front Page 1', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 1 widget area.', 'business-pro-theme' ),
	'before_title' => '<h1 itemprop="headline">',
	'after_title'  => '</h1>',
) );
genesis_register_sidebar( array(
	'id'          => 'front-page-2',
	'name'        => __( 'Front Page 2', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 2 widget area.', 'business-pro-theme' ),
) );
genesis_register_sidebar( array(
	'id'          => 'front-page-3',
	'name'        => __( 'Front Page 3', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 3 widget area.', 'business-pro-theme' ),
) );
genesis_register_sidebar( array(
	'id'          => 'front-page-4',
	'name'        => __( 'Front Page 4', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 4 widget area.', 'business-pro-theme' ),
) );
genesis_register_sidebar( array(
	'id'          => 'front-page-5',
	'name'        => __( 'Front Page 5', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 5 widget area.', 'business-pro-theme' ),
) );
genesis_register_sidebar( array(
	'id'          => 'front-page-6',
	'name'        => __( 'Front Page 6', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 6 widget area.', 'business-pro-theme' ),
) );
genesis_register_sidebar( array(
	'id'          => 'front-page-7',
	'name'        => __( 'Front Page 7', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 7 widget area.', 'business-pro-theme' ),
) );
genesis_register_sidebar( array(
	'id'          => 'front-page-8',
	'name'        => __( 'Front Page 8', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 8 widget area.', 'business-pro-theme' ),
) );
genesis_register_sidebar( array(
	'id'          => 'front-page-9',
	'name'        => __( 'Front Page 9', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 9 widget area.', 'business-pro-theme' ),
) );

genesis_register_sidebar( array(
	'id'          => 'front-page-10',
	'name'        => __( 'Front Page 10', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 10 widget area.', 'business-pro-theme' ),
) );

genesis_register_sidebar( array(
	'id'          => 'front-page-11',
	'name'        => __( 'Front Page 11', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 11 widget area.', 'business-pro-theme' ),
) );

genesis_register_sidebar( array(
	'id'          => 'front-page-12',
	'name'        => __( 'Front Page 12', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 12 widget area.', 'business-pro-theme' ),
) );

genesis_register_sidebar( array(
	'id'          => 'front-page-13',
	'name'        => __( 'Front Page 13', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 13 widget area.', 'business-pro-theme' ),
) );

genesis_register_sidebar( array(
	'id'          => 'front-page-14',
	'name'        => __( 'Front Page 14', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 14 widget area.', 'business-pro-theme' ),
) );

genesis_register_sidebar( array(
	'id'          => 'front-page-15',
	'name'        => __( 'Front Page 15', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 15 widget area.', 'business-pro-theme' ),
) );

genesis_register_sidebar( array(
	'id'          => 'front-page-16',
	'name'        => __( 'Front Page 16', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 16 widget area.', 'business-pro-theme' ),
) );

genesis_register_sidebar( array(
	'id'          => 'front-page-17',
	'name'        => __( 'Front Page 17', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 17 widget area.', 'business-pro-theme' ),
) );

genesis_register_sidebar( array(
	'id'          => 'front-page-18',
	'name'        => __( 'Front Page 18', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 18 widget area.', 'business-pro-theme' ),
) );

genesis_register_sidebar( array(
	'id'          => 'front-page-19',
	'name'        => __( 'Front Page 19', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 19 widget area.', 'business-pro-theme' ),
) );



genesis_register_sidebar( array(
	'id'          => 'front-page-20',
	'name'        => __( 'Front Page 20', 'business-pro-theme' ),
	'description' => __( 'This is the Front Page 10 widget area.', 'business-pro-theme' ),
) );

// Register before footer widget area.
genesis_register_sidebar( array(
	'id'          => 'before-footer',
	'name'        => __( 'Before Footer', 'business-pro-theme' ),
	'description' => __( 'This is the before footer widget area.', 'business-pro-theme' ),
) );

add_action( 'genesis_before_footer_wrap', 'business_before_footer_widget_area', 5 );
/**
 * Display before-footer widget area.
 *
 * @since 1.0.0
 *
 * @return void
 */
function business_before_footer_widget_area() {

	genesis_widget_area( 'before-footer', array(
		'before' => '<div class="before-footer"><div class="wrap">',
		'after'  => '</div></div>',
	) );

}
