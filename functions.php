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
    wp_enqueue_script('dush_js',
        get_template_directory_uri() . '/js/main.js',
        null, 1.0, true);
    wp_localize_script('dush_js', 'magicalData', array(
        'nonce' => wp_create_nonce('wp_rest'),
        'siteUrl' => get_site_url()
    ));
}

add_action('wp_enqueue_scripts', 'styleTest_resources');

//Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
));

//Get Top Ancestor
function getTopAncestorId()
{
    global $post;
    if ($post->post_parent) {
        //rev because to get top most as first value not the last parent
        $ancesto = array_reverse(get_post_ancestors($post->ID));
        return $ancesto[0];
    }

    return $post->ID;
}

function has_children()
{
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}


//Theme Setup
function learningWordpress_setup()
{
    //Add Feature Image Support
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
    add_image_size('small-thumbnail', 280, 160, true);
    add_image_size('banner-image', 1000, 200, array('left', 'top'));
}

add_action('after_setup_theme', 'learningWordpress_setup');