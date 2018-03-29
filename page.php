<?php

get_header();

if (have_posts()):
    while (have_posts()): the_post() ?>

        <article class="post">
            <h3><?php the_title() ?></h3>

            <p class="awesome"><?php the_content() ?></p>
        </article>

    <?php endwhile;
else: echo "Dushyant Mainwal";
endif;

get_footer();