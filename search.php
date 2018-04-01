<?php

get_header(); ?>

    <h2>Search Results For: <?php the_search_query() ?></h2>
<?php

if (have_posts()):
    while (have_posts()): the_post() ?>

        <?php get_template_part('extra_content') ?>

    <?php endwhile;
else: echo "No Post Exist";
endif;

get_footer();