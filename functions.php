<?php
/**
 * Created by PhpStorm.
 * User: Dushyant Mainwal
 * Date: 28-Mar-18
 * Time: 4:09 PM
 */

function styleTest_resources()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'styleTest_resources');

//Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
));