<article class="post">
    <a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>

    <p><?php the_time('F j, Y g:i a') ?> | by
        <a href="<?php get_author_posts_url(get_the_author_meta('ID')) ?>">
            <?php the_author() ?>
        </a> | Posted In:

        <?php
        the_category(', ', '');
        ?>
    </p>

    <?php if (is_search()) {
        the_post_thumbnail('banner-image');
    } else {
        the_post_thumbnail('small-thumbnail');
    } ?>

    <p class="awesome"><?php the_excerpt() ?></p>
</article>