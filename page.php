<?php

/*
* Template Name: Hola! Amigos
*/

get_header();

if (have_posts()):
    while (have_posts()): the_post() ?>

        <article class="post">

<!--            //has children or child itself-->
            <?php if (has_children() OR $post->post_parent > 0) { ?>

                <nav class="site-nav">

                <span>
                    <a href="<?php echo get_the_permalink(getTopAncestorId()) ?>">
                        <?php echo get_the_title(getTopAncestorId()) ?>
                    </a>
                </span>

                    <ul>

                        <?php $args = array(
                            'child_of' => getTopAncestorId(),
                            'title_li' => ''
                        )
                        ?>

                        <?php wp_list_pages($args) ?>

                    </ul>

                </nav>


            <?php } ?>

            <h3><?php the_title() ?></h3>

            <p class="awesome"><?php the_content() ?></p>
        </article>

    <?php endwhile;
else: echo "Dushyant Mainwal";
endif;

get_footer();