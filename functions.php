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