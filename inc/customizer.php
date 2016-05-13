<?php
/**
 * 用来自定义
 *
 * @package WordPress
 * @subpackage skywarp
 * @since skywarp 1.0
 */

/**
 * 自定义界面的修改
 *
 * @param WP_Customize_Manager $wp_customize The Customizer object.
 */
function skywarp_customize_register( $wp_customize ) {
    /* 删除不用的配置项 */
    $wp_customize->remove_control("header_image");
    $wp_customize->remove_panel("widgets");
    $wp_customize->remove_panel('nav_menus');
    $wp_customize->remove_section("colors");
    $wp_customize->remove_section("background_image");
    $wp_customize->remove_section("static_front_page");
    /* 汉化 */
    $tagline = $wp_customize->get_section( 'title_tagline' );
    if ($tagline) {
		$tagline->title = '站点标识';
    }
    $ctrl = $wp_customize->get_control('blogname');
    if ($ctrl) {
        $ctrl->label = '网站名';
    }
    $ctrl = $wp_customize->get_control('blogdescription');
    if ($ctrl) {
        $ctrl->label = '网站描述';
    }
    $ctrl = $wp_customize->get_control('site_icon');
    if ($ctrl) {
        $ctrl->label = '网站图标';
        $ctrl->description = '图标是网站在浏览器和应用上显示时候的图像。该图像必须是正方形，最小512x512像素。';
    }

}
add_action( 'customize_register', 'skywarp_customize_register', 11 );