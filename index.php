<?php

get_header();

if (have_posts()):
    while (have_posts()): the_post() ?>

        <?php get_template_part('extra_content', get_post_format()) ?>

    <?php endwhile;
else: echo "No Post Exist";
endif;

get_footer();