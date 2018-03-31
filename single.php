<?php

get_header();

if (have_posts()):
    while (have_posts()): the_post() ?>

        <article class="post">
            <a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>

            <p><?php the_time('F j, Y g:i a') ?> | by
                <a href="<?php get_author_posts_url(get_the_author_meta('ID'))?>">
                    <?php the_author() ?>
                </a> | Posted In:

                <?php
                the_category(', ','' );
                ?>

            </p>

            <p class="awesome"><?php the_content() ?></p>
        </article>

    <?php endwhile;
else: echo "No Post Exist";
endif;

get_footer();