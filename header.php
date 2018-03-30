<!DOCTYPE html>
<html <?php language_attributes() ?>

<head>

    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>

</head>

<body <?php body_class() ?>>

<div class="container">

    <header class="site-header">

        <h2><a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a></h2>
        <h5><?php bloginfo('description') ?></h5>

        <?php if (is_page('custom')) { ?>
            -ghh hjv h hv
        <?php } ?>

        <nav class="site-nav">
            <?php $my_args = array(
                'theme_location' => 'primary'
            ); ?>

            <?php wp_nav_menu($my_args) ?>
        </nav>

    </header>


